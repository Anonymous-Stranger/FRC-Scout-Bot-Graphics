<?php
	
	$rootURL = "/frcscoutbot3/";

	$robots = array(
		"Robbie"	=> 	array(
							"url" 	=> 	$rootURL."robbie.php",
							"color" => 	"#CC0000",	//Red
							"desc"	=>	"Compare Teams"
						),
		"Fido" 		=> 	array(
							"url" 	=> 	$rootURL."fido.php",
							"color" => 	"#3B003B", 	//Purple
							"desc"	=>	"Team Rankings (using a FIDE-ish system)"
						),
		"Jarvis" 	=> 	array(
							"url" 	=> 	$rootURL."jarvis.php",
							"color" => 	"#EEBB00",	//Yellow
							"desc"	=>	"Your Next Match"
						),
		"Cosmo" 	=> 	array(
							"url" 	=> 	$rootURL."cosmo.php",
							"color" => 	"#1947D1",	//Blue
							"desc"	=>	"Custom Interface"
						)
	);

	$urlData = getURLData();
	$url = $urlData["url"];
	$params = $urlData["params"];

	function getURLData(){
		$url = explode("?",$_SERVER['REQUEST_URI'],1);

		$params = isset($url[1]) ? "?".$url[1] : "";
		$url = $url[0];

		if (substr($url, -1) === '/') $url .= "index.php";

		return array("url" => $url, "params" => $params);
	}