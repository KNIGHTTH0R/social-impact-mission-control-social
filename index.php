<?php
	require("toro.php");
	require("apiKeys.php");

	Toro::serve(array(
		"/" => "RootHandler"
		"/companies:company" =? "CompaniesHandler"

	));

	// /
	Class RootHandler{

	}

	// /companies:company

	class CompaniesHandler{

	}





?>
