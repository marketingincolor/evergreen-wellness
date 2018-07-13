<?php //if (current_user_can(ACCESS_VILLAGE_CONTENT)):
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 ?>
<?php if ( isset($_COOKIE['sswp-contact']) || current_user_can(ACCESS_VILLAGE_CONTENT) ): ?>
<div class="widget mkd-rpc-holder slideshowlink">
<?php else: ?>
<div class="widget mkd-rpc-holder">
<?php endif; ?>
    <div class="news-field-row" id="form-container-side">
        <a href="/jaimes-4-pack-sampler"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/4-pack-side-bar-ad.jpg" alt="get 4 free 8-minute workouts"></a>
    </div>
</div>
<?php $ssform = ( ENVIRONMENT_MODE == 0 ) ? 'ba3745d9-b382-4197-b0f2-ed587005b1b7' : '8c3dc976-1925-4b51-a875-ae8bf4d1e9b0'; ?>
<script type='text/javascript'>
    jQuery(document).ready(function($) {
        var message = '<h3>Welcome!</h3><h4>Please check your email for more information. We hope you enjoy Evergreen Wellness<sup>&reg;</sup>.</h4><h5>If you don\'t see an email from us, please check your spam folder.</h5>';
        $('#news-side-submit').click(function() {
            var page_url = $("page-url").val();
            var email = $("input#your-email").val();
            var zip = $("input#your-zip").val();
            var terms = $("input#news-side-terms").prop("checked");
            if ( (email == "") || (zip == "") || (terms == false) ) {
                $('.side-alert').html( '<span style="color:#f00;">All fields are required</span>' );
                return false;
            }
            $.ajax({
                type: "POST",
                url: "",
                data: { form_title : 'Newsletter CTA', your_email : email, your_zip : zip, page_url : page_url },
                complete: function() {
                    __ss_noform.push(['form','side-news-form', '<?php echo $ssform; ?>']);
                    __ss_noform.push(['submit', null, '<?php echo $ssform; ?>']);
                    $('#form-container-side').html( message );
                }
            });
            return false;
        });
    });
</script>
<?php //endif; ?>