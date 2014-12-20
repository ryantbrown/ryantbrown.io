<!doctype html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if(wp_title('', 'false')) { wp_title('') . ' | '; } echo bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="/wp-content/themes/ryantbrown/img/icons/favicon.ico" rel="shortcut icon">
        <link href="/wp-content/themes/ryantbrown/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link rel='stylesheet' href="/wp-content/themes/ryantbrown/dist/style.css"/>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>