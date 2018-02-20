<?php
$ssform = ( ENVIRONMENT_MODE == 0 ) ? 'ba3745d9-b382-4197-b0f2-ed587005b1b7' : '8c3dc976-1925-4b51-a875-ae8bf4d1e9b0';
get_header();?>
<style>
#your-email {
    font-size: 1em;
    line-height: 2em;
    width: 100%;
}
#your-zip {
    font-size: 1em;
    line-height: 2em;
    width: 100%;
}
#enewsletter-submit {
    background-color: #f79c49;
    color: #fff;
    border: none !important;
    font-size: 18px;
    padding: 15px 20px;
    cursor: pointer;
    display: block;
    margin:0 auto;
}

.label-text {
    padding: 10px 0;
    font-size: 14pt !important;
    line-height: 29px !important;
    overflow: hidden;
}
.submit-width {  }
</style>
<div class="mkd-content">
    <div class="mkd-content-inner">
        <div class="mkd-container">
            <div class="mkd-container-inner clearfix">
                <div class="white-block-container">
                    <div class="white-block">
                        <?php the_post_thumbnail(); ?>
                            <h1 style="text-align: center; color: #f79c49; padding: 4rem 0rem;" class="enewsletter-header2">Being healthy just got a lot more fun!</h1>
                            
                            <div class="wpb_column vc_column_container vc_col-sm-6" id="message">
                                <div class="mdk-sng-pst">
                                    <h1 style="text-transform: none;" class="enewsletter-header">Sign Up for Our Free eNewsletter</h1>
                                    <div class="mdk-sng-pst"><p>The Evergreen Wellness<sup>®</sup> eNewsletter delivers a regular dose of inspiration right to your inbox. From engaging articles and videos filled with helpful tips to invitations to exciting events, we’ll make living a healthy lifestyle easier and more fun than you ever dreamed possible.</p></div>
                                </div>
                            </div>
                        <div class="vc_row wpb_row vc_row-fluid mkd-section mkd-content-aligment-left">
                            <div class="wpb_column vc_column_container vc_col-sm-6" id="">
                                <div class="news-field-cta-form">
                                    <form action="" id="newsletter-landing-page" method="post" class="not-wpcf7-form" enctype="multipart/form-data">
                                        <div class="form-control-wrap side-alert"> </div>
                                        <input type="hidden" name="form_title" value="eNewsletter Sign Up"/>
                                        <div class="form-control-wrap your-email"><label class="label-text">Your Email*</label><input type="email" id="your-email" name="your-email" placeholder="" value="" size="40" /></div>
                                        <p style="margin-bottom: 35px;">Please add <strong>support@myevergreenwellness.com</strong> to your address book to ensure your email doesn't go into your spam folder.</p>
                                        <div class="form-control-wrap your-zip"><label class="label-text">Your Zip Code*</label><input type="text" id="your-zip" name="your-zip" value="" placeholder="" size="40" /></div>
                                        <div class="form-control-wrap your-terms" style=""><input type="checkbox" style="display:inline-block; display:hidden;" checked value="" id="news-terms" class="form-control terms" />I accept your <a href="https://myevergreenwellness.com/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a></div>
                                        <div class="form-control-wrap side-submit" style="margin-top:40px;"><input type="submit" id="enewsletter-submit" value="Submit" class="form-control submit" /></div>
                                        <div class="form-control-wrap pop-alert"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#enewsletter-submit').click(function() {
        var email = $("input#your-email").val();
        var zip = $("input#your-zip").val();
        var terms = $("input#news-terms").prop("checked");
        if ( (email == "") || (zip == "") || (terms == false) ) {
            $('.pop-alert').html( '<span style="color:#f00;">All fields are required</span>' );
            return false;
        }
        $.ajax({
            type: "POST",
            url: "",
            data: { form_title : 'eNewsletter Sign Up', your_email : email, your_zip : zip },
            complete: function() {
                __ss_noform.push(['form','newsletter-landing-page', '<?php echo $ssform; ?>']);
                __ss_noform.push(['submit', null, '<?php echo $ssform; ?>']);
            // $('#message').html( message );
            window.location.href = "https://myevergreenwellness.com/intheloop";


            }
        });
        return false;
    });
});
</script>    
<?php
get_footer();
?>