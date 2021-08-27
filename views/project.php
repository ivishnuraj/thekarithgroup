<?php 

if (isset($_GET['action'])) {
	$slug = $_GET['action'];
	$inti = Get_Project($slug);
	$inti = $inti[0];
	?>
	<div class="project-images">
		<div class="row">
			<div class="col-md-8" id="images">
				<?php 

				$images = Get_Images($inti['id']);
				foreach ($images as $image) {
					echo "<img class=\"img-responsive project-imae\" src=\"{siteurl}/library/projects/".$image['src']."\"/>";
				}

				?>
			</div>
		</div>
	</div>
	<div class="project_data">
		<div class="project_title"><small><?php echo $inti['type'];?> of </small><br><?php echo $inti['name'];?></div>
		<div class="project_details">
			<div class="table-responsive">
				<table class="table">
					<tbody>
						<tr class="animated fadeIn" data-anime-delay="0.5s">
							<th>Location</th>
							<td><?php echo $inti['location']." , ".$inti['sublocation'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="0.7s">
							<th>Area</th>
							<td><?php echo $inti['area'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="0.9s">
							<th>Type</th>
							<td><?php echo $inti['type'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="1.2s">
							<th>Status</th>
							<td><?php echo $inti['status'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="1.4s">
							<th>Scope</th>
							<td><?php echo $inti['scope'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="1.6s">
							<th>Completion Year</th>
							<td><?php echo $inti['year'];?> </td>
						</tr>
						<tr class="animated fadeIn" data-anime-delay="1.8s">
							<th>Architect/Designer</th>
							<td><?php echo $inti['architect'];?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<div class="nav-buttons">

</div>
<script type="text/javascript">
	// Next Button
	$.ajax({
		url:"https://thekarithgroup.com/config/api.php/projects/?transform=1&filter=id,gt,<?php echo $inti['id'];?>",
		type:'GET',
		timeout: 12500,
		success: function (data,status,xhr) {
			var nextP = data.projects[0];
			if (nextP === undefined) {

			}
			else{
				$(".nav-buttons").append(
					'<a href="/project/'+nextP.slug+'" class="animated nextbtn btn external" data-animated-delay="2.2s">'+
						'<i class="ion-ios-arrow-right fa fa-2x"></i>'+
					'</a>'
				)
			}
		},
		error: function (jqXhr, textStatus, errorMessage) {
				console.log(errorMessage)
        	
		}
	});

	// Prev Button
	$.ajax({
		url:"https://thekarithgroup.com/config/api.php/projects/?transform=1&order=id,desc&filter=id,lt,<?php echo $inti['id'];?>",
		type:'GET',
		timeout: 12500,
		success: function (data,status,xhr) {
			var nextP = data.projects[0];
			if (nextP === undefined) {

			}
			else{
				$(".nav-buttons").append(
					'<a href="/project/'+nextP.slug+'" class="animated nextbtn btn prevbtn" data-animated-delay="2.2s">'+
						'<i class="ion-ios-arrow-left fa fa-2x"></i>'+
					'</a>'
				)
			}
		},
		error: function (jqXhr, textStatus, errorMessage) {
				console.log(errorMessage)
        	
		}
	});
</script>

	<?php 
}
else{
	?>
	<div class="clearbox"></div>
	<div class="clearbox"></div>
	<div class="clearbox"></div>
	<div class="text-center">
		<i class="ion-sad-outline fa fa-3x grey-text"></i>
		<h3 class="e-404">We don't have that Project!</h3>
	</div>
	<?php 
}
?>
</div>
