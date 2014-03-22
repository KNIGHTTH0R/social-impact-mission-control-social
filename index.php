<?php
	require("toro.php");
	require("apiKeys.php");

	 $mon = new Mongo(getenv("MONGOLAB_URI"));
	 $db = $mon->msomb;

	 $collection = $db->companies;

	Toro::serve(array(
		"/" => "RootHandler",
		"/companies/" => "Companies",
		"/companies/socialData/:company" => "CompaniesSocial",
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
			echo "##Companies";
			$companiesDatas = $collection->find();
			echo "comp".$companiesDatas;
		}
	}
	
	// /companies/socialData/:company
	class CompaniesSocial{
		function get(){
			//return socialData for :company#
			$companiesDatas = $collection->find();
			echo "comp".$companiesDatas;
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
