<?php
/*
 * Author - MIC
 * Date - 13-06-2016
 * Purpose - For hybrid sponsor post landing pages
 * Template Name: Advertiser Landing Page
 *
*/
?>
<?php get_header(); ?>
<div class="mkd-container-inner">
    <?php
    $title_tag = 'h3';
    $title_length = '20';
    $display_date = 'yes';
    $date_format = 'd. F Y';
    $display_category = 'yes';
    $display_category_singlepost = 'yes';
    $display_comments = 'yes';
    $display_share = 'yes';
    $display_count = 'yes';
    $display_excerpt = 'yes';
    $thumb_image_width = '';
    $thumb_image_height = '';
    $thumb_image_size = '150';
    $excerpt_length = '12';
    $post_author_id = get_post_field( 'post_author', $post_id );
    $company_name = get_the_author_meta( 'egwsp_company_name', $post_author_id );
    $company_website = get_the_author_meta( 'egwsp_company_website', $post_author_id );
    $custom_avatar_meta_data = get_user_meta($post_author_id, 'custom_avatar');

    if (isset($custom_avatar_meta_data) && !empty($custom_avatar_meta_data[0])) {
        $attachment = wp_get_attachment_image_src($custom_avatar_meta_data[0]);
    }

    ?>
    <div class="mkd-two-columns-75-25 mkd-content-has-sidebar clearfix">
        <div class="mkd-blog-holder mkd-column1 mkd-content-left-from-sidebar mkd-blog-single mkd-fsp-blog-holder">
            <div class="mkd-column-inner">
                <?php ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="mkd-post-content">
                    <?php if ( !empty( get_field('video_url') ) ) { ?>
                        <?php get_template_part('block/template-single-video-block'); ?>
                    <?php } else { ?>
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="mkd-post-image-area">
                                <?php discussion_post_info_category(array('category' => 'no')) ?>
                                <?php

                                $display_custom_feature_image_width = '';
                                if(discussion_options()->getOptionValue('blog_single_feature_image_max_width') !== ''){
                                    $display_custom_feature_image_width = intval(discussion_options()->getOptionValue('blog_single_feature_image_max_width'));
                                }
                                ?>
                                <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="mkd-post-image">
                                        <?php if($display_custom_feature_image_width !== '') {
                                            the_post_thumbnail(array($display_custom_feature_image_width, 0));
                                        } else {
                                            the_post_thumbnail('discussion_post_feature_image');
                                        } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    </div>
                    <?php do_action('discussion_before_blog_article_closed_tag'); ?>
                </article>
            </div>

            <div class="mkd-column-inner">
                <div class="mkd-blog-holder mkd-blog-single">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="mkd-post-content">
                            <div class="mkd-post-text">
                                <div class="mkd-post-text-inner clearfix">
                                <?php if (!has_post_thumbnail()) { ?>
                                <?php } ?>
                                <?php discussion_get_module_template_part('templates/single/parts/title', 'blog'); ?>

                                <!-- SPONSORED CONTENT BLOCK -->
                                <div class="post-top">
                                    <a href="<?php echo $company_website;?>"><img id="sponsored-img-top" src="<?php echo $attachment[0]; ?>" width="50" height="50" style="vertical-align: middle;"/></a>
                                    <p style="display:inline-block;"><a href="<?php echo get_field('sponsored_content_page_link'); ?>">Sponsored</a></span> by <a href="<?php echo $company_website; ?>"><?php echo $company_name ?></a></p>
                                </div>
                                <!-- /SPONSORED CONTENT BLOCK -->

                                    <div class="mdk-sng-pst">
                                        <?php the_content(); ?>
                                        <?php //echo do_shortcode('[egw-learn-more]' ); ?>
                                        <?php //do_action('last_updated'); ?>

                                        <!-- CONTACT INFORMATION -->
                                        <div id="psa-contact">
                                            <?php if ( !empty( get_field( 'psa_name' ) ) ) { ?><div class="nap-name"><i class="fa fa-building" aria-hidden="true"></i> <?php the_field('psa_name'); ?></div><?php } ?>
                                            <?php if ( !empty( get_field( 'psa_address' ) ) ) { ?><div class="nap-address"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('psa_address'); ?></div><?php } ?>
                                            <?php if ( !empty( get_field( 'psa_phone' ) ) ) { ?><div class="nap-phone"><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('psa_phone'); ?></div><?php } ?>
                                            <?php if ( !empty( get_field( 'psa_email' ) ) ) { ?><div class="nap-email"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field('psa_email'); ?></div><?php } ?>
                                        </div>
                                        <!-- /CONTACT INFORMATION -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php include(locate_template('block/get-post-author.php')); ?>

                <?php
                $tm_disclaim = get_field('trademark_disclaimer'); //set via Custom Fields Plugin
                if ($tm_disclaim) {
                    include(locate_template('block/show-trademark-disclaimer.php'));
                } ?>

                <?php get_template_part('sidebar/template-ads-mobile'); ?>
                <div class="fsp-recommended-stories-cont">
                    <?php echo do_shortcode('[AuthorRecommendedPosts]'); ?>
                </div>
                <?php
                   // get_template_part('block/comments-guidelines');
                   // if (discussion_show_comments()) {
                   //     comments_template('', true);
                   // }
                ?>
                </div>
            </div>
        </div>
        <div class="mkd-column2">
            <div class="mkd-column-inner">
                <aside class="mkd-sidebar" style="transform: translateY(0px);">
                    <?php get_sidebar(); ?>
                    <?php get_template_part( 'sidebar/template-newsletter-form', 'page' ); ?>
                </aside>
            </div>
        </div>
    </div> <!-- mkd-two-columns-75-25  mkd-content-has-sidebar clearfix -->
</div> <!-- mkd-container-inner -->
<?php get_footer(); ?>
