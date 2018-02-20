/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(".acf-checkbox-list .checkbox").click(function () {
    var select = jQuery(this);
    var currentid = select.attr('id');
    if (currentid == "acf-field-display_pages") {
        if (jQuery("#acf-field-display_pages").prop("checked") == false) {
            jQuery('.acf-checkbox-list .checkbox').attr('checked', false);
        } else {
            jQuery('.acf-checkbox-list .checkbox').attr('checked', true);
        }
    } else {
        jQuery('#acf-field-display_pages').attr('checked', false);
    }
});