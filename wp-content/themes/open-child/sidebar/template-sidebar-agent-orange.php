<?php 
?>
<div class="mkd-container-inner">
    <div class="mkd-column-inner">
        <div class="vc_row relative">
            <div class="vc_col-sm-6">
                <div class="mkd-column2">
                    <div class="mkd-column-inner">
                        <aside class="mkd-sidebar" style="transform: translateY(0px);">
                        <?php
						do_action('discussion_before_blog_article_closed_tag');
						#get_template_part( 'sidebar/template-ads', 'page' );
						get_template_part( 'sidebar/template-social-share', 'page' );
      
    					?>
                        </aside>
                    </div>
                </div> <!-- mkd-container-inner -->
            </div>
            <div class="vc_col-sm-6">
                <div class="mkd-column2">
                    <div class="mkd-column-inner">
                        <aside class="mkd-sidebar" style="transform: translateY(0px);">
                            <div class="fsp-recommended-stories-cont">
                                <?php #echo do_shortcode('[AuthorRecommendedPosts]'); ?>
                            </div>
    					<?php	#get_template_part( 'sidebar/template-related-stories', 'page' ); ?>
                        </aside>
                    </div>
                </div> <!-- mkd-container-inner -->
            </div>
        </div>
    </div>
</div>
