<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Trakindo</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="">

  <link rel="shortcut icon" href="<?php echo asset_url() . 'favicon.png' ?>" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <link rel="stylesheet" href="<?php echo asset_url() . 'css/gumby.css' ?>">
  <link rel="stylesheet" href="<?php echo asset_url() . 'css/style.css' ?>">

  <script src="<?php echo asset_url() . 'js/libs/modernizr-2.6.2.min.js' ?>"></script>
</head>

<body>

  <div class="row">
    <div class="twelve columns special head">
      <h1>Trakindo</h1>
      <h2> <span>Create New Outlet <span></span> </span></h2>      
      <?php echo form_open('outlet/save') ?>
      <input type="text" name="name" placeholder="Outlet Name">
      <input type="text" name="email" placeholder="Outlet Email">
      <input type="text" name="address" placeholder="Outlet Address">
      <input type="password" name="password" placeholder="Outlet Password">
      <input type="text" name="device_id" placeholder="Outlet ID Device">
      <input type="text" name="auth_token" placeholder="Token Auth">
      <input type="submit" name="submit" value="Save">
      <?php echo form_close() ?>
    </div>
  </div>

  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <!-- 2.0 for modern browsers, 1.10 for .oldie -->
  <script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script>
  <script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="<?php echo asset_url() . "js/libs/jquery-2.0.2.min.js" ?>"><\/script>');
    } else {
      document.write('<script src="<?php echo asset_url() ."js/libs/jquery-1.10.1.min.js" ?>"><\/script>');
    }
  }
  </script>

  <script gumby-touch="js/libs" src="<?php echo asset_url() . 'js/libs/gumby.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.retina.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.fixed.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.skiplink.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.toggleswitch.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.checkbox.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.radiobtn.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.tabs.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/gumby.navbar.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/ui/jquery.validation.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/libs/gumby.init.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/plugins.js' ?>"></script>
  <script src="<?php echo asset_url() . 'js/main.js' ?>"></script>

  </body>
</html>
