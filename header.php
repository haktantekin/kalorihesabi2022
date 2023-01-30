<!DOCTYPE html>
<html lang="tr">

<head>
  <title><?php wp_title(); ?></title>
  <!-- <script>
    window.onload = function() {
      document.querySelector('.loader-container').style.display = 'none'
    };
  </script> -->
  <link href="<?php bloginfo('template_url'); ?>/dist//css/styles.css" rel="stylesheet" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/dist/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php bloginfo('template_url'); ?>/dist/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/dist/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/dist/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/faviconfavicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/dist/favicon/manifest.json">
  <link rel="preconnect" href="https://haktan.in" />
  <link rel="dns-prefetch" href="https://haktan.in" />
  <meta name="msapplication-TileColor" content="#00000">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/dist/favicon/ms-icon-144x144.png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
  <meta name="msapplication-TileColor" content="#00000" />
  <meta name="theme-color" content="#00000" />
  <?php
  add_action('wp_head', 'insert_fb_in_head', 5);
  add_action('init', 'admin_bar');
  ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->

  <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>


  <?php wp_head(); ?>
</head>

<body>

  <section class="bg-dark h-auto pl-5 pr-5 lg:pl-0 lg:pr-0 lg:h-16">
    <div class="container">
      <div class="flex items-center justify-center">
        <div class="mr-auto h-auto inline-block relative">
          <form method="get" action="<?php bloginfo('url'); ?>">
            <input class="placeholder:text-white bg-transparent border-0 text-white pt-3 outline-none p-1 text-xs h-11" type="text" placeholder="Arama Yap..." autocomplete="off" list="searchtext_s" name="s" />
            <div class="input-button">
              <button class="absolute right-1 top-4 h-4 w-2 flex items-center justify-center text-white" name="search" aria-label="search" title="search" type="button" src="<?php bloginfo('url'); ?>">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </form>
        </div>
        <div class="flex justify-end">
          <ul class="flex gap-4 justify-center">
            <li>
              <a href="https://www.instagram.com/nat.kah/" target="_blank" rel="nofollow" aria-label="instagram"><i class="fa-brands fa-instagram text-white hover:text-main hover:font-bold"></i></a>
            </li>
            <li>
              <a href="https://medium.com/@haktantekin" target="_blank" rel="nofollow" aria-label="medium"><i class="fa-solid fa-link text-white hover:text-main hover:font-bold"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <header class="h-28 md:h-44 text-left md:text-center flex flex-row lg:flex-col justify-between md:justify-center items-center">
    <div class="flex w-full text-center items-start lg:items-center flex-col">
      <a href="<?php bloginfo('url'); ?>"><img width="208" height="50" class="w-36 md:w-52" src="<?php bloginfo('template_url'); ?>/dist/public/img/logo.png" alt="Haktan Tekin" /></a>
      <!-- <div class="text-xs w-full text-left lg:text-center mt-3">
        "koduna koduğumun kodu"
      </div> -->
    </div>
    <div class="flex md:hidden">
      <div class="nav-icon js-nav-icon" onclick="mobileButton()"> <i class="fa-sharp fa-solid fa-burger text-3xl"></i></div>
    </div>
  </header>
  <nav class="p-4 border-gray border-dashed border-b-2 border-t-2 hover:border-black hover:transition-all hover:ease-in-out hidden md:flex js-top-nav">
    <div class="container top-nav">
      <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
    </div>
  </nav>