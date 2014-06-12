
<?php
	
	/* Content Management System (base html for every page) */
	/* author: Akash Gaonkar */

	/* NOTE: Webpages should include:
		$title = ...;
		$css_imports = array(...); (optional)
		$javascript_imports = array(...); (optional)
		require_once("php/cms/cms.php");
	*/

	if (!isset($title)){
		trigger_error("No title set.");
		return;
	};

	require_once("shareddata.php");

?>

<!DOCTYPE html>

<html>
	
	<head>
		
		<meta http-eqiv="Content-Type" content="text/html; charset=utf-8"/>	
		<title> <?php echo $title; ?> </title>

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />

		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
		<![endif]-->
		<!--[if gt IE 8]><!-->
		    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
		<!--<![endif]-->

		<?php

			//imports requested css files

			if (isset($css_imports) && is_array($css_imports))
				foreach ($css_imports as $link){
					echo "<link rel='stylesheet' href='$link' />";
				}

		?>

		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<?php

			//imports requested javascript files

			if (isset($javascript_imports) && is_array($javascript_imports))
				foreach ($javascript_imports as $link){
					echo "<script type='text/javascript' scr='$link'></script>";
				}

		?>

	</head>

	<body>

		<!-- PAGE HEADER -->
		<?php require_once("header.php"); ?>

		<!-- PAGE CONTENT -->
		<div id="page_content">
			<?php require($_SERVER["DOCUMENT_ROOT"].$url.$params); ?>
		</div>

		<!-- PAGE FOOTER -->
		<?php require_once("footer.php"); ?>

	</body>

</html>

<?php 
	//Prevent reexecution of html
	exit(0); 
?>