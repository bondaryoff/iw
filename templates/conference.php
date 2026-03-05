<?php
/* Template name: conference */
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
        <h1 class="hero-conference__title"><?= the_content() ?></h1>
        <div class="hero-conference__text-decor"><?= get_field('1_label') ?></div>
      </div>
    </div>
    <div class="hero-conference__body">
      <div class="hero-conference__btn-wrap">
        <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
      </div>

      <div class="hero-conference__img hero-conference__img--tablet">
        <picture>
          <source srcset="<?= get_field('1_main_image_mobile')['url'] ?>" type="image/webp"><img
            src="<?= get_field('1_main_image_mobile')['url'] ?>" alt="conference" />
        </picture>
      </div>
      <div class="hero-conference__img hero-conference__img--desktop">
        <picture>
          <source srcset="<?= get_the_post_thumbnail_url() ?>" type="image/webp"><img
            src="<?= get_the_post_thumbnail_url() ?>" alt="conference" />
        </picture>
      </div>
    </div>
    <div class="container">
      <div class="hero-conference__bottom">
        <div class="hero-conference__bottom-content">
          <div class="hero-conference__text">
            <p><?= get_field('2_l_1_t') ?></p>
            <p><?= get_field('2_l_2_t') ?></p>
            <p><?= get_field('2_l_3_t') ?></p>
          </div>
          <div class="hero-conference__bottom-text-decor"><?= get_field('2_l_4_t') ?></div>
          <div class="hero-conference__text-lg">
            <p><?= get_field('2_l_5_t') ?></p>
          </div>
        </div>
        <div class="hero-conference__bottom-items" data-da=".hero-conference__bottom-content,767.98,1">
          <div class="hero-conference__item">
            <p><b><?= get_field('2_r_1_text') ?></b></p>
            <svg width="248" height="223" viewBox="0 0 248 223" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M88.3378 184.903C58.8166 171.564 14.8389 175.622 3.72652 145.147C-7.38621 114.67 25.5819 87.4871 42.7658 59.9233C56.7814 37.4418 67.3969 9.36732 92.8549 2.18077C117.479 -4.77031 139.357 15.5229 162.628 26.0874C186.378 36.8693 214.088 41.3813 227.94 63.5057C244.631 90.1625 252.786 123.54 242.236 153.231C230.889 185.16 205.055 214.327 171.921 221.146C140.971 227.516 117.106 197.902 88.3378 184.903Z"
                stroke="#F0CEDB" stroke-width="1.26511" />
            </svg>
            <svg width="225" height="216" viewBox="0 0 225 216" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M90.9995 205.497C122.796 211.695 177.696 223.927 204.39 205.497C231.085 187.067 219.919 145.822 221.848 113.398C223.422 86.952 231.004 57.9111 214.396 37.3216C198.332 17.4068 184.593 7.84544 159.5 3.00019C133.89 -1.94476 92.8313 -0.836848 68.7329 9.19576C39.6978 21.2836 13.7364 43.7908 5.16631 74.1126C-4.05007 106.721 0.148931 145.457 23.2309 170.187C44.7919 193.288 60.0135 199.458 90.9995 205.497Z"
                fill="#FFEEF2" />
            </svg>
          </div>
          <div class="hero-conference__item">
            <p><b><?= get_field('2_r_2_text') ?></b></p>
            <svg width="268" height="218" viewBox="0 0 268 218" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M158.012 178.957C126.797 187.319 103.828 223.539 72.4101 215.964C37.8471 207.631 9.03768 176.189 1.98058 141.337C-4.67396 108.473 19.9791 79.492 39.2162 52.0343C54.8516 29.7175 73.1258 7.71771 99.7269 1.82091C124.484 -3.66709 148.106 9.8787 169.749 23.0983C189.152 34.9493 201.479 52.5785 213.952 71.5891C233.984 102.12 279.692 132.571 262.821 164.951C245.889 197.45 193.405 169.475 158.012 178.957Z"
                stroke="#F0CEDB" stroke-width="1.15677" />
            </svg>

            <svg width="257" height="221" viewBox="0 0 257 221" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M110.581 12.6376C145.047 14.5727 180.446 -5.52589 209.796 12.6376C242.084 32.6193 260.819 74.1133 256.344 111.807C252.124 147.351 217.432 168.512 188.745 189.936C165.429 207.348 139.541 223.559 110.581 220.663C83.628 217.967 64.1816 196.35 46.6341 175.725C30.9034 157.234 17.1292 136.537 9.05321 106.534C0.977179 76.5311 -9.95766 39.8425 17.972 12.6376C46.0036 -14.6665 71.502 10.4435 110.581 12.6376Z"
                fill="#FFEEF2" />
            </svg>
          </div>
          <div class="hero-conference__item">
            <p><b><?= get_field('2_r_3_text') ?></b></p>
            <svg width="243" height="216" viewBox="0 0 243 216" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M199.767 63.436C218.954 88.6575 247.91 114.037 241.19 144.967C234.466 175.913 198.476 188.572 169.717 201.74C145.913 212.64 120.28 218.273 94.8313 211.984C69.9876 205.844 50.8379 188.673 35.0846 168.467C17.143 145.455 -1.53024 120.563 0.904792 91.5109C3.60356 59.3123 20.4068 27.5807 48.2578 11.2991C75.4087 -4.57305 109.295 0.486673 139.078 10.7357C165.395 19.7917 182.901 41.2646 199.767 63.436Z"
                stroke="#F0CEDB" stroke-width="1.25513" />
            </svg>

            <svg width="232" height="226" viewBox="0 0 232 226" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M110.512 16.7161C142.238 8.23997 177.959 -9.54116 204.97 9.06539C231.995 27.6821 229.978 67.1658 231.293 99.917C232.382 127.026 227.702 153.817 211.664 175.742C196.007 197.147 172.013 208.754 146.446 215.911C117.327 224.062 86.1184 232.176 59.2223 218.416C29.4132 203.166 5.59876 174.577 0.941765 141.472C-3.59814 109.199 14.5791 78.7006 36.1183 54.1762C55.1502 32.5066 82.6219 24.1672 110.512 16.7161Z"
                fill="#FFEEF2" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php if(get_field('3_title')): ?>

  <section class="example">
    <div class="container">
      <div class="example__inner">
        <h2 class="example__title"><?= get_field('3_title') ?></h2>
        <div class="example__grid">
          <div class="example-block">
            <div class="example-block__title"><?= get_field('3_l_title') ?></div>
            <div class="example-block__body">
              <div class="video-player">
                <div class="video-player__block">
                  <?php $videoPost = get_field('3_l_video')[0]; ?>
                  <div class="video-player__frame">
                    <picture>
                      <source srcset="<?= get_the_post_thumbnail_url($videoPost) ?>" type="image/webp"><img
                        src="<?= get_the_post_thumbnail_url($videoPost) ?>" alt="video" />
                    </picture>
                  </div>
                  <div class="video-player__layout">
                    <button class="video-player__play" data-width="640" data-height="360" data-fancybox
                      data-src="<?= $videoPost->post_content; ?>" allowfullscreen="true">
                      <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z"
                          fill="#A96A7D" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="example-block__bottom">
              <p><?= $videoPost->post_title; ?></p>
            </div>
          </div>

          <div class="example-block">
            <div class="example-block__title"><?= get_field('3_r_title') ?></div>
            <div class="example-block__body">
              <div class="audio-block">
                <div class="audio-block__micro">
                  <div class="audio-block__micro-img">
                    <img src="<?= $assetsPath ?>img/icons/micro.svg" alt="micro" />
                  </div>
                  <svg width="269" height="250" viewBox="0 0 269 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M231.051 89.6653C248.882 121.066 277.723 154.131 265.43 188.037C253.131 221.962 210.562 230.784 176.082 241.281C147.543 249.97 117.739 252.433 89.9565 241.46C62.8344 230.748 43.8201 208.445 29.1029 183.231C12.3413 154.515 -4.9607 123.565 2.20742 91.127C10.1519 55.1757 33.9534 21.8968 67.8815 7.74581C100.957 -6.04944 138.454 4.81788 170.53 20.9215C198.872 35.1506 215.376 62.0622 231.051 89.6653Z"
                      stroke="#F0CEDB" />
                  </svg>
                  <svg width="269" height="249" viewBox="0 0 269 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M37.949 89.0906C20.1177 120.491 -8.72318 153.556 3.56967 187.462C15.8692 221.387 58.4378 230.209 92.9175 240.706C121.457 249.395 151.261 251.858 179.044 240.886C206.166 230.174 225.18 207.87 239.897 182.657C256.659 153.94 273.961 122.99 266.793 90.5523C258.848 54.601 235.047 21.3221 201.118 7.1711C168.043 -6.62414 130.546 4.24318 98.4699 20.3468C70.128 34.5759 53.624 61.4875 37.949 89.0906Z"
                      stroke="#F0CEDB" />
                  </svg>
                </div>
                <div class="audio-player">
                  <?php if (get_field('3_r_audio')) : ?>
                  <div class="audio-item__player" data-audio-player>
                    <!-- Прихований нативний audio елемент -->
                    <audio style="display: none;" src="<?= get_field('3_r_audio'); ?>"></audio>

                    <div class="audio-player audio-player--sm">
                      <div class="audio-player__custom">
                        <!-- Кнопка Play/Pause -->
                        <button class="audio-player__play" data-play-btn>
                          <svg class="play-icon" width="23" height="28" viewBox="0 0 23 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M22.3795 13.7329C22.3803 14.0915 22.2918 14.4443 22.1224 14.7569C21.9531 15.0695 21.7087 15.3313 21.4131 15.5167L3.09244 27.1548C2.78356 27.3512 2.42979 27.4584 2.06766 27.4654C1.70553 27.4723 1.34818 27.3788 1.03251 27.1944C0.719844 27.0129 0.459385 26.7481 0.277917 26.4274C0.0964498 26.1067 0.000522431 25.7416 0 25.3696V2.09614C0.000522431 1.72416 0.0964498 1.35904 0.277917 1.03833C0.459385 0.717611 0.719844 0.452875 1.03251 0.271342C1.34818 0.0869456 1.70553 -0.00660141 2.06766 0.000362248C2.42979 0.0073259 2.78356 0.114548 3.09244 0.310954L21.4131 11.949C21.7087 12.1345 21.9531 12.3963 22.1224 12.7088C22.2918 13.0214 22.3803 13.3742 22.3795 13.7329Z"
                              fill="#A96A7D" />
                          </svg>
                          <svg class="pause-icon" style="display: none;" width="23" height="28" viewBox="0 0 23 28"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0" y="0" width="8" height="28" fill="#A96A7D" />
                            <rect x="15" y="0" width="8" height="28" fill="#A96A7D" />
                          </svg>
                        </button>

                        <!-- Прогрес бар -->
                        <div class="audio-player__progress" data-progress-container>
                          <span class="audio-player__progress-bar" data-progress-bar style="width: 0;"></span>
                          <span class="audio-player__progress-loaded" data-progress-loaded style="width: 0;"></span>
                        </div>

                        <!-- Час відтворення -->
                        <div class="audio-player__time">
                          <span data-current-time>0:00</span>
                          /
                          <span data-duration>0:00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                </div>

              </div>

            </div>
            <div class="example-block__bottom">
              <p><?= isset($postTitle) ? $postTitle : '' ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>

  <section class="topic">
    <div class="container">
      <div class="topic__inner">
        <div class="topic__blob">
          <svg width="1472" height="1424" viewBox="0 0 1472 1424" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M761.532 1328.62C559.197 1379.9 330.715 1490 160.56 1369.54C-9.68792 1249.01 6.35653 998.227 0.668767 789.962C-4.03924 617.577 27.8925 447.682 131.613 309.639C232.87 174.877 386.314 103.063 549.396 59.66C735.134 10.2273 934.149 -38.7954 1103.97 50.8529C1292.18 150.211 1441.21 333.858 1468.11 544.645C1494.33 750.133 1376.31 942.49 1237.41 1096.6C1114.68 1232.78 939.4 1283.54 761.532 1328.62Z"
              fill="#FFF6F8" />
          </svg>
        </div>
        <h2 class="topic__title"><?= get_field('4_title') ?></h2>
        <div class="topic__accordion">
          <div data-spollers class="spollers" data-one-spoller>

            <?php foreach (get_field('4_themes') as $theme): ?>
            <details class="spollers__item">
              <summary class="spollers__title">
                <?= get_the_title($theme) ?>
                <div class="spollers__img">
                  <picture>
                    <source srcset="<?= get_the_post_thumbnail_url($theme) ?>" type="image/webp"><img
                      src="<?= get_the_post_thumbnail_url($theme) ?>" alt="topic" />
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
            <p><?= get_field('4_topic') ?></p>
          </div>
          <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
        </div>
      </div>
    </div>
  </section>

  <div class="review-slider">
    <div class="container">

      <div class="review-slider__box">
        <div class="review-slider__wrapper">
          <h2 class="review-slider__title"><?= get_field('5_title') ?></h2>

          <div class="review-slider__slider">
            <div class="review-swiper swiper">
              <div class="swiper-wrapper">
                <?php foreach (get_field('5_feedbacks') as $kay => $feedback): ?>

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


                    <!-- <div id="review-modal<?= $kay; ?>"  class="review-popup"  style="display:none;max-width:600px;">
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

  <div class="conference-bottom">
    <div class="container">
      <div class="conference-bottom__content">
        <h2 class="conference-bottom__title"><?= get_field('6_title') ?></h2>
        <div class="conference-bottom__actions">
          <a href="<?= get_field('btn_bio_link', 'options') ?>"
            class="btn-lg"><?= get_field('btn_bio_text', 'options') ?></a>
          <a href="<?= get_field('btn_mainfest_link', 'options') ?>"
            class="btn-lg"><?= get_field('btn_mainfest_text', 'options') ?></a>
          <a href="<?= get_field('btn_connect_link', 'options') ?>"
            class="btn-lg"><?= get_field('btn_connect_text', 'options') ?></a>
        </div>
      </div>
    </div>
    <div class="conference-bottom__img">
      <div class="conference-bottom__img-container">

        <div class="conference-bottom__text-decor"><?= get_field('6_pre_footer_text') ?></div>
      </div>
      <picture>
        <source srcset="<?= get_field('6_pre_footer_img')['url'] ?>" type="image/webp"><img
          src="<?= get_field('6_pre_footer_img')['url'] ?>" alt="bottom" />
      </picture>
    </div>
  </div>

</main>
<script>
(function() {
  'use strict';

  // Ініціалізація всіх плеєрів на сторінці
  document.querySelectorAll('[data-audio-player]').forEach(initAudioPlayer);

  function initAudioPlayer(playerContainer) {
    // Отримання елементів
    const audio = playerContainer.querySelector('audio');
    const playBtn = playerContainer.querySelector('[data-play-btn]');
    const playIcon = playerContainer.querySelector('.play-icon');
    const pauseIcon = playerContainer.querySelector('.pause-icon');
    const progressBar = playerContainer.querySelector('[data-progress-bar]');
    const progressLoaded = playerContainer.querySelector('[data-progress-loaded]');
    const progressContainer = playerContainer.querySelector('[data-progress-container]');
    const currentTimeEl = playerContainer.querySelector('[data-current-time]');
    const durationEl = playerContainer.querySelector('[data-duration]');

    // Перевірка наявності всіх елементів
    if (!audio || !playBtn || !progressBar || !progressContainer) {
      console.error('Audio player elements not found');
      return;
    }

    // Play/Pause функціонал
    playBtn.addEventListener('click', togglePlay);

    function togglePlay() {
      if (audio.paused) {
        audio.play();
        playIcon.style.display = 'none';
        pauseIcon.style.display = 'block';
      } else {
        audio.pause();
        playIcon.style.display = 'block';
        pauseIcon.style.display = 'none';
      }
    }

    // Оновлення прогресу
    audio.addEventListener('timeupdate', updateProgress);

    function updateProgress() {
      const percent = (audio.currentTime / audio.duration) * 100 || 0;
      progressBar.style.width = percent + '%';
      currentTimeEl.textContent = formatTime(audio.currentTime);
    }

    // Завантаження метаданих (тривалість)
    audio.addEventListener('loadedmetadata', function() {
      durationEl.textContent = formatTime(audio.duration);
    });

    // Буферизація
    audio.addEventListener('progress', function() {
      if (audio.buffered.length > 0) {
        const bufferedEnd = audio.buffered.end(audio.buffered.length - 1);
        const percent = (bufferedEnd / audio.duration) * 100;
        progressLoaded.style.width = percent + '%';
      }
    });

    // Клік по прогрес-бару для перемотки
    progressContainer.addEventListener('click', seek);

    function seek(e) {
      const rect = progressContainer.getBoundingClientRect();
      const pos = (e.clientX - rect.left) / rect.width;
      audio.currentTime = pos * audio.duration;
    }

    // Скидання іконки при завершенні
    audio.addEventListener('ended', function() {
      playIcon.style.display = 'block';
      pauseIcon.style.display = 'none';
    });

    // Форматування часу (секунди -> мм:сс)
    function formatTime(seconds) {
      if (isNaN(seconds)) return '0:00';

      const minutes = Math.floor(seconds / 60);
      const secs = Math.floor(seconds % 60);
      return minutes + ':' + (secs < 10 ? '0' : '') + secs;
    }
  }
})();
</script>
<?php get_footer(); ?>