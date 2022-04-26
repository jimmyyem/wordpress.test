<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta <?php bloginfo('charset'); ?>>
    <title><?= fisco_wp_title('&hearts;', false, ' > ') ?></title>
    <?php wp_head(); ?>

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS

  ================================================== -->
    <link rel="stylesheet" href="<?=get_theme_file_uri('assets/css/base.css')?>">
    <link rel="stylesheet" href="<?=get_theme_file_uri('assets/css/vendor.css')?>">
    <link rel="stylesheet" href="<?=get_theme_file_uri('assets/css/main.css')?>">


    <!-- script
    ================================================== -->
    <script src="<?=get_theme_file_uri('assets/js/modernizr.js')?>"></script>
    <script src="<?=get_theme_file_uri('assets/js/pace.min.js')?>"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

<!-- header
================================================== -->
<header class="short-header">

    <div class="gradient-block"></div>

    <div class="row header-content">

        <div class="logo">
            <a href="index.html">Author</a>
        </div>

        <?php get_sidebar() ?>
        <!-- end main-nav-wrap -->

        <div class="search-wrap">
            <form role="search" method="get" class="search-form" action="#">
                <label>
                    <span class="hide-content">Search for:</span>
                    <input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s"
                           title="Search for:" autocomplete="off">
                </label>
                <input type="submit" class="search-submit" value="Search">
            </form>

            <a href="#" id="close-search" class="close-btn">Close</a>

        </div> <!-- end search wrap -->

        <div class="triggers">
            <a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
            <a class="menu-toggle" href="#"><span>Menu</span></a>
        </div> <!-- end triggers -->

    </div>

</header> <!-- end header -->
