<?php
/**
 * Modifier - Doe
 * Date - 01/23/2018
 * Purpose - Ads
 */
?>
<?php if(SHOW_ADS): ?>
<div class="widget mkd-rpc-holder hidden-xs">
    <div class="widget widget_categories">
        <div class="mkd-rpc-content">
            <!-- Insert Ads here -->
            <?php include(locate_template( 'ads/main_sidebar_advert_300x250.php' )); ?>
            <!-- Ads end here -->
        </div>
    </div>
</div>
<?php endif; ?>
