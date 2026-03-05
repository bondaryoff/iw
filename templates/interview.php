<?php
/* Template name: interview */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>



<main class="page">
  <div class="container">
    <div class="breadcrumbs">
      <ul class="breadcrumbs__list">
        <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
        <li><span><?php the_title() ?></span></li>
      </ul>
    </div>
  </div>
  <section class="hero-conference">
    <div class="container">
      <div class="hero-conference__head">
        <h1 class="hero-conference__title">
          <?php if (get_field('0_zagolovok')) : ?>
            <?php echo get_field('0_zagolovok'); ?>
          <?php endif; ?>
        </h1>
        <div class="hero-conference__text-decor hero-conference__text-decor--inter">
          <?= get_field('1_label') ?>
        </div>
      </div>
    </div>
    <div class="hero-conference__body">
      <div class="hero-conference__btn-wrap">
        <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
      </div>
      <!-- <div class="hero-conference__img">
      <img
        src="<?= $assetsPath ?>img/bg/hero-interview.webp"
        alt="conference"
      />
    </div> -->
      <div class="hero-conference__img hero-conference__img--tablet">
        <img src="<?= $assetsPath ?>img/bg/hero-interview-tablet.webp" alt="conference" />
      </div>
      <div class="hero-conference__img hero-conference__img--desktop">
        <img src="<?= $assetsPath ?>img/bg/hero-interview.webp" alt="conference" />
      </div>
    </div>
    <div class="container">
      <div class="hero-conference__bottom-grid">
        <div class="hero-conference__text">
          <p><?= get_field('2_l_1_t') ?></p>
        </div>
        <div class="hero-conference__text">
          <p><?= get_field('2_r_1_text') ?></p>
        </div>
        <div class="hero-conference__text hero-conference__text--accent">
          <p><?= get_field('2_l_2_t') ?></p>
        </div>

        <div class="hero-conference__text hero-conference__text--last">
          <p><?= get_field('2_r_2_text') ?></p>
          <div class="hero-conference__item hero-conference__item2">
            <p><?= get_field('2_r_3_text') ?></p>
            <svg width="164" height="139" viewBox="0 0 164 139" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M37.4137 109.548C22.1097 95.5424 0.49348 82.5753 1.2106 61.8673C1.92811 41.148 23.6331 28.7914 40.6204 16.9507C54.6812 7.14988 70.5351 0.52816 87.6621 1.60772C104.382 2.66163 118.723 11.4861 131.23 22.662C145.474 35.3904 160.409 49.244 162.233 68.2423C164.254 89.2983 157.136 111.7 141.097 125.44C125.461 138.835 103.042 139.533 82.6606 136.409C64.6512 133.648 50.8671 121.861 37.4137 109.548Z" stroke="#F0CEDB" stroke-width="1.25513" />
            </svg>

            <svg width="166" height="146" viewBox="0 0 166 146" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M77.26 17.7966C96.8861 9.02254 118.127 -6.18079 137.519 3.04002C166.143 16.6513 172.104 74.0494 158.947 99.8097C140.608 135.717 90.6131 153.914 55.2374 142.444C12.7911 128.682 -14.1528 76.1593 9.15098 39.0997C19.2015 23.1165 60.0071 25.5097 77.26 17.7966Z" fill="#FFEEF2" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="topic">
    <div class="container">
      <div class="topic__inner">
        <!-- <div class="topic__blob-second">

                <svg width="1472" height="1424" viewBox="0 0 1472 1424" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M761.532 1328.62C559.197 1379.9 330.715 1490 160.56 1369.54C-9.68792 1249.01 6.35653 998.227 0.668767 789.962C-4.03924 617.577 27.8925 447.682 131.613 309.639C232.87 174.877 386.314 103.063 549.396 59.66C735.134 10.2273 934.149 -38.7954 1103.97 50.8529C1292.18 150.211 1441.21 333.858 1468.11 544.645C1494.33 750.133 1376.31 942.49 1237.41 1096.6C1114.68 1232.78 939.4 1283.54 761.532 1328.62Z" fill="#FFF6F8"/>
                </svg>
              </div> -->

        <h2 class="topic__title"><?= get_field('3_title') ?></h2>
        <div class="topic__accordion">
          <div data-spollers class="spollers" data-one-spoller>
            <?php foreach (get_field('3_confs') as $theme): ?>
              <details class="spollers__item">
                <summary class="spollers__title">
                  <?= get_the_title($theme) ?>
                  <div class="spollers__img">
                    <picture>
                      <source srcset="<?= get_the_post_thumbnail_url($theme) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($theme) ?>" alt="topic" />
                    </picture>
                  </div>
                </summary>
                <div class="spollers__body">
                  <div class="spollers__text">
                    <p><?= $theme->post_content ?></p>
                  </div>
                </div>
              </details>
            <?php endforeach; ?>

          </div>
        </div>
        <div class="topic__bottom">
          <div class="topic__bottom-text">
            <p><?= get_field('3_topic') ?></p>
          </div>
          <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
        </div>
      </div>
    </div>
  </section>
  <section class="example-interview">
    <div class="container">
      <h2 class="example-interview__title"><?= get_field('4_title') ?></h2>
      <div data-simplebar>
        <div class="example-interview__items">
          <?php foreach (get_field('4_interview') as $interview): ?>

            <a href="<?= $interview['ssylka'] ?>" class="example-interview-item" data-width="640" data-height="360" data-fancybox="" data-src="<?= $interview['ssylka'] ?>" allowfullscreen="true">
              <div class="example-interview-item__avatar">
                <picture>
                  <source srcset="<?= $interview['izobrazhenie'] ?>" type="image/webp"><img src="<?= $interview['izobrazhenie'] ?>" alt="item" />
                </picture>
              </div>
              <div class="example-interview-item__body">
                <div class="example-interview-item__date"><?= $interview['data'] ?></div>
                <div class="example-interview-item__name"><?= $interview['zagolovok'] ?></div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="example-interview__bottom">
        <a href="<?= get_field('4_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('4_btn_txt') ?></a>
      </div>
    </div>
  </section>

  <div class="conference-bottom">
    <div class="container">
      <div class="conference-bottom__content">
        <h2 class="conference-bottom__title"><?= get_field('5_title') ?></h2>
        <div class="conference-bottom__actions">
          <a href="<?= get_field('btn_bio_link', 'options') ?>" class="btn-lg"><?= get_field('btn_bio_text', 'options') ?></a>
          <a href="<?= get_field('btn_mainfest_link', 'options') ?>" class="btn-lg"><?= get_field('btn_mainfest_text', 'options') ?></a>
          <a href="<?= get_field('btn_connect_link', 'options') ?>" class="btn-lg"><?= get_field('btn_connect_text', 'options') ?></a>
        </div>
      </div>
    </div>
    <div class="conference-bottom__img">
      <div class="conference-bottom__img-container">

        <div class="conference-bottom__text-decor"><?= get_field('5_pre_footer_text') ?></div>
      </div>
      <img src="<?= get_field('5_pre_footer_img')['url'] ?>" alt="bottom" />
    </div>
  </div>

</main>
<?php get_footer(); ?>