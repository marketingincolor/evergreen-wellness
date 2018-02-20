<?php
/**
 * Template Name: No Sidebar Layout  
 * For displaying featured article and category feed when user not logged into branch
 * Referance: page-home.php
 */
list($post_per_section, $post_type) = scroll_loadpost_settings();
$category = 'feature-home';
$my_query = null;
$tag_not_in = null;
$subcat_id_ar = array();
$cat_id_ar = get_main_category_detail();
$total_subcat_posts = 0;
$merged_new_ar = array();
$member_location = get_egw_member_location();
$tag_not_in = egw_tag_not_in($member_location);
?>

<!-- 3 Column Layout -->
<div style="" class="vc_row wpb_row vc_row-fluid mkd-section mkd-content-aligment-left mkd-grid-section">
    <div class="mkd-container-inner clearfix">
        <div class="mkd-section-inner-margin clearfix">
            <?php
            $my_query = discussion_custom_categorylist_query($post_type, $cat_id_ar, $post_per_section, $tag_not_in);
            global $wp_query;
            get_template_part('block/category-blog-list');
            include(locate_template('block/ajax-pagination.php'));
            ?>      
        </div>
    </div>
</div>
<!-- End 3 Column Layout -->