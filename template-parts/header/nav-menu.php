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
        <div class = "nav-margin">
            <?php get_template_part("template-parts/header/nav", "brand"); ?>
            <div class = "label-text"><a class = "home-text" href = "/">Solutions for Adult Interdependent Living</a></div>
            <div class="menu-show-container">
                <i class="fa fa-bars fa-3x menu-show-button" aria-hidden="true"></i>
            </div>
            <?php get_template_part("template-parts/header/nav", "items"); ?>
        </div>
    </nav>
<?php endif; ?>
