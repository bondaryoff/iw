<?php
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>

<main class="page">
  <div class="current-book">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <?php
          $step2Link = apply_filters('wpml_current_language', NULL) === 'ru' ? get_page_by_path('books') : get_page_by_path('books-en');
          $step2Name = apply_filters('wpml_current_language', NULL) === 'ru' ? 'Книги' : 'Books';
          ?>
          <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
          <li><a href="<?= get_permalink($step2Link) ?>"><?= $step2Name ?></a></li>
          <li><span><?php the_title() ?></span></li>
        </ul>
      </div>
    </div>
    <div class="container-left">
      <div class="current-book__hero">
        <div class="current-book-hero">
          <div class="current-book-hero__bg">
            <span class="current-book-hero__bg-decor"></span>
            <picture>
              <source srcset="<?= get_field('single_1_img')['url'] ?>" type="image/webp"><img
                src="<?= get_field('single_1_img')['url'] ?>" alt="book" />
            </picture>
          </div>
          <div class="current-book-hero__right">
            <div class="current-book-hero__content">
              <h1 class="current-book-hero__title"><?php the_title() ?></h1>
              <div class="current-book-hero__sub-title"><?= get_field('single_1_label') ?></div>
              <div class="current-book-hero__line">
                <div class="current-book-hero__date"><?= get_field('year') ?></div>
                <div class="current-book-hero__decor-text"><?= get_field('type') ?></div>
              </div>
            </div>
            <div class="current-book-hero__actions">
              <a href="<?= get_field('buy_text_link') ?>"
                class="btn-lg btn-lg--accent"><?= get_field('buy_text_text') ?></a>
              <a href="<?= get_field('single_1_btn_2_link') ?>"
                class="btn-lg"><?= get_field('single_1_btn_2_text') ?></a>
              <a href="<?= get_field('single_1_btn_3_link') ?>"
                class="btn-lg"><?= get_field('single_1_btn_3_text') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="current-book__info">
        <div class="current-book-info">
          <div class="current-book-info__text">
            <p><?php the_content() ?></p>
          </div>
          <div class="current-book-info__line">
            <div class="current-book-info__ribbon">
              <svg width="1600" height="753" viewBox="0 0 1600 753" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 30.4224C236.806 -84.271 199.909 170.977 168 218C149 246 100.74 201.513 149 174.5C521.5 -33.9997 66.5 613.001 691.5 563.809C909.5 546.651 1168.5 312.265 1321.5 336C1474.5 359.735 1341.5 621.809 1309 612.309C1237 586.809 1502 466.809 1657 752.309" stroke="url(#paint0_linear_1_4037)" stroke-width="1.15895" />
                <defs>
                  <linearGradient id="paint0_linear_1_4037" x1="1616.5" y1="430.423" x2="25.5003" y2="435.923" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#C19561" stop-opacity="0.28" />
                    <stop offset="0.157694" stop-color="#B7836D" stop-opacity="0.216236" />
                    <stop offset="0.386361" stop-color="#A96A7D" stop-opacity="0.15" />
                    <stop offset="0.751447" stop-color="#B07775" stop-opacity="0.19" />
                    <stop offset="1" stop-color="#C19561" stop-opacity="0.44" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="current-book-info__img">
              <picture>
                <source srcset="<?= get_field('single_2_img')['url'] ?>" type="image/webp"><img
                  src="<?= get_field('single_2_img')['url'] ?>" alt="book" />
              </picture>
            </div>
            <div class="current-book-info__content">
              <div class="current-book-info__decor">
                <svg width="735" height="633" viewBox="0 0 735 633" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M647.089 92.3951C748.165 221.355 761.927 362.17 684.597 477.499C629.356 559.885 530.468 602.121 416.591 626.371C228.923 666.336 8.52429 516.903 39.4737 304.876C46.1971 258.816 73.2916 217.773 111.536 180.552C143.76 149.189 91.5047 96.8014 0.596462 138.404C40.1703 105.932 110.485 104.201 153.888 106.804C177.887 108.243 202.057 101.381 220.572 86.0427C241.296 68.8738 268.819 47.1149 287.963 35.9368C416.591 -19.5338 547.596 -15.6817 647.089 92.3951Z"
                    fill="#FFFDFA" />
                </svg>
              </div>
              <div class="current-book-info__text-sm">
                <p><?= get_field('single_2_txt') ?></p>
              </div>
              <div class="current-book-info__decor-text">
                "<?php the_title() ?>"
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="current-book__slider-review">
        <div class="review-slider">
          <div class="container">
            <div class="review-slider__box">
              <div class="review-slider__wrapper">
                <h2 class="review-slider__title"><?= get_field('single_3_title') ?></h2>

                <div class="review-slider__slider">
                  <div class="review-swiper swiper">
                    <div class="swiper-wrapper">
                      <?php foreach (get_field('single_3_feedbacks') as $kay => $feedback): ?>

                        <div class="swiper-slide">
                          <div class="review-slide">
                            <div class="review-slide__top">
                              <div class="review-slide__avatar">
                                <picture>
                                  <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp"><img
                                    src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="avatar" />
                                </picture>
                              </div>
                              <div class="review-slide__head">
                                <div class="review-slide__col">
                                  <h3 class="review-slide__title"><?= get_field('summary', $feedback) ?></h3>
                                  <div class="review-slide__line">
                                    <div class="review-slide__name"><?= $feedback->post_title ?></div>
                                  </div>
                                </div>
                                <div class="review-slide__date"><?= get_field('date', $feedback) ?></div>
                              </div>
                            </div>
                            <div class="review-slide__body">
                              <div class="review-slide__text">

                                <p>
                                  <?= mb_substr($feedback->post_content, 0, 200, 'UTF-8') . (mb_strlen($feedback->post_content, 'UTF-8') > 200 ? '...' : '') ?>
                                </p>

                              </div>
                            </div>
                     

                            <div id="review-modal<?= $kay; ?>" class="review-popup" style="display:none;">
                              <div class="review-popup__close" data-fancybox-close>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M21.75 0.75L0.75 21.75M0.75 0.75L21.75 21.75" stroke="#9F596E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                              </div>
                              <div class="review-popup__head">
                                <div class="review-popup__avatar">
                                  <picture>
                                    <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp">
                                    <img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="<?= esc_attr($feedback->post_title) ?>" />
                                  </picture>
                                </div>
                                <div class="review-popup__info">
                                  <div class="review-popup__quote"><?= get_field('summary', $feedback) ?></div>
                                  <div class="review-popup__name"><?= $feedback->post_title ?></div>
                                  <div class="review-popup__date"><?= get_field('date', $feedback) ?></div>
                                </div>
                              </div>
                              <div class="review-popup__body">
                                <p><?= $feedback->post_content ?></p>
                              </div>
                            </div>
                            <div class="review-slide__bottom">
                              <button class="btn-lg btn-lg--accent" data-fancybox="" data-src="#review-modal<?= $kay; ?>">
                                Читать полностью
                              </button>
                            </div>
                          </div>
                        </div>
                      <?php endforeach; ?>

                    </div>
                  </div>
                  <div class="review-slider__nav">
                    <button type="button" class="review-button-prev slider-button-prev"></button>
                    <button type="button" class="review-button-next slider-button-next"></button>
                  </div>
                </div>
                <div class="review-pagination slider-pagination" data-da=".review-slider__nav,1023.98,1"></div>



              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="current-book__slider-readers">
        <div class="readers-slider">
          <div class="readers-slider__title"> <?= get_field('single_4_title') ?></div>
          <div class="reader-slider__slider">
            <div class="reader-swiper swiper">
              <div class="swiper-wrapper">
                <?php foreach (get_field('single_4_gallery') as $imageLink): ?>
                  <div class="swiper-slide">
                    <div class="reader-slide">
                      <picture>
                        <source srcset="<?= $imageLink ?>" type="image/webp"><img src="<?= $imageLink ?>" alt="item" />
                      </picture>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="reader-slider__slider-nav slider-nav">
              <button type="button" class="reader-button-prev slider-button-prev"></button>
              <button type="button" class="reader-button-next slider-button-next"></button>
            </div>
            <div class="reader-pagination slider-pagination" data-da=".reader-slider__slider-nav,1023.98,1"></div>
          </div>
          <div class="readers-slider__actions">
            <a href="<?= get_field('buy_text_link') ?>"
              class="btn-lg btn-lg--accent"><?= get_field('buy_text_text') ?></a>
            <a href="<?= get_field('single_1_btn_2_link') ?>" class="btn-lg"><?= get_field('single_1_btn_2_text') ?></a>
            <a href="<?= get_field('single_1_btn_3_link') ?>" class="btn-lg"><?= get_field('single_1_btn_3_text') ?></a>
          </div>
        </div>
      </div>
      <div class="current-book__facts">
        <section class="book-fact">
          <h2 class="book-fact__title"><?= get_field('single_5_title') ?></h2>
          <ol class="book-fact__list">
            <?php foreach (get_field('single_6_facts') as $fact): ?>
              <li><?= $fact['fact'] ?></li>
            <?php endforeach; ?>
          </ol>
          <div class="book-fact__bonus">
            <div class="fact-bonus">
              <div class="fact-bonus__content">
                <div class="fact-bonus__title"><?= get_field('single_6_title') ?></div>
                <div class="fact-bonus__text">
                  <p><?= get_field('single_6_text') ?></p>
                </div>
                <div class="fact-bonus__control">
                  <a href="<?= get_field('single_6_btn_link') ?>"
                    class="btn-lg btn-lg--accent"><?= get_field('single_6_btn_text') ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div class="current-book__bottom">
      <div class="current-bottom" style="background-image: url(<?= get_field('single_7_pre_foot_image')['url'] ?>)">
        <div class="container">
          <div class="current-bottom__content">
            <div class="current-bottom__text">
              <p><?= get_field('single_7_pre_foot_text') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<style>
  .review-popup {
    position: relative;
    padding: 70px;
    border-radius: 16px;
    overflow: hidden;
    max-width: 1070px;
    width: 90vw;
    background-color: #ffeef2;
  }

  .review-popup__close {
    position: absolute;
    top: 24px;
    right: 24px;
    cursor: pointer;
    z-index: 10;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.2s;
  }

  .review-popup__close:hover {
    background: rgba(159, 89, 110, 0.1);
  }

  .review-popup__head {
    padding-bottom: 60px;
    display: flex;
    align-items: flex-start;
    gap: 50px;
  }

  .review-popup__avatar {
    flex-shrink: 0;
    width: 130px;
    height: 130px;
    border-radius: 16px;
    overflow: hidden;
  }

  .review-popup__avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 16px;
  }

  .review-popup__info {
    flex: 1;
  }

  .review-popup__quote {
    font-family: 'lemurmure';
    font-style: normal;
    font-weight: 600;
    font-size: 45px;
    line-height: 54px;
    letter-spacing: 0.02em;
    color: #9F596E;
  }

  .review-popup__name {
    padding-top: 21px;
    font-style: normal;
    font-weight: 700;
    font-size: 25px;
    line-height: 140%;
    color: #54262B;
  }

  .review-popup__date {
    padding-top: 8px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 140%;
    color: #9F596E;
  }

  .review-popup__body {
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 140%;
    color: #54262B;
  }
</style>

<?php get_footer(); ?>