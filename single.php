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
        <div class="mt-5 mb-10 flex gap-4 text-darkgray text-xs">
          <div>
            <i class="fa fa-tag mr-1"></i>
            <?php the_category(', ') ?>
          </div>
          <div class="content-list-item-info-tag"> <i class="fa fa-hashtag"></i>
            <?php the_tags(' ', ' '); ?>
          </div>
        </div>
        <section class="grid grid-cols-1 lg:grid-cols-10 w-full gap-0 relative">
          <div class="flex flex-col col-span-1 lg:col-span-7 overflow-hidden">
            <div class="content-img mb-7">
              <picture alt="Poşet Ton Balığı Kaç Kalori?" class="w-full max-h-48" alt="<?php the_title(); ?>">
                <source width="233" height="155" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
                <img class="w-full" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
              </picture>
            </div>
            <div class="content-in tracking-wide text-base font-relaway">
              <?php the_content(); ?>
            </div>
            <div class="other-post bg-gray p-5 rounded-md mt-6">
              <strong class="pb-4 font-bold block">İlgili Konular</strong>
              <?php $orig_post = $post;
              global $post;
              $categories = get_the_category($post->ID);
              if ($categories) {
                $category_ids = array();
                foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                $args = array(
                  'category__in' => $category_ids,
                  'post__not_in' => array($post->ID),
                  'posts_per_page' => 3,
                  'ignore_sticky_posts' => 1,
                  'orderby' => 'rand'

                );

                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {

                  while ($my_query->have_posts()) {
                    $my_query->the_post(); ?>
                    <a class="font-medium text-dark capitalize block mb-2 text-sm last:mb-0" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              <?
                  }
                }
              }
              $post = $orig_post;
              wp_reset_query(); ?>
            </div>
            <div class="col-span-1 md:col-span-10 mt-7">
              <?php
              if (comments_open() || '0' != get_comments_number()) :
                comments_template();
              endif;
              ?>
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