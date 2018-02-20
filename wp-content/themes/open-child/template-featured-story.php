<?php 
/* Template Name: Featured Story */
?>
<style>
.text-center { text-align: center; }
@font-face {
  font-family: 'boston-traffic';
  src: url('<?php echo get_stylesheet_directory_uri() . '/assets/fonts/Boston-Traffic/boston_traffic.ttf'; ?>'); 
}
@font-face {
    font-family: 'menlo';
    src: url('<?php echo get_stylesheet_directory_uri() . '/assets/fonts/Menlo-Regular.ttf'; ?>');
}
@font-face {
    font-family: 'zilla-slab';
    src: url('<?php echo get_stylesheet_directory_uri() . '/assets/fonts/zilla-slab/ZillaSlab-Regular.ttf';?>');
}
@font-face {
    font-family: 'zilla-slab';
    src: url('<?php echo get_stylesheet_directory_uri() . '/assets/fonts/zilla-slab/ZillaSlab-Light.ttf;'?>');
    font-style: normal;
    font-weight: 700;
}
@font-face {
    font-family: 'zilla-slab';
    src: url("'<?php echo get_stylesheet_directory_uri() . '/assets/fonts/zilla-slab/ZillaSlab-Ligth.otf;'?>'") format("opentype");
    font-style: normal;
    font-weight: 100;
}
@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro');

.post-agent-orange .social-icon-wd-container ul li a { height: auto !important; }
.post-agent-orange .mdk-sng-pst p { font-family: 'source-sans pro', 'sans-serif'; }
.post-agent-orange .mkd-content { background-color: #fff; }
.post-agent-orange #title-block { 
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    left: 50%;
    z-index: 1000;
    color: #fff;
}
.post-agent-orange #author-byline p { font-family: 'Source Sans Pro', sans-serif; padding-top: 1.5rem; }
.post-agent-orange #top-caption {     
    font-family: 'zilla-slab', serif;
    line-height: 1.5rem;
    font-weight: bold; 
}

.page-template-template-featured-story #tagline p {
    color: #fff;
    font-family: 'menlo', 'sans-serif';
    text-transform: uppercase;

}
.page-template-template-featured-story #title h1 { 
    color: #fff; 
    font-family: 'boston-traffic', 'serif';
    text-transform: uppercase;
    border-bottom: 2px solid orange;
}
.relative { position: relative; }

#agent-orange-person img { 
    border: 4px solid #ff941d; 
}
#ao_person_group { position: relative; top: -50px; }

/* Small only */
@media screen and (max-width: 39.9375em) {}

/* Medium and up */
@media screen and (min-width: 40em) {}

/* Medium only */
@media screen and (min-width: 40em) and (max-width: 63.9375em) {}

/* Large and up */
@media screen and (min-width: 64em) {
    .post-agent-orange #title h1 { 
        font-size: 4rem;
    }
    .post-agent-orange #tagline p {
        font-size: 2.5rem;
    }
    .post-agent-orange #top-caption {     
        font-size: 1.5rem;
    }
    .post-agent-orange #author-byline p {
        font-size: 1.5rem;
    } 
}

/* Large only */
@media screen and (min-width: 64em) and (max-width: 74.9375em) {}

</style>
<?php
get_header(); ?>

<div class="vc-row relative">
    <div class="vc_col-12">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/agent-orange-header.jpg'; ?> " />
    </div>
    <div id="title-block">
        <div id="title" style="">
            <h1>Agent Orange</h1>
        </div>
        <div id="tagline">
            <p>a toxic legacy</p>
        </div>
        <div id="author-byline" class="text-center">
            <p>By: Michelle Bearden</p>
        </div>
    </div>
    <div id="ao_person_group" class="vc_col-xs-offset-3 vc_col-xs-6 vc_hidden-xs">
        <div class="row">
            <div id="agent-orange-person" class="vc_col-xs-offset-3 vc_col-xs-2 text-center">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/agent_orange_1.jpg'; ?>" />
            </div>
            <div id="agent-orange-person"  class="vc_col-xs-2 center-text text-center">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/agent_orange_2.jpg'; ?>" />
            </div>
            <div id="agent-orange-person"  class="vc_col-xs-2 center-text text-center">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/agent_orange_3.jpg'; ?>" />
            </div>
        </div>
    </div>
</div>
            
<div class="mkd-container-inner">
    <?php
    $title_tag = 'h3';
    $title_length = '20';
    $display_date = 'yes';
    $date_format = 'd. F Y';
    $display_category = 'yes';
    $display_category_singlepost = 'yes';
    $display_comments = 'yes';
    $display_share = 'yes';
    $display_count = 'yes';
    $display_excerpt = 'yes';
    $thumb_image_width = '';
    $thumb_image_height = '';
    $thumb_image_size = '150';
    $excerpt_length = '12';
    ?>


            <div class="mkd-column-inner">
                <div class="mkd-blog-holder mkd-blog-single">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="mkd-post-content">
                            <div class="mkd-post-text">
                                <div class="mkd-post-text-inner clearfix">
                            
                                <div id="top-caption" class="row">
                                    <div class="vc_col-sm-8 vc_col-sm-offset-2 text-center">
                                        Forty-two years after the fall of Saigon, veterans from The Villages® and countless others are still battling the aftermath of Agent Orange.
                                    </div>
                                </div>
                                <div class="mdk-sng-pst">
                                <?php the_content(); ?>
                                <?php #echo do_shortcode('[egw-learn-more]' ); ?>
                                <?php do_action('last_updated'); ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php include(locate_template('block/get-post-author.php')); ?>

                <?php
                $tm_disclaim = get_field('trademark_disclaimer'); //set via Custom Fields Plugin
                if ($tm_disclaim) {
                    include(locate_template('block/show-trademark-disclaimer.php'));
                } ?>

                <div class="disclamier">
                    <p><span>Disclaimer:</span> This content is for entertainment purposes only and it is not meant to be relied on as medical advice, diagnosis, or treatment. Consult your physician before starting any exercise or dietary program or taking any other action respecting your health. In case of a medical emergency, call 911. </p>
                </div>
                <?php if (function_exists('the_tags')) { ?>
                    <div class="mkd-single-tags-holder">
                        <span class="mkd-single-tags-title"><strong>Tags: </strong></span>
                        <div class="mkd-tags">
                            <?php the_tags('', ' ', ''); ?><br />
                        </div>
                    </div>
                <?php } ?>
                
                <?php egw_pre_footer(); ?>    
                <?php get_template_part('sidebar/template-ads-mobile'); ?>
                <div class="fsp-recommended-stories-cont">
                    <?php echo do_shortcode('[AuthorRecommendedPosts]'); ?>
                </div>
                
                <!-- Check for comments open AND Show Facebook Comments or WP Comments -->
                <?php 
                if ( ! comments_open() ) { ?>
                    <!-- If comments are closed display nothing. -->
                    <p></p>
                <?php }
                else {
                    if( get_option('egw_fb_comments_single_posts') && get_option('egw_fb_comments_api_key' ) ):
                        get_template_part('block/comments-guidelines'); ?>
                        <div class="mkd-section-title-holder clearfix"><span class="mkd-st-title">Comments</span></div>
                        <div style="background-color:white;">
                            <div class="fb-comments" data-href="<?php the_permalink();?>" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
                        </div>
                    <?php else:
                        get_template_part('block/comments-guidelines');
                        comments_template('', true);
                    endif; 
                } ?>
                <!-- /Check for comments open AND Show Facebook Comments or WP Comments -->

                </div>
            </div>
        </div>
        <div class="mkd-container-inner">
            <div class="mkd-column-inner">
                <div class="vc_row relative">
                    <div class="vc_col-sm-6">
                        <div class="mkd-column2">
                            <div class="mkd-column-inner">
                                <aside class="mkd-sidebar" style="transform: translateY(0px);">
                                    <?php get_template_part('sidebar/template-sidebar-single'); ?>
                                </aside>
                            </div>
                        </div> <!-- mkd-container-inner -->
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
