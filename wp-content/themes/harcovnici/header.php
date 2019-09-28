<!-- KAM TO LEZEŠ, HARCOVNÍKU! NECHCEŠ PŘILOŽIT RUKU K DÍLU? https://github.com/aleskrejci/harcovnici.cz -->
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="color<?php echo date("F");?>">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0" />
<meta name="format-detection" content="telephone=no" />
<script>
  (function(d) {
    var config = {
      kitId: 'yyo4yve',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
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