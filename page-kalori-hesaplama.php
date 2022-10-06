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
          <picture alt="Poşet Ton Balığı Kaç Kalori?" class="w-full max-h-48" alt="<?php the_title(); ?>">
            <source width="233" height="155" srcset="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>">
            <img class="w-full" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>">
          </picture>
          </div>
          <div class="content-in tracking-wide text-base font-relaway">
            <form id="form" class="flex justify-center flex-col gap-3" onsubmit="return false">
              <div class="grid grid-cols-10">
                <label for="weight" class="grid col-span-3 lg:col-span-2 items-center">Kilonuz:</label>
                <input type="number" id="weight" placeholder="Örn: 72,5" step="0.01" required min="20" max="300"
                  class="col-span-7 p-3">
                <div class="hidden lg:flex justify-center items-center">kg</div>
              </div>
              <div class="grid grid-cols-10">
                <label for="height" class="grid col-span-3 lg:col-span-2 items-center">Boyunuz:</label>
                <input type="number" id="height" placeholder="Örn: 160" step="0.01" required min="1" max="240"
                  class="col-span-7 p-3">
                <div class="hidden lg:flex justify-center items-center">cm</div>
              </div>
              <div class="grid grid-cols-10">
                <label for="age" class="grid col-span-3 lg:col-span-2 items-center">Yaşınız:</label>
                <input type="number" id="age" placeholder="Örn: 25" step="1" required min="1" max="120"
                  class="col-span-7 p-3">
                <div class="hidden lg:flex justify-center items-center">yaşım</div>
              </div>
              <div class="grid grid-cols-10">
                <label for="gender" class="grid col-span-3 lg:col-span-2 items-center">Cinsiyetiniz:</label>
                <select id="gender" required class="col-span-7 p-3">
                  <option value="male" selected>Erkek</option>
                  <option value="female">Kadın</option>
                </select>
              </div>
              <div class="grid grid-cols-10">
                <label for="activity__level" class="grid col-span-3 lg:col-span-2 items-center">Fiziksel Aktivite
                  Seviyesi:</label>
                <select id="activity__level" required class="col-span-7 p-3">
                  <option value="1.2" selected>Egzersiz yok denecek kadar az</option>
                  <option value="1.375">Hafif Egzersiz (yürüme, koşma)</option>
                  <option value="1.55">Orta Derecede Egzersiz (spor)</option>
                  <option value="1.725">Ağır Egzersiz (günlük rutin)</option>
                  <option value="1.9">Ekstra Ağır Egzersiz (günde iki kez tutarlı rutin)</option>
                </select>
              </div>
              <div class="grid grid-cols-10">
                <button type="submit" id="result__button"
                  class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white mt-4">Hesapla!</button>
              </div>
              <div class="js-result hidden">
                <ul>
                  <li>
                    <div id="outBasal" class="mb-2 text-sm"></div>
                  </li>
                  <li>
                    <div id="outMaintenance" class="mb-2 text-sm"></div>
                  </li>
                  <li>
                    <div id="outGainWeight" class="mb-2 text-sm"></div>
                  </li>
                  <li>
                    <div id="outLoseWeight" class="text-sm"></div>
                  </li>
                </ul>
              </div>
            </form>
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