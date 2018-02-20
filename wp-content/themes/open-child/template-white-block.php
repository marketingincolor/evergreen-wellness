<?php
/**
 * Template Name: White Block
 *
 * 
 */
get_header();?>
<div class="mkd-content">
    <div class="mkd-content-inner">
        <div class="mkd-container">
            <div class="mkd-container-inner clearfix">
                <div class="white-block-container">
                    <?php the_post_thumbnail(); ?>
                    <?php if ( !is_page('games') ) : ?>
                    <h2 class="the-title"><?php the_title(); ?></h2>
                    <?php endif; ?>
                    <div class="white-block">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php
get_footer();
?>