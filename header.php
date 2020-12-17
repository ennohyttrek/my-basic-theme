<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>
    <nav class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
