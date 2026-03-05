<?php
/* Template name: podcast */
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
  <section class="hero-podcast">
    <div class="container">
      <div class="hero-podcast__inner">

        <div class="hero-podcast__head">
          <h1 class="hero-podcast__title"><?php the_content() ?></h1>
          <div class="hero-podcast__head-bottom">
            <div class="hero-podcast__text-decor"><?= get_field('1_label') ?></div>
            <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
          </div>
        </div>
        <div class="hero-podcast__content">
          <div class="hero-podcast__text-lg">
            <p><?= get_field('1_txt_1') ?></p>
          </div>
          <div class="hero-podcast__text">
            <p><?= get_field('1_txt_2') ?></p>
            <br />
            <p><?= get_field('1_txt_3') ?></p>
            <br />
            <p><?= get_field('1_txt_4') ?></p>
          </div>
        </div>
        <div class="hero-podcast__img">
          <span class="hero-podcast__img-decor"></span>
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="hero" />
        </div>
      </div>
    </div>
  </section>

  <section class="topic">
    <div class="container">
      <div class="topic__inner">
        <h2 class="topic__title"><?= get_field('2_title') ?></h2>
        <div class="topic__accordion">
          <div data-spollers class="spollers" data-one-spoller>
            <?php foreach (get_field('2_themes') as $theme): ?>
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
            <p><?= get_field('2_topic') ?></p>
          </div>
          <a href="<?= get_field('1_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('1_btn_txt') ?></a>
        </div>
      </div>
    </div>
  </section>

  <section class="audio-podcast">
    <div class="container">
      <h2 class="audio-podcast__title"><?= get_field('3_title') ?></h2>
      <div data-simplebar>
        <div class="audio-podcast__list">
          <?php foreach (get_field('3_podcasts') as $audio): ?>

            <div class="audio-item">
              <div class="audio-item__name">
                <?= $audio->post_title; ?>
              </div>
              <?
              $audioUrl = get_field('audio', $audio);
              ?>

              <div class="audio-item__player" data-audio-player>
                <!-- Прихований нативний audio елемент -->
                <audio style="display: none;" src="<?= $audioUrl ?>"></audio>

                <div class="audio-player audio-player--sm">
                  <div class="audio-player__custom">
                    <!-- Кнопка Play/Pause -->
                    <button class="audio-player__play" data-play-btn>
                      <svg class="play-icon" width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.3795 13.7329C22.3803 14.0915 22.2918 14.4443 22.1224 14.7569C21.9531 15.0695 21.7087 15.3313 21.4131 15.5167L3.09244 27.1548C2.78356 27.3512 2.42979 27.4584 2.06766 27.4654C1.70553 27.4723 1.34818 27.3788 1.03251 27.1944C0.719844 27.0129 0.459385 26.7481 0.277917 26.4274C0.0964498 26.1067 0.000522431 25.7416 0 25.3696V2.09614C0.000522431 1.72416 0.0964498 1.35904 0.277917 1.03833C0.459385 0.717611 0.719844 0.452875 1.03251 0.271342C1.34818 0.0869456 1.70553 -0.00660141 2.06766 0.000362248C2.42979 0.0073259 2.78356 0.114548 3.09244 0.310954L21.4131 11.949C21.7087 12.1345 21.9531 12.3963 22.1224 12.7088C22.2918 13.0214 22.3803 13.3742 22.3795 13.7329Z" fill="#A96A7D" />
                      </svg>
                      <svg class="pause-icon" style="display: none;" width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
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

  <!-- <div class="podcast-bottom">
    <div class="container">
      <div class="podcast-bottom__content">
        <h2 class="podcast-bottom__title">Ещё о Екатерине</h2>
        <div class="podcast-bottom__actions">
          <a href="#" class="btn-lg">Биография</a><a href="#" class="btn-lg">Манифест</a><a href="#" class="btn-lg">Связаться</a>
        </div>
      </div>
    </div>
    <div class="podcast-bottom__img">
      <div class="podcast-bottom__quote">
        <span>“Хороший диалог меняет жизни”</span>
      </div>
      <div class="podcast-bottom__img-wrap--desktop">

        <img src="<?= $assetsPath  ?>img/bg/podcast-bg-bottom.webp" alt="bottom" />
      </div>

      <div class="podcast-bottom__img-wrap--mobile">

        <img src="<?= $assetsPath  ?>img/bg/podcast-bg-bottom-tablet.webp" alt="bottom" />
      </div>
    </div>
  </div> -->
  <div class="podcast-bottom">
    <div class="container">
      <div class="podcast-bottom__content">
        <h2 class="podcast-bottom__title"><?= get_field('4_title') ?></h2>
        <div class="podcast-bottom__actions">
          <a href="<?= get_field('btn_bio_link', 'options') ?>" class="btn-lg"><?= get_field('btn_bio_text', 'options') ?></a>
          <a href="<?= get_field('btn_mainfest_link', 'options') ?>" class="btn-lg"><?= get_field('btn_mainfest_text', 'options') ?></a>
          <a href="<?= get_field('btn_connect_link', 'options') ?>" class="btn-lg"><?= get_field('btn_connect_text', 'options') ?></a>
        </div>
      </div>
    </div>
    <div class="podcast-bottom__img">
      <div class="podcast-bottom__quote">
        <span><?= get_field('4_pre_footer_text') ?></span>
      </div>
      <div class="podcast-bottom__img-wrap--desktop">

        <picture>
          <source srcset="<?= get_field('4_pre_footer_img')['url'] ?>" type="image/webp"><img src="<?= get_field('4_pre_footer_img')['url'] ?>" alt="bottom" />
        </picture>
      </div>

      <div class="podcast-bottom__img-wrap--mobile">

        <picture>
          <source srcset="<?= get_field('4_pre_footer_img_mobile')['url'] ?>" type="image/webp"><img src="<?= get_field('4_pre_footer_img_mobile')['url'] ?>" alt="bottom" />
        </picture>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>