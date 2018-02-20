<!DOCTYPE html>
<html <?php language_attributes(); ?>  xmlns:fb="http://ogp.me/ns/fb#">
    <head>
        <?php if( get_option('egw_fb_comments_api_key') ): ?>
            <meta property="fb:app_id" content="<?php echo get_option('egw_fb_comments_api_key'); ?>" />
        <?php endif; ?>
        <?php
        /**
         * @see discussion_header_meta() - hooked with 10
         * @see mkd_user_scalable - hooked with 10
         */
        ?>
        <?php do_action('discussion_header_meta'); ?>
        <?php wp_head(); ?>

        <!-- PINTEREST -->
        <meta name="p:domain_verify" content="4f03e837a6f1a3a03dac63b1c78dbc93"/>
        <!-- /PINTEREST -->

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

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

        <!-- BEGIN DFP -->
        <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
        <script>
            var googletag = googletag || {};
            googletag.cmd = googletag.cmd || [];
            (function() {
              var gads = document.createElement('script');
              gads.async = true;
              gads.type = 'text/javascript';
              var useSSL = 'https:' == document.location.protocol;
              gads.src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
              var node = document.getElementsByTagName('script')[0];
              node.parentNode.insertBefore(gads, node);
            })();
        </script>

        <!-- LEADERBOARD -->
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/home_desktop_top_970x90', ['fluid'], 'div-gpt-ad-1517586149941-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <!-- LEADERBOARD -->

        <!-- ELEVATOR SIDEBAR -->
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/home_desktop_elevator_303x662', ['fluid'], 'div-gpt-ad-home_desktop_elevator_303x662').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <!-- ELEVATOR SIDEBAR -->

        <!-- SPONSORED POST ADS -->
        <?php if( get_post_type() == 'sponsored_posts'): ?>
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/sponsored_post_unit_1_300x250', ['fluid'], 'div-gpt-ad-1517946599258-0').addService(googletag.pubads());

            googletag.defineSlot('/657943151/sponsored_post_unit_2_300x250', ['fluid'], 'div-gpt-ad-sponsored_post_unit_2_300x250').addService(googletag.pubads());
            googletag.defineSlot('/657943151/sponsored_post_unit_3_300x250', ['fluid'], 'div-gpt-ad-sponsored_post_unit_3_300x250').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <?php endif; ?>
        <!-- /SPONSORED POSTS ADS -->

        <!-- CONTACT US PAGE ADS -->
        <?php if (is_page('contact-us')): ?>
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/contact_us_sidebar_300.250', ['fluid'], 'div-gpt-ad-contact_us_sidebar_300.250').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <?php endif; ?>
        <!-- /CONTACT US PAGE ADS -->

        <!-- SEARCH PAGE ADS -->
        <?php if (is_search()): ?>
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/search_sidebar_300x250', ['fluid'], 'div-gpt-ad-search_sidebar_300x250').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <?php endif; ?>
        <!-- /SEARCH PAGE ADS -->


        <!-- SIDEBAR -->
        <script>
          googletag.cmd.push(function() {
            googletag.defineSlot('/657943151/main_sidebar_advert_300x250', ['fluid'], 'div-gpt-ad-main').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>
        <!-- /SIDEBAR -->

        <!-- /END DFP -->

    </head>
    <body <?php
    if (is_single()) {
        body_class('mkd-apsc-custom-style-enabled');
    } else {
        body_class();
    }
    ?> itemscope itemtype="http://schema.org/WebPage">

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

        <?php discussion_get_side_area(); ?>

        <?php if(is_single( 'agent-orange' )) : ?>
            <div class="ao_wrapper">
        <?php endif; ?>
        <div class="mkd-wrapper">
            <div class="mkd-wrapper-inner">
                <?php discussion_get_header(); ?>

                <?php if (discussion_options()->getOptionValue('show_back_button') == "yes") { ?>
                    <a id='mkd-back-to-top'  href='#'>
                        <span class="mkd-icon-stack">
                            <?php
                            discussion_icon_collections()->getBackToTopIcon('font_elegant');
                            ?>
                        </span>
                        <span class="mkd-icon-stack-flip">
                            <?php
                            discussion_icon_collections()->getBackToTopIcon('font_elegant');
                            ?>
                        </span>
                    </a>
                <?php } ?>

                <div class="mkd-content" <?php discussion_content_elem_style_attr(); ?>>
                    <div class="mkd-content-inner">
                        <div class="announcementcontainer">
                            <?php
                            //Find out current page is what? e.g. page, category or post etc..
                            $getInstantoutput = wpsefsp_loop();

                            //Get current sub-category name
                            global $current_category;
                            $current_category = strtolower(single_cat_title("", false));

                            //Get current page url
                            global $wp;
                            $current_url = home_url(add_query_arg(array(), $wp->request));
                            $current_page = explode('/', $current_url);
                            $getSlug = $current_page[sizeof($current_page) - 1];

                            query_posts(array(
                                'post_type' => 'announcement',
                                'showposts' => 100
                            ));
                            while (have_posts()) : the_post();
                                $value = get_field("display_pages");
                                $announceLink = get_field("announcements_link");
                                // foreach ($value as $key => $valuerel) {
                                //     if ($getInstantoutput == "front") {
                                //         if ($valuerel == "home") {
                                //             if ($announceLink != "") {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><a href=" . $announceLink . "><div class='annonuce_description'>" . get_the_content() . "</div></div></div></a>";
                                //             } else {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><div class='annonuce_description'>" . get_the_content() . "</div></div></div>";
                                //             }
                                //         }
                                //     }
                                //     if ($getInstantoutput == "page") {
                                //         if ($valuerel == $getSlug) {
                                //             if ($announceLink != "") {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><a href=" . $announceLink . "><div class='annonuce_description'>" . get_the_content() . "</div></div></div></a>";
                                //             } else {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><div class='annonuce_description'>" . get_the_content() . "</div></div></div>";
                                //             }
                                //         }
                                //     }
                                //     if ($getInstantoutput == "category") {
                                //         if ($valuerel == $current_category) {
                                //             if ($announceLink != "") {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><a href=" . $announceLink . "><div class='annonuce_description'>" . get_the_content() . "</div></div></div></a>";
                                //             } else {
                                //                 echo "<div class='annonuce_set'><div class='mkd-grid'><div class='annonuce_description'>" . get_the_content() . "</div></div></div>";
                                //             }
                                //         }
                                //     }
                                // }
                            endwhile;
                            ?>
                            <?php wp_reset_postdata(); ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <!-- Announcement Notifications End -->
                        <?php discussion_get_content_top(); ?>
