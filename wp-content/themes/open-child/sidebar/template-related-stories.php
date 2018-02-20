<?php
$post_id = discussion_get_page_id();

//Related posts
$related_posts_params = array();
$show_related = (discussion_options()->getOptionValue('blog_single_related_posts') == 'yes') ? true : false;
if ($show_related) {
    $hasSidebar = discussion_sidebar_layout();
    $related_post_number = ($hasSidebar == '' || $hasSidebar == 'default' || $hasSidebar == 'no-sidebar') ? 4 : 3;
    $related_posts_options = array('posts_per_page' => $related_post_number);
    $related_posts_image_size = (discussion_options()->getOptionValue('blog_single_related_image_size') !== '') ? intval(discussion_options()->getOptionValue('blog_single_related_image_size')) : '';
    $related_posts_title_size = (discussion_options()->getOptionValue('blog_single_related_title_size') !== '') ? intval(discussion_options()->getOptionValue('blog_single_related_title_size')) : '30';
    $related_posts_params = array('related_postss' => discussion_get_related_post_type($post_id, $related_posts_options), 'related_posts_image_size' => $related_posts_image_size, 'related_posts_title_size' => $related_posts_title_size);
}
?>
<div id="mkd-widget-tab-4" class="mkd-ptw-holder widget mkd-tabs" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="false">
    <div class="mkd-plw-tabs-content">
        <div data-max_pages="4" data-paged="1" data-display_excerpt="no" data-display_date="yes" data-title_length="30" data-title_tag="h6" data-display_image="yes" data-custom_thumb_image_height="84" data-custom_thumb_image_width="117" data-category_id="4" data-number_of_posts="5" data-base="mkd_post_layout_seven">
            <div class="mkd-bnl-outer">
                <div class="mkd-bnl-inner">
                    <?php if ($related_posts_params['related_postss'] && $related_posts_params['related_postss']->have_posts()) : ?>
                        <?php echo discussion_execute_shortcode('mkd_section_title', array('title' => esc_html__('Other Topics You Might Like', 'discussionwp'))); ?>
                        <?php while ($related_posts_params['related_postss']->have_posts()) : $related_posts_params['related_postss']->the_post(); ?>
                            <div class="mkd-pt-seven-item mkd-post-item mkd-active-post-page">
                                <div class="mkd-pt-seven-item-inner clearfix">
                                    <div class="mkd-pt-seven-image-holder" style="width: 117px">
                                        <?php if (has_post_thumbnail()) { ?>

                                            <a itemprop="url" class="mkd-pt-seven-link mkd-image-link" href="<?php echo esc_url(get_permalink()); ?>" target="_self">
                                                <?php
                                                if ($related_posts_image_size !== '') {
                                                    the_post_thumbnail(array($related_posts_image_size, 0));
                                                } else {
                                                    the_post_thumbnail('discussion_landscape');
                                                }
                                                ?>
                                            </a>

                                        <?php } ?>
                                    </div>
                                    <!-- Title section -->
                                    <div class="mkd-pt-seven-content-holder">
                                        <div class="mkd-pt-seven-title-holder">
                                            <h6 class="mkd-pt-seven-title">
                                                <a itemprop="url" class="mkd-pt-link" href="<?php echo esc_url(get_permalink()) ?>" target="_self"><?php echo discussion_get_title_substring(get_the_title(), $related_posts_title_size) ?></a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>