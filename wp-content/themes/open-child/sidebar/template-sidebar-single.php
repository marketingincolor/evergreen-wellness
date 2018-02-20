<?php do_action('discussion_before_blog_article_closed_tag');

    if(get_post_type() == 'sponsored_posts') {

        if(SHOW_ADS): ?>
            <div class="widget mkd-rpc-holder hidden-xs">
                <div class="widget widget_categories">
                    <div class="mkd-rpc-content">
                        <!-- Insert Ads here -->
                        <?php include( locate_template( 'ads/sponsored_post_unit_1_300x250.php' ) ); ?>
                        <!-- Ads end here -->
                    </div>
                </div>
            </div>
        <?php endif;

        if(SHOW_ADS): ?>
            <div class="widget mkd-rpc-holder hidden-xs">
                <div class="widget widget_categories">
                    <div class="mkd-rpc-content">
                        <!-- Insert Ads here -->
                        <?php include( locate_template( 'ads/sponsored_post_unit_2_300x250.php') ); ?>
                        <!-- Ads end here -->
                    </div>
                </div>
            </div>
        <?php endif;

        if(SHOW_ADS): ?>
            <div class="widget mkd-rpc-holder hidden-xs">
                <div class="widget widget_categories">
                    <div class="mkd-rpc-content">
                        <!-- Insert Ads here -->
                        <?php include( locate_template( 'ads/sponsored_post_unit_3_300x250.php') ); ?>
                        <!-- Ads end here -->
                    </div>
                </div>
            </div>
        <?php endif;

    }

    if( !is_single() && get_post_type() == 'sponsored_posts'):
        get_template_part( 'sidebar/template-ads', 'page' );
    endif;
    get_template_part( 'sidebar/template-social-share', 'page' );
    get_template_part( 'sidebar/template-newsletter-form', 'page' );

    if(is_single() && get_post_type() == 'videos'){
        get_template_part( 'sidebar/template-related-articles', 'page' );
    }
    else if(is_single() && get_post_type() == 'ai1ec_event')
    {
        get_template_part( 'sidebar/template-upcoming-events', 'page' );
    }
    else {
        get_template_part( 'sidebar/template-related-stories', 'page' );
    }
?>
