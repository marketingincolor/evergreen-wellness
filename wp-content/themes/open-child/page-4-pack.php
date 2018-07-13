<?php 
  /* Template Name: Jaimes 4-Pack */ 
  get_header('shopify');

  if (is_page(8687)) {
   	get_template_part('shopify-assets/template-parts/jaimes-4-pack');
  }else if (is_page(8752)) {
  	get_template_part('shopify-assets/template-parts/danis-4-pack');
  } 
?>



<!-- Sharpspring Form Tracking Code -->
<script type="text/javascript">
  
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QMYANU21K.marketingautomation.services/webforms/receivePostback/MzawMDG2NDQxAwA/']);
    
    if (location.href.includes('jaimes-4-pack')) {

      __ss_noform.push(['form','takeover-form', '7e9cd5dc-4972-43b7-a96e-e07011db1198']);

    }else if(location.href.includes('dani-4-pack')){
      
      __ss_noform.push(['form','takeover-form', 'f7c7b936-bd1d-443e-b454-52f5eeef19a4']);

    }
    
    __ss_noform.push(['submitType', 'manual']);
</script>
<script type="text/javascript" src="https://koi-3QMYANU21K.marketingautomation.services/client/noform.js?ver=1.24" ></script>
<!-- End Sharpspring Form Tracking Code -->

<?php get_footer('shopify'); ?>