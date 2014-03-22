<?php
	require("toro.php");
	require("apiKeys.php");

	 $mon = new Mongo(getenv("MONGOLAB_URI"));
	 $db = $mon->msomb;

	 $collection = $db->companies;

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
			$companiesDatas = $collection->find();
			echo $companiesDatas;
		}
	}
	class CompanySpecific{
		function get($company){
			//return data for :company
			$companyQuery = array('name' => $company);
			$companiesDatas = $collection->find($companyQuery);
			echo $companiesDatas;
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
