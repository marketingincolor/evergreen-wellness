<?php
// Used to dynamically create the ad zone.
$adId = 'div-gpt-ad-' . uniqid();
?>

<!-- CONTENT AD SETTINGS HAVE TO GO HERE -->
<script type='text/javascript'>
    var adSlots = {};
    googletag.cmd.push(function() {
    googletag.defineSlot('/657943151/home_desktop_content_970x90', ['fluid'], '<?php echo $adId; ?>').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().collapseEmptyDivs();
    googletag.enableServices();
});
</script>
<!-- /CONTENT AD SETTINGS HAVE TO GO HERE -->

<!-- /657943151/home_desktop_content_970x90 -->
<div class="dfpAd" id='<?php echo $adId; ?>'>
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('<?php echo $adId; ?>'); });
    </script>
</div>
