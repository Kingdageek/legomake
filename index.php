<?php 
$title = "Legomake Digital | Graphic Designs, Website & Mobile Development, Brand Promotion";
include_once "config.php";
include_once "header.php";
?>
	<div class="jumbotron jumbotron-fluid text-center">
			<div>
				<div class="row">
					<div class="col-md-6 plaster">
						<h1 class="display-3 text-white">We create amazing web & mobile experiences</h1>
						<p class="lead">Designs. Web &amp; Mobile Development. Brand Promotion. Let's go make!</p>
						<div>
							<a href="#services" class="button btn btn-primary header-btn lm-bs sscroll" role="button"><i class="fa fa-arrow-circle-down"></i> Learn more</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="">
							<img src="<?=URLROOT;?>/assets/img/legomakeimg.png" alt="" class="img-house">
						</div>
					</div>
				</div>
			</div>
		</div>
</header>
<div id="lm-content-house">
		<section id="services" class="py-5">
			<?php include_once 'services.php';?>
		</section>
		<section id="team" class="py-5">
			<?php include_once 'team.php';?>
		</section>
		<section id="contact" class="py-5">
			<?php include_once 'contact.php';?>
		</section>
	<?php include_once "footer.php"; ?>
</div>
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
				if (x >= 1775) {
					$('#lmt-7').show();
				}
				if (x >= 1872) {
					$('#lmt-8').show();
				}
				if (x >= 1973) {
					$('#lmt-9').show();
				}
				if (x >= 1973) {
					$('#lmt-10').show();
				}
				if (x >= 1973) {
					$('#lmt-11').show();
				}
				if (x >= 1973) {
					$('#lmt-12').show();
				}
				if (x >= 2415) {
					$('#lmc-13').show();
				}if (x >= 2505) {
					$('#lmc-14').show();
				}
				if (x >= 2615) {
					$('#lmc-16').show();
				}
				if (x >= 2666) {
					$('#lmc-15').show();
				}
			})
			return
		}
		$('.lm-i-content').show();
	});
</script>				
</body>
</html>