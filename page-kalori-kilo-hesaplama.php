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
        <div class="flex flex-col col-auto lg:col-span-7 overflow-hidden">
          <div class="content-img mb-7">
          <picture alt="<?php the_title(); ?>" class="w-full max-h-48">
            <source width="233" height="155" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
            <img class="w-full" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
            </picture>
          </div>
          <div class="content-in tracking-wide text-base font-relaway">
            <div class="grid grid-cols-10 w-full mb-7">
              <input class="w-full rounded col-span-10 lg:col-span-5 p-3" value="7700" placeholder="Kalori Giriniz"
                type="text" id="calToKilo" oninput="caltoKilo(this.value)" onchange="caltoKilo(this.value)">
              <div class="w-full rounded col-span-10 lg:col-span-5 mt-3 text-center" id="calToKiloText">Kalori <span
                  class="font-bold" id="outputKilograms">1.0011299999999999</span> kg'dır</div>
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