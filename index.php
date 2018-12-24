<?php 
$title = "Legomake IT | Build amazing products affordably";
include_once "header.php";
?>
	<!-- <div class='row mast-head'>
		<div class="col-md-6 p-5">
			<div>
				<h1 class="showcase-bt animated fadeInUp">Build amazing<br> 
					<b class='lm-show lm-s1 animated fadeInUp'>websites</b>
					<b class='lm-show lm-s2 animated fadeInUp'>mobile apps</b>
					<b class='lm-show lm-s3 animated fadeInUp'>products</b><br>
					affordably
				</h1>
			</div>
			<div>
				<a class="btn btn-primary btn-lg" href="#!">Learn more <span class='fa fa-arrow-down'></span></a>
			</div>
		</div>
		<div class="col-md-6">
		</div>
	</div> -->
			
	<div class="jumbotron jumbotron-fluid text-center">
		<div class="plaster">
			<div class="container">
				<h1 class="display-3">Build amazing products affordably</h1>
				<p class="lead">Learn. Gain real experience. Make awesome impact.</p>
				<div>
					<a href="#!" class="button btn btn-primary lm-bs" role="button"><i class="fa fa-arrow-circle-down"></i> Learn More</a>
					<a href="#!" class="button btn btn-info lm-bs" role="button"><i class="fa fa-arrow-circle-down"></i> Estimate Project</a>
				</div>
			</div>	
		</div>
	</di


<?php include_once "footer.php"; ?>
<script>	
	$(function(){
		$(".lm-show").hide();
		$(".lm-s1").delay(1300).fadeIn();
		setTimeout(function() {
			$(".lm-s1").addClass("fadeOutUp");		
		}, 5300);
		$(".lm-s2").delay(5700).fadeIn();
		setTimeout(function() {
			$(".lm-s2").addClass("fadeOutUp");		
		}, 8100);
		$(".lm-s3").delay(8700).fadeIn();
	});
</script>				
</body>
</html>