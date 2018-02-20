<?php
/** Newesletter CTA 
* Cookie data set via PHP and manipulated with both PHP and JS as needed
*
* SharpSpring DEV code: ba3745d9-b382-4197-b0f2-ed587005b1b7
* SharpSpring PROD code: 8c3dc976-1925-4b51-a875-ae8bf4d1e9b0
* 
*/
$ssform = ( ENVIRONMENT_MODE == 0 ) ? 'ba3745d9-b382-4197-b0f2-ed587005b1b7' : '8c3dc976-1925-4b51-a875-ae8bf4d1e9b0';
$cta = (!isset($_COOKIE['ew-cta'])) ? setcookie('ew-cta', '0', time() * 20, '/') : $_COOKIE['ew-cta'];
$cnt = (!isset($_COOKIE['ew-cta-cnt'])) ? setcookie('ew-cta-cnt', '0', time() * 20, '/') : $_COOKIE['ew-cta-cnt'] ;
$viewed = (!isset($_COOKIE['ew-cta-viewed'])) ? setcookie('ew-cta-viewed', 'no', time() * 20, '/') : $_COOKIE['ew-cta-viewed'];
if ( is_singular( array( 'post', 'videos' ) ) ) {
    setcookie('ew-cta-cnt', isset($_COOKIE['ew-cta-cnt']) ? ++$_COOKIE['ew-cta-cnt'] : 1, time() * 20, '/');
}
if ($_COOKIE['ew-cta-cnt'] >= 3) {
    setcookie('ew-cta-cnt', '3', time() * 20, '/');
}
?>

<script>
jQuery(document).ready(function ($) {
    var pop = <?php echo $cnt; ?>;
    var seen = "<?php echo $viewed; ?>";
    // display modal dialog when cnt cookie value > 3, then set viewed cookie value to yes
    if (( pop == 3 ) && ( seen == "no") ) {
        $.magnificPopup.open({
            items: {
                src: '<div class="white-popup-block"><div class="news-field-row clearfix" id="form-container-pop"><h3 class="news-field-cta-title">Get FREE Wellness Tips Delivered!</h3><div class="news-field-cta-form"><form action="" id="pop-news-form" method="post" class="not-wpcf7-form"><div class="form-control-wrap pop-alert"><input id="page-url" type="hidden" name="page_url" value="<?php echo $url; ?>" /></div><div class="form-control-wrap your-email"><input type="email" id="pop-your-email" name="your-email"placeholder=" EMAIL ADDRESS" value="" size="40" /></div><div class="form-control-wrap your-zip"><input type="text" id="pop-your-zip" name="your-zip" placeholder=" ZIP CODE" value="" size="40" /></div><div class="form-control-wrap your-terms"><input type="checkbox" checked value="terms" id="news-pop-terms" class="form-control terms" />I accept your <br/><a href="https://myevergreenwellness.com/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a></div><input type="submit" id="news-pop-submit" value="Sign Me Up!" class="form-control submit" /></form></div><span class="msg">I\'ll do it later. <a id="txt-close">I just want to browse your site for now.</a></span></div></div>',
                type: 'inline'
            }
        });
        var a = new Date(<?php echo time() * 20; ?>000);
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        var year = a.getFullYear();
        var month = months[a.getMonth()];
        var date = a.getDate();
        var hour = a.getHours();
        var min = a.getMinutes();
        var sec = a.getSeconds();
        var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
        document.cookie = "ew-cta-viewed=yes; path=/; expires="+time+";" ;
    }
    $('#txt-close').click( function(e) {e.preventDefault(); $.magnificPopup.close(); } );
    var message = '<h3>Welcome!</h3><h4>Please check your email for more information. We hope you enjoy Evergreen Wellness<sup>&reg;</sup>.</h4><h5>If you don\'t see an email from us, please check your spam folder.</h5>';
    $('#news-pop-submit').click(function() {
        var page_url = $("page-url").val();
        var email = $("input#pop-your-email").val();
        var zip = $("input#pop-your-zip").val();
        var terms = $("input#news-pop-terms").prop("checked");
        if ( (email == "") || (zip == "") || (terms == false) ) {
            $('.pop-alert').html( '<span style="color:#f00;">All fields are required</span>' );
            return false;
        }
        $.ajax({
            type: "POST",
            url: "",
            data: { form_title : 'Newsletter CTA', your_email : email, your_zip : zip, page_url : page_url },
            complete: function() {
                __ss_noform.push(['form','pop-news-form', '<?php echo $ssform; ?>']);
                __ss_noform.push(['submit', null, '<?php echo $ssform; ?>']);
                $('#form-container-pop').html( message );
            }
        });
        return false;
    });
});
</script>
<?php 
    $place = basename(get_permalink());
    //if ( ($place != 'login') || ($place != 'register') || ($place != 'welcome-survey') ) {
    $array = array('login', 'register', 'welcome-survey');
    if (!in_array($place, $array, TRUE)) {
        do_shortcode('[ssnfinclude placement="pop"]');
        do_shortcode('[cfdb-save-form-post]');
    }
?>