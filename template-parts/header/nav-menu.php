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
        <div class = "label-text"><a class = "home-text" href = "/">Solutions for Adult Independent Living</a></div>
        <div class = "expand-container">
            <input id = "hack" type = "checkbox" class= "checkbox-expand-hack"/>
            <label for= "hack" class = "expand-label-container">
                <div class ="expand-button">
                    <i class="fa fa-bars fa-3x" aria-hidden="true"></i>

                </div>
                <?php get_template_part("template-parts/header/nav", "items"); ?>
            </label>
        </div>
    </nav>
<?php endif; ?>
