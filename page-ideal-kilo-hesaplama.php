<?php get_header(); ?>

<section class="flex-col pt-0 md:pt-7 overflow-hidden">
  <div class="container">
  <?php wp_reset_query(); ?>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
    <h1 class="border-gray border-dashed border-b-2 pb-4 mb-7">
    <?php the_title(); ?>
    </h1>
    <section class="grid grid-cols-none lg:grid-cols-10 w-full gap-0 relative">
      <div class="flex flex-col col-auto lg:col-span-7">
        <div class="content-img mb-7">
          <picture alt="Poşet Ton Balığı Kaç Kalori?" class="w-full max-h-48" alt="<?php the_title(); ?>">
            <source width="233" height="155" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
            <img class="w-full" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
          </picture>
        </div>
        <div class="content-in tracking-wide text-base font-relaway">
          <div class="flex w-full text-xl flex-col items-center mt-10">
            <div id="result" class="mb-3 font-noto font-bold">Kilo Endeksi 20.0</div>
            <div id="category" class="font-semibold font-garamond">Kilonu Ayarla</div>
          </div>
          <div class="flex flex-col w-full mt-7 gap-5 mb-7">
            <div class="grid grid-cols-10 w-full">
              <input class="w-full rounded col-span-8 bg-gray h-1 focus:bg-gray border-none appearance-none mt-3" type="range" min="20" max="200" value="20" id="weight" oninput="hWRatio()">
              <span id="weight-val" class="col-span-2 text-center">20 kg</span>
            </div>
            <div class="grid grid-cols-10 w-full">
              <input class="rounded col-span-8 bg-gray h-1 focus:bg-gray border-none appearance-none mt-3" type="range" min="100" max="250" value="100" id="height" oninput="hWRatio()">
              <span id="height-val" class="col-span-2 text-center">100 cm</span>
            </div>
          </div>
          <?php the_content(); ?>
        </div>
      </div>
      <div class="hidden lg:flex align-top justify-start h-full w-3/12 col-span-3 absolute right-0">
        <?php get_sidebar(); ?>
      </div>
    </section>
  </div>
</section>
<?php endwhile; ?>
    <?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>