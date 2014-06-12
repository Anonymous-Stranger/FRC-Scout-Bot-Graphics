
<!-- author: Akash Gaonkar -->

<?php

	$title = "FRC Scout Bots";

	$css_imports = array(
		"css/index/index.css",
		"css/card.css"
	);

	$javascript_imports = array(

	);

	require_once("php/cms/cms.php");

?>

<content class="page_content">

	<div class="cards pure-g">
		<?php
			$numbots = count($robots);
			$halfnum = $numbots / 2;
			foreach ($robots as $name => $data){
				$link = $data["url"];
				$color = $data["color"];
				$desc = $data["desc"];
				echo "
					<div class='pure-u-1 pure-u-md-1-2 pure-u-xl-1-4' style='background: $color;'>
						<a class='card' href='$link'>
							<h1 class='bot_name'>
								$name
							</h1>
							<h3 class='bot_desc'>
								$desc
							</h3>
						</a>
					</div>
				";
			}

		?>
	</div>

</content>

