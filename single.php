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
        <div class="mt-5  flex gap-4 text-darkgray text-xs">
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
            <div class="content-in">
              <?php the_content(); ?>
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