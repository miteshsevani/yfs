<?php include('../includes/header.php'); ?>
<?php include('../includes/nav.php'); ?>

	<section class="main page-our-projects">	
		<div class="row">
			<div class="col col-sm-12">
				<h2>Our projects</h2>

				<div id="map_wrapper">
				    <div id="map_canvas" class="mapping"></div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col col-sm-12">
				<div class="show-data"></div>
			</div>
		</div>
	</section>	
	
	<?php include('../includes/footer.php'); ?>
	<script src="/js/min/our-projects-min.js"></script>
	<script src="/js/min/map-min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUhy6mdGjpm3QadNfSQwIX7qtCz1yYTwk&callback=initMap" async defer></script>
</body>
</html>