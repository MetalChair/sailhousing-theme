<?php
?>
<!DOCTYPE html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class("grid-container"); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('template-parts/header/nav', 'menu'); ?>
