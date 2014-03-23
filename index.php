<?php
    require("toro.php");
    require("apiKeys.php");
    require("facebook.php");
    require_once("twitteroauth.php");

    Toro::serve(array(
        "/" => "RootHandler",
        "/companies/" => "Companies",
        "/companies/:string" => "CompanySpecific",
        "/test/fb/" => "FBTesting"
    ));

    // /
    Class RootHandler{
        function get() {
            echo "Endpoints:\n\n";
            echo "/ => Root\n";

            echo "Current time:".time()."<br/>";
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
                echo json_encode(iterator_to_array($companiesDatas));
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
                    if($count > 0)
                    {
                        $tweetsEncoded.=',';
                    } //eeeeeeeh

                    $tweetsEncoded.=
                        '{'.
                            '"text" : "'.$tweet->text.'",
                            "dateTime" : "'.$tweet->created_at.'",
                            "user_name" : "'.$tweet->user->name.'",
                            "verified" : "'.$tweet->user->verified.'"
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
                    if($fcount > 0)
                    {
                        $fbSelfPostsEncoded.=',';
                    }

                    $fbSelfPostsEncoded.=
                        '{'.
                            '"message" : "'.$response->message.'",
                            "dateTime" : "'.$response->created_time.'",
                            "page_name" : "'.$response->from->name.'",
                            "like_count" : "'.count($response->likes->data).'"
                        }';

                    $fcount += 1;
                }

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
        echo(json_encode($fbResponse));
        $facebooksEncoded = "";
    }
}

?>
