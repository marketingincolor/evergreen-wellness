<?php do_action('discussion_before_site_logo');?>

<div class="mkd-logo-wrapper">
    <a href="<?php echo esc_url(home_url('/')); ?>" <?php discussion_inline_style($logo_styles); ?>>
        <img class="mkd-normal-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/egw-logo.png" alt="<?php esc_html_e('logo','discussionwp'); ?>"/>
        <?php if(!empty($logo_image_dark)){ ?><img class="mkd-dark-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/egw-logo.png" alt="<?php esc_html_e('dark logo','discussionwp'); ?>"/><?php } ?>
        <?php if(!empty($logo_image_light)){ ?><img class="mkd-light-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/egw-logo.png" alt="<?php esc_html_e('light logo','discussionwp'); ?>"/><?php } ?>
    </a>
</div>
<?php
$location = get_egw_member_location();
if ( $location == THE_VILLAGES_NAME ) { $display_location = 'The Villages<sup>&reg;</sup>'; }
if ( $location == BALTIMORE_NAME ) { $display_location = $location; }
if ( ($location == THE_VILLAGES_NAME) || ($location == BALTIMORE_NAME) ) {
	$current_site = get_current_site();?>
<div class="sub-site-logo">
    <a href=""><h2><?php echo $display_location; ?></h2></a>
</div>
<?php
} 
?>

<?php do_action('discussion_after_site_logo'); ?>