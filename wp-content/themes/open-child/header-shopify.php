<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php the_title(); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="cleartype" content="on">
		<meta name="description" content="Check out Jaime's 4-Pack Sampler" />
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<!-- OpenGraph Tags -->
		<?php if (is_page(8687)) { ?>
			<meta property="og:title" content="Free! Jaime's 4-Pack Sampler | Evergreen Wellness®">
			<meta property="og:description" content="For a limited time, get Jaime's 4-Pack Sampler for free, featuring workouts from four of his favorite programs.">
			<meta property="og:image" content="https://myevergreenwellness.com/wp-content/uploads/2018/06/4-Pack-Sample-OG-Image.jpg">
		<?php }else if(is_page(8752)){ ?>
			<meta property="og:title" content="Free! Jaime's 4-Pack Sampler | Evergreen Wellness®">
			<meta property="og:description" content="Dani Spies recommends Jaime's Free 4-Pack Sampler, featuring workouts from four of his favorite programs.">
			<meta property="og:image" content="https://myevergreenwellness.com/wp-content/uploads/2018/06/dani-og-image.jpg">
		<?php } ?>
		<!-- End OpenGraph Tags -->

		<!-- Fonts & CSS -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/foundation.min.css">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/shopify.css">
		<!-- End Fonts & CSS -->
		<link rel=icon href=<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/img/egwbugsmall.png>
		<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  		crossorigin="anonymous"></script>
  		<!-- Hotjar Tracking Code for myevergreenwellness.com -->
  		<script>
  		    (function(h,o,t,j,a,r){
  		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
  		        h._hjSettings={hjid:748875,hjsv:6};
  		        a=o.getElementsByTagName('head')[0];
  		        r=o.createElement('script');r.async=1;
  		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
  		        a.appendChild(r);
  		    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  		</script>
  		<!-- /Hotjar Tracking Code for myevergreenwellness.com -->
		<script>
				var _ss = _ss || [];
	      var __ss_noform = __ss_noform || [];
				var callThisOnReturn = function(resp) {
	        if (resp && resp.contact) {
	          return false;
	        } else{
						$('#takeover-modal').foundation('open');
	        }
		    };
				
			_ss.push(['_setResponseCallback', callThisOnReturn]);
				_ss.push(['_setDomain', 'https://koi-3QMYANU21K.marketingautomation.services/net']);
		    _ss.push(['_setAccount', 'KOI-3R4GIH0NK8']);
		    _ss.push(['_trackPageView']);
				(function() {
				    var ss = document.createElement('script');
				    ss.type = 'text/javascript'; ss.async = true;
				    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QMYANU21K.marketingautomation.services/client/ss.js?ver=1.1.1';
				    var scr = document.getElementsByTagName('script')[0];
				    scr.parentNode.insertBefore(ss, scr);
				})();
		</script>
	</head>
	<?php 
		if (is_page(8687)) {
		  $body_class = array('jaimes-4-pack');
	  }else if(is_page(8752)){
	  	$body_class = array('jaimes-4-pack','danis-4-pack');
	  }
	?>
	<body <?php body_class($body_class); ?>>

		<!-- GOOGLE TAG MANAGER -->
		<?php if (ENVIRONMENT_MODE == 1) { ?>
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-556TBH"
		                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function (w, d, s, l, i) {
		        w[l] = w[l] || [];
		        w[l].push({'gtm.start':
		                    new Date().getTime(), event: 'gtm.js'});
		        var f = d.getElementsByTagName(s)[0],
		                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
		        j.async = true;
		        j.src =
		                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
		        f.parentNode.insertBefore(j, f);
		    })(window, document, 'script', 'dataLayer', 'GTM-556TBH');</script>
		<?php } ?>
		<!-- END GOOGLE TAG MANAGER -->

		<!-- NavBar -->
		<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
			<a href="https://shop.myevergreenwellness.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/img/egwbugsmall.png" alt="Evergreeen Wellness Logo"></a>
		  <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
		  <div class="title-bar-title">Menu</div>
		</div>
		<div class="top-bar" id="responsive-menu">
		  <div class="row">
		  	<div class="top-bar-left">
		  	  <ul class="dropdown menu" data-dropdown-menu>
		  	    <li class="menu-text"><a href="https://shop.myevergreenwellness.com"><img src="https://cdn.shopify.com/s/files/1/2423/0213/t/40/assets/EGW-Logo-Color.svg?17559091448251415230" alt="Live Evergreen" class="logo"></a></li>
		  	    <li class="menu-text"><a href="https://shop.myevergreenwellness.com">Home</a></li>
		  	    <li class="menu-text"><a href="https://shop.myevergreenwellness.com/collections/all-programs">Programs</a></li>
		  	    <li class="menu-text"><a href="https://shop.myevergreenwellness.com/pages/about-evergreen-wellness">About</a></li>
		  	  </ul>
		  	</div>
		  	<div class="top-bar-right">
		  	  <ul class="menu">
		  	    <li><a href="https://shop.myevergreenwellness.com/account"><i class="fas fa-lock"></i> Login</a></li>
		  	    <li><a href="https://shop.myevergreenwellness.com/cart"><i class="fas fa-shopping-cart"></i> Cart</a></li>
		  	  </ul>
		  	</div>
		  </div>
		</div>
		<!-- End NavBar -->

