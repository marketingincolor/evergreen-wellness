<?php
$sidebar = discussion_get_sidebar();
?>
<?php
    if (is_active_sidebar($sidebar)) {
        dynamic_sidebar($sidebar);
    }
?>