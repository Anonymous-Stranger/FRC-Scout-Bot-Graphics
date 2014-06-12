
<!-- Page Header -->

<!-- author: Akash Gaonkar -->


<header id="page_header">

	<hgroup id="main_heading">
		<a href="http://raptacon.org"><img id="robotics_logo" src="img/raptaconlogo105x105.png" /></a>
		<?php echo "<a href='$rootURL'>"; ?><img id="main_logo" src="img/scoutbotslogolight100x400.png" /></a>
		<div id="page_navicon"></div>
	</hgroup>

	<nav id="page_nav"><ul>
		<?php
			foreach ($robots as $name => $data){
				$link = $data["url"];
				$color = $data["color"];
				
				echo "<a href='$link' ";
				if ($link === $url) echo "style='color:$color;' selected";
				else echo "style='background:$color;'";
				echo "><li>$name</li></a>";
			}
		?>
	</ul></nav>

	<hgroup id="header_text">
		
		<?php

			// if ($title === ""){
			// 	$title = "FRC Scout Bots";
			// 	$subtitle = "Team 3200 (Raptacon)";
			// } else {
			// 	$subtitle = "Team 3200 Scout Bots";
			// }

			// echo "<span id='main_title'>$title</span>";
			// echo "<span id='sub_title'>$subtitle</span>";

		?>

	</hgroup>

	<hgroup id="header_menu">
		
	</hgroup>


</header>