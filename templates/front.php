<?php

/** 
 * Template name: Главная
 **/
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>

<main class="page page--home">

  <section class="hero">
    <div class="container">
      <div class="hero__inner">
        <h1 class="hero__title">
          <?= get_field('1_h1') ?>
        </h1>
        <div class="hero__wrapper">
          <div class="hero__text">
            <p><?= get_field('1_txt_l_t') ?></p>
          </div>
          <div class="hero__text">
            <p><?= get_field('1_txt_r_t') ?></p>
          </div>
          <div class="hero__text">
            <?= get_field('1_txt_l_b') ?>
          </div>
          <div class="hero__text">
            <?= get_field('1_txt_r_b') ?>
          </div>
        </div>
        <div class="hero-portrait">
          <div class="hero-portrait__head">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/oapo-head.webp" alt="oapo" />
          </div>
          <div class="hero-portrait__body">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/oapo.webp" alt="oapo" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="school">
    <div class="container">
      <h2 class="school__title"><?= get_field('2_title') ?></h2>
      <div class="school__video">
        <div class="row">
          <div class="col-9">
            <?php $video = get_field('2_video'); ?>
            <div class="school-video">
              <div class="school-video__frame">
                <picture>
                  <source srcset="<?= get_the_post_thumbnail_url($video) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($video) ?>" alt="video" />
                </picture>
              </div>
              <div class="school-video__layout">
                <button class="school-video__play" data-width="640" data-height="360" data-fancybox data-src="<?= $video->post_content ?>" allowfullscreen="true">
                  <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z" fill="#A96A7D" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="school__text">
              <p><?= get_field('2_text_video') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="school__cards" data-simplebar>
        <div class="course-cards">
          <?php foreach (get_field('2_cources') as $cource): ?>
            <div class="course-card">
              <div class="course-card__img">
                <picture>
                  <source srcset="<?= get_the_post_thumbnail_url($cource) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($cource) ?>" alt="school" />
                </picture>
              </div>
              <div class="course-card__body">
                <div class="course-card__label"><span><?= get_field('type', $cource) ?></span></div>
                <div class="course-card__title"><?= get_the_title($cource); ?></div>
                <div class="course-card__text">
                  <p><?= $cource->post_content ?> </p>
                </div>
                <div class="course-card__bottom">
                  <a href="<?= get_field('link', $cource) ?>" class="btn"><?= get_field('btn', $cource) ?></a>
                  <div class="course-card__price"><?= get_field('price', $cource) ?> €</div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="school__bottom">
        <div class="school-bottom">
          <div class="school-bottom__content">
            <div class="school-bottom__text">
              <p><?= get_field('3_text') ?></p>
            </div>
            <div class="school-bottom__footer" data-da=".school-bottom__right,1023.98,first">
              <a href="<?= get_field('3_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('3_btn_text') ?></a>
            </div>
          </div>
          <div class="school-bottom__right">
            <div class="school-bottom__img">
              <picture>
                <source srcset="<?= get_field('3_image_webp')['url'] ?>" type="image/webp"><img src="<?= get_field('3_image_webp')['url'] ?>" alt="school" />
              </picture>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <?php get_template_part('template-parts/frontpage/oapo-books'); ?>
  <?php get_template_part('template-parts/frontpage/knigi_uchenikov'); ?>


  <div class="container">
    <section class="performance">
      <h2 class="performance__title"><?= get_field('6_title') ?></h2>
      <div class="performance__inner">
        <div class="performance__items">
          <div class="performance__item"><?= get_field('6_left_l_t') ?></div>
          <div class="performance__item"><?= get_field('6_left_r_t') ?></div>
          <div class="performance__item"><?= get_field('6_left_l_b') ?></div>
          <div class="performance__item"><?= get_field('6_left_r_b') ?></div>
        </div>
        <div class="performance__img-lg">
          <!-- <picture>
           <source srcset="<?= get_field('6_left_image_webp')['url'] ?>" type="image/webp"><img src="<?= get_field('6_left_image_webp')['url'] ?>" alt="performance" />
         </picture> -->
          <img src="<?= get_template_directory_uri(); ?>/assets/img/performance-1.webp" alt="performance" />
        </div>
        <div class="performance__content">
          <div class="performance__text">
            <p><?= get_field('6_right_text_top') ?></p>
          </div>
          <div class="performance__img">
            <!-- <picture>
             <source srcset="<?= get_field('6_right_image_b_webp')['url'] ?>" type="image/webp"><img src="<?= get_field('6_right_image_b_webp')['url'] ?>" alt="performance">
           </picture> -->
            <img src="<?= get_template_directory_uri(); ?>/assets/img/performance-2.webp" alt="performance">
          </div>
        </div>
      </div>
      <div class="performance__bar">
        <div class="performance__bottom" data-da=".performance__inner,1023.98,2">
          <a href="<?= get_field('6_btn_1_link') ?>" class="btn-lg"><?= get_field('6_btn_1_txt') ?></a>
          <a href="<?= get_field('6_btn_2_link') ?>" class="btn-lg"><?= get_field('6_btn_2_txt') ?></a>
          <a href="<?= get_field('6_btn_3_link') ?>" class="btn-lg"><?= get_field('6_btn_3_txt') ?></a>
        </div>
      </div>
    </section>
  </div>

  <?php get_template_part('template-parts/frontpage/retrits'); ?>



  <!-- <section class="merch">
    <div class="container">
      <div class="merch__inner">
        <div class="merch__head">
          <h2 class="merch__title"><?= get_field('10_title') ?></h2>
          <div class="merch__text">
            <p><?= get_field('10_txt_c') ?></p>
          </div>
          <div class="merch__more" data-da=".merch__inner,1023.98,last">
            <a href="<?= get_post_type_archive_link('my_presents') ?>" class="btn-lg btn-lg--accent"><?= get_field('10_btn_l_txt') ?></a>
            <a href="<?= get_post_type_archive_link('my_presents') ?>" class="btn-lg btn-lg--accent">В каталог</a>
          </div>
        </div>
        <div class="merch__slider">
          <div class="merch-swiper swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="merch-item">
                  <div class="merch-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/merch/merch-1.webp" alt="merch" />
                  </div>
                  <div class="merch-item__body">
                    <div class="merch-item__label"><span>для образа</span></div>
                    <div class="merch-item__name">Футболка</div>
                    <div class="merch-item__price">€15</div>
                    <a href="#" class="btn btn--accent">Купить</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="merch-item">
                  <div class="merch-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/merch/merch-2.webp" alt="merch" />
                  </div>
                  <div class="merch-item__body">
                    <div class="merch-item__label"><span>для записей</span></div>
                    <div class="merch-item__name">Ручка</div>
                    <div class="merch-item__price">€7</div>
                    <a href="#" class="btn btn--accent">Купить</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="merch-item">
                  <div class="merch-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/merch/merch-3.webp" alt="merch" />
                  </div>
                  <div class="merch-item__body">
                    <div class="merch-item__label"><span>для мыслей</span></div>
                    <div class="merch-item__name">Блокнот</div>
                    <div class="merch-item__price">€17</div>
                    <a href="#" class="btn btn--accent">Купить</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="merch-item">
                  <div class="merch-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/merch/merch-4.webp" alt="merch" />
                  </div>
                  <div class="merch-item__body">
                    <div class="merch-item__label"><span>для мыслей</span></div>
                    <div class="merch-item__name">Блокнот</div>
                    <div class="merch-item__price">€20</div>
                    <a href="#" class="btn btn--accent">Купить</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="merch-item">
                  <div class="merch-item__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/merch/merch-4.webp" alt="merch" />
                  </div>
                  <div class="merch-item__body">
                    <div class="merch-item__label"><span>для мыслей</span></div>
                    <div class="merch-item__name">Блокнот</div>
                    <div class="merch-item__price">€20</div>
                    <a href="#" class="btn btn--accent">Купить</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="merch__controls">
            <button type="button" class="merch-button-prev slider-button-prev"></button>
            <button type="button" class="merch-button-next slider-button-next"></button>
          </div>
          <div class="merch__pagination">
            <div class="merch-pagination slider-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->



  <?php get_template_part('template-parts/frontpage/gift'); ?>
  <?php get_template_part('template-parts/frontpage/find'); ?>

</main>

<script>
  (function(w, d, t, h, s, n) {
    w.FlodeskObject = n;
    var fn = function() {
      (w[n].q = w[n].q || []).push(arguments);
    };
    w[n] = w[n] || fn;
    var f = d.getElementsByTagName(t)[0];
    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
    var sm = d.createElement(t);
    sm.async = true;
    sm.type = 'module';
    sm.src = h + s + '.mjs' + v;
    f.parentNode.insertBefore(sm, f);
    var sn = d.createElement(t);
    sn.async = true;
    sn.noModule = true;
    sn.src = h + s + '.js' + v;
    f.parentNode.insertBefore(sn, f);
  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');

  // Ініціалізуємо всі 3 форми одразу — Flodesk сам додає їх у body як попапи
  window.fd('form', {
    formId: '670c28df03ac5b9502344f18'
  }); // Чек-лист
  window.fd('form', {
    formId: '670c29bc6f4c18818226a7ca'
  }); // Обої
  window.fd('form', {
    formId: '670c29d66f4c18818226a7cb'
  }); // Постер
</script>
<script>
  document.addEventListener('click', function(e) {
    var btn = e.target.closest('[data-flodesk-form]');
    if (!btn) return;
    e.preventDefault();

    var formId = btn.getAttribute('data-flodesk-form');

    // Закриваємо всі відкриті попапи Flodesk
    document.querySelectorAll('[data-ff-el="modal"].fd-is-open').forEach(function(m) {
      m.classList.remove('fd-is-open');
    });

    // Знаходимо потрібний попап по formId в action форми
    var target = document.querySelector(
      '[data-ff-el="modal"] form[action*="' + formId + '"]'
    );

    if (target) {
      var modal = target.closest('[data-ff-el="modal"]');
      modal.classList.add('fd-is-open');
      document.body.style.overflow = 'hidden';
    }
  });

  // Відновлення скролу при закритті
  document.addEventListener('click', function(e) {
    if (e.target.closest('[data-ff-el="modal-close"]') ||
      (e.target.matches('[data-ff-el="modal"]'))) {
      document.body.style.overflow = '';
    }
  });
</script>
<?php get_footer(); ?>