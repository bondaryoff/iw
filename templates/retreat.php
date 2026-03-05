<?php
/* Template name: Ретриты */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>




<main class="page">
  <div class="current-retreat">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
          <li><span><?php the_title() ?></span></li>
        </ul>
      </div>
    </div>
    <div class="current-retreat__section my-retreat-hero__section">
      <div class="my-retreat-hero">
        <div class="container">
          <div class="my-retreat-hero__head">
            <h1 class="my-retreat-hero__title"><?= get_field('0_zagolovok') ?></h1>
            <div class="my-retreat-hero__decor-text"><?= get_field('1_label') ?></div>
          </div>
        </div>
        <div class="my-retreat-hero__img">
          <span class="my-retreat-hero__substract"></span>
          <span class="my-retreat-hero__substract-bottom"></span>
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="my-retreat" />
        </div>
        <div class="container">
          <div class="my-retreat-hero__bottom">
            <div class="my-retreat-hero__block">
              <div class="my-retreat-hero__text"><?= get_field('2_l_1_t') ?></div>
              <div class="my-retreat-hero__actions">
                <a href="<?= get_field('2_l_btn_1_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('2_l_btn_1_t') ?></a>
                <a href="<?= get_field('2_l_btn_2_link') ?>" class="btn-lg"><?= get_field('2_l_btn_2_t') ?></a>
              </div>
            </div>
            <div class="my-retreat-hero__block">
              <div class="my-retreat-hero__text"><?= get_field('2_r_1_text') ?></div>
              <div class="my-retreat-hero__actions">
                <a href="<?= get_field('2_r_btn_1_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('2_r_btn_1_t') ?></a>
                <a href="<?= get_field('2_r_btn_2_link') ?>" class="btn-lg"><?= get_field('2_r_btn_2_t') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="current-retreat__section retreat-this__section">
      <div class="container">
        <section class="retreat-this">
          <h2 class="retreat-this__title"><?= get_field('3_title') ?></h2>

          <div class="retreat-this__boxes">
            <div class="retreat-this__box">
              <div class="retreat-this__box-items">
                <div class="retreat-this__box-item"><?= get_field('l_t_1') ?></div>
                <div class="retreat-this__box-item"><?= get_field('l_t_2') ?></div>
                <div class="retreat-this__box-item"><?= get_field('l_t_3') ?></div>
                <div class="retreat-this__box-item"><?= get_field('l_t_4') ?></div>
              </div>
            </div>
            <div class="retreat-this__img">
              <div class="retreat-this__img-vector">
                <svg width="1600" height="530" viewBox="0 0 1600 530" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 45.5C236.806 -69.1934 410.542 66.0698 383.75 116.186C372.788 136.69 343.187 116.186 366.366 100.139C410.646 77.4031 506.956 200.601 654.5 90.5001C679.908 65.9837 727.654 54.1321 770 47.0001C782.924 111.671 589.954 377.936 622.673 436.681C661.899 507.109 871.848 574.418 978.828 487.942C1068.04 415.83 1050.59 374.276 1104.53 299.939C1148.73 239.027 1240.48 251.554 1240.48 285.571C1240.48 304.126 1223.1 313.653 1215.08 299.939C1201.21 276.236 1374.84 121.26 1599.5 127.5" stroke="url(#paint0_linear_1_3705)" stroke-width="1.15895" />
                  <defs>
                    <linearGradient id="paint0_linear_1_3705" x1="1518.19" y1="126.438" x2="-5.50967e-05" y2="113" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#C19561" stop-opacity="0.28" />
                      <stop offset="0.485109" stop-color="#8C5903" />
                      <stop offset="1" stop-color="#C19561" stop-opacity="0.1" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <img src="<?= get_field('3_image')['url'] ?>" alt="retro" />
            </div>
            <div class="retreat-this__box">
              <div class="retreat-this__box-items">
                <div class="retreat-this__box-item"><?= get_field('r_t_1') ?></div>
                <div class="retreat-this__box-item"><?= get_field('r_t_2') ?></div>
                <div class="retreat-this__box-item"><?= get_field('r_t_3') ?></div>
              </div>
            </div>
          </div>
          <div class="retreat-this__text">
            <p><?= get_field('r_t_4') ?></p>
          </div>
        </section>
      </div>
    </div>
    <div class="current-retreat__section retreat-past__section">
      <div class="container">
        <div class="retreat-past">
          <h2 class="retreat-past__title"><?= get_field('4_title') ?></h2>
          <div class="retreat-past__content">
            <div class="retreat-past__text"><?= get_field('4_text') ?></div>
            <a href="<?= get_field('4_btn_link') ?>" class="btn-lg btn-lg--accent" data-da=".retreat-past__text,1023.98,last"><?= get_field('4_btn_t') ?></a>
          </div>
          <div class="retreat-past__slider slider">
            <div class="retreats-swiper swiper">
              <div class="swiper-wrapper">
                <?php $gallery = get_field('4_gallery'); ?>
                <?php foreach ($gallery as $photoLink): ?>
                  <div class="swiper-slide">
                    <div class="retreats-slide">
                      <img src="<?= $photoLink ?>" alt="school" />
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="slider-nav slider-nav--lg">
              <button type="button" class="retreats-button-prev slider-button-prev"></button>
              <button type="button" class="retreats-button-next slider-button-next"></button>
            </div>
            <div class="slider__pagination" data-da=".slider-nav,1023.98,1">
              <div class="retreats-pagination slider-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="current-retreat__section current-retreat-check-list__section" id="current-retreat-check-list__section">
      <div class="container">
        <div class="check-list">
          <div class="check-list__waves">
            <div class="check-list__wave">
              <svg width="1600" height="267" viewBox="0 0 1600 267" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-23.3384 256.765C69.642 264.691 256.405 278.815 543.151 238.851C901.583 188.895 1230.16 -19.955 1623.18 2.73234" stroke="#B05B64" stroke-opacity="0.3" />
              </svg>
            </div>
            <div class="check-list__wave">
              <svg width="1600" height="109" viewBox="0 0 1600 109" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-9.02734 0.773926C80.2381 27.9742 259.915 80.8535 548.677 101.755C909.629 127.882 1005.52 59.3383 1654.2 96.783" stroke="#B05B64" stroke-opacity="0.3" />
              </svg>
            </div>
          </div>
          <div class="check-list__content">
            <h2 class="check-list__title"><?= get_field('5_title') ?></h2>
            <div class="check-list__text">
              <p><?= get_field('5_text') ?></p>
            </div>
            <a href="<?= get_field('5_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('5_btn_t') ?></a>
          </div>
          <div class="check-list__img">
            <img src="<?= get_field('5_img')['url'] ?>" alt="check list" />
          </div>
        </div>
      </div>
    </div>
    <div class="current-retreat__section retreat-waiting__section">
      <div class="container">
        <div class="retreat-waiting">
          <h2 class="retreat-waiting__title"> <?= get_field('6_title') ?></h2>
          <dl class="retreat-waiting__list">
            <div class="retreat-waiting__block">
              <dt><?= get_field('6_label_1') ?></dt>
              <dd><?= get_field('6_txt_1') ?></dd>
            </div>
            <div class="retreat-waiting__block">
              <dt><?= get_field('6_label_2') ?></dt>
              <dd><?= get_field('6_txt_2') ?></dd>
            </div>
            <div class="retreat-waiting__block">
              <dt><?= get_field('6_label_3') ?></dt>
              <dd><?= get_field('6_txt_3') ?></dd>
            </div>
            <div class="retreat-waiting__block">
              <dt><?= get_field('6_label_4') ?></dt>
              <dd><?= get_field('6_txt_4') ?></dd>
            </div>
            <div class="retreat-waiting__block">
              <dt><?= get_field('6_label_5') ?></dt>
              <dd><?= get_field('6_txt_5') ?></dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="current-retreat__section current-retreat-review__section">
      <div class="container">
        <div class="current-retreat-review">
          <div class="current-retreat-review__vector">
            <svg width="1600" height="563" viewBox="0 0 1600 563" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 358.916C61.1966 405.506 199.385 470.731 262.564 358.916C341.538 219.148 94.359 -25.4456 70.7692 3.33016C47.1795 32.1059 147.077 335.652 344 515.5C540.923 695.348 238.974 299.31 433.846 240.73C628.718 182.151 583.872 420.361 549 425.5C514.128 430.639 262.564 198.319 315.897 114.048C369.231 29.7758 1046.86 562.29 1200 472.992C1309.74 408.999 1097.44 296.226 1200 240.73C1282.05 196.333 1500.85 237.99 1600 264.368" stroke="url(#paint0_linear_1_3645)" stroke-opacity="0.8" />
              <defs>
                <linearGradient id="paint0_linear_1_3645" x1="1600" y1="109" x2="-0.0119571" y2="119.711" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#C19561" stop-opacity="0.61" />
                  <stop offset="0.767353" stop-color="#C19561" stop-opacity="0.32" />
                  <stop offset="0.998258" stop-color="#AF3149" stop-opacity="0.28" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h2 class="current-retreat-review__title"><?= get_field('7_title') ?></h2>
          <div class="current-retreat-review__video">
            <div class="video-player">
              <div class="video-player__block">
                <?php $videoPost = get_field('7_video'); ?>
                <div class="video-player__frame">
                  <img src="<?= get_the_post_thumbnail_url($videoPost) ?>" alt="video" />
                </div>
                <div class="video-player__layout">
                  <button class="video-player__play" data-width="640" data-height="360" data-fancybox data-src="<?= $videoPost->post_content; ?>" allowfullscreen="true">
                    <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z" fill="#A96A7D" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>


          <div class="review-slider__box">
            <div class="review-slider__wrapper">
              <div class="review-slider__slider">
                <div class="review-swiper swiper review-swiper-no-title">
                  <div class="swiper-wrapper">
                    <?php foreach (get_field('7_feedbacks') as $kay => $feedback): ?>

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


                          <!-- <div id="review-modal<?= $kay; ?>" class="review-popup" style="display:none;max-width:600px;">
                            <p><?= $feedback->post_content ?></p>
                          </div> -->

                          <div id="review-modal<?= $kay; ?>"  class="author-popup" style="display:none;">
                            <div class="author-popup__close" data-fancybox-close>
                              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.75 0.75L0.75 21.75M0.75 0.75L21.75 21.75" stroke="#9F596E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                            <div class="author-popup__head">
                              <div class="author-popup__avatar">
                                <picture>
                                  <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp">
                                  <img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="<?= get_the_title($feedback) ?>" />
                                </picture>
                              </div>
                              <div class="author-popup__info">
                                <div class="author-popup__quote"><?= get_field('summary', $feedback) ?></div>
                                <div class="author-popup__name"><?= get_the_title($feedback) ?></div>
                              </div>
                            </div>
                            <div class="author-popup__body">
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
    <div class="current-retreat__section current-retreat-invite-writer__section" id="current-retreat-invite-writer__section">
      <div class="container">
        <div class="invite-writer">
          <div class="invite-writer__vector">
            <svg width="1598" height="617" viewBox="0 0 1598 617" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M-9 31.9339C227.806 -82.7595 210.677 152.865 183.884 202.981C172.922 223.485 143.321 202.981 166.5 186.934C672.222 -72.7286 308 879.82 769 542.82C832.5 496.401 993 297.585 1146 321.32C1299 345.056 1318 495.32 1285.5 485.82C1213.5 460.32 1442 292.82 1597 578.32" stroke="url(#paint0_linear_1_3845)" stroke-width="1.15895" />
              <defs>
                <linearGradient id="paint0_linear_1_3845" x1="1607.5" y1="431.934" x2="16.5" y2="437.434" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#C19561" stop-opacity="0.28" />
                  <stop offset="0.347098" stop-color="#B07775" stop-opacity="0.48" />
                  <stop offset="0.608923" stop-color="#A96A7D" stop-opacity="0.13" />
                  <stop offset="1" stop-color="#C19561" stop-opacity="0.44" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <h2 class="invite-writer__title"><?= get_field('8_title') ?></h2>
          <div class="invite-writer__body">
            <div class="invite-writer__content">
              <div class="invite-writer__text">
                <p><?= get_field('8_text') ?></p>
              </div>
              <a href="<?= get_field('8_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('8_btn_t') ?></a>
            </div>
            <div class="invite-writer__decor">
              <div class="invite-writer__decor-blob">
                <svg width="523" height="450" viewBox="0 0 523 450" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M23 335.82C-22.5841 222.026 4.09578 168.237 83.7721 101.617C140.689 54.0267 213.461 -5.80554 300.312 0.642208C443.444 11.2681 570.428 164.77 503.814 310.554C473.135 377.693 381.433 409.452 289.415 432.424C171.967 461.745 96.6657 467.029 23 335.82Z" fill="#FFEEF2" fill-opacity="0.5" />
                </svg>
              </div>
              <div class="invite-writer__decor-text"><?= get_field('8_label_1') ?></div>
              <div class="invite-writer__decor-text"><?= get_field('8_label_2') ?></div>
              <div class="invite-writer__decor-text"><?= get_field('8_label_3') ?></div>
              <div class="invite-writer__decor-text"><?= get_field('8_label_4') ?></div>
              <div class="invite-writer__decor-text"><?= get_field('8_label_5') ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="current-retreat__section retreat-themes__section">
      <div class="container">
        <div class="retreat-themes">
          <div class="retreat-themes__head">
            <h2 class="retreat-themes__title"><?= get_field('9_title') ?></h2>
          </div>
          <div class="retreat-themes__body">
            <div class="retreat-themes__content">
              <div class="retreat-themes__text-sm" data-da=".retreat-themes__head,1023.98,1"><?= get_field('9_text') ?></div>
              <div class="retreat-themes__list-wrap">
                <div class="retreat-themes__blob">
                  <svg width="467" height="469" viewBox="0 0 467 469" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.7384 170.123C12.5413 108.268 43.5583 51.8611 98.0106 20.7483C154.806 -11.7033 226.79 -1.59868 286.454 24.9318C342.037 49.6478 433.087 75.8668 457 131.91C479.899 185.579 458.583 307.914 432.049 359.974C407.275 408.58 331.926 389.578 284.417 416.252C229.948 446.834 179.29 482.218 119.998 462.91C60.8242 443.64 64.9741 385.382 44.6208 326.447C27.7954 277.728 -7.13937 220.955 1.7384 170.123Z" fill="#FFEEF2" />
                  </svg>
                </div>
                <div class="retreat-themes__vector">
                  <svg width="515" height="436" viewBox="0 0 515 436" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M148.911 16.4663C87.429 45.8823 22.8216 85.8603 6.26054 151.888C-11.0132 220.757 20.6411 293.029 65.8526 347.612C107.972 398.462 171.796 422.34 237.376 430.909C300.178 439.116 369.808 436.411 416.442 393.424C459.984 353.289 443.748 285.284 457.705 227.814C473.707 161.925 540.45 93.7469 502.896 37.4367C465.417 -18.7622 377.675 10.5108 310.115 6.50849C254.266 3.19991 199.436 -7.70771 148.911 16.4663Z" stroke="#A96A7D" stroke-opacity="0.5" />
                  </svg>
                </div>
                <ul class="retreat-themes__list">
                  <?php foreach (get_field('9_themes') as $theme): ?>
                    <li><?= $theme->post_title ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <div class="retreat-themes__images">
              <div class="retreat-themes__img">
                <img src="<?= get_field('9_img_1')['url'] ?>" alt="theme" />
              </div>
              <div class="retreat-themes__img">
                <img src="<?= get_field('9_img_2')['url'] ?>" alt="theme" />
              </div>
              <div class="retreat-themes__img">
                <img src="<?= get_field('9_img_3')['url'] ?>" alt="theme" />
              </div>
            </div>
          </div>
          <div class="retreat-themes__bottom">
            <div class="retreat-themes__text">
              <p><?= get_field('10_text_1') ?></p>
            </div>
            <div class="retreat-themes__actions">
              <a href="<?= get_field('btn_mainfest_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('btn_mainfest_text', 'options') ?></a>
              <a href="<?= get_field('10_prev_link') ?>" class="btn-lg font-bold"><?= get_field('10_prev_txt') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="current-retreat-bottom">
      <div class="retreat-bottom__img">
        <div class="container">
          <div class="current-retreat-bottom__inner">
            <div class="current-retreat-bottom__content">
              <div class="current-retreat-bottom__text">
                <p><?= get_field('10_text_2') ?></p>
              </div>
              <div class="current-retreat-bottom__action">
                <a href="<?= get_field('8_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('8_btn_t') ?></a>
              </div>
            </div>
          </div>
          <div class="retreat-bottom__quote">
            <span><?= get_field('10_pre_footer_txt') ?></span>
          </div>
        </div>
        <img src="<?= $assetsPath ?>img/current-retreat-bottom.webp" alt="bottom" />
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>