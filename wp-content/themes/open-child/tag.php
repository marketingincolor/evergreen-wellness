<?php
$blog_archive_pages_classes = discussion_blog_archive_pages_classes(discussion_get_author_blog_list());
$blog_page_range = discussion_get_blog_page_range();
$max_number_of_pages = discussion_get_max_number_of_pages();

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }
?>
<?php get_header(); ?>
<?php discussion_get_title(); ?>
<div class="<?php echo esc_attr($blog_archive_pages_classes['holder']); ?>">
<?php do_action('discussion_after_container_open'); ?>
	<div class="<?php echo esc_attr($blog_archive_pages_classes['inner']); ?>">
	<div class="mkd-container">
		<?php do_action('discussion_after_container_open'); ?>
		<div class="mkd-container-inner clearfix">
			<div class="mkd-container">
				<?php do_action('discussion_after_container_open'); ?>
				<div class="mkd-container-inner">
					<div class="mkd-two-columns-75-25 mkd-content-has-sidebar clearfix">
						<div class="mkd-column1 mkd-content-left-from-sidebar">
							<div class="mkd-column-inner">	
								<div class="mkd-search-page-holder">
									<div class="mkd-layout-title-holder">
										<span class="mkd-section-title-holder clearfix ">
										    <span class="mkd-st-title">Archive</span>
										</span>
									</div>

									<?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<div class="mkd-post-content">
												<div class="mkd-pt-two-item mkd-post-item">
													<div class="mkd-pt-two-item-inner">
														<?php if(has_post_thumbnail()){ ?>
															<div class="mkd-pt-two-image-holder">
																<?php
																discussion_post_info_category(array(
																	'category' => 'yes'
																)); ?>
																<a itemprop="url" class="mkd-pt-two-link mkd-image-link" href="<?php echo esc_url(get_permalink()); ?>" target="_self">
																	<?php
																		echo discussion_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,'273','171');
																	?>
																</a>
															</div>
														<?php } ?>
														<div class="mkd-pt-two-content-holder">
															<div class="mkd-pt-two-content-holder-inner">
																<div class="mkd-pt-two-content-top-holder">
																	<div class="mkd-pt-two-content-top-holder-cell">
																		<h4 class="mkd-pt-two-title">
																			<a itemprop="url" class="mkd-pt-link" href="<?php echo esc_url(get_permalink()) ?>" target="_self">
																				<?php the_title(); ?>
																			</a>
																		</h4>
																		<div class="mkd-pt-two-excerpt">
																			<?php discussion_excerpt('20'); ?>
																		</div>
																	</div>
																</div>
																<div class="mkd-pt-two-content-bottom-holder">
																	<div class="mkd-pt-info-section clearfix">
																		<div>
																			<?php 
																			// discussion_post_info_share(array(
																			// 	'share' => 'yes'
																			// ));
																			// discussion_post_info_comments(array(
																			// 	'comments' => 'yes'
																			// ));
																			?>
																			<div class="mkd-post-info-count"><span class="mkd-post-count-number"><?php echo discussion_get_post_count_views($post->ID); ?></span> <span class="mkd-post-count-text"><?php esc_html_e('Views','discussionwp'); ?></span></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</article>
									<?php endwhile; ?>
									<?php
										if(discussion_options()->getOptionValue('pagination') == 'yes') {
											discussion_pagination($max_number_of_pages, $blog_page_range, $paged);
										}
									?>
									<?php else: ?>
									<div class="entry">
										<p><?php esc_html_e('No posts were found.', 'discussionwp'); ?></p>
									</div>
									<?php endif; ?>
								</div>
								<?php do_action('discussion_page_after_content'); ?>		
							</div>
						</div>
						<div class="mkd-column2">
							<?php get_template_part('sidebar/template-sidebar-tag'); ?>
						</div>
					</div>
				<?php do_action('discussion_before_container_close'); ?>
				</div>
			</div>
		</div>
		<?php do_action('discussion_before_container_close'); ?>
	</div>
	</div>
<?php do_action('discussion_before_container_close'); ?>
</div>
<?php get_footer(); ?>