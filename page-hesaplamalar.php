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
          <div class="tracking-wide text-base font-relaway">
            <section class="flex-col mt-4">
              <div class="container">
                <div class="w-full grid gap-x-5 gap-y-8 grid-cols-1 lg:grid-cols-2">
                  <div class="flex h-full flex-col">
                    <a href="/kalori-hesaplama/" class="block w-full h-full">
                      <picture alt="">
                        <source width="100%" height="100%"
                          srcset="https://kalorihesabi.com/wp-content/uploads/2022/09/kalori-hesaplama.avif"
                          type="image/avif" alt="">
                        <img class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233"
                          height="155" decoding="async" loading="lazy"
                          src="https://kalorihesabi.com/wp-content/uploads/2022/09/kalori-hesaplama.avif"
                          alt="">
                      </picture>
                    </a>
                    <a href="javascript:;" class="block w-full h-full mt-5">
                      <div class="mt-1 block">
                        <h2 class="text-2xl">Kalori Hesaplama</h2>
                      </div>
                    </a>
                  </div>
                  <div class="flex h-full flex-col">
                    <a href="javascript:;" class="block w-full h-full">
                      <picture alt="">
                        <source width="100%" height="100%"
                          srcset="https://kalorihesabi.com/wp-content/uploads/2022/09/ideal-kilo-hesaplama.avif"
                          type="image/avif" alt="">
                        <img class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233"
                          height="155" decoding="async" loading="lazy"
                          src="https://kalorihesabi.com/wp-content/uploads/2022/09/ideal-kilo-hesaplama.avif"
                          alt="">
                      </picture>
                    </a>
                    <a href="/ideal-kilo-hesaplama/" class="block w-full h-full mt-5">
                      <div class="mt-1 block">
                        <h2 class="text-2xl">İdeal Kilo Hesaplama</h2>
                      </div>
                    </a>
                  </div>
                  <div class="flex h-full flex-col">
                    <a href="javascript:;" class="block w-full h-full">
                      <picture alt="">
                        <source width="100%" height="100%"
                          srcset="https://kalorihesabi.com/wp-content/uploads/2022/09/kalori-kilo-hesaplama.avif"
                          type="image/avif" alt="">
                        <img class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233"
                          height="155" decoding="async" loading="lazy"
                          src="https://kalorihesabi.com/wp-content/uploads/2022/09/kalori-kilo-hesaplama.avif"
                          alt="">
                      </picture>
                    </a>
                    <a href="/kalori-kilo-hesaplama/" class="block w-full h-full mt-5">
                      <div class="mt-1 block">
                        <h2 class="text-2xl">Kalori/Kilo Hesaplama</h2>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </section>
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