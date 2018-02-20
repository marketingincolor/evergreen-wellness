<?php get_header(); ?>

    <div class="mkd-container-inner"> 
        <?php
        global $post;
        $title_tag = 'h3';
        $title_length = '20';
        $display_date = 'yes';
        $date_format = 'd. F Y';
        $display_category = 'yes';
        $display_category_singlepost = 'no';
        $save_stories = 'yes';
        $display_comments = 'yes';
        $display_share = 'yes';
        $display_count = 'yes';
        $display_excerpt = 'yes';
        $thumb_image_width = '';
        $thumb_image_height = '';
        $thumb_image_size = '150';
        $excerpt_length = '12';
        ?>
        <?php if (has_post_thumbnail()) { ?>
            <div class="mkd-blog-holder mkd-blog-single">
                <?php ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="mkd-post-content">
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="mkd-post-image-area">
                                <?php discussion_post_info_category(array('category' => 'no')) ?>
                                <?php discussion_get_module_template_part('templates/single/parts/image', 'blog'); ?>
                               <div class="mkd-post-info">
                                    <?php
                                    discussion_post_info(array(
                                        'date' => $display_date,
                                        'category_singlepost' => $display_category_singlepost,
                                        'save_stories' => $save_stories,
                                    ))
                                    ?>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                    <?php do_action('discussion_before_blog_article_closed_tag'); ?>
                </article>
            </div>
        <?php } ?>
        <div class="mkd-two-columns-75-25  mkd-content-has-sidebar clearfix">
            <div class="mkd-column1 mkd-content-left-from-sidebar">
                <div class="mkd-column-inner">
                    <div class="mkd-blog-holder mkd-blog-single">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="mkd-post-content">
                                <div class="mkd-post-text">
                                    <div class="mkd-post-text-inner clearfix">
                                        <?php if (!has_post_thumbnail()) { ?>
                                            <div class="mkd-post-info">
                                                <?php
//                                                discussion_post_info(array(
//                                                    'comments' => $display_comments,
//                                                    'count' => $display_count,
//                                                    'date' => $display_date,
//                                                    'author' => $display_author,
//                                                    'like' => $display_like,
//                                                    'category' => $display_category
//                                                ));
                                                ?>
                                            </div>
                                        <?php } ?>
                                        <h1 itemprop="name" class="entry-title mkd-post-title event-title"><?php the_title(); ?></h1>
                                        <!-- <div class="mdk-sng-pst"> -->
                                        <?php the_content(); ?>
                                        <?php
                                        
                                        $post_times = array(
                                            'pre_start'    => get_post_meta( $post->ID, 'egw_pre_event_start_time_meta_key', true ),
                                            'pre_end'      => get_post_meta( $post->ID, 'egw_pre_event_end_time_meta_key', true ),
                                            'pre_content'  => get_post_meta( $post->ID, 'egw_pre_event_textarea_meta_key', true ),
                                            'during_start' => get_post_meta( $post->ID, 'egw_during_event_start_time_meta_key', true ),
                                            'during_end'   => get_post_meta( $post->ID, 'egw_during_event_end_time_meta_key', true ),
                                            'during_content' => get_post_meta( $post->ID, 'egw_during_event_textarea_meta_key', true ),
                                            'post_start'   => get_post_meta( $post->ID, 'egw_post_event_start_time_meta_key', true ),
                                            'post_end'     => get_post_meta( $post->ID, 'egw_post_event_end_time_meta_key', true ),
                                            'post_content' => get_post_meta( $post->ID, 'egw_post_event_textarea_meta_key', true )
                                        );

                                        // echo "Pre Start:" . $post_times[pre_start] . '<br />';
                                        // echo "Pre End:" . $post_times[pre_end] . '<br />';
                                        // echo "Pre Content:" . $post_times[pre_content] . '<br />';
                                        // echo "During Start:" . $post_times[during_start] . '<br />';
                                        // echo "During End:" . $post_times[during_end] . '<br />';
                                        // echo "During Content:" . $post_times[during_content] . '<br />';
                                        // echo "Post Start:" . $post_times[post_start] . '<br />';
                                        // echo "Post End:" . $post_times[post_end] . '<br />';
                                        // echo "Post Content:" . $post_times[post_content] . '<br />';

                                        $pre_event = '[time-restrict on="'.$post_times[pre_start].'" off="'.$post_times[pre_end].'"]' . $post_times[pre_content] . '[/time-restrict]';
                                        $during_event = '[time-restrict on="'.$post_times[during_start].'" off="'.$post_times[during_end].'"]' . $post_times[during_content] . '[/time-restrict]';
                                        $post_event = '[time-restrict on="'.$post_times[post_start].'" off="'.$post_times[post_end].'"]' . $post_times[post_content] . '[/time-restrict]';

                                        // echo $pre_event . '<br />';
                                        // echo $during_event . '<br />';
                                        // echo $post_event . '<br />';
                                        ?>
                                        

                                        <!-- PRE EVENT CONTENT -->
                                        <?php echo do_shortcode( $pre_event ); ?>
                                        <!-- /PRE EVENT CONTENT -->

                                        <!-- DURING EVENT CONTENT -->
                                        <?php echo do_shortcode( $during_event ); ?>
                                        <!-- /PRE EVENT CONTENT -->

                                        <!-- POST EVENT CONTENT -->
                                        <?php echo do_shortcode( $post_event ); ?>
                                        <!-- /PRE EVENT CONTENT -->

                                        
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php
                        //$post_format = get_post_format();

                        if ($post_format === false) {
                            $post_format = 'standard';
                        }

                        $params = array();

                        $display_category = 'yes';
                        if (discussion_options()->getOptionValue('blog_single_category') !== '') {
                            $display_category = discussion_options()->getOptionValue('blog_single_category');
                        }

                        $display_date = 'yes';
                        if (discussion_options()->getOptionValue('blog_single_date') !== '') {
                            $display_date = discussion_options()->getOptionValue('blog_single_date');
                        }

                        $display_author = 'no';
                        if (discussion_options()->getOptionValue('blog_single_author') !== '') {
                            $display_author = discussion_options()->getOptionValue('blog_single_author');
                        }

                        $display_comments = 'yes';
                        if (discussion_options()->getOptionValue('blog_single_comment') !== '') {
                            $display_comments = discussion_options()->getOptionValue('blog_single_comment');
                        }

                        $display_like = 'no';
                        if (discussion_options()->getOptionValue('blog_single_like') !== '') {
                            $display_like = discussion_options()->getOptionValue('blog_single_like');
                        }

                        $display_count = 'no';
                        if (discussion_options()->getOptionValue('blog_single_count') !== '') {
                            $display_count = discussion_options()->getOptionValue('blog_single_count');
                        }

                        $params['display_category'] = $display_category;
                        $params['display_date'] = $display_date;
                        $params['display_author'] = $display_author;
                        $params['display_comments'] = $display_comments;
                        $params['display_like'] = $display_like;
                        $params['display_count'] = $display_count;

                        discussion_get_module_template_part('templates/single/post-formats/' . $post_format, 'blog', '', $params);

                        discussion_get_module_template_part('templates/single/parts/tags', 'blog');
                        //discussion_get_module_template_part('templates/single/parts/single-navigation', 'blog');
                        // discussion_get_module_template_part('templates/single/parts/author-info', 'blog');
                        //discussion_get_single_related_posts();
                        ?>
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
                            if( get_option('egw_fb_comments_single_events') && get_option('egw_fb_comments_api_key' ) ):
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
            <div class="mkd-column2">
                <div class="mkd-column-inner">
                    <aside class="mkd-sidebar" style="transform: translateY(0px);">
                            <?php get_template_part('sidebar/template-upcoming-events'); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <?php #$ssform = ( ENVIRONMENT_MODE == 0 ) ? 'ba3745d9-b382-4197-b0f2-ed587005b1b7' : '8c3dc976-1925-4b51-a875-ae8bf4d1e9b0'; ?>
    <!-- If certain event page add enewsletter form -->
<!--     <script type="text/javascript">
    jQuery(document).ready(function($) {
        var message = '</p><h3>Welcome!</h3><h4>Please check your email for more information. We hope you enjoy Evergreen Wellness<sup>&reg;</sup>.</h4><h5>If you don\'t see an email from us, please check your spam folder.</h5><p>';
        $('#news-side-submit-event').click(function() {
            var email = $("input#your-email").val();
            console.log(email);
            var zip = $("input#your-zip").val();
            console.log(zip);
            var terms = $("input#news-side-terms-event").prop("checked");
            console.log(terms);
            if ( (email == "") || (zip == "") || (terms == false) ) {
                $('.side-alert').html( '<span style="color:#f00;">All fields are required</span>' );
                return false;
            }
            $.ajax({
                type: "POST",
                url: "",
                data: { form_title : 'Newsletter CTA', your_email : email, your_zip : zip },
                complete: function() {

                    var terms = $('#news-side-terms-event');
                    var eNews = $('#news-side-subscribe-box-event');


                    //Just Events
                    if ( (eNews.is(':not(:checked)')) && (terms.is(':checked')) ) {
                        __ss_noform.push(['form','bottom-events', '19c6d2f8-a74e-49ff-b90e-2dea5a190a73']);
                        __ss_noform.push(['submit', null, '19c6d2f8-a74e-49ff-b90e-2dea5a190a73']);

                    }

                    //eNews & Events
                    else if ( (terms.is(':checked')) && (eNews.is(':checked')) ) {
                        __ss_noform.push(['form','bottom-events', '19c6d2f8-a74e-49ff-b90e-2dea5a190a73']);
                        __ss_noform.push(['submit', null, '19c6d2f8-a74e-49ff-b90e-2dea5a190a73']);
                        __ss_noform.push(['form','bottom-events', '<?php #echo $ssform; ?>']);
                        __ss_noform.push(['submit', null, '<?php #echo $ssform; ?>']);
                    }

                    else {
                        console.log('end');
                    }

                    $('#form-container-side').html( message );

                }
            });
            return false;
        });
    });
</script> -->

<?php get_footer(); ?>