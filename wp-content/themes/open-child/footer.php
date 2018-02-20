<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$member_location = get_egw_member_location();
$tag_not_in = egw_tag_not_in($member_location);
list($post_per_section,$post_type)=scroll_loadpost_settings();
?>

<!-- Send Stories -->
<?php get_template_part('forms/send-stories' ); ?>
<!-- /Send Stories  -->

<!-- Newsletter Popup -->
<?php get_template_part('forms/popup-newsletter'); ?>
<!-- /Newsletter Popup -->

<?php 
    $place = basename(get_permalink());
    //if ( ($place != 'login') || ($place != 'register') || ($place != 'welcome-survey') ) {
    $array = array('login', 'register', 'welcome-survey');
    if (!in_array($place, $array, TRUE)) {
        do_shortcode('[ssnfinclude placement="pop"]');
        do_shortcode('[cfdb-save-form-post]');
    }
?>
<?php if(get_option('egw_fb_comments_api_key')) : ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=<?php echo get_option('egw_fb_comments_api_key'); ?>&version=v2.3";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php endif; ?>
<input type="hidden" id="accountvalid" value="test"/>
<input type="hidden" name="user_primary_site" id="user_primary_site" value="<?php echo (is_user_logged_in() ? '0' : '1');//echo); ?>">
<input type="hidden" name="is_user_login" id="is_user_login" value="<?php echo is_user_logged_in(); ?>" >
<input type="hidden" name="member_location" id="member_location" value="<?php echo $member_location; ?>" >
<input type="hidden" name="tag_not_in" id="tag_not_in" value="<?php var_dump($tag_not_in); ?>" >
<div class="white-popup-block user-session-block mfp-hide" id="site_user_validation_popup">
    <div class="find-a-branch-container">
        <div class="fs-custom-select-container fs-custom-session-container">
            <div class="egw-homesite egw-homesite-session-popup" id="site_user_validation_popup_message">
            </div>
            <div class="fs-custom-select">
            </div>
        </div>
    </div>
</div>
<?php //do_shortcode('[cfdb-save-form-post]'); ?>
<?php discussion_get_footer(); ?>