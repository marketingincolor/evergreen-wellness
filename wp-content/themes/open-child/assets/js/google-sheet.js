/**
 * Author: Doe
 * Date: 02/08/2017
 * Purpose: Send registration data to google sheets
 */

// Bind to the submit event of our form
jQuery("#egw-registration").submit(function(event){

    // setup some local variables
    var form = jQuery(this);

    // Let's select and cache all the fields
    var inputs = form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = form.serialize();

    // Fire off the request to /form.php
    request = jQuery.ajax({
        url: "https://script.google.com/macros/s/AKfycbwXBDBykNrWzljtSqCImHp9zVCzHg46dbLRU8idbYJCJ6PWXtg/exec",
        type: "post",
        data: serializedData
    });

});