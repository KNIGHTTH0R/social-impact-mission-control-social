<?php
    require("toro.php");
    require("apiKeys.php");
    require_once("twitteroauth.php");

    Toro::serve(array(
        "/" => "RootHandler",
        "/companies/" => "Companies",
        "/companies/:string" => "CompanySpecific"
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
                            "verified" : "'.$tweet->user->verfified.'"
                        }';

                    $count += 1;
                }

                $q =
                    '{
                        "name" : "'.$company.'",
                        "lastRefresh" :"'.time().'",
                        "tweets" : ['.$tweetsEncoded.']
                     }';

                echo $q;
                $collection
                    ->insert(json_decode($q));
            }
        }
    }

    class Twitter {

        function authenticate(){

        }

    }

    class DBInteract{
        function retrieveSocialNews(){

        }
    }

?>
