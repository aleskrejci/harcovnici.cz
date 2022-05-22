<!-- KAM TO LEZEŠ, HARCOVNÍKU! NECHCEŠ PŘILOŽIT RUKU K DÍLU? https://github.com/aleskrejci/harcovnici.cz -->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="color<?php srand(date('Ym')); echo rand(1, 3); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');
                                                echo '?v=' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" />
  <?php wp_head(); ?>
  <meta property="og:image" content="https://harcovnici.cz/wp-content/themes/harcovnici/img/ogimage.png">
</head>

<body <?php body_class(); ?>>
  <div id="wrapper" class="hfeed">
    <header id="header">
      <div id="branding">
        <svg viewBox="0 0 600 70" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
          <path d="m207.1 75a22.8 22.8 0 0 1 7.4-3.4 98.1 98.1 0 0 1 20.1-3.3c7.8-.5 12.7 2.5 15 6.7" />
          <path d="m191 75c1.9-7.2 9.1-9.2 15.9-10.3 9.9-1.5 20.1-2.4 30.1-3.4a27.3 27.3 0 0 1 22 7.9 11.5 11.5 0 0 1 3.3 5.8" />
          <path d="m180.4 75v-.5c.7-11.3 11.5-13.6 21.1-14.5 13.1-1.3 26.2-1.7 39.2-3.3 8.7-1.1 19.2-.5 26.8 4.1 5.6 3.5 7.2 8.9 4.9 14.2" />
          <path d="m146.3 75c.9-1.6 1.9-3.1 2.9-4.6 3.7-5.5 9-9 15.6-6.2 4.9 2 7.7 6.2 9.7 10.8" />
          <path d="m232.7-5c3.2 6.1 1.6 12.1-2.3 16.5a19.5 19.5 0 0 1 -17.2 6.5 25.6 25.6 0 0 1 -12.9-5.7c-3.5-3.1-5.6-7.3-4.7-12.6a11.6 11.6 0 0 1 2-4.7" />
          <path d="m243.4-5c2.3 7.6.8 14.6-6.3 19.6s-14.4 7.5-23.1 8.9c-5.3.9-10.7 4.6-14.8 1.5s-10.7-12.4-12-18a31.7 31.7 0 0 1 -.5-12" />
          <path d="m254.7-5c2.1 9.5-.5 18.1-10 24.2-11.4 7.4-22.3 10.1-35.6 12.1-7.9 1.1-16.4 8.7-21.9 2.5s-11.5-22.7-10.7-30.8a41.8 41.8 0 0 1 1.4-8" />
          <path d="m269.1-5c1.4 10.6-2.6 20.2-14.2 27.2-15.8 9.4-30.5 12.5-48.6 14.8-10.8 1.4-22.5 12.9-29.3 3.6s-12.8-32.4-9.9-43c.3-.9.5-1.8.8-2.6" />
          <path d="m282.3-5c.9 12.2-4.2 23.1-18.2 31.1-20.4 11.6-39 14.9-62 17.7-13.7 1.7-28.9 17-37 4.6s-13.4-39.5-9.5-53.4" />
          <path d="m425.1-5c-1.9 9-2.6 27.6-15.2 25s-12.6-16.5-19-25" />
          <path d="m448.7-5a34.1 34.1 0 0 0 -6 11.7c-4.2 13.6-1.8 60.3-27.6 52.7-22.2-6.5-17.4-38.9-29.6-53.8-3.7-4.5-8.8-7.6-14.2-10.6" />
          <path d="m128.1-5-1.6 2.4c-9.2 13.1-11.8 22.9-16.2 39.3-3.2 12-5.4 20.7-16.1 28-6.9 4.8-15.7 6.8-21.3.8-11.2-11.9-15.7-17-27.1-19.1-5.5-1-24 1.6-25.3-8.1s12.6-11.7 18.9-11.5a81.7 81.7 0 0 0 30.1-4.3c15-5.4 22.5-13.7 29.8-27.5" />
          <path d="m135.2-5c-2.8 11.6-5.6 22.6-11.2 35.4-3.8 8.8-5 17.8-8.8 26s-8.5 13.2-14.9 18.6" />
          <path d="m-5 26.6a52.5 52.5 0 0 1 9.3-10.5c1.5-1.3 3.1-2.5 4.8-3.7 10.7-7.4 23.9-11.9 37.4-15.2l7.8-1.7 2.2-.5" />
          <path d="m-5 54.1c4.9 5.6 13.2 7.8 21.6 6.7 4.4-.6 8.1-1.2 11.3-1.3a69.9 69.9 0 0 1 10.2.3c8.3.7 13.2 7.7 18.6 15.2" />
          <path d="m331.7 75a20.2 20.2 0 0 0 -3.5-3.8c-12.7-10.6-1.3-28 10.6-33.8 5.5-2.8 12.4-.3 17 3.4s9.2 10.7 13.6 15.8a157.8 157.8 0 0 1 13.4 18.4" />
          <path d="m345-5c6 7.3 10.8 16.2 16.1 23.9a365.3 365.3 0 0 1 21.3 34.9 138.3 138.3 0 0 0 13.9 21.2" />
          <path d="m322.6 75c-.2-.4-.3-.9-.5-1.3-4.4-12.5-4.4-21.8-19.1-30.6-21.2-12.9-14.6-34-2-48.1" />
          <path d="m458.2 75a17 17 0 0 1 -6.3-5.7c-5.1-7.8-5.1-18.9-3.7-27.8 2.2-14.5 9.7-20.4 18.1-32.1a77.5 77.5 0 0 1 13.4-14.4" />
          <path d="m605 17.2c-8 19.4-18.2 40.6-31.9 57.8" />
          <path d="m596-5c-2 8-4.7 15.8-6.8 22.5-6.5 20.1-19.5 41.8-37.7 55.5l-3 2" />
          <path d="m517.7 75c-9-4-17.4-8.1-26.9-8.2-6.5-.1-11.1.5-16.8-2.6-3.2-1.7-6.7-4.1-8.4-7.7-2.7-5.9-2.7-13.7-1.2-20.3s4.5-11.3 8-15.7c1.9-2.4 4-4.7 6.1-7.5 4.2-5.5 7.9-8.4 13.2-12.7s8.1-4.2 11.7-5.3" />
          <path d="m578.2-5c-.9 9.3-4.6 19.1-5.7 25.9-2.1 13.8-13.1 26.7-27.2 35.3-7.6 4.6-14.8 4.8-22.5 2.9s-13.7-3.7-19.6-3c-7.7 1-10.9 2.4-17.3-1.9-3-2-7-4.6-8-8.5s-.4-8.6 1.1-12.9a32.3 32.3 0 0 1 6.1-9.7c1.3-1.5 2.8-3 4.3-4.6 2.9-3.3 5.6-5 9.2-7.5s8.4-2.4 12.4-5 4.8-8 6.2-9.9c.1-.4.3-.8.4-1.1" />
          <path d="m523.8 22.7c-8.6-2.4-19.3-2.8-26.6 3.5-2 1.7-7.4 6.7-7.8 9.4-.6 4.4 5 7.3 7.9 9.6 6.9 5.6 9.3 4.7 17.7 1.2s45-7 40.5-21.6c-1.9-6 8.6-23.2-1.8-28.2-7.3-3.6-11.2 20.1-16.3 22.7-2.3 1.1-11.1 4.1-13.6 3.4z" />
        </svg>
        <div id="site-title">
          <?php if (is_front_page() || is_home() || is_front_page() && is_home()) { echo '<h1>'; } ?><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Harcovníci</a><?php if (is_front_page() || is_home() || is_front_page() && is_home()) { echo '</h1>'; } ?>
        </div>
      </div>
      <nav id="menu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </nav>
    </header>
    <div id="container">
