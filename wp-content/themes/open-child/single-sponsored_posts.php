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
    $custom_sponsor_image = get_user_meta($post_author_id, 'custom_sponsor_image');

    if (isset($custom_avatar_meta_data) && !empty($custom_avatar_meta_data[0])) {
        $attachment = wp_get_attachment_image_src($custom_avatar_meta_data[0]);
    }

    if (isset($custom_sponsor_image) && !empty($custom_sponsor_image[0])) {
        $sponsor_image = wp_get_attachment_image_src($custom_sponsor_image[0]);
    }

    ?>
    <div class="mkd-two-columns-75-25 mkd-content-has-sidebar clearfix">
        <div class="mkd-blog-holder mkd-column1 mkd-content-left-from-sidebar mkd-blog-single mkd-fsp-blog-holder">
            <div class="mkd-column-inner">
                <?php ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="mkd-post-content">
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
                    </div>
                    <?php do_action('discussion_before_blog_article_closed_tag'); ?>
                </article>
                <div class="single-article-fsp-info">
                    <article>
                        <div class="mkd-post-info">
                            <?php
                            discussion_post_info(array(
                                'date' => $display_date,
                                'category_singlepost' => $display_category_singlepost,
                                // 'count' => $display_count,
                            ))
                            ?>
                            <div class="mkd-post-fsp-savestories">
                            <?php
                               #customized_saved_stories();
                            ?>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="mkd-column-inner">
                <div class="mkd-blog-holder mkd-blog-single">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="mkd-post-content">
                            <div class="mkd-post-text">
                                <div class="mkd-post-text-inner clearfix">
                                <?php if (!has_post_thumbnail()) { ?>
                                    <div class="mkd-post-info">
                                        <?php
                                        discussion_post_info(array(
                                            'comments' => $display_comments,
                                            'count' => $display_count,
                                            'date' => $display_date,
                                            'author' => $display_author,
                                            'like' => $display_like,
                                            'category' => $display_category
                                        ));
                                        ?>
                                    </div>
                                <?php } ?>
                                <?php discussion_get_module_template_part('templates/single/parts/title', 'blog'); ?>

                                <!-- SPONSORED CONTENT BLOCK -->
                                <div class="post-top">

                                    <?php if($sponsor_image): ?>
                                    <a href="<?php echo $company_website;?>" target="_blank">
                                        <img id="sponsored-img-top" src="<?php echo $sponsor_image[0]; ?>" width="50" height="50" style="vertical-align: middle;"/>
                                    </a>
                                    <?php endif; ?>

                                    <p class="sponsored_content_blurb mdk-sng-pst" style=""><a href="<?php echo home_url() . '/sponsored-content'; ?>" target="_blank">Sponsored Content</a></span> by <a href="<?php echo $company_website; ?>" target="_blank"><?php echo $company_name ?></a></p>
                                </div>
                                <!-- /SPONSORED CONTENT BLOCK -->

                                    <div class="mdk-sng-pst">
                                    <?php the_content(); ?>
                                    <?php //echo do_shortcode('[egw-learn-more]' ); ?>

                                    <!-- DISPLAY COUPON IF WE HAVE A COUPON -->
                                    <?php if( get_field('coupon_code') ): ?>
                                    <section class="coupon_block">
                                        <?php if( get_field('coupon_header_text')): ?>
                                        <h1 class="coupon_block__header-text"><?php the_field('coupon_header_text'); ?></h1>
                                        <?php endif; ?>
                                        <section class="coupon_block__coupon-code"><h2><?php the_field('coupon_code'); ?></h2></section>
                                        <?php if( get_field('orange_textarea')): ?>
                                        <section class="coupon_block__orange-section"><h2><?php the_field('orange_textarea') ?></h2></section>
                                        <?php endif; ?>
                                        <?php if( get_field('bottom_textarea')): ?>
                                        <section class="coupon_block__bottom-section"><p><?php the_field('bottom_textarea'); ?></p></section>
                                        <?php endif; ?>
                                    </section>
                                    <?php endif; ?>
                                    <!-- /DISPLAY COUPON IF WE HAVE A COUPON -->

                                    <?php do_action('last_updated'); ?>
                                    <span class="egw-sponsored-bottom text-center"><hr class="product-separator" />
                                        <!-- <a href="<?php #echo $company_website; ?>"> -->
                                            <!-- <img id="sponsored-img-bottom" src="<?php #echo $attachment[0]; ?>" width="100" height="100"/></a> -->
                                            Content for this post is sponsored by
                                            <a href="<?php echo $company_website; ?>" target="_blank">
                                                <?php echo $company_name; ?></a>
                                    </span>
                                    <span class="text-center block">Find out more about our <a href="<?php echo home_url() . '/sponsored-content'; ?>" target="_blank">Sponsored Content</a></span>
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

                <div class="disclamier">
                    <p><span>Disclaimer:</span> This content is for informational purposes only and it is not meant to be relied on as medical advice, diagnosis, or treatment. Consult your physician before starting any exercise or dietary program or taking any other action respecting your health. In case of a medical emergency, call 911. </p>
                </div>
                <?php if (function_exists('the_tags')) { ?>
                    <div class="mkd-single-tags-holder">
                        <span class="mkd-single-tags-title"><strong>Tags: </strong></span>
                        <div class="mkd-tags">
                            <?php the_tags('', ' ', ''); ?><br />
                        </div>
                    </div>
                <?php } ?>
                <?php #get_template_part('sidebar/template-ads-mobile'); ?>
                <div class="fsp-recommended-stories-cont">
                    <?php echo do_shortcode('[AuthorRecommendedPosts]'); ?>
                </div>

                <!-- Check for comments open AND Show Facebook Comments or WP Comments -->
                <?php
                if ( ! comments_open() ) { ?>
                    <!-- If comments are closed display nothing. -->
                    <p></p>
                <?php }
                else {
                    if( get_option('egw_fb_comments_single_sponsored_posts') && get_option('egw_fb_comments_api_key' ) ):
                        get_template_part('block/comments-guidelines'); ?>
                        <div class="mkd-section-title-holder clearfix"><span class="mkd-st-title">Comments</span></div>
                        <div style="background-color:white;">
                            <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
                        </div>
                    <?php else:
                        get_template_part('block/comments-guidelines');
                        comments_template('', true);
                    endif;
                } ?>
                <!-- /Check for comments open AND Show Facebook Comments or WP Comments -->

                </div>
            </div>
        </div>
        <div class="mkd-column2">
            <div class="mkd-column-inner">
                <aside class="mkd-sidebar" style="transform: translateY(0px);">
                    <?php get_template_part('sidebar/template-sidebar-single'); ?>
                </aside>
            </div>
        </div>
    </div> <!-- mkd-two-columns-75-25  mkd-content-has-sidebar clearfix -->
</div> <!-- mkd-container-inner -->
<?php get_footer(); ?>
