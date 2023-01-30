<div id="sidebar" class="w-full flex-col">
  <div>
    <div class="text-xl font-semibold">Blog'da Ara</div>
    <form method="get" action="<?php bloginfo('url'); ?>" class="flex mt-5 mb-5 relative">
      <input class="p-3 w-full" type="text" placeholder="Arama Yap..." autocomplete="off" list="searchtext_s" name="s">
      <div>
        <button class="absolute right-3 top-3" type="button" name="button" aria-label="search" title="search" src="<?php bloginfo('url'); ?>"> <i class="fa fa-search"></i> </button>
      </div>
    </form>
  </div>
  <div class="text-xl font-semibold"> Sosyal Medya</div>
  <ul class="flex gap-4 justify-left mt-4">
    <li> <a href="https://www.instagram.com/nat.kah/" target="_blank" rel="nofollow"><i class="fa-brands fa-instagram"></i></a></li>
    <li> <a href="https://medium.com/@haktantekin" target="_blank" rel="nofollow"><i class="fa-solid fa-link"></i></a></li>
  </ul>
</div>