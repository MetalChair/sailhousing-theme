<?php
/**
 * Displays the site navigation.
 *
 * @package Wordpress
 * @subpackage Sail_Housing
 * @since Sail_Housing 1.0
 */

?>

<?php if(has_nav_menu('primary')): ?>
    <nav id = "site-navigation" class = "nav-bar">
        <?php get_template_part("template-parts/header/nav", "brand"); ?>
        <?php get_template_part("template-parts/header/nav", "items"); ?>
    </nav>
<?php endif; ?>
