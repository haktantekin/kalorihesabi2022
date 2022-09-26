<?php get_header(); ?>



<section class="flex-col pt-0 md:pt-7 overflow-hidden">
  <div class="container">
    <h1 class="border-gray border-dashed border-b-2 pb-4 mb-10">
      Kalori Hesabı
    </h1>
  </div>
  <div class="container">
    <div class="w-full h-[20rem] md:h-[40rem] flex gap-1 mb-2">
      <div class="relative w-full">
        <img class="w-full h-[20rem] md:h-[40rem] object-cover" alt="Kaç Kalori" src="https://kalorihesabi.com/wp-content/uploads/2022/09/kac-kalori.avif" />
        <a href="/kategori/kac-kalori/" class="block w-full h-full before:bg-black before:w-full before:h-full before:absolute before:bg-opacity-40 before:top-0 hover:before:bg-opacity-10">

          <div class="absolute bottom-5 p-10 flex items-left justify-end flex-col">
            <h2 class="text-white font-semibold border-none pb-0 mb-0">Kaç Kalori</h2>
            <p class="text-white text-xs mt-3">
              Her gün tam olarak kaç kalori yemelisin? Kilo almak ya da vermek istiyorsan besinlerin kalorilerini
              öğren.
            </p>
          </div>
        </a>
      </div>
    </div>
    <div class="flex gap-2">
      <div class="grid gap-2 grid-cols-1 md:grid-cols-3">
        <div class="w-full relative">
          <img width="421" height="280" alt="Kilo Aldırır mı?" class="w-full h-full gap-1 object-cover" src="https://kalorihesabi.com/wp-content/uploads/2022/09/kilo-aldirir-mi.avif" />
          <a href="/kategori/kilo-aldirir-mi/" class="block w-full h-full before:bg-black before:w-full before:h-full before:absolute before:bg-opacity-40 before:top-0 hover:before:bg-opacity-10">
            <div class="absolute bottom-5 p-10 flex items-left justify-end flex-col">
              <h2 class="text-white font-semibold border-none pb-0 mb-0">Kilo Aldırır mı?</h2>
            </div>
          </a>
        </div>
        <div class="w-full relative">
          <img width="421" height="280" alt="Vegan Mıdır?" class="w-full object-cover" src="https://kalorihesabi.com/wp-content/uploads/2022/09/vegan-midir.avif" />
          <a href="/kategori/vegan-mi/" class="block w-full h-full before:bg-black before:w-full before:h-full before:absolute before:bg-opacity-40 before:top-0 hover:before:bg-opacity-10">
            <div class="absolute bottom-5 p-10 flex items-left justify-end flex-col">
              <h2 class="text-white font-semibold border-none pb-0 mb-0">Vegan mıdır?</h2>
            </div>
          </a>
        </div>
        <div class="w-full relative">
          <img width="421" height="280" alt="Kilo Hesaplama Araçları" class="w-full object-cover" src="https://kalorihesabi.com/wp-content/uploads/2022/09/kilo-hesaplama-araclari.avif" />
          <a href="/hesaplama/" class="block w-full h-full before:bg-black before:w-full before:h-full before:absolute before:bg-opacity-40 before:top-0 hover:before:bg-opacity-10">
            <div class="absolute bottom-5 p-10 flex items-left justify-end flex-col">
              <h2 class="font-garamond text-white font-semibold border-none pb-0 mb-0">Kilo Hesaplama
                Araçları</h2>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="flex-col pt-4 pb-4 md:pt-7 md:pb-7 mt-14 bg-gray">
  <div class="container">
    <h2>
      Kilo Hesaplama Araçları
    </h2>
    <div class="grid grid-flow-row md:grid-flow-col md:grid-cols-3 gap-4 pt-0 md:pt-3 text-center">
      <div>
        <a class="flex flex-col gap-2 md:gap-6 text-sm md:text-1xl text-darkgray" href="/kalori-hesaplama/">
          <i class="fa-solid fa-calculator text-3xl md:text-5xl text-darkgray"></i>
          Kalori Hesaplama
        </a>
      </div>
      <div>
        <a class="flex flex-col gap-2 md:gap-6 text-sm md:text-1xl text-darkgray" href="/ideal-kilo-hesaplama/">
          <i class="fa-solid fa-divide text-3xl md:text-5xl text-darkgray"></i>
          İdeal Kilo Hesaplama
        </a>
      </div>
      <div>
        <a class="flex flex-col gap-2 md:gap-6 text-sm md:text-1xl text-darkgray" href="/kalori-kilo-hesaplama/">
          <i class="fa-solid fa-cheese text-3xl md:text-5xl text-darkgray"></i>
          Kalori/Kilo Hesaplama
        </a>
      </div>
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
      <?php query_posts('category_name=kac-kalori&posts_per_page=5'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
        <?php
        $the_cat = get_the_category();
        $category_name = $the_cat[0]->cat_name;
        $category_link = get_category_link($the_cat[0]->cat_ID);
        ?>
        <div class="flex h-full flex-col">
          <a href="<?php the_permalink(); ?>" class="block w-full h-full">
            <?php if (has_post_thumbnail()) { ?>
              <picture alt="">
                <source alt="<?php the_title(); ?>" width="100%" height="100%" srcset="<?php echo $url ?>" type="image/avif" alt="">
                <img alt="<?php the_title(); ?>" class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>">
              </picture>
            <?php } else { ?>
              <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
            <?php }  ?>
          </a>
          <div class="mt-5 flex gap-4 text-darkgray text-xs">
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
      <div class="flex justify-center items-center h-full">
        <a href="<?php echo esc_url($categorylink); ?>" class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white">
          Tümünü Gör >
        </a>
      </div>

    </div>
  </div>
</section>
<section class="flex-col pt-7 bg-gray pb-7 mt-12 mb-7">
  <div class="container">
    <h2 class="mb-2 md:mb-2 border-gray border-dashed border-b-2 pb-0 md:pb-4">
      Yiyeceklerin Kalorileri
    </h2>
    <div class="sub-cat-list">
  
      <ul class="grid gap-2 grid-cols-1 sm:grid-cols-3 lg:grid-cols-5">
        <?php
        $slug = 'kac-kalori';
        $id = get_term_by('slug', $slug, 'category');
        $categories =  get_categories('child_of=' . $id->term_id);

        foreach ($categories as $category) {
          echo "<li><a href=\"" . get_category_link($category->term_id) . "\">" . $category->cat_name . "</a></li>";}
        ?>
      </ul>
    </div>
  </div>
</section>
<section class="flex-col pt-0 md:pt-7 mt-4">
  <div class="container">
    <?php $linkbyid = '1';
    $categorylink = get_category_link($linkbyid); ?>
    <h2 class="mb-7 border-gray border-dashed border-b-2 pb-4">
      <a href="<?php echo esc_url($categorylink); ?>"><?php echo get_the_category_by_ID($linkbyid); ?></a>
    </h2>
    <div class="w-full grid gap-x-5 gap-y-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
      <?php query_posts('category_name=blog&posts_per_page=5'); ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
        <?php
        $the_cat = get_the_category();
        $category_name = $the_cat[0]->cat_name;
        $category_link = get_category_link($the_cat[0]->cat_ID);
        ?>
        <div class="flex h-full flex-col">
          <a href="<?php the_permalink(); ?>" class="block w-full h-full">
            <?php if (has_post_thumbnail()) { ?>
              <picture alt="">
                <source alt="<?php the_title(); ?>" width="100%" height="100%" srcset="<?php echo $url ?>" type="image/avif" alt="">
                <img alt="<?php the_title(); ?>" class="object-cover h-72 scale-100 hover:scale-105 ease-in duration-200" width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="">
              </picture>
            <?php } else { ?>
              <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
            <?php }  ?>

          </a>
          <div class="mt-5 flex gap-4 text-darkgray text-xs">
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
      <div class="flex justify-center items-center h-full">
        <a href="<?php echo esc_url($categorylink); ?>" class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white">
          Tümünü Gör >
        </a>
      </div>
    </div>
  </div>
</section>
<section class="mt-7">
  <div class="container">
    <div class="category-description block text-dark text-1xl overflow-hidden h-52 mt-4 mb-6">
      <p>Günde yediğiniz kalori miktarını azaltmak etkili bir kilo verme yöntemi olabilir. Kalori Hesabı sizlere kilo
        kontrolü konusunda yardımcı oluyor.<br><br> Bununla birlikte, yaşınız, cinsiyetiniz, bedeniniz ve aktivite
        seviyeniz gibi çeşitli faktörlere bağlı olduğundan, tam olarak kaç kalori yemeniz gerektiğini bulmak zor
        olabilir.<br></p> <strong> Kalori Nedir? </strong>
      <p> Basitçe söylemek gerekirse, kalori enerjiyi ölçen bir birimdir. Kaloriler genellikle yiyecek ve içeceklerin
        enerji içeriğini ölçmek için kullanılır. <br><br> Kilo vermek için, vücudunuzun her gün yaktığından daha az
        kalori almanız gerekir. Tersine, kilo almak için harcadığınızdan daha fazla kalori tüketmeniz gerekir.
        <br><br>
        Kilo kaybının “alınan kalori, alınan kalori ” kavramı basit görünse de, tıbbi teşhisler, hormonal
        değişiklikler,
        genetik ve yaş dahil olmak üzere birçok faktörün kilo kaybına veya kilo verememesine katkıda bulunduğunu
        unutmayın. <br><br> Kilo vermenize ve uzun vadede onu uzak tutmanıza yardımcı olacak sağlıklı bir diyet ve
        yaşam
        tarzı planı geliştirmek, mevcut kalori ihtiyacınızı belirlemek ve buna karşılık daha az kalori tüketmekten çok
        daha fazlasını gerektirir.
      </p> <strong> Ortalama kaç kalori yemelisiniz? </strong>
      <p> Günde yemeniz gereken kalori sayısı, yaşınız, cinsiyetiniz, boyunuz, mevcut kilonuz, aktivite seviyeniz ve
        metabolik sağlığınız gibi birçok faktöre bağlıdır. <br><br> Kilo vermeye çalışırken , normalde yaptığınızdan
        daha az kalori tüketerek veya daha fazla egzersiz yaparak kalori açığı oluşturmanız önemlidir. Bazı insanlar,
        fiziksel olarak daha aktif olurken biraz daha az yemek yiyerek ikisini birleştirmeyi tercih eder. <br><br>
        Yine
        de, kilo vermeye çalışıyor olsanız bile, vücudunuza ihtiyaç duyduğu besinleri sağlamak için yeterli kalori
        aldığınızdan emin olmanız önemlidir. <br><br> Herhangi bir kilo verme planının en önemli kısmı
        sürdürülebilirliktir. Bu nedenle birçok uzman, sürdürülebilir kilo kaybını teşvik etmek için küçük kalorili
        azalmalar önermektedir. <br><br> Örneğin, birçok moda diyet, kalori alımınızı günde yaklaşık 1.000-1.200
        kalori
        ile sınırlamanızı önerir; bu, çoğu sağlıklı yetişkin için yeterli değildir. <br><br> Kalori alımınızı çok
        büyük
        ölçüde azaltmak, yalnızca birkaç ciddi yan etkiye neden olmakla kalmaz, aynı zamanda beslenme yetersizliği
        riskinizi de artırır. Aynı şekilde uzun süreli kilo korumayı zorlaştıran metabolik değişikliklerle sonuçlanır.
        <br><br> Kadınların kalori ihtiyaçları yaşlarına, boyutlarına ve aktivite seviyelerine bağlı olabilir.
        <br><br>
        19-30 yaş arasındaki kadınların çoğu, kilolarını korumak için günde 2.000-2.400 kaloriye ihtiyaç duyar.
        <br><br>
        31-59 yaş arasındaki kadınların enerji ihtiyaçları biraz daha düşüktür. Genel olarak, bu yaş grubundaki
        kadınların vücut ağırlıklarını korumak için günde 1.800-2.200 kalori tüketmeleri gerekir. <br><br> 60 yaşın
        üzerindeki kadınlar genellikle daha az kaloriye ihtiyaç duyar ve kilolarını korumak için genellikle günde
        yaklaşık 1.600-2.000 kalori almaları gerekir. <br><br> İhtiyacınız olan tam kalori miktarının, ne kadar aktif
        olduğunuza, ayrıca boyunuza, kilonuza ve sağlık durumunuza bağlı olarak bu aralığın üst veya alt sınırına
        düşebileceğini veya hatta aşabileceğini unutmayın. <br><br> Ek olarak, bu tahminler , önemli ölçüde daha fazla
        kaloriye ihtiyaç duyacakları için hamile veya emziren kişiler için geçerli değildir. <br><br> Kadınlarda
        olduğu
        gibi erkeklerde de kalori ihtiyacı çeşitli faktörlere göre değişiklik gösterebilir. <br><br> Amerikalılar için
        en son Diyet Rehberi, 19-30 yaş arasındaki erkeklerin kilolarını korumak için günde 2.400-3.000 kalori
        tüketmesi
        gerektiğini tahmin ediyor. <br><br> Yaşlandıkça enerji ihtiyacı azalır. Aslında, 31-59 yaş arasındaki erkekler
        kilolarını korumak için günde yaklaşık 2.200-3.000 kaloriye ihtiyaç duyarken, 60 yaşın üzerindeki erkekler
        genellikle 2.000-2.600 kaloriye ihtiyaç duyar. <br><br> Çok aktif olan veya belirli sağlık koşullarına sahip
        olan erkekler daha fazla kalori gerektirebilir. Bu aralıklar içinde ihtiyacınız olan sayı da boyunuza ve
        kilonuza göre değişir. <br><br> Çocukların yaşlarına, boyutlarına ve aktivite seviyelerine göre çok çeşitli
        kalori ihtiyaçları vardır. <br><br> Çocukların ve gençlerin enerji ihtiyaçları cinsiyetlerine ve yaşlarına
        göre
        değişir. 3 yaşında bir çocuk sadece 1.200 kaloriye ihtiyaç duyabilir, ancak bir genç 3.000 kaloriye daha yakın
        bir ihtiyaç duyabilir. <br><br> Ancak, büyümekte olan çocuklar ve gençler için genellikle kalori saymaya gerek
        olmadığını unutmayın. <br><br> Aslında, bir çocuğun kalori alımını azaltmak, beslenme eksiklikleri, yavaş
        büyüme
        ve yiyeceklerle sağlıksız bir ilişki ya da yeme bozukluğu riskini artırabilir. <br><br> Kalorileri saymak
        yerine, sağlıklı, besleyici yoğun yiyecekleri teşvik etmek, evde daha fazla yemek ve atıştırmalık pişirmek ve
        çocuklar ve gençler için düzenli fiziksel aktiviteyi teşvik etmek en iyisidir. <br><br>
      </p>
    </div>
    <button id="moreBtn" class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white" onclick="more()">Daha Fazla...</button>
  </div>
</section>
<?php get_footer(); ?>