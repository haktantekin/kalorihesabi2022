<footer class="bg-gray w-full pt-11 pb-11 mt-7">
  <div class="container">
    <div class="grid grid-cols-1 md:grid-cols-4">
      <div class="">
        <a href="/dist/index.html"><img class="w-36" src="<?php bloginfo('template_url'); ?>/dist/public/img/logo.png" /></a>
        <p class="text-xs mt-3 w-64">
          Kalori Hesabı sitemizin amacı kalori hesaplama, ideal kilo hesaplama ve yediğimiz yiyeceklerin kaç kalori
          olduğunu sizlere doğru bir biçimde aktarmaktır.
        </p>
        <ul class="flex gap-4 justify-left mt-4">
          <li>
            <a href="https://www.facebook.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-facebook-f text-dark"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/kalorihesabicom/" target="_blank" rel="nofollow"><i class="fa-brands fa-instagram text-dark"></i></a>
          </li>
          <li>
            <a href="https://tr.pinterest.com/kalorihesabi/" target="_blank" rel="nofollow"><i class="fa-brands fa-pinterest text-dark"></i></a>
          </li>
          <li>
            <a href="https://medium.com/@kalorihesabicom" target="_blank" rel="nofollow"><i class="fa-solid fa-link text-dark"></i></a>
          </li>
        </ul>
      </div>
      <div>
        <nav class="block md:flex mt-4 md:mt-0 p-0 md:pl-3 md:pr-3">
          <div class="menu-header-container text-sm">
            <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
          </div>
        </nav>
      </div>
      <div>
        <nav class="text-left md:text-center text-sm block md:flex mt-4 md:mt-0 p-0 md:pl-3 md:pr-3">
          <div>
            <?php wp_nav_menu(array('theme_location' => 'Calculate')); ?>
          </div>
        </nav>
      </div>
      <div>
        <nav class="text-left md:text-right text-sm block md:flex mt-4 md:mt-0 p-0 md:pl-3 md:pr-3">
          <div>
          <?php wp_nav_menu(array('theme_location' => 'Info')); ?>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer>
<script async defer src="<?php bloginfo('template_url'); ?>/dist/scripts/plugins/webfont.js"></script>
<script async defer src="<?php bloginfo('template_url'); ?>/dist/scripts/natkah.js"></script>
<link href="<?php bloginfo('template_url'); ?>/dist//css/all.min.css" rel="stylesheet" rel="preload" as="style" onload="this.rel='stylesheet'" />
</body>

</html>
<?php wp_footer(); ?>