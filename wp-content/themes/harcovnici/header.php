<!-- KAM TO LEZEŠ, HARCOVNÍKU! NECHCEŠ PŘILOŽIT RUKU K DÍLU? https://github.com/aleskrejci/harcovnici.cz -->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="color<?php echo date("F");?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0" />
<meta name="format-detection" content="telephone=no" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">
<div id="site-title">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Harcovníci" rel="home">Harcovníci</a></h1>
</div>
</div>
<nav id="menu">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">