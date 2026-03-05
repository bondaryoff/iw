<?php
/* Template name: authors */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>
<main class="page">
  <div class="container">
    <div class="breadcrumbs">
      <ul class="breadcrumbs__list">
        <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'Home' ?></a></li>
        <li><span><?php the_title() ?></span></li>
      </ul>
    </div>
  </div>
  <div class="support">
    <div class="container">
      <div class="support__row">
        <div class="support__col">
          <h1 class="support__title"><?php the_content() ?></h1>
          <div class="support__items">

            <?php foreach (get_field('1_authors') as $kay => $author): ?>
              <div class="support-item">
                <div class="support-item__img">
                  <picture>
                    <source srcset="<?= get_the_post_thumbnail_url($author) ?>" type="image/webp"><img
                      src="<?= get_the_post_thumbnail_url($author) ?>" alt="support" />
                  </picture>
                </div>
                <div class="support-item__content">
                  <div class="support-item__head">
                    <div class="support-item__top">
                      <div class="support-item__name"><?= get_the_title($author) ?></div>
                      <div class="support-item__label">
                        <?= get_field('1_text_how_long') ?> <b><?= get_field('how_long', $author) ?></b>
                      </div>
                    </div>
                    <div class="support-item__title"><?= $author->post_content; ?></div>
                  </div>
                </div>
                <div class="support-item__card support-card support-card--accent">
                  <div class="support-card__left">
                    <div class="support-card__head">
                      <div class="support-card__title"><?= get_field('1_about_support'); ?></div>
                    </div>
                    <div class="support-card__text">
                      <p><?= mb_substr(get_field('about_support', $author), 0, 200, 'UTF-8') . (mb_strlen(get_field('about_support', $author), 'UTF-8') > 200 ? '...' : '') ?></p>
                    </div>
                  </div>
                  <div id="support-card__text1-<?= $kay; ?>" class="author-popup" style="display:none;">
                    <div class="author-popup__close" data-fancybox-close>
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.75 0.75L0.75 21.75M0.75 0.75L21.75 21.75" stroke="#9F596E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="author-popup__head">
                      <div class="author-popup__avatar">
                        <picture>
                          <source srcset="<?= get_the_post_thumbnail_url($author) ?>" type="image/webp">
                          <img src="<?= get_the_post_thumbnail_url($author) ?>" alt="<?= get_the_title($author) ?>" />
                        </picture>
                      </div>
                      <div class="author-popup__info">
                        <div class="author-popup__quote"><?= $author->post_content ?></div>
                        <div class="author-popup__name"><?= get_the_title($author) ?></div>
                      </div>
                    </div>
                    <div class="author-popup__body">
                      <p><?= get_field('about_support', $author) ?></p>
                    </div>
                  </div>
                  <div class="support-card__right">
                    <a href="#support-card__text1-<?= $kay; ?>" data-fancybox class="btn-lg"><?= get_field('read_more_btn_text', 'options') ?></a>
                  </div>
                </div>
                <div class="support-item__card support-card">
                  <div class="support-card__left">
                    <div class="support-card__head">
                      <div class="support-card__title"><?= get_field('1_about_books'); ?></div>
                      <div class="support-card__decor"><?= get_field('label', $author) ?></div>
                    </div>
                    <div class="support-card__text">
                      <?php
                      $text = wp_strip_all_tags(get_field('about_books', $author));
                      echo mb_substr($text, 0, 200, 'UTF-8') . (mb_strlen($text, 'UTF-8') > 200 ? '...' : '');
                      ?>
                    </div>
                  </div>
                  <div id="support-card__boock-<?= $kay; ?>" class="author-popup" style="display:none;">
                    <div class="author-popup__close" data-fancybox-close>
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.75 0.75L0.75 21.75M0.75 0.75L21.75 21.75" stroke="#9F596E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="author-popup__head">
                      <div class="author-popup__avatar">
                        <picture>
                          <source srcset="<?= get_the_post_thumbnail_url($author) ?>" type="image/webp">
                          <img src="<?= get_the_post_thumbnail_url($author) ?>" alt="<?= get_the_title($author) ?>" />
                        </picture>
                      </div>
                      <div class="author-popup__info">
                        <div class="author-popup__quote"><?= $author->post_content ?></div>
                        <div class="author-popup__name"><?= get_the_title($author) ?></div>
                      </div>
                    </div>
                    <div class="author-popup__body">
                      <?= get_field('about_books', $author) ?>
                    </div>
                  </div>
                  <div class="support-card__right">
                    <a href="#support-card__boock-<?= $kay; ?>" data-fancybox class="btn-lg"><?= get_field('read_more_btn_text', 'options') ?></a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="support__more">
            <button class="btn-lg btn-lg--accent show-more-authos" type="button">
              <?= get_field('2_btn_more_text'); ?>
            </button>
          </div>
        </div>
        <div class="support__col">
          <div class="support-course">
            <div class="support-course__head">
              <div class="support-course__text">
                <p><?= get_field('2_text') ?></p>
              </div>
              <div class="support-course__img">
                <picture>
                  <source srcset="<?= get_the_post_thumbnail_url() ?>" type="image/webp"><img
                    src="<?= get_the_post_thumbnail_url() ?>" alt="support" />
                </picture>
              </div>
            </div>
            <div class="support-course__items">
              <div data-simplebar>
                <div class="course-cards">

                  <?php foreach (get_field('3_addit') as $course): ?>
                    <div class="course-card">
                      <div class="course-card__img">
                        <picture>
                          <source srcset="<?= $course['izobrazhenie'] ?>" type="image/webp"><img
                            src="<?= $course['izobrazhenie'] ?>" alt="school" />
                        </picture>
                      </div>
                      <div class="course-card__body">
                        <div class="course-card__label">
                          <span><?= $course['kategoriya'] ?></span>
                        </div>
                        <div class="course-card__title">
                          <?= $course['zagolovok'] ?>
                        </div>
                        <div class="course-card__text">
                          <?= $course['opisanie'] ?>
                        </div>
                        <div class="course-card__bottom">
                          <a href="<?= $course['ssylka'] ?>" class="btn">Купить</a>
                          <div class="course-card__price"><?= $course['stoimost'] ?></div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="support-course__more">
                <a href="#" class="btn-lg btn-lg--accent"><?= get_field('2_more_addits') ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="support__col">
          <div class="support-bottom">
            <span class="support-bottom__decor"><svg width="1659" height="753" viewBox="0 0 1659 753" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 30.3482C237.806 -84.3452 200.909 170.902 169 217.926C150 245.926 101.74 201.439 150 174.426C522.5 -34.0739 67.5 612.926 692.5 563.735C910.5 546.577 1214 346.265 1367 370C1520 393.735 1358.74 527.086 1319.5 512.5C1224 477 1585 370 1658 752.235"
                  stroke="url(#paint0_linear_1_4878)" stroke-width="1.15895" />
                <defs>
                  <linearGradient id="paint0_linear_1_4878" x1="1617.5" y1="430.349" x2="26.5003" y2="435.849"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#C19561" stop-opacity="0.28" />
                    <stop offset="0.157694" stop-color="#B7836D" stop-opacity="0.216236" />
                    <stop offset="0.386361" stop-color="#A96A7D" stop-opacity="0.15" />
                    <stop offset="0.751447" stop-color="#B07775" stop-opacity="0.19" />
                    <stop offset="1" stop-color="#C19561" stop-opacity="0.44" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
            <div class="support-bottom__img">
              <picture>
                <source srcset="<?= get_field('3_img')['url'] ?>" type="image/webp"><img
                  src="<?= get_field('3_img')['url'] ?>" alt="support" />
              </picture>
            </div>
            <div class="support-bottom__content">
              <svg width="690" height="603" viewBox="0 0 690 603" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M603.5 96.0001C703.444 223.507 717.136 334.851 640.7 448.859C586.098 530.301 488.34 572.044 375.761 596.003C190.232 635.487 -27.681 487.723 2.88788 278.111C16.966 181.576 92.7534 140.697 201 77.5002C323.5 -13.9998 461.483 -43.21 603.5 96.0001Z"
                  fill="#FFFDFA" />
              </svg>

              <div class="support-bottom__text">
                <p><?= get_field('3_text') ?></p>
              </div>
              <div class="support-bottom__actions">
                <a href="<?= get_field('3_subsc_link') ?>"
                  class="btn-lg btn-lg--accent"><?= get_field('3_subsc_text') ?></a>
                <a href="<?= get_field('3_subsc_link') ?>" class="btn-lg"><?= get_field('3_tetr_btn_text') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>



<script>
  document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.support__items');
    const items = container.querySelectorAll('.support-item');
    const button = document.querySelector('.show-more-authos');

    const step = 5;
    let visibleCount = step;
    let isOpen = false;

    const updateView = () => {
      items.forEach((item, i) => {
        item.style.display = i < visibleCount ? '' : 'none';
      });
    };

    updateView();

    button.addEventListener('click', () => {
      if (!isOpen) {
        visibleCount = Math.min(visibleCount + step, items.length);
        button.classList.add('open');

        if (visibleCount >= items.length) {
          isOpen = true;
        }
      } else {
        visibleCount = step;
        isOpen = false;
        button.classList.remove('open');
      }

      updateView();
    });
  });
</script>


<?php get_footer(); ?>