<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
 */

?><!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="image/x-icon" rel="shortcut icon"
          href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/favicon.png">
    <title>Quý &amp; Lan Anh Wedding &#8211; The most beautiful love story</title>
    <link rel="stylesheet"
          href="<?php echo get_bloginfo('template_directory'); ?>/assets/themes/main/style.css?ver=1.1">
    <link rel="stylesheet"
          href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/dist/block-library/style.css?ver=1.1">
    <link rel='stylesheet' id='swiper-css'
          href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css?ver=1.1' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-css'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css?ver=1.1' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='carousel-css'
          href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?ver=1.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='carousel-theme-css'
          href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css?ver=1.1'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery/jquery.js?ver=1.1'
            id='jquery-core-js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js?ver=1.1'
            id='swiper-js'></script>
</head>

<body>

<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js?ver=5.5.5'
        id='carousel-js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/g/lazysizes(lazysizes.min.js)?ver=5.5.5'
        id='lazyload-js'></script>

<script type='text/javascript'
        src='<?php echo get_bloginfo('template_directory'); ?>/assets/js/scripts/scripts.js?ver=1.1'
        id='scripts-js'></script>
<script type='text/javascript'
        src='<?php echo get_bloginfo('template_directory'); ?>/assets/js/scripts/wp-embed.js?ver=1.1'
        id='wp-embed-js'></script>

</body>
</html>
