<?php
/*
 * Author - MIC
 * Date - 13-06-2016
 * Purpose - For displaying specific pages and landing pages with a white background
 * Template Name: White Background
 *
*/
$custom_fields = get_post_custom();
$hide_title = $custom_fields['hide_title'];
$center_page = $custom_fields['center_page'];
$centered = (is_page('register-success')) ? 'text-align:center;' : '' ;
$listed = ( $hide_title || is_page('login') || is_page('sweepstakes-terms-conditions') || is_page('register') || is_page('shipshape')) ? 'true' : null;
$sidebar = discussion_sidebar_layout(); 
$mkd_content_padding = ( is_page('how-to-get-involved') || is_page('storytellers') || is_page('welcome-survey')) ? 'padding-bottom: 0;' : 'padding-bottom:75px';
$story_form = is_page('storytellers') ? 'width:67%; margin:auto;' : '';
?>
<?php get_header(); ?>
<style>
/*------------------------------------------------------------------------------
 * MIC CUSTOM STYLES
 *
 *  1.0.0 NORMALIZE PAGE STYLES
 *  ---1.0.1 HOW TO GET INVOLVED
 *  ---1.0.2 REGISTER
 *  ---1.0.3 LOGIN
 *  ---1.0.4 BUTTONS
 *  2.0 SMALL MEDIA QUERY
 *  3.0 LARGE MEDIA QUERY
 * 
 * -----------------------------------------------------------------------------
 * 1.0.0 NORMALIZE PAGE STYLE
 * -----------------------------------------------------------------------------
 */
.page-template-template-page-white-bgnd p { font-family: 'Roboto', sans-serif; font-weight: normal; color: #6c6b6b; font-size: 1em; }
.page-template-template-page-white-bgnd h1 { font-family: 'Roboto', sans-serif; font-weight:bold; color:#6c6b6b; padding-top:1em; }
.page-template-template-page-white-bgnd h2 { font-family: 'Roboto', sans-serif; font-weight:bold; color:#6c6b6b; font-size:1.733em; padding-top:1em; }
.page-template-template-page-white-bgnd h3 { font-family: 'Roboto', sans-serif; font-weight:bold; color:#6c6b6b; font-size:1.733em; padding-top:1em; }
.page-template-template-page-white-bgnd h4 { font-family: 'Roboto', sans-serif; font-weight:bold; color:#6c6b6b; font-size:1.4em; padding-top:1em; }
.page-template-template-page-white-bgnd { background-color: #ffffff; }
.page-template-template-page-white-bgnd .mkd-title-breadcrumb-holder { display:none !important; }
.page-template-template-page-white-bgnd .mkd-content { background-color: #ffffff; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .mkd-container-inner {<?php echo $centered; ?> }
.page-template-template-page-white-bgnd .mkd-title .mkd-title-holder { height:auto; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .refer-a-friend-list ul li { list-style: disc !important; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .remove-margins { margin: 0px !important; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .disclosure-text { font-size: .7em; }
.page-template-template-page-white-bgnd .large-orange-header { 
	text-align: center; 
	color: #f79c49; 
	font-size:3.200em; 
	font-family: 'Roboto', sans-serif; 
	font-weight:bold;
	padding: 15% 10% 0%; 
}
.page-template-template-page-white-bgnd .large-orange-header-survey { 
	text-align: center; 
	color: #f79c49; 
	font-size:3.200em; 
	font-family: 'Roboto', sans-serif; 
	font-weight:bold;
}
.page-template-template-page-white-bgnd .mkd-content .mkd-container .page-feature-image img { 
	border-top-right-radius: 60px; 
	border-bottom-left-radius: 60px;  
}
.page-template-template-page-white-bgnd .smcx-embed { width: 100% !important; }
.page-template-template-page-white-bgnd .smcx-embed>.smcx-iframe-container { max-width: 100% !important; }
.smcx-embed>.smcx-embed-footer { display:none !important; }
.page-template-template-page-white-bgnd .smcx-embed { height: 100% !important; max-width:none !important; }
.smcx-embed { border: none !important; }
.smcx-embed > .smcx-iframe-container { height: 2950px !important; }
.survey-page .survey-page-button.done-button { background-color: #f99d3e !important; }

.survey-page 
.survey-page-button:hover { box-shadow:none !important; }


/**
 * -----------------------------------------------------------------------------
 * 1.0.1 HOW TO GET INVOLVED
 * -----------------------------------------------------------------------------
 */
.page-template-template-page-white-bgnd .page-id-2981 h4 { font-size: 1.4em !important; padding-top: .5em; font-weight:bold; font-color: #6c6b6b; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .get-involved-button { 
	background-color: #f79c49; 
	color: white; 
	padding: .5em !important; 
	text-align: center; 
	font-weight: 500;
	display:inline-block;
}
.page-template-template-page-white-bgnd .mkd-content .mkd-container .get-involved-button a,.get-involved-button a:hover { color: white; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .story-box { height: 20%; margin-bottom: 1.5em; }
/**
 * -----------------------------------------------------------------------------
 * 1.0.2 REGISTER
 * -----------------------------------------------------------------------------
 */
.page-template-template-page-white-bgnd .mkd-content .mkd-container .join-content { padding: 0% 21% 0% 7%; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .join-content ul li { list-style: disc !important; }
/**
 * -----------------------------------------------------------------------------
 * 1.0.3 LOGIN
 * -----------------------------------------------------------------------------
 */
.page-template-template-page-white-bgnd .mkd-content .mkd-container .login-container { background-color: #edebeb; }

/**
 * -----------------------------------------------------------------------------
 * 1.0.4 Buttons
 * -----------------------------------------------------------------------------
 */

.orange_buttons {
    /* border: 1px solid #f79d49; */
    border: 1px solid;
    border-color: #de8d41 #f79d49 #f79d49;
    background-color: #f79d49;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f79d49), to(#f79d49));
    background-image: -moz-linear-gradient(top, #f79d49, #f79d49);
    background-image: linear-gradient(top, #f79d49, #f79d49);
    padding: 8px 5px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    color: white;
    font-size: 14px;
    text-decoration: none;
    vertical-align: middle;
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    display: inline-block;
    width: 357px !important;
}
.orange_buttons:hover {
    background-color: #f79d49;
    background-image: none;
    color: white;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    -o-transition: all 0.1s linear;
    transition: all 0.1s linear;
}

/**
 * -----------------------------------------------------------------------------
 * 2.0 SMALL MEDIA QUERY
 * -----------------------------------------------------------------------------
 */
@media only screen 
and (min-device-width : 320px) { 

/*Normalize*/
.page-id-3702 h1 { text-align:center; font-size: 1.5em;}

/*Pretty Featured Images For Small Devices */
.page-template-template-page-white-bgnd .mkd-content .mkd-container .page-feature-image img {
    border-top-right-radius: 25px;
    border-bottom-left-radius: 25px;
}

/*Refer Friend Join Page*/
.page-template-template-page-white-bgnd .mkd-content .mkd-container .join-page-mobile { display:flex; flex-direction: column-reverse; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .hide-for-small { display:none; }

#refer-friend-text { text-align: center; }
.welcome-survey-p-padding { padding: 0% 0% !important; }

.page-template-template-page-white-bgnd .large-orange-header-survey { font-size: 1.5em; }
.modern-browser .question-matrix-table.reflow .matrix-row-label { padding-top:1em !important; }

}
/*
 * -----------------------------------------------------------------------------
 * 3.0 LARGE MEDIA QUERY
 * -----------------------------------------------------------------------------
 */
@media only screen 
and (min-device-width : 1000px) { 
.page-id-3702 h1 { font-size:2em; text-align:center; font-size:2em; }
.join-page-mobile { display: initial !important; }
.hide-for-large { display:none; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .hide-for-small { display:initial !important; }
.page-template-template-page-white-bgnd .large-orange-header-survey { font-size: 2em; }
.page-template-template-page-white-bgnd .mkd-content .mkd-container .page-feature-image img {
    border-top-right-radius: 60px;
    border-bottom-left-radius: 60px;
}
/*
 * Page: Refer A Friend
 * Media Query: >1000px
 */
#refer-friend-text { padding: 0em 3em; }
#refer-friend-form { padding: 0em 3em; }
#refer-friend-text h3 { text-align:left; }
#refer-friend-text p { text-align:left; }
.get-involved-button { 
	background-color: #f79c49; 
	color: white; 
	padding: .5em !important; 
	text-align: center; 
	font-weight: 500;
	display: inline-block; 
}
.story-box { height:33.3%; margin-bottom:3em; }
.storytellers-form {
    width: 67% !important;
    margin: auto;
}
.storytellers { <?php echo $story_form; ?> }

/*
 * Page: Welcome Survey
 * Media Query: >1000px
 */
.welcome-survey-p-padding { padding: 0% 3% !important; }

/*Formstack - Welcome Survey*/
#label45573915 > div > label { padding: 7px 0px; }
#label45574099 > div > label { padding: 7px 0px; }
#label45574563 > div > label { padding: 7px 0px; }
}

/**
 * -----------------------------------------------------------------------------
 * END CUSTOM STYLES
 * -----------------------------------------------------------------------------
 */
</style>
	<?php discussion_get_title(); ?>
	<?php get_template_part('slider'); ?>
	<div class="mkd-container">
		<?php do_action('discussion_after_container_open'); ?>
		<div class="mkd-container-inner clearfix">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(($sidebar == 'default')||($sidebar == '')) : ?>

					<?php if ( has_post_thumbnail() ) : ?>
						<div class="page-feature-image">
							<?php the_post_thumbnail('full'); ?>
						</div>
					<?php endif; ?>
					
				

					<?php

						if ($listed) {

						}
						else {
							the_title( '<h2 class="page-title">', '</h2>' );
						}

						the_content();
						//do_action('discussion_page_after_content');
						?>


				<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
					<div <?php echo discussion_sidebar_columns_class(); ?>>
						<div class="mkd-column1 mkd-content-left-from-sidebar">
							<div class="mkd-column-inner">

							<?php if ( has_post_thumbnail() ) : ?>
								<div class="page-feature-image">
									<?php the_post_thumbnail('full'); ?>
								</div>
							<?php endif; ?>

								<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
								<?php the_content(); ?>
								<?php //do_action('discussion_page_after_content'); ?>
							</div>
						</div>
						<div class="mkd-column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
					<div <?php echo discussion_sidebar_columns_class(); ?>>
						<div class="mkd-column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="mkd-column2 mkd-content-right-from-sidebar">
							<div class="mkd-column-inner">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="page-feature-image">
										<?php the_post_thumbnail('full'); ?>
									</div>
								<?php endif; ?>

								<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
								<?php the_content(); ?>
								<?php //do_action('discussion_page_after_content'); ?>
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
