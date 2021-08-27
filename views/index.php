<?php 
	//declare Projects

	$url = projects();

?>



<div class="projects row">

	<?php 
	$datawowdelay = 3.5;
	$identity = 0;
	foreach ($url as $key) {
		if ($identity === 0) {
			echo 
			"<div class=\"col-sm-4 project karith wow fadeIn hidden-lg\" data-wow-delay=\"0.2s\">
				<div class=\"karithinfo\">
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1s\"> Karith </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.2s\"> Design</h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.4s\"> Build </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.6s\"> Private </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.8s\"> Limited </h4>
				</div>
			</div>";
		}
		elseif ($identity === 5) {
			echo 
			"<div class=\"col-sm-4 project wow karith fadeIn hidden-xs hidden-md hidden-sm\" data-wow-delay=\"0.2s\">
				<div class=\"karithinfo\">
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1s\"> Karith </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.2s\"> Design</h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.4s\"> Build </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.6s\"> Private </h4>
					<h4 class=\"wow fadeInLeft\" data-wow-duration=\"2s\"  data-wow-delay=\"1.8s\"> Limited </h4>
				</div>
			</div>";
		}
		echo 
		"<div class=\"col-sm-4 project wow fadeIn\" style=\"background-image:url('{siteurl}/library/projects/".$key['featured_image']."');\" data-wow-duration=\"2s\" data-wow-delay=\"".$datawowdelay."s\">
		<div class=\"project_info\">
			<a href=\"project/".$key['slug']."\" class=\"project_link\">
				<h3>".$key['type']." of ".$key['name']." | ".$key['location']."<br><small>".$key['scope']."</small></h3>

			</a>
		</div>
		</div>";

		$datawowdelay = $datawowdelay+0.2;
		$identity++;
	}

	?>
</div>