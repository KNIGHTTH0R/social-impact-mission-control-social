<?php
    require("toro.php");
    require("apiKeys.php");
    require("facebook.php");
    require_once("twitteroauth.php");

    Toro::serve(array(
        "/" => "RootHandler",
        "/companies/" => "Companies",
        "/companies/" => "Companies",
        "/companies/:string" => "CompanySpecific",
        "/test/fb/" => "FBTesting"
    ));

    // /
    Class RootHandler{
        function get() {
            echo "Endpoints:\n\n";
            echo "GET / => Root\n";
            echo "GET /companies/ => Returns all companies in the Mongo\n";
            echo "GET /companies/:string => Returns data for :string company\n";
            echo "Current time:".time()."\n";
        }
    }

    // /companies
    class Companies{
        function get() {
            //return all companies

            $m = new Mongo(getenv("MONGOLAB_URI"));
            $db = $m->msom0;
            $collection = $db->companies;

            $companiesDatas = $collection->find();

            echo json_encode(iterator_to_array($companiesDatas));
        }
    }
    class CompanySpecific{
        function get($company){
            //return data for :company

            $m = new Mongo(getenv("MONGOLAB_URI"));
            $db = $m->msom0;

            $collection = $db->companies;
            $companiesDatas = $collection
                ->find(json_decode('{ "name" : "'.$company.'" }'));

            if( $companiesDatas->count() > 0)
            {
                $x = array_values(iterator_to_array($companiesDatas));
                echo json_encode($x[0]);
            }
            else
            {
                //twitter
                $twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
                $tweets = $twitter->get('statuses/user_timeline', array(
                    'screen_name' => $company,
                    'count' => 25
                ));

                $tweetsEncoded = "";
                $count = 0;

                foreach($tweets as $tweet)
                {
                    //sentiment
                    $senUrl = "http://wesoc.herokuapp.com/sentiment/";
                    $senData = array('texts' => $tweet->text);
                    $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($senData),
                        )
                    );

                    $senContext  = stream_context_create($options);
                    $senResult = file_get_contents($senUrl, false, $senContext);

                    //echo json_encode(json_decode($senResult)->texts[0]->text);

                    if($count > 0)
                    {
                        $tweetsEncoded.=',';
                    } //eeeeeeeh

                    $tweetsEncoded.=
                        '{'.
                            '"text" : "'. escapeJsonString($tweet->text).'",
                            "dateTime" : "'.$tweet->created_at.'",
                            "user_name" : "'.$tweet->user->name.'",
                            "verified" : "'.$tweet->user->verified.'",
                            "sentiment" : "'.json_decode($senResult)->texts[0]->sentiment.'"
                        }';

                    $count += 1;
                }

                //facebook
                $fb = new Facebook(array(
                    'appId' => FBAPPID,
                    'secret' => FBSECRET
                ));
                $fbResponse = $fb->api(
                    "/".$company."/posts"
                );

                $fbSelfPostsEncoded = "";
                $fcount = 0;

                foreach($fbResponse['data'] as $response)
                {
                    $coreMessage = "";
                    if($response["message"] == ""){
                        $coreMessage = $response["story"];
                    }
                    else{
                        $coreMessage = $response["message"];
                    }


                    $senUrl = "http://wesoc.herokuapp.com/sentiment/";
                    $senData = array('texts' => $coreMessage);
                    $options = array(
                        'http' => array(
                            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                            'method'  => 'POST',
                            'content' => http_build_query($senData),
                        )
                    );

                    $senContext  = stream_context_create($options);
                    $senResult = file_get_contents($senUrl, false, $senContext);

                    if($fcount > 0)
                    {
                        $fbSelfPostsEncoded.=',';
                    }

                    $fbSelfPostsEncoded.=
                        '{'.
                            '"message" : "'.escapeJsonString($coreMessage).'",
                            "dateTime" : "'.$response["created_time"].'",
                            "page_name" : "'.$response["from"]["name"].'",
                            "like_count" : "'.count($response["likes"]["data"]).'",
                            "sentiment" : "'.json_decode($senResult)->texts[0]->sentiment.'"
                        }';

                    $fcount += 1;
                }
                //sentiment


                //mash
                $q =
                    '{
                        "name" : "'.$company.'",
                        "lastRefresh" :"'.time().'",
                        "tweets" : ['.$tweetsEncoded.'],
                        "fbSelfPosts" : ['.$fbSelfPostsEncoded.']
                     }';

                //echo
                echo $q;

                //insert
                $collection
                    ->insert(json_decode($q));
            }
        }
    }

    function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
        $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
        $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
        $result = str_replace($escapers, $replacements, $value);
        return $result;
    }

    class FBTesting{
    function get(){
        //facebook
        $fb = new Facebook(array(
            'appId' => FBAPPID,
            'secret' => FBSECRET
        ));
        $fbResponse = $fb->api(
            "/rackspace/posts"
        );
        echo(json_encode($fbResponse["data"]));
        $facebooksEncoded = "";
    }
}
?>
