<div class="jumbotron text-white" style="color:#ffffff;border-radius: 0;background-image: url('https://static1.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/598b5b9dbebafb9c49b9fac0/1502305189166/final_asset-press-and-media-banner.jpg');background-size: cover;background-position: center;">
	<small>News </small>
	<h1 class="identity">PRESS & MEDIA</h1>
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
<div class="clearbox"></div>
<div class="clearbox"></div>
<?php 
	$array = array("/assets/images/Erp/1.jpg","/assets/images/Erp/2.jpg","/assets/images/Erp/3.jpg","/assets/images/Erp/4.jpg","/assets/images/Erp/5.jpg");
?>
<div class="container">
	<h4>From Vanitha Veedu , February 2018</h4>
<div class="row">
	<?php 
	foreach ($array as $key) {
	?>
		<a href="<?php echo $key;?>" data-lightbox="image-1" data-title="">
			<div class="col-md-3">
			<div class="galler-box" style="background-image: url(<?php echo $key;?>);"></div>
			</div>
		</a>
	<?php 	
	}
	?>
	<div class="col-sm-12 col-md-3">
		<div class="card">
			<a target="_blank" href="/library/news/interior-2018-feb.pdf">
				<div class="card-image" style="background-image: url('/library/news/image.jpeg');"></div>
			<div class="card-content">
				Interior<br>
				<small>February 2018</small>
			</div>
			</a>
		</div>
	</div>
</div>

<br>
<br>
<br>
<style type="text/css">
.card{
	width: 100%;
	min-height: 100px;
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
.card-image{
	width: 100%;
	height: 320px;
	background-position: center;
	background-size: 100%;
}
.card-content{
	padding: 5px 10px;
}
	.galler-box{
		min-height: 200px;
		border: 1px solid #ddd;
		background-position: center;
		background-size: 100%;
		width: 100%;
		margin-bottom: 5px;
	}
</style>