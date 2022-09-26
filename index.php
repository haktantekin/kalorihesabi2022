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
          echo "<li><a href=\"" . get_category_link($category->term_id) . "\">" . $category->cat_name . "</a></li>";
        }
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
      <h2>Kalori Nedir?</h2>
      <p>
        Kalori nedir? Bu soruya bir enerji birimi olduğu şekilde yanıt verilebilir. İfade etmek için kcal ya da kal kısaltmaları kullanılır. Her insan hareket etmek, nefes almak, yaşamak ve vücutlarına kan pompalamak için kaloriye gereksinim duyar. Her yiyecek ve içeceğin besin değeri vardır. Bunların yüksek olması, kalorinin de fazla olduğuna işaret eder.
      </p>
      <p>
        Kalori hesabı yapmak oldukça önemlidir. Zira insanların bir günde alması gereken belirli bir enerji vardır. Bunun yukarısında alınması, kiloya sebep olur. Eğer aktif bir yaşam tarzınız bulunmuyorsa bu durum kısa sürede kilonuzun gözle görülür şekilde artmasına neden olabilir.
      </p>
      <p>
        Dolayısıyla fazla kalori kilo aldırır mı sorusuna da böylece olumlu yanıt verebilir. Bu gibi problemleri yaşamak istemiyorsanız, kalori hesabına dikkat etmeniz şarttır.
      </p>
      <h2>Kalori Alırken Nelere Dikkat Edilmeli?</h2>
      <p>
        Kalori hesaplaması doğru yapılsa bile insanlar bunu sık sık yanlış anlamaktadır. Kilo almamak, sağlıklı beslenmek istiyorsanız sadece günlük aldığınız kalorinin seviyesinde olmasına dikkat edilmemelidir. Aynı zamanda ne yiyerek bunları aldığınız da önemlidir. Dolayısıyla sık sık atıştırmalık, abur-cubur ve tatlı tüketiyorsanız, günlük kalori miktarını aşmanız bile bir süre sonra kilo almaya başlanır. Sağlık sorunları da kendini bir süre sonra gösterebilir.
      </p>
      <p>
        Kalori miktarı dolayısıyla sadece bir günde ne kadar alacağınızı göstermez. Aynı zamanda dengeli beslenmeniz gerektiğini de gösterir. Fast Food ve hazır gıdalar karbonhidrat, protein ve yağ dengesini bozduğu için birçok probleme neden olur. Dolayısıyla kalori hesaplaması ardından aldığınız sonuca göre besinlerin içeriğine de dikkat edilmelidir. Bu bakımdan kendinize bir beslenme düzeni hazırlamaya çalışıyorsanız, konu hakkında bir diyetisyen ile konuşmanız, en iyi sonuçları almanıza yardımcı olur.
      </p>
      <h2>Kalori Açığı Neden Önemlidir?</h2>
      <p>
        Günümüzde birçok kişi günlük aldığı kalori miktarına dikkat etmez ve kalori hesaplaması yapmaz. Bu nedenle spor yapan birçok kişi kilosunun hala durduğunu, hatta arttığını belirtir. Bunun temel sebebi yenilen ve tüketilenler arasındaki farktır.
      </p>
      <p>
        Eğer kilo vermek istiyorsanız, yaktığınız kalorilerin aldıklarınıza oranla daha fazla olması gerekir. Örneğin bir günde 1000 kalori alıyorsanız, spor ile 200 kalori yakıyorsanız bu durum yavaş da olsa kilo almanıza neden olacaktır. Bu nedenle kalori hesaplaması yaparken açıklık oluşturmaya dikkat edilmelidir. Böylece mevcut kiloyu düşürmek de mümkündür. Temel olarak aldığınız kaloriden daha fazla yakılmalıdır. Ancak herkes için belirli bir sayı bulunmaz. Zira herkesin beslenme alışkanlığı, bünyesi ve aldığı kalori miktarı farklıdır.
      </p>
      <p>
        Zayıflamak istiyorsanız, sadece kendinize özel bir plan oluşturmanız gerekir. Aç kalmalı, sağlığı bozan diyetler size bu konuda yardımcı olmaz. Bu nedenle sağlıklı bir düzen oluşturmanız gerekir. Spor da doğru ve düzenli olarak yapılmalıdır. Bu konuda uzman diyetisyenlerden yardım almanız mümkündür.
      </p>
      <h2>Kalori Hesabı Nasıl Yapılır?</h2>
      <p>
        Peki, kalori nasıl takip edilir? Bunu yapmak oldukça kolaydır. Günümüzde raflarda bulunan her ürünün üzerinde, restoran ve cafelerin menülerinde, akıllı telefon ve saatlerde kalori değerlerine yer verilmektedir. Dolayısıyla fazla kilo almamak, aldığınız kaloriyi takip etmek istiyorsanız bunları bilmeniz gerekir. Evde de ne yemişseniz bunların da hesaplaması doğru bir şekilde yapılmalıdır. Böylece bir günde ne kadar kalori aldığınızı öğrenebilir, buna göre düzenlemeler yapabilirsiniz.
      </p>
      <p>
        Bilmeniz gereken bir nokta sindirim sistemine girerek, kanda emilebilen tüm besinlerin vücuda enerji sağladığıdır. Dolayısıyla yediğinizin kalori verip vermediğinden endişelenmeniz gerekmez. Sadece tüm besinlerin farklı kalorilere sahip olduğunu bilmeniz şarttır. Kalori nasıl takip edilir konusunda bunu da bilirseniz, kendinize en uygun çözümleri almanız mümkündür.
      </p>
      <h2>Kalori Nasıl Harcanır?</h2>
      <p>
        Peki, kalori nasıl yakılır? İnsanların yaptığı her aktivite kalori yakmayı sağlar. Dolayısıyla aslında spor yapılmasa bile yakılan bir kilo vardır. Ancak kilo alımı bunun yetersiz olması halinde alınır. Bazı günlük işler ve harcanan kilolar şöyledir;
      </p>
      <ul>
        <li>Merdiven çıkmak: 121 kalori</li>
        <li>Bahçe işleri ile uğraşmak: 88 kalori</li>
        <li>Cam silmek: 83 kalori</li>
        <li>Elektrik süpürgesi kullanmak: 70 kalori</li>
        <li>Yatak toplamak: 62 kalori</li>
        <li>Yer silmek: 60 kalori</li>
        <li>Çamaşır asma: 50 kalori</li>
        <li>Yemek pişirme: 40 kalori</li>
        <li>Ütü yapma: 35 kalori</li>
      </ul>
      <p>
        Ancak sadece bunları yapmak da kilo vereceğiniz anlamına gelmez. Kalori nasıl yakılır konusunda spor ve egzersizleri doğru ve düzenli yapmak da şarttır.
      </p>
      <h2>Egzersiz ile Ne Kadar Kalori Yakılır?</h2>
      <p>
        Peki, egzersizle ne kadar kalori verilir? Bu sorunun yanıtı oldukça geniştir. Bu konuda bazı sporlar ve ne kadar kilo verebileceğiniz aşağıda olduğu gibidir;
      </p>
      <ul>
        <li>Koşu bandında 1 saat hafif tempolu yürüyüş: 675 kalori</li>
        <li>Koşu bandında 1 saat koşu: 986 kalori</li>
        <li>1 saat ip atlama: 730 kalori</li>
        <li>1 saat açık hava yürüyüşü: 200 kalori</li>
        <li>30 dakika bisiklet sürme 200 kalori</li>
      </ul>
      <p>
        Görülebileceği üzere farklı aktiviteler farklı oranlarda kalori yakmaktadır. Bunları nasıl yaptığınız da önemlidir. Bunları diyet ile destekleyerek, daha kısa sürede istediğiniz sonuçları almanız mümkündür.
      </p>
    </div>
    <button id="moreBtn" class="bg-white text-dark max-h-7 w-36 border-2 pb-5 pt-5 font-semibold border-dashed font-noto flex justify-center items-center hover:bg-dark hover:text-white" onclick="more()">Daha Fazla...</button>
  </div>
</section>
<?php get_footer(); ?>