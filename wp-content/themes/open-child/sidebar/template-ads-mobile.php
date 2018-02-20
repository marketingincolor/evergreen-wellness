<?php
/**
 * Author - Akilan
 * Date - 14-07-2016
 * Purpose - For display sidebar in mobile view as first
 * hidden sm,hidden-md hidden-lg => for showing in mobile view
 */

?>
<?php if(SHOW_ADS): ?>
<div class="widget mkd-rpc-holder hidden-sm hidden-md hidden-lg">
    <div class="widget widget_categories">
        <div class="mkd-rpc-content">
            <!-- Insert Ads here -->
            <?php include(locate_template( 'ads/main_sidebar_advert_300x250.php' )); ?>
            <!-- Ads end here -->
        </div>
    </div>
</div>
<?php endif; ?>
