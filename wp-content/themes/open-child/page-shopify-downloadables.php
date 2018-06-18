<?php /* Template Name: Shopify Downloadables */ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cleartype" content="on">
    <title><?php the_title(); ?></title>
    <meta name="description" content="Download menus, recipes self reflections and more for your 28-day challenge" />
    <meta property="fb:pages" content="214523438891340">
    
    <!-- Google Tag Manager -->
    
    <!-- End Google Tag Manager -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

    <!-- Mobile Specific Metas -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1">
		
    <!-- Stylesheets -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/foundation.min.css">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/shopify.css">
    
    <style>
    	
    </style>
    
  </head>

  <body <?php body_class('page-sales-kit-director2'); ?>">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-556TBH"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="content_wrapper">

		<?php 
			if ( have_posts() ) { while ( have_posts() ) { the_post();

			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full')
		 ?>
      <section id="sales-kit-hero2">
        <img src="<?php echo $featured_img_url; ?>" style="width:100%">
      </section>
      
      <section id="steps">
        <div class="row">
          <div class="medium-8 medium-offset-2 columns text-center">
          	<h3><?php the_field('headline'); ?></h3>
            <p><?php the_field('subheading'); ?></p>
          </div>
        </div>
        <div class="row">

					<?php for ($i=1; $i < 5; $i++) { ?>
						<?php if(get_field('item_'.$i.'_headline'))	{ ?>
				
							<div class="small-2 medium-1 medium-offset-1 columns">
							  <aside><?php echo $i; ?></aside>
							</div>
							<div class="small-10 medium-4 columns end">
							  <h4><?php the_field('item_'.$i.'_headline') ?></h4>
							  <p><?php the_field('item_'.$i.'_copy') ?></p>
							  <a href="<?php the_field('item_'.$i.'_downloadable') ?>" class="button"><?php the_field('item_'.$i.'_button_text') ?></a>
							</div>

						<?php } ?>
					<?php } ?>

        </div>
      </section>
      
      <section id="residents">
      	<div class="row">
	      	<a href="<?php the_field('cta_link'); ?>"><img src="<?php the_field('cta_mobile_image'); ?>" alt="Click to learn more about Jaime's Free 4-pack sampler" class="show-for-small-only" style="width:100%"></a>
	        <a href="<?php the_field('cta_link'); ?>"><img src="<?php the_field('cta_desktop_image'); ?>" alt="Click to learn more about Jaime's Free 4-pack sampler" class="show-for-medium" style="width:100%"></a>
      	</div>
      </section>

		<?php }} ?>
      
    </div>
  
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/matchHeight.js"></script>

  <script>
    $('#steps').find('.medium-4').matchHeight();
    var mailLink = document.getElementClassName('mail-link');
    mailLink.addEventListener('click',function(){
      window.location.href = 'mailto:da4e8264573@mydonedone.com?subject=Sales%20Kit%20Inquiry'; 
    });
  </script>

 
  </body>
</html>
