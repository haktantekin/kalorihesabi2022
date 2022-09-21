<?php get_header(); ?>
<section class="flex-col pt-0 md:pt-7 overflow-hidden">
  <div class="container">
    <?php wp_reset_query(); ?>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
        <?php
        $the_cat = get_the_category();
        $category_name = $the_cat[0]->cat_name;
        $category_link = get_category_link($the_cat[0]->cat_ID);
        ?>
        <h1 class="border-gray border-dashed border-b-2 pb-4">
          <?php the_title(); ?>
        </h1>
        <section class="grid grid-cols-none lg:grid-cols-10 w-full gap-0 relative">
          <div class="flex flex-col col-auto lg:col-span-7">
            <div class="content-img mb-7">
              <picture alt="<?php the_title(); ?>" class="w-full max-h-48">
                <source width="233" height="155" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
                <img class="w-full" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
              </picture>
            </div>
            <div class="content-in tracking-wide text-base font-relaway">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="hidden lg:flex align-top justify-start h-full w-3/12 col-span-3 absolute right-0">
            <?php get_sidebar(); ?>
          </div>
        </section>

      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    <?php get_footer(); ?>