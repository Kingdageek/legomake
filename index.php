<?php 
$title = "Legomake Digital | Creative Digital Agency";
include_once "config.php";
include_once "header.php"
?>

			
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="plaster">
			<div class="container py-5">
				<h1 class="display-3">We provide digital solutions that lead to sales conversions</h1>
				<p class="lead">Design. Development. Strategy. Let's go make!</p>
				<div>
					<a href="#services" class="button btn btn-primary lm-bs" role="button"><i class="fa fa-arrow-circle-down"></i> Learn More</a>
				</div>
			</div>	
		</div>
	</div>
	<section id="services" class="py-5">
		<?php include_once 'services.php';?>
	</section>






<?php include_once "footer.php"; ?>
<script>	
	$(function(){
		if ($(window).width() > 768) {
			$(window).scroll(function() {
				let x = $(this).scrollTop();
				console.log(x);
				
				if (x >= 69) {
					$('#lms-2').show();
				}
				if (x >= 148) {
					$('#lms-1').show();
				}
				if (x >= 620) {
					$('#lms-3').show();
				}
				if (x >= 713) {
					$('#lms-4').show();
				}
				if (x >= 1176) {
					$('#lms-6').show();
				}
				if (x >= 1269) {
					$('#lms-5').show();
				}
			})
			return
		}
		$('.lm-i-content').show();
	});
</script>				
</body>
</html>