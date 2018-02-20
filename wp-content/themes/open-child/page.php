<?php $sidebar = discussion_sidebar_layout(); ?>
<?php get_header(); ?>
<?php if (is_page('live-events')) {
	$container_class = "live-events-container";
}
else {
	$container_class = "";
}
?>
	<?php discussion_get_title(); ?>
	<?php get_template_part('slider'); ?>
	<div class="mkd-container <?php echo $container_class; ?>">
		<?php do_action('discussion_after_container_open'); ?>
		<div class="mkd-container-inner clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
					<?php the_content(); ?>
					<?php do_action('discussion_page_after_content'); ?>
				<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
					<div <?php echo discussion_sidebar_columns_class(); ?>>
						<div class="mkd-column1 mkd-content-left-from-sidebar">
							<div class="mkd-column-inner">
								<?php the_content(); ?>
								<?php do_action('discussion_page_after_content'); ?>
							</div>
						</div>
						<div class="mkd-column2">
							<?php
							if(is_page('live-events')) {
								get_template_part('sidebar/template-sidebar-live-events');
							}
							else {
								get_sidebar();
							}
							?>
						</div>
					</div>
				<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
					<div <?php echo discussion_sidebar_columns_class(); ?>>
						<div class="mkd-column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="mkd-column2 mkd-content-right-from-sidebar">
							<div class="mkd-column-inner">
								<?php the_content(); ?>
								<?php do_action('discussion_page_after_content'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php do_action('discussion_before_container_close'); ?>
	</div>
<?php get_footer(); ?>