<div class="fsp-welcome-branch">
<?php if (!is_user_logged_in()): //https://www.youtube.com/watch?v=QwiBBx4C9uw ?>
<!--     <div class="fsp-branch-video">
        <a class="popup-youtube" href="https://youtube.com/watch?v=QwiBBx4C9uw"><img src="<?php #echo get_stylesheet_directory_uri(); ?>/assets/img/discover-evergreen-wellness-sidebar.jpg" alt="Discover Evergreen Wellness Video"></a>
    </div> -->
    <script>
        jQuery(document).ready(function ($) {
            $('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false,
                iframe: {
                    patterns: {
                        youtube: {
                            src: '//www.youtube.com/embed/%id%?autoplay=1&rel=0'
                        }
                    }
                }
            });
        });
    </script>
<?php endif; ?>
<?php if (current_user_can(ACCESS_VILLAGE_CONTENT)): ?>
    <div class="fsp-branch-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/the-villages-branch.jpg">
    </div>
<?php elseif (current_user_can(ACCESS_SIDEBAR_CONTENT)): ?>
    <div class="fsp-branch-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-branch.jpg">
    </div>
<?php else : ?>

<?php endif; ?>

</div>
<!--<div id="current-blog" style="display:none"><?php echo $blog_id = get_current_blog_id(); ?></div>-->
