<?php 
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //if (current_user_can(ACCESS_VILLAGE_CONTENT)): 
?>
<?php if (isset($_COOKIE['sswp-contact']) || current_user_can(ACCESS_VILLAGE_CONTENT)): ?>
<div class="widget mkd-rpc-holder foot-cta slideshowlink">
<?php else: ?>
<div class="widget mkd-rpc-holder foot-cta">
<?php endif; ?>
    <div class="news-field-row clearfix egw-show-for-large-up" id="form-container-foot">
        <a href="/jaimes-4-pack-sampler"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/4-pack-footer-ad-1-video.jpg" alt="Get 4 free 8-minute workouts"></a>
    </div>
</div>
<?php $ssform = ( ENVIRONMENT_MODE == 0 ) ? 'ba3745d9-b382-4197-b0f2-ed587005b1b7' : '8c3dc976-1925-4b51-a875-ae8bf4d1e9b0'; ?>
<script type='text/javascript'>
    jQuery(document).ready(function($) {
        var message = '<h3>Welcome!</h3><h4>Please check your email for more information.<br />We hope you enjoy Evergreen Wellness<sup>&reg;</sup>.</h4><h5>If you don\'t see an email from us, please check your spam folder.</h5>';
        $('#news-foot-submit').click(function() {
            var page_url = $("page-url").val();
            var email = $("input#foot-your-email").val();
            var zip = $("input#foot-your-zip").val();
            var terms = $("input#news-foot-terms").prop("checked");
            if ( (email == "") || (zip == "") || (terms == false) ) {
                $('.foot-alert').html( '<span style="color:#f00;">All fields are required</span>' );
                return false;
            }
            $.ajax({
                type: "POST",
                url: "",
                data: { form_title : 'Newsletter CTA', your_email : email, your_zip : zip, page_url : page_url  },
                complete: function() {
                    __ss_noform.push(['form','foot-news-form', '<?php echo $ssform; ?>']);
                    __ss_noform.push(['submit', null, '<?php echo $ssform; ?>']);
                    $('#form-container-foot').html( message );
                }
            });
            return false;
        });
    });
</script>
<?php //endif; ?>