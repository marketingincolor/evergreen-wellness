<?php
// TODO: Condense Styles

$author_email = get_the_author_meta('user_email');
$user = get_user_by('email', $author_email);
$getUserID = $user->ID;
$user = new WP_User($getUserID);

if (!empty($user->roles) && is_array($user->roles)) {
    foreach ($user->roles as $role) {
        $role;
        $user->first_name;
        $user->last_name;
    }
}
if (!empty($user->first_name) && !empty($user->last_name)) {
    $displayNameis = $user->first_name . " " . $user->last_name;
} else {
    $displayNameis = $author_email = get_the_author_meta('user_nicename');
}
?>

<?php
?>
<?php if ($role == "coach") { ?>

    <!-- AUTHORS FOR MOBILE -->
    <div class="article-created vc_hidden-md vc_hidden-lg">
        <div class="row vc_hidden-md vc_hidden-lg">
            <div class="vc_col-sm-12">
                <?php

                $fetchresult = get_user_meta($getUserID);
                if (!empty($fetchresult['wpcf-user-profile-avatar'][0])):
                        $fetchresultRel = $fetchresult['wpcf-user-profile-avatar'][0];
                    ?>
                    <img src="<?php echo $fetchresultRel; ?>" width="150" height="150" class="avatar avatar-176 photo" alt="Coach Image" style="text-align:center; margin: 0 auto; display: block; border-radius: 50%; padding: 1rem 0rem;"/>
                <?php else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aavathar.jpg" width="150" height="150" class="avatar avatar-176 photo" alt="Evergreen Wellness Avatar" style="float: left; margin-right: 2rem; margin-bottom: 0rem;"/>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="vc_col-sm-12">
                <h4 class="author-block-name">
                <?php
                    if(get_field('written_by_condition')) {
                        the_field('written_by_condition') ." " . $displayNameis;
                    }
                    echo $displayNameis;
                ?>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="vc_col-sm-12">
                <p><?php echo $user->description; ?></p>
                <p><?php echo $user->signature; ?></p>
            </div>
        </div>
    </div>

    <!-- /AUTHORS FOR MOBILE -->


    <!-- AUTHORS FOR TABLET UP -->
    <div class="article-created vc_hidden-sm vc_hidden-xs">
        <div class="row vc_hidden-sm">
            <div class="vc_col-sm-12">
                <?php

                $fetchresult = get_user_meta($getUserID);
                if (!empty($fetchresult['wpcf-user-profile-avatar'][0])):
                        $fetchresultRel = $fetchresult['wpcf-user-profile-avatar'][0];
                    ?>
                    <img src="<?php echo $fetchresultRel; ?>" width="150" height="150" class="avatar avatar-176 photo" alt="Coach Image" style="    margin-right: 2rem; margin-bottom: 0rem; float: left; border-radius: 50%;"/>
                <?php else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/aavathar.jpg" width="150" height="150" class="avatar avatar-176 photo" alt="Evergreen Wellness Avatar" style="float: left; margin-right: 2rem; margin-bottom: 0rem;"/>
                <?php endif; ?>
                <h4 class="author-block-name">
                <?php
                    if(get_field('written_by_condition')) {
                        the_field('written_by_condition');
                    }

                    if($displayNameis == 'Jaime Brenkus'):
                        echo ' <a href="https://shop.myevergreenwellness.com/pages/about-jaime" title="Jaime Brenkus">' . $displayNameis . '</a>';
                    elseif($displayNameis == 'Dani Spies'):
                        echo ' <a href="https://myevergreenwellness.com/category/nutrition/dani-spies-recipes/">' . $displayNameis . '</a>';
                    else:
                        echo " " . $displayNameis;
                    endif;
                ?>
                </h4>
                <p><?php echo $user->description; ?></p>
            <p><?php echo $user->signature; ?></p>
            </div>
        </div>
    </div>
    <!-- /AUTHORS FOR TABLET UP -->

<?php }
?>
