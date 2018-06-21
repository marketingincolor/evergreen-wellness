<?php
/**
 * Author - Akilan
 * Date - 10-06-2016
 * Purpose - For displaying article 3*3 based on category
 * Modified - 01-07-2016
 */
?>
<?php
global $post;
$post_id = $post->ID;
list($post_per_section, $post_type) = scroll_loadpost_settings();
$main_cat_id="";
$main_cat_det="";
$post_author_id = get_post_field( 'post_author', $post_id );
$company_name = get_the_author_meta( 'egwsp_company_name', $post_author_id );
$company_website = get_the_author_meta( 'egwsp_company_website', $post_author_id );
$num_columns = get_num_columns();
global $wp;
$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
if($current_url!=get_home_url())
{
   $main_cat_id = get_maincategory_id(); //for retrieving main category id
   $main_cat_det = get_category($main_cat_id);
}
if(!isset($slug_page)) $slug_page=basename(get_permalink());
?>
<div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner ">
        <div class="wpb_wrapper">
            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                <div class="fsp-ads-homepage">

                <!-- TOP LEADERBOARD AD -->
                <?php if(SHOW_ADS): ?>
                    <?php include(locate_template('ads/home_desktop_top_970x90.php')); ?>
                <?php endif; ?>
                <!-- /TOP LEADERBOARD AD -->

                </div>
                <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>

                <div class="mkd-bnl-holder mkd-pl-five-holder  mkd-post-columns-<?php echo $num_columns; ?>" data-base="mkd_post_layout_five"  data-number_of_posts="2" data-column_number="2" data-category_id="7" data-thumb_image_size="custom_size" data-thumb_image_width="302" data-thumb_image_height="198" data-title_tag="h6" data-title_length="27" data-display_date="no"  data-display_category="no" data-display_comments="no" data-display_share="no" data-display_count="no" data-display_excerpt="yes" data-excerpt_length="7" data-display_read_more="no"     data-paged="1" data-max_pages="8">
                <div class="mkd-bnl-outer">
                    <div class="mkd-bnl-inner">
                        <?php
                        $i = 1;
                        $total_post = 0;
                        $title_cls = "";
                        $post_no = null;
                        if (have_posts()) {
                            while (have_posts()) :the_post();
                                if (strstr($_SERVER['HTTP_USER_AGENT'], 'iPad')) {
                                    //echo "You are on an iPad";
                                    if ($i % 2 == 1):
                                        /* for set out class article title based on fixed heights */
                                        $title_cls = article_title_class($wp_query);
                                    endif;
                                }else {
                                    if ($i % 2 == 1):
                                        /* for set out class article title based on fixed heights */
                                        $title_cls = article_title_class($wp_query);
                                    endif;
                                }

                                $id = get_the_ID();
                                $background_image_style = discussion_custom_getImageBackground($id);
                                $params['background_image_style'] = $background_image_style;
                                $post_no_class = 'mkd-post-number-' . $post_no;
                                $total_post = $wp_query->found_posts;


                                /**
                                 * For hide date/category for videos section
                                 */
                                $title_tag = 'h4';
                                $title_length = '';
                                $display_date = 'yes';
                                $date_format = 'd. F Y';
                                $display_category = 'no';
                                $display_comments = 'yes';
                                $display_share = 'yes';
                                $display_count = 'yes';
                                $display_excerpt = 'yes';
                                $thumb_image_width = '';
                                $thumb_image_height = '';
                                $thumb_image_size = '150';
                                $excerpt_length = '9';
                                ?>
                                <?php
                                /**
                                 * For implement two coloumn based post in one row
                                 */
                                $getPostcat = wp_get_post_categories($id);
                                $post_link=post_category_link($id,$getPostcat,$main_cat_det,$main_cat_id,$slug_page);
                                ?>

                                <div class="mkd-pt-six-item mkd-post-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="mkd-pt-six-image-holder">
                                            <?php
                                            if ($display_category == 'yes') {
                                                $category = get_the_category();
                                                $the_category_id = $category[0]->cat_ID;
                                                if (function_exists('rl_color')) {
                                                    $rl_category_color = rl_color($the_category_id);
                                                }
                                                ?>
                                                <div  style="background: <?php echo $rl_category_color; ?>;" class="mkd-post-info-category">
                                                    <?php  echo organize_catgory($id); ?>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <a itemprop="url" class="mkd-pt-six-slide-link mkd-image-link" href="<?php echo $post_link; ?>" target="_self">
                                                <?php
                                                if ($thumb_image_size != 'custom_size') {
                                                    echo get_the_post_thumbnail(get_the_ID(), $thumb_image_size);
                                                } elseif ($thumb_image_width != '' && $thumb_image_height != '') {
                                                    echo discussion_generate_thumbnail(get_post_thumbnail_id(get_the_ID()), null, $thumb_image_width, $thumb_image_height);
                                                }

                                                if ( isset($display_post_type_icon)) {
                                                    if ($display_post_type_icon == 'yes') {
                                                        discussion_post_info_type(array(
                                                            'icon' => 'yes',
                                                        ));
                                                    }
                                                }
                                                ?>
                                             <?php do_action('sponsored-post'); ?>

                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div class="mkd-pt-six-content-holder">
                                        <div class="mkd-pt-six-title-holder <?php echo $title_cls; ?>">
                                            <<?php echo esc_html($title_tag) ?> class="mkd-pt-six-title">
                                            <a itemprop="url" class="mkd-pt-link" href="<?php echo $post_link; ?>" target="_self">
                                            <?php echo discussion_get_title_substring(get_the_title(), $title_length) ?></a>
                                            </<?php echo esc_html($title_tag) ?>>
                                            <?php
                                            $post_id = get_the_ID();
                                            $post_author_id = get_post_field( 'post_author', $post_id );
                                            $company_name = get_the_author_meta( 'egwsp_company_name', $post_author_id );
                                            $company_website = get_the_author_meta( 'egwsp_company_website', $post_author_id );
                                            ?>

                                        <!-- Sponsored Content Blurb -->
                                        <?php

                                            if ( get_post_type() == 'sponsored_posts') {

                                                echo '<p><a href="'. home_url(). "/sponsored-content" . '" target="_blank">Sponsored Content</a></span> by ' . '<a href="'.$company_website.'" target="_blank">'. $company_name.'</a></p>';
                                            }
                                            else {
                                                echo '<div style="height: 37px;">&nbsp;</div>';
                                            }

                                        ?>
                                        <!-- End Sponsored Content Blurb -->

                                        </div>

                                         <?php
                                           discussion_post_info_date(array(
                                                'date' => $display_date,
                                                'date_format' => $date_format
                                           ));
                                         ?>
                                        <?php
                                        if ($display_excerpt == 'yes') {
                                            ?>
                                            <div class="mkd-pt-one-excerpt">
                                                <?php custom_discussion_excerpt(60);?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <?php if ($display_share == 'yes' || $display_comments == 'yes') { ?>
                                        <div class="mkd-pt-info-section clearfix">
                                            <div>
                                                <?php
                                                // discussion_post_info_share(array(
                                                //     'share' => $display_share
                                                // ));

                                                // discussion_post_info_comments(array(
                                                //     'comments' => $display_comments
                                                // ));
                                                // discussion_post_info_count(array(
                                                //     'count' => $display_count
                                                // ), 'list');
                                                ?>
                                            </div>
                                            <div class="mkd-pt-info-section-background"></div>
                                        </div>
                                    <?php } ?>
                                </div>

                                <?php
                                $i++;
                            endwhile;
                        } else {
                            discussion_get_module_template_part('templates/parts/no-posts', 'blog');
                        }
                        ?>

                    </div>
                </div>
                <input type="hidden" id="current_post" value="<?php
                if ($wp_query->found_posts < $post_per_section): echo $wp_query->found_posts;
                else: echo $post_per_section;
                endif;
                ?>">
                <input type="hidden" id="processing" value="0">
                <input type="hidden" id="currentloop" value="1">
                <?php if($current_url != get_home_url()) { ?>
                <input type="hidden" id="total_post" value="<?php echo $wp_query->found_posts; ?>">
                <?php } else { ?>
                <input type="hidden" id="total_post" value="<?php echo mic_set_post_amount(); ?>">
                <?php } ?>
                <?php if( $slug_page == 'wellness-retreats') { ?>
                <input type="hidden" id="main_cat_id" value="658"/>
                <?php } else { ?>
                <input type="hidden" id="main_cat_id" value="<?php echo $main_cat_id;  ?>"/>
                <?php } ?>
                <input type="hidden" id="slug_page" value="<?php echo $slug_page;  ?>"/>
                <?php wp_reset_query();  // Restore global post data stomped by the_post().?>
            </div>
           <?php
            /**
             * For displaying ads based on total count of post
             */
            include(locate_template('block/post-middle-adsblock.php'));
            ?>

            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>

        </div>
    </div>

</div>
<?php
/**
 * jquery loading image icon display block
 */
get_template_part('sidebar/template-ajax-image');
?>
