<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="img/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&amp;display=swap"    rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/plugins.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/eocjs-newsticker.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/aos.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/flaticon.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/css/responsive.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
