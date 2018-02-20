<?php
/**
 * Author - Akilan
 * Date - 20-06-2016
 * Purpose - For changing template based on requirement
 * 
 */
$member_location = get_egw_member_location();
$tag_not_in = egw_tag_not_in($member_location);
list($post_per_section,$post_type)=scroll_loadpost_settings();
?>

<?php get_header(); ?>
<div class="mkd-content">
    <div class="mkd-content-inner">
        <div class="mkd-full-width">
            <div class="mkd-full-width-inner">               
                <?php
                $parent_category_id = "";
                $cat = array();
                $category_id = get_cat_id(single_cat_title("", false));
                if (!empty($category_id)) {
                    $parent_category_id = category_top_parent_id($category_id);
                    $cat = get_category($parent_category_id);
                }
                $main_cat=get_main_category_detail();
                get_template_part('template_category_page_banner');
                ?>

                <div class="mkd-container">
                    <div class="mkd-container-inner clearfix">
                        <div class="mkd-two-columns-75-25  mkd-content-has-sidebar clearfix">
                            <div class="mkd-column1 mkd-content-left-from-sidebar">
                                <div class="mkd-column-inner">
                                    <div class="vc_empty_space" style="height: 0px"><span class="vc_empty_space_inner"></span></div> 
                                   <?php
                                    $my_query = null;
                                    $my_query = discussion_custom_categorylist_query($post_type,$category_id,$post_per_section,$tag_not_in);   
        //                            $my_query = discussion_custom_categorylist_query($category_id);
                                    global $wp_query;
                                    get_template_part('block/category-blog-list');
                                    ?>               
                                
                                </div>
                            </div>
                            <div class="mkd-column2">
                                <div class="mkd-column-inner">
                                    <aside class="mkd-sidebar" style="transform: translateY(0px);">
                                        <div class="widget widget_apsc_widget">  
                                            <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div> 
                                           <?php get_template_part('sidebar/template-sidebar-home'); ?>
                                        </div>    
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
 /**
 * For loading post based on scrolling
 */
include(locate_template('block/ajax-pagination.php'));
?>
<?php get_footer(); ?>
