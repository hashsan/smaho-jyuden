<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <?php
        // `wi_header` ウィジェットエリアを表示
        if (is_active_sidebar('wi_header')) {
            dynamic_sidebar('wi_header');
        }
        ?>
    </header>
