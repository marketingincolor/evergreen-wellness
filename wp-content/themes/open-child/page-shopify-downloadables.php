<?php /* Template Name: Shopify Downloadables */ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cleartype" content="on">
    <title><?php the_title(); ?>&trade; | Evergreen Wellness&reg;</title>
    <meta name="description" content="Download menus, recipes self reflections and more for your 28-day challenge" />
    <meta property="fb:pages" content="214523438891340">
    <meta property="og:title" content="<?php the_title(); ?>&trade; | Evergreen Wellness&reg;">
    <?php if(is_page(8683)) { ?>
      <meta property="og:description" content="Lose a size in 28 days, and just 8 minutes a day, with Jaime Brenkus’ 28-Day Size Down Challenge.">
    <?php }else if(is_page(8680)) { ?>
      <meta property="og:description" content="Fit back into your dress in 14 days, just 8 minutes a day, with Jaime Brenkus' Little Black Dress program.">
    <?php } ?>

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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

    <!-- Mobile Specific Metas -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1">
		
    <!-- Stylesheets -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/foundation.min.css">
	  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/shopify.css">
    <link rel=icon href=<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/img/egwbugsmall.png>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script>
        var _ss = _ss || [];
        var __ss_noform = __ss_noform || [];
        var callThisOnReturn = function(resp) {
          if(resp.contact){
            if (location.href.includes('28-day-challenge')) {
              if (resp.contact['Signed Up - 28 Day Amazon']) {
                return false;
              } else{
                $('#takeover-modal').foundation('open');
              }
            }else if(location.href.includes('little-black-dress')){
              if (resp.contact['Signed Up - LBD Amazon']) {
                return false;
              } else{
                $('#takeover-modal').foundation('open');
              }
            }
          }else{
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

  <body <?php body_class('page-sales-kit-director2'); ?>">
    
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
							  <a href="<?php the_field('item_'.$i.'_downloadable') ?>" class="button" target="_blank"><?php the_field('item_'.$i.'_button_text') ?></a>
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

      <!-- Takeover Modal -->
      <div class="full reveal" id="takeover-modal" data-reveal data-options="closeOnClick:false;closeOnEsc:false;" style="background: url(<?php the_field('takeover_modal_background'); ?>) top no-repeat;background-size:cover;">
        <div class="row">
          <div class="medium-7 large-6 columns">
            <h3><?php the_field('takeover_modal_headline'); ?></h3>
            <p class="modal-content-desktop"><?php the_field('takeover_modal_content_desktop'); ?></p>
            <p class="modal-content-mobile"><?php the_field('takeover_modal_content_mobile'); ?></p>
            <form action="" id="takeover-form">
              <label for="email">Enter Your Email Address
                <input name="email" id="email" type="email">
              </label>
              <input name="accept-terms" id="accept-terms" type="checkbox" checked><label for="accept-terms">I accept your <a href="/terms-and-conditions" target="_blank" style="color:#fff;border-bottom:1px solid #FFF">terms &amp; conditions</a> and <a href="/privacy-policy" target="_blank" style="color:#fff;border-bottom:1px solid #FFF">privacy policy</a>.</label>
              <h4 id="error" style="display:none"></h4>
              <div class="text-center"><input id="submit" class="button" type="submit" value="<?php the_field('takeover_modal_button_text'); ?>" style="background-color:<?php the_field('takeover_modal_button_color'); ?>"></div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Takeover Modal -->

		<?php }} ?>
      
    </div>
  <!-- Sharpspring Form Tracking Code -->
  
    <!-- If is 28-day challenge page -->
    <?php if(is_page(8683)) { ?>

      <script type="text/javascript">
          var __ss_noform = __ss_noform || [];
          __ss_noform.push(['baseURI', 'https://app-3QMYANU21K.marketingautomation.services/webforms/receivePostback/MzawMDG2NDQxAwA/']);
          __ss_noform.push(['form','takeover-form', 'd23b1828-e550-4133-8d23-7baddda81ec8']);
          __ss_noform.push(['submitType', 'manual']);
      </script>
      <script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/noform.js?ver=1.24" ></script>

    <!-- If is little black dress page -->
    <?php }elseif (is_page(8680)) { ?>

      <script type="text/javascript">
          var __ss_noform = __ss_noform || [];
          __ss_noform.push(['baseURI', 'https://app-3QMYANU21K.marketingautomation.services/webforms/receivePostback/MzawMDG2NDQxAwA/']);
          __ss_noform.push(['form','takeover-form', '3b91de3d-349c-4d29-8472-3174540dcb96']);
          __ss_noform.push(['submitType', 'manual']);
      </script>
      <script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/noform.js?ver=1.24" ></script>

    <?php } ?>

  <!-- End Sharpspring Form Tracking Code -->
  
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/matchHeight.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/shopify-assets/foundation.min.js"></script>
  <script>
    $(document).foundation();

    $(document).ready(function(){
      validateForm();
      
      var mailLink = document.getElementById('mail-link');
      mailLink.addEventListener('click',function(){
        var url = location.href;
        if (url.includes('28-day-challenge')) {
          window.location.href = 'mailto:da4e8264573@mydonedone.com?subject=28%20Day%20Challenge%20Inquiry';
        }else if(url.includes('little-black-dress')){
          window.location.href = 'mailto:da4e8264573@mydonedone.com?subject=Little%20Black%20Dress%20Inquiry';
        }
      });
    });

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
          sendFormData(location.href);
        }
      });
    }

    // Send form data and hide takeover form
    function sendFormData(currentURL){
      if (currentURL.includes('28-day-challenge')) {
        var ssID = 'd23b1828-e550-4133-8d23-7baddda81ec8';
      }else if(currentURL.includes('little-black-dress')){
        var ssID = '3b91de3d-349c-4d29-8472-3174540dcb96';
      }
      $.ajax({
        type: 'POST',
          success: function(data){
            __ss_noform.push(['submit', null, ssID]);
            $('#takeover-modal').foundation('close');
          }
      });
    }
  </script>

  </body>
</html>
