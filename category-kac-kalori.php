<?php get_header(); ?>
<section class="flex-col pt-0 md:pt-7 overflow-hidden">
  <div class="container">
    <h1 class="border-gray border-dashed border-b-2 pb-4 mb-10">
      <?php printf(__('%s', 'natdic'), single_cat_title('', false)); ?>
    </h1>
    <section class="flex-col bg-gray p-7 mt-12 mb-7">
      <div class="container">
        <strong class="block mb-1 border-gray border-dashed border-b-2 pb-0 md:pb-4">
          <a href="javascript:;">Alt Kategoriler</a>
        </strong>
        <div class="sub-cat-list">
          <?php
          if (is_category()) {
            $this_category = get_category($cat);
          }
          ?>
          <?php
          if ($this_category->category_parent)
            $this_category = wp_list_categories('orderby=id&show_count=0
                &title_li=&use_desc_for_title=1&child_of=' . $this_category->category_parent .
              "&echo=0");
          else
            $this_category = wp_list_categories('orderby=name&depth=1&show_count=0
                &title_li=&use_desc_for_title=1&child_of=' . $this_category->cat_ID .
              "&echo=0");
          if ($this_category) { ?>

            <ul>
              <?php echo $this_category; ?>

            </ul>

          <?php } ?>
        </div>
      </div>
    </section>
    <div class="w-full grid gap-x-5 gap-y-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 sub-list">
      <?php wp_reset_query(); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
          <?php
          $the_cat = get_the_category();
          $category_name = $the_cat[0]->cat_name;
          $category_link = get_category_link($the_cat[0]->cat_ID);
          ?>
          <div class="flex h-full flex-col">
            <a href="<?php the_permalink(); ?>" class="block w-full h-full">
              <picture alt="<?php the_title(); ?>">
                <source width="100%" height="100%" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
                <img class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
              </picture>
            </a>
            <div class="mt-5 flex gap-4 text-dark text-xs font-bold">
              <div>
                <i class="fa fa-tag mr-1"></i>
                <?php the_category(', ') ?>
              </div>
              <div class="content-list-item-info-tag"> <i class="fa fa-hashtag"></i>
                <?php the_tags(' ', ' '); ?>
              </div>
            </div>
            <a href="javascript:;" class="block w-full h-full">
              <div class="mt-1 block">
                <h2 class="mb-0 pb-0"><?php the_title(); ?></h2>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <?php wpex_pagination(); ?>
  </div>
</section>
<section class="mt-7">
  <div class="container">
    <div class="category-description block text-dark text-1xl overflow-hidden h-52 mt-4 mb-6">
      <?php echo category_description(); ?>
    </div>
    <button id="moreBtn"
      class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white" onclick="more()">Daha Fazla...</button>
  </div>
</section>
<?php get_footer(); ?>