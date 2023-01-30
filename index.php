<?php get_header(); ?>

<section class="flex-col pt-7 mt-4">
  <div class="container">
    <?php $linkbyid = '1';
    $categorylink = get_category_link($linkbyid); ?>
    <h2 class="mb-7 border-gray border-dashed border-b-2 pb-4">
      <a href="<?php echo esc_url($categorylink); ?>"><?php echo get_the_category_by_ID($linkbyid); ?></a>
    </h2>
    <div class="w-full grid gap-x-5 gap-y-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <?php if (have_posts()) : ?>
        <?php query_posts('category_name=kodlama&posts_per_page=10'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
          <?php
          $the_cat = get_the_category();
          $category_name = $the_cat[0]->cat_name;
          $category_link = get_category_link($the_cat[0]->cat_ID);
          ?>
          <div class="flex h-full flex-col">
            <a href="<?php the_permalink(); ?>" class="block w-full h-full">
              <div class="mt-1 block">
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
            <div class="mt-5 flex gap-4 text-darkgray text-xs font-bold">
              <div>
                <i class="fa fa-tag mr-1"></i>
                <?php the_category(', ') ?>
              </div>
              <div class="content-list-item-info-tag">
                <i class="fa fa-hashtag"></i>
                <?php the_tags(' ', ' '); ?>
              </div>
            </div>

          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php wpex_pagination(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="flex-col pt-7 mt-4">
  <div class="container">
    <?php $linkbyid = '2';
    $categorylink = get_category_link($linkbyid); ?>
    <h2 class="mb-7 border-gray border-dashed border-b-2 pb-4">
      <a href="<?php echo esc_url($categorylink); ?>"><?php echo get_the_category_by_ID($linkbyid); ?></a>
    </h2>
    <div class="w-full grid gap-x-5 gap-y-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <?php if (have_posts()) : ?>
        <?php query_posts('category_name=ingilizce&posts_per_page=10'); ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
          <?php
          $the_cat = get_the_category();
          $category_name = $the_cat[0]->cat_name;
          $category_link = get_category_link($the_cat[0]->cat_ID);
          ?>
          <div class="flex h-full flex-col">
            <a href="<?php the_permalink(); ?>" class="block w-full h-full">
              <img alt="<?php the_title(); ?>" class="object-cover w-full h-72 scale-100 hover:scale-105 ease-in duration-200" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>">
            </a>
            <div class="mt-5 flex gap-4 text-darkgray text-xs font-bold">
              <div>
                <i class="fa fa-tag mr-1"></i>
                <?php the_category(', ') ?>
              </div>
              <div class="content-list-item-info-tag">
                <i class="fa fa-hashtag"></i>
                <?php the_tags(' ', ' '); ?>
              </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="block w-full h-full">
              <div class="mt-1 block">
                <h3><?php the_title(); ?></h3>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        <?php wpex_pagination(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>