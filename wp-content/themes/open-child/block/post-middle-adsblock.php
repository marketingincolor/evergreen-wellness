<?php
/**
 * Author - Akilan
 * Date  - 29-07-2016
 * Purpose -  For displaying ads based on total count of post and based on mobile & desktop view
 */
if ( is_front_page() )
{
    if ($total_post >= $post_per_section) {
        $no_of_adds = ceil($total_post / $post_per_section);
        for ($i = 1; $i <= 3; $i++) {
            /**
             * For desktop view  ads
             * id => 1 => desktop large screen
             * id => 2 => for mobile screen ads display
             */
            ?>


            <div class="fsp-ads-homepage items" id="mob_adv_row_<?php echo $i; ?>" <?php if ($i != 1) { ?> style="display:none;clear:both" <?php } else { ?> style="clear:both" <?php } ?>>
            <?php if(SHOW_ADS): ?>
                <?php include(locate_template( 'ads/home_desktop_content_970x90.php' )); ?>
                <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
            <?php endif; ?>
            </div>
            <?php
        }
    }
}
else
{
    if ($total_post >= $post_per_section) {
        $no_of_adds = ceil($total_post / $post_per_section);
        for ($i = 1; $i <= $no_of_adds; $i++) {
            /**
             * For desktop view  ads
             * id => 1 => desktop large screen
             * id => 2 => for mobile screen ads display
             */
            ?>


            <div class="fsp-ads-homepage items" id="mob_adv_row_<?php echo $i; ?>" <?php if ($i != 1) { ?> style="display:none;clear:both" <?php } else { ?> style="clear:both" <?php } ?>>
            <?php if(SHOW_ADS): ?>
                <?php include(locate_template( 'ads/home_desktop_content_970x90.php' )); ?>
                <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
            <?php endif; ?>
            </div>
            <?php
        }
    }
}
?>
