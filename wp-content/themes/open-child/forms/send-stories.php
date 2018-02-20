<?php ?>
<script>
// Email form validation
function validate_popupform() {
    var valreturn = 0;
    var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
    var emailaddress = document.selectedArticleform.emailaddress.value,
            comments = document.selectedArticleform.comments.value;
    document.getElementById("errorBox-email").innerHTML = " ";
    document.getElementById("errorBox-comments").innerHTML = " ";
    if (emailaddress == "")
    {
        document.selectedArticleform.emailaddress.focus();
        document.getElementById("errorBox-email").innerHTML = "Enter the email address";
        return false;
    } else {
        //this validates all the emails that are seperated by a comma
        var emailArray = emailaddress.split(",");
        for (i = 0; i <= (emailArray.length - 1); i++) {
            if (checkEmail(emailArray[i])) {
                //Do what ever with the email.
            } else {
                document.getElementById("errorBox-email").innerHTML = "Send to one email at a time.";
                return false;
            }
        }

    }
    if (comments == "")
    {
        document.selectedArticleform.emailaddress.focus();
        document.getElementById("errorBox-comments").innerHTML = "A personal message from you is required.";
        return false;
    }
    return true;
}
//this validates all the emails that are seperated by a comma
function checkEmail(email) {
    var regExp = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9\-\.])+\.([A-Za-z]{2,4})$/;
    return regExp.test(email);
}


jQuery(document).on('click', '#myevergreen', function () {
    if (jQuery("#findavillage").val() == "") {
        return false;
    } else {
        window.open(jQuery("#findavillage").val(), "_self");
        jQuery('.f-newsletter').magnificPopup('close');


    }
});
//pop email - cancel button
jQuery(document).on('click', '.fsp_cancel_btn_pop', function () {
    jQuery.magnificPopup.close();
    jQuery("#savedArticles").trigger('reset');
    return false;
});
//pop email - close button
jQuery(document).on('click', '.mfp-close', function () {
    jQuery.magnificPopup.close();
    //location.reload();
    jQuery("#savedArticles").trigger('reset');
    return false;
});
//pop email - send button
jQuery('#successmsg').hide();
jQuery(document).on('click', '#emailsend', function () {
    var isValidated = validate_popupform();

    if (isValidated == true) {
        var name = jQuery("#enquiryForm").val();
        var dataString = jQuery('#enquiryForm').serialize();


        jQuery.ajax({
            type: "POST",
            url: "<?php echo bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php",
            data: {
                action: 'saved_articles_popup_email',
                emaildata: dataString,
            },
            success: function (result) {
                jQuery('.form-group').hide();
                jQuery('#successmsg').show();
                jQuery('#successmsg>h3').html(result);
            }
        });


    }
    return false;
});
//pop email - selected article close button
jQuery(document).on('click', '.ion-android-close', function () {
    var x;
    if (confirm("Do you want to remove this article?") == true) {
        jQuery('#element_' + this.id).remove();
    } else {

    }
});

jQuery(document).ready(function () {
    jQuery('#openEnquiryForm').click(function () {
        //console.log(jQuery('#savedArticles').serialize());
        //validation

        var values = jQuery('input:checkbox:checked.save-article-checkbox').map(function () {
            return this.value;
        }).get(); // ["18", "55", "10"]

        if (values.length == 0) {
            alert('You must check at least one box!');
            return false; // The form will *not* submit
        } else { //alert(values.length);
            jQuery.ajax({
                type: "POST",
                url: "<?php echo bloginfo('wpurl'); ?>/wp-admin/admin-ajax.php",
                data: {
                    action: 'saved_articles_load_popup',
                    offset: jQuery('#savedArticles').serialize(),
                },
                success: function (data) {
                    jQuery.magnificPopup.open({
                        type: 'inline',
                        items: {
                            src: data
                        },
                        closeOnBgClick: false,
                        callbacks: {
                            open: function () {
                                jQuery(window).scroll(function () {
                                    return false;
                                });
                                jQuery('html, body').addClass('mfp-overflow');
                                jQuery('#enquiryForm').find('.fsp-saved-articles-pop').getNiceScroll().show();
                                jQuery('#enquiryForm').find('.fsp-saved-articles-pop').niceScroll({cursorcolor: "#e8882e", autohidemode: false});
                                jQuery('#enquiryForm').find('.fsp-saved-articles-pop').getNiceScroll().hide();
                            },
                            close: function () {
                                jQuery(window).unbind('scroll');
                                jQuery('html, body').removeClass('mfp-overflow');
                                jQuery('#enquiryForm').find('.fsp-saved-articles-pop').getNiceScroll().hide();
                            }
                        }
                    });
                }
            });
        }
    });

    //cancel button 
});
</script>