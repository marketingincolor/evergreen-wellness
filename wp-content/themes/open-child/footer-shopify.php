		<footer class="footer">
			<p><a href="https://shop.myevergreenwellness.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/img/EGW-Logo-Gray.svg" alt="Evergreen Wellness" class="footer-logo"></a></p>
			<p><a href="https://www.bbb.org/west-florida/business-reviews/health-and-wellness/evergreen-wellness-in-tampa-fl-90330224"><img src="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/img/bbb-logo.png" alt="Better Business Bureau"></a></p>
			<ul class="footer-links clearfix">
				<li><a href="https://shop.myevergreenwellness.com/pages/about-evergreen-wellness">About</a></li>
				<li><a href="https://shop.myevergreenwellness.com/pages/contact">Contact Us</a></li>
				<li><a href="https://shop.myevergreenwellness.com/pages/terms-conditions">Terms &amp; Conditions</a></li>
				<li><a href="https://shop.myevergreenwellness.com/pages/privacy-policy">Privacy Policy</a></li>
			</ul>
			<ul class="footer-social">
				<li class="facebook"><a href="https://www.facebook.com/MyEvergreenWellness/"><i class="fab fa-facebook-f"></i></a></li>
				<li class="twitter"><a href="https://twitter.com/evergreentoday"><i class="fab fa-twitter"></i>
				<li class="youtube"><a href="https://www.youtube.com/channel/UCHyIRRuWNeCsnbQ54rjPudQ"><i class="fab fa-youtube"></i></a></li>
			</ul>
			<p class="copyright">&copy; <?php echo date('Y'); ?> Evergreen Wellness<sup>&trade;</sup>, LLC. All Rights Reserved. | Powered by Shopify</p>
		</footer>
		
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/foundation.min.js"></script>
		<script>
			$(document).foundation();
			// showTakeover();

			$(window).resize(function(){
				showMobileNav();
				sameColHeight();
			});
			$(document).ready(function(){
				showMobileNav();
				sameColHeight();
				validateForm();
				populateBailaVideo();
				populateSamplerVideo();
			});

			// match height of columns in .new section
			function sameColHeight(){
				var height = $('.new').find('.medium-5').css('height');
				$('.new').find('.medium-6').css({ 'height':height });
			}

			// Populate video in #video-modal
			function populateBailaVideo(){
				$('.video-link').click(function(){
					var videoURL = $(this).data('video');
					$('#video-modal').find('iframe').attr('src',videoURL);
				});
				$('#video-modal').bind('closed.zf.reveal',function(){
					$('#video-modal').find('iframe').attr('src','');
				});
			}

			// Populate video in #sampler-modal
			function populateSamplerVideo(){
				var $modal   = $('#sampler-modal');
				$('.open-video').click(function(){
					var videoURL = $(this).data('video');
					var title    = $(this).data('title');
					var body     = $(this).data('body');
					var copy     = $(this).data('copy');
					var link     = $(this).data('link');

					$modal.find('iframe').attr('src',videoURL);
					$modal.find('#sampler-title').html(title);
					$modal.find('#sampler-body').html(body);
					$modal.find('#sampler-copy').html(copy);
					$modal.find('#sampler-link').attr('href',link);
				});

				$modal.bind('closed.zf.reveal',function(){
					$modal.find('iframe').attr('src','');
				});
			}

			// Shows foundation mobile nav under 767px width viewport
			function showMobileNav(){
				var windowWidth = $(window).width();
				if (windowWidth <= 767) {
					$('.title-bar').css('display','block');
					$('.top-bar').css('display','none');
				}else{
					$('.top-bar').css('display','block');
					$('.title-bar').css('display','none');
				}
			}

			function showError(message){
				$('#error').css('display','block');
				$('#error').html(message);
			}

			// Validate form before sending
			function validateForm(){
				$('#takeover-modal').find('#submit').click(function(event){
					event.preventDefault();
					var format = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
					var email  = $('#email').val();

					if (!format.test(email)) {
						showError('Please enter a valid email');
						return false;
					}else if(!$('#accept-terms').is(':checked')){
						showError('Please accept the terms & conditions');
						return false;
				  }else{
						sendFormData();
					}
				});
			}

			// Send form data and hide takeover form
			function sendFormData(){
				$.ajax({
					type: 'POST',
	  			success: function(data){

	  				if (location.href.includes('jaimes-4-pack')) {

		  				__ss_noform.push(['submit', null, '7e9cd5dc-4972-43b7-a96e-e07011db1198']);

	  				}else if(location.href.includes('dani-4-pack')){

	  					__ss_noform.push(['submit', null, 'f7c7b936-bd1d-443e-b454-52f5eeef19a4']);

	  				}
		      	$('#takeover-modal').foundation('close');
	  			}
				});
			}

		</script>
	</body>
</html>