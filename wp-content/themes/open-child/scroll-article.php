<?php
/**
 * Author - Akilan
 * Date - 27-06-2016
 * Purpose - For list out the blogs based on category
 */
$num_columns = get_num_columns();
$member_location = get_egw_member_location();
$tag_not_in = egw_tag_not_in($member_location);
?>
<div class="mkd-bnl-holder mkd-pl-five-holder  mkd-post-columns-<?php echo $num_columns; ?>"  data-base="mkd_post_layout_five"  data-number_of_posts="2" data-column_number="2" data-category_id="7" data-thumb_image_size="custom_size" data-thumb_image_width="302" data-thumb_image_height="198" data-title_tag="h6" data-title_length="27" data-display_date="no"  data-display_category="no" data-display_comments="no" data-display_share="no" data-display_count="no" data-display_excerpt="yes" data-excerpt_length="7" data-display_read_more="no" data-paged="1" data-max_pages="8">
    <div class="mkd-bnl-outer">
        <div class="mkd-bnl-inner">
            <?php
            $args = array(
                'cat' => $_POST['cat_id'],
                'post_status' => 'publish',
                'order' => 'DESC',
                'post_type' => explode(",", $_POST['post_type']),
                'offset' => $_POST['offset'],
                'posts_per_page' => $_POST['perpage'],
                'tag__not_in' => $tag_not_in
            );
            $posts_array = query_posts($args);
            $main_cat_det = get_category($_POST['main_cat_id']);
            $i = 1;
            $title_cls = "";
            if ($posts_array) {
                $count = 0;
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
                $blog_title_ar=array();
                /**
                 * For counting no of posts exist
                 */
                $k=1;
                foreach ($posts_array as $single_post) {
                    $count++;
                    $blog_title_ar[$k]=$single_post->post_title;
                    $k++;
                }

                /**
                 * Generate blog detail with 3*3 design
                 */
                foreach ($posts_array as $post) : setup_postdata($post);
                    ?>

                    <?php
                    $id = get_the_ID();
                    $background_image_style = discussion_custom_getImageBackground($id);
                    $params['background_image_style'] = $background_image_style;
                    $post_no_class = 'mkd-post-number-' . $post_no;

                    if (strstr($_SERVER['HTTP_USER_AGENT'], 'iPad')) {
                        if ($i % 2 == 1):
                            /* for set out class article title based on fixed heights */
                            $title_cls = next_post_scrollarticle($blog_title_ar, $i);
                        endif;
                    }else {
                        if ($i % 2 == 1):
                            /* for set out class article title based on fixed heights */
                            $title_cls = next_post_scrollarticle($blog_title_ar, $i);
                        endif;
                    }


                    /**
                     * Genarating permalink based on category
                     */
                    $getPostcat = wp_get_post_categories($id);
                    $slug_page=$_POST['slug_page'];
                    $main_cat_id=$_POST['main_cat_id'];
                    $post_link=post_category_link($id,$getPostcat,$main_cat_det,$main_cat_id,$slug_page);

                    /**
                     * For implement there coloumn based post in one row
                     */
                    ?>

                    <div class="mkd-pt-six-item mkd-post-item mkd-active-post-page">
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
                                       <?php echo organize_catgory($id); ?>
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
                                    ?>
                                    <?php
                                    if ($display_post_type_icon == 'yes') {
                                        discussion_post_info_type(array(
                                            'icon' => 'yes',
                                        ));
                                    }
                                    ?>

                                     <?php do_action('sponsored-post'); ?>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="mkd-pt-six-content-holder">
                            <div class="mkd-pt-six-title-holder <?php echo $title_cls; ?>">
                                <<?php echo esc_html($title_tag) ?> class="mkd-pt-six-title">
                                <a itemprop="url" class="mkd-pt-link" href="<?php echo $post_link; ?>" target="_self"><?php echo discussion_get_title_substring(get_the_title(), $title_length) ?></a>
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
                            </div>
                              <?php
                                     discussion_post_info_date(array(
                                          'date' => $display_date,
                                          'date_format' => $date_format
                                      ));
                              ?>
                            <?php if ($display_excerpt == 'yes') { ?>
                                <div class="mkd-pt-one-excerpt">
                                    <?php custom_discussion_excerpt(60);?>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if ($display_share == 'yes' || $display_comments == 'yes') { ?>
                            <div class="mkd-pt-info-section clearfix">
                                <div>
                                    <?php
                                    // discussion_post_info_share(array(
                                    //     'share' => $display_share
                                    // ));
                                    // discussion_post_info_comments(array(
                                    //                 'comments' => $display_comments
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

                endforeach;
                wp_reset_postdata();
                ?>

                <?php
            } else {
                discussion_get_module_template_part('templates/parts/no-posts', 'blog');
            }

            wp_reset_postdata();  // Restore global post data stomped by the_post().
            ?><!--/div-->

        </div>
    </div>
</div>
