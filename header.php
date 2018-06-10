<?php
/**
* The theme header file.
 *
 * @package JMW\GermBlog
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <nav class="site-nav">
        <?php wp_nav_menu(); ?>
    </nav>
</header>

<div class="wrapper">