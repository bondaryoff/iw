  <section class="books">
    <div class="container">
      <div class="books__head">
        <div class="books__head-left">
          <h2 class="books__title"><?= get_field('5_title') ?></h2>
          <div class="books__text">
            <p><?= get_field('5_left_text') ?></p>
          </div>
        </div>
        <div class="books__head-right">
          <div class="books__text-decor text-decor"><?= get_field('5_text_r_t') ?></div>
          <div class="books__sub-text"><?= get_field('5_text_r_b') ?></div>
          <div class="books__action" data-da=".books,767.98,last">
            <a href="<?= get_field('5_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('5_btn_text') ?></a>
          </div>
        </div>
      </div>
      <div data-simplebar>
        <div class="books__items-card">
          <?php foreach (get_field('5_stud_books') as $studBook): ?>
            <div class="book-item">
              <div class="book-item__img">
                <?= get_the_post_thumbnail($studBook->ID, 'medium'); ?>
              </div>
              <div class="book-item__body">
                <?php if (get_field('lajbl', $studBook->ID)) : ?>
                  <div class="book-item__label">
                    <span>
                      <?php echo get_field('lajbl', $studBook->ID); ?>
                    </span>
                  </div>
                <?php endif; ?>
                <ul class="book-item__list">
                  <li><?= $studBook->post_title; ?></li>
                </ul>
                <div class="book-item__name"><?= $studBook->post_content; ?></div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
      <?php $feedback = get_field('5_feedback'); ?>
      <div class="books__reviews">
        <div class="book-review">
          <div class="book-review__left">
            <div class="book-review__img">
              <picture>
                <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="review" />
              </picture>
            </div>
          </div>
          <div class="book-review__content">
            <div class="book-review__title"><?= get_the_title($feedback) ?></div>
            <div class="book-review__text">
              <p><?= $feedback->post_content ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>