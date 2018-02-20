<?php #get_template_part( 'sidebar/template-welcome-to-villages', 'page' ); ?>
<?php get_template_part( 'sidebar/template-newsletter-form', 'page' ); ?>
<?php if (!is_user_logged_in()): ?>
<!--<div class="widget">
	<a href="https://www.youtube.com/c/MyEvergreenWellness?sub_confirmation=1" target="_blank"><img src="<?php #echo get_stylesheet_directory_uri(); ?>/assets/img/youtube-sidebar-evergreen-wellness.jpg" alt="Evergreen Wellness YouTube Channel"></a>
</div>-->
<div class="widget">
<!-- 	<a href="https://myevergreenwellness.com/nutrition/dani-spies-recipes/healthy-eating-expert-dani-spies/" target="_blank"><img src="<?php #echo get_stylesheet_directory_uri(); ?>/assets/img/dani-spies-evergreen-wellness.jpg" alt="Healthy Eating Expert Dani Spies"></a> -->

	<?php if(SHOW_ADS): ?>
	<div class="widget mkd-rpc-holder hidden-xs hidden-sm hidden-md">
	    <div class="widget widget_categories">
	        <div class="mkd-rpc-content">
	            <!-- Insert Ads here -->
				<?php include(locate_template('ads/home_desktop_elevator_303x662.php')); ?>
				<!-- /Insert Ads here -->
	        </div>
	    </div>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php get_template_part( 'sidebar/template-ads', 'page' ); ?>
<?php get_sidebar(); ?>
<?php get_template_part( 'sidebar/template-local-events', 'page' ); ?>
<?php //get_template_part( 'sidebar/template-local-news-stories', 'page' ); ?>
<?php //get_template_part( 'sidebar/template-recent-comments', 'page' ); ?>
<?php //get_template_part( 'sidebar/template-featured-personalities', 'page' ); ?>
