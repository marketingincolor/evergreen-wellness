<?php
/**
 * Modifier - Doe
 * Date - 03/23/2017
 * Purpose - Added Search Page Ads
 */
?>
<?php if(SHOW_ADS): ?>
<div class="widget mkd-rpc-holder hidden-xs">
    <div class="widget widget_categories">
        <div class="mkd-rpc-content">
            <?php include( locate_template( 'ads/search_sidebar_300x250.php' )); ?>
        </div>
    </div>
</div>
<?php endif; ?>
