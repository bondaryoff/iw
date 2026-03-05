<?php
/* Template name: books */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>

<!-- <main class="page">
  <div class="books-page">

 
    <div class="books-page__section">
      <div class="container">
        <div class="bonus-book bonus-book--second">
          <div class="bonus-book__img">
            <picture>
              <source srcset="<?= get_field('3_img')['url'] ?>" type="image/webp"><img src="<?= get_field('3_img')['url'] ?>" alt="bonus" />
            </picture>
          </div>
          <div class="bonus-book__title"><?= get_field('3_title') ?></div>
          <div class="bonus-book__body">
            <div class="bonus-book__text">
              <p><?= get_field('3_text') ?></p>
            </div>
          </div>
          <div class="bonus-book__bottom">
            <a href="<?= get_field('3_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('3_btn_txt') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main> -->


<main class="page">
  <div class="books-page">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
          <li><span><?php the_title() ?></span></li>
        </ul>
      </div>
    </div>
    <div class="desktop">
      <div class="books-hero">
        <div class="books-hero__wrapper">
          <div class="books-hero__item books-hero__item--left">
            <div class="books-hero__img">
              <span class="books-hero__img-block"></span>
              <img src="<?= $assetsPath ?>img/books/item-1.webp" alt="" />
            </div>
          </div>
          <div class="books-hero__central">
            <div class="books-hero__central-top-block">
              <div class="books-hero__item">
                <img src="<?= $assetsPath ?>img/books/item-2.webp" alt="" />
              </div>
              <div class="books-hero__item">
                <img src="<?= $assetsPath ?>img/books/item-3.webp" alt="" />
              </div>
              <div class="books-hero__item">
                <img src="<?= $assetsPath ?>img/books/item-4.webp" alt="" />
              </div>
              <div class="books-hero__item">
                <div class="books-hero__text">Книги</div>
              </div>
              <div class="books-hero__item">
                <div class="books-hero__text books-hero__text--accent">
                  Екатерины Оаро
                </div>
              </div>
            </div>
            <div class="books-hero__central-bottom-block">
              <div class="books-hero__item">
                <img src="<?= $assetsPath ?>img/books/item-6.webp" alt="item" />
              </div>
              <div class="hero-readers">
                <div class="hero-readers__head">
                  Более 30000 читателей!
                </div>
                <div class="hero-readers__items">
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-7.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-8.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-9.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-10.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-11.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-12.webp" alt="item" />
                  </div>

                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-13.webp" alt="item" />
                  </div>
                  <div class="hero-readers__more"><span></span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="books-hero__item books-hero__item--right">
            <span class="books-hero__img-block-right"></span>
            <div class="books-hero__img">
              <img src="<?= $assetsPath ?>img/books/item-5.webp" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile">
      <div class="container">
        <div class="books-hero">
          <div class="books-hero__row">
            <div class="books-hero__row-top">
              <div class="books-hero__img">
                <img src="<?= $assetsPath ?>img/books/item-2.webp" alt="item" />
              </div>
              <div class="books-hero__item-wrap">
                <div class="books-hero__img">
                  <img src="<?= $assetsPath ?>img/books/item-5.webp" alt="item" />
                </div>
                <div class="books-hero__item-wrap-inner">
                  <div class="books-hero__img">
                    <img src="<?= $assetsPath ?>img/books/item-3.webp" alt="item" />
                  </div>
                  <div class="books-hero__img">
                    <img src="<?= $assetsPath ?>img/books/item-4.webp" alt="item" />
                  </div>
                </div>
              </div>
            </div>
            <div class="books-hero__row-center">
              <div class="books-hero__text">Книги</div>
              <div class="books-hero__text books-hero__text--light">Екатерины Оаро</div>
            </div>
            <div class="books-hero__row-bottom">
              <div class="bookes-hero__row-inner">
                <div class="books-hero__img">
                  <img src="<?= $assetsPath ?>img/books/item-1.webp" alt="item" />
                </div>
                <div class="books-hero__img">
                  <img src="<?= $assetsPath ?>img/books/item-6.webp" alt="item" />
                </div>
              </div>
              <div class="hero-readers">
                <div class="hero-readers__head">
                  Более 30000 читателей!
                </div>
                <div class="hero-readers__items">
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-7.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-8.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-9.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-10.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-11.webp" alt="item" />
                  </div>
                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-12.webp" alt="item" />
                  </div>

                  <div class="hero-readers__img">
                    <img src="<?= $assetsPath ?>img/books/item-13.webp" alt="item" />
                  </div>
                  <div class="hero-readers__more"><span></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="books-page__section">
      <div class="container">
        <div class="books-items">
          <?php $book = get_field('2_book_left'); ?>
          <div class="book-card">
            <div class="book-card__inner">
              <div class="book-card__img">
                <img src="<?= get_the_post_thumbnail_url($book) ?>" alt="book " />
              </div>
              <div class="book-card__line">
                <div class="book-card__date"><?= get_field('year', $book) ?></div>
                <div class="book-card__decor-text"><?= get_field('type', $book) ?></div>
              </div>
              <div class="book-card__title">"<?= $book->post_title ?>"</div>
              <div class="book-card__text">
                <p><?= $book->post_content ?></p>
              </div>
              <div class="book-card__actions">
                <a href="<?= $book->guid ?>" class="btn-lg btn-lg--accent"><?= get_field('description_text', $book) ?></a>

                <?php
                    // Отримуємо об'єкт товару з ACF поля
                    $product_id = get_field('buy_text_text', $book);

                    if ($product_id) {
                      $product = wc_get_product($product_id);
                    }
                    ?>
                <div class="oaro-home-by-boock">
                  <span>Купить <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.987 1.30149C11.7143 -2.67287 8.89659 3.55135 6.15797 5.39558C4.83244 4.54663 2.58881 1.84612 1.49154 0.524601C0.394266 -0.796914 -0.610121 1.42802 0.449785 3.12372C1.50969 4.81941 5.57097 8.00289 6.15797 8C6.74498 7.9971 8.26118 6.54351 9.80178 4.9889C11.0602 3.39269 12.131 2.1375 11.987 1.30149Z" fill="#A96A7D" />
                    </svg></span>
                  <ul>
                    <?php if ($product && $product->is_type('variable')): ?>
                      <!-- Виводимо всі доступні варіації -->
                      <?php
                      $variations = $product->get_available_variations();
                      foreach ($variations as $variation):
                        $variation_obj = wc_get_product($variation['variation_id']);

                        // Отримуємо читабельні назви атрибутів
                        $attributes = [];
                        foreach ($variation['attributes'] as $attr_name => $attr_value) {
                          // Видаляємо префікс "attribute_"
                          $taxonomy = str_replace('attribute_', '', $attr_name);

                          // Отримуємо читабельну назву терміну
                          if (taxonomy_exists($taxonomy)) {
                            $term = get_term_by('slug', $attr_value, $taxonomy);
                            $attributes[] = $term ? $term->name : $attr_value;
                          } else {
                            // Для власних атрибутів виводимо значення як є
                            $attributes[] = $attr_value;
                          }
                        }
                        $variation_name = implode(' - ', $attributes);
                      ?>
                        <li>
                          <a href="<?= esc_url(wc_get_cart_url() . '?add-to-cart=' . $variation['variation_id']) ?>"
                            class="" data-product_id="<?= $variation['variation_id'] ?>" data-quantity="1">
                            <?= $variation_name ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php $book = get_field('2_book_right'); ?>
          <div class="book-card">
            <div class="book-card__inner">
              <div class="book-card__img">
                <img src="<?= get_the_post_thumbnail_url($book) ?>" alt="book " />
              </div>
              <div class="book-card__line">
                <div class="book-card__date"><?= get_field('year', $book) ?></div>
                <div class="book-card__decor-text"><?= get_field('type', $book) ?></div>
              </div>
              <div class="book-card__title">"<?= $book->post_title ?>"</div>
              <div class="book-card__text" style="max-width: 19.9375rem; margin-inline: auto">
                <p><?= $book->post_content ?></p>
              </div>
              <div class="book-card__actions">
                <a href="<?= $book->guid ?>" class="btn-lg btn-lg--accent"><?= get_field('description_text', $book) ?></a>
                      <?php
                    // Отримуємо об'єкт товару з ACF поля
                    $product_id = get_field('buy_text_text', $book);

                    if ($product_id) {
                      $product = wc_get_product($product_id);
                    }
                    ?>
                <div class="oaro-home-by-boock">
                  <span>Купить <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.987 1.30149C11.7143 -2.67287 8.89659 3.55135 6.15797 5.39558C4.83244 4.54663 2.58881 1.84612 1.49154 0.524601C0.394266 -0.796914 -0.610121 1.42802 0.449785 3.12372C1.50969 4.81941 5.57097 8.00289 6.15797 8C6.74498 7.9971 8.26118 6.54351 9.80178 4.9889C11.0602 3.39269 12.131 2.1375 11.987 1.30149Z" fill="#A96A7D" />
                    </svg></span>
                  <ul>
                    <?php if ($product && $product->is_type('variable')): ?>
                      <!-- Виводимо всі доступні варіації -->
                      <?php
                      $variations = $product->get_available_variations();
                      foreach ($variations as $variation):
                        $variation_obj = wc_get_product($variation['variation_id']);

                        // Отримуємо читабельні назви атрибутів
                        $attributes = [];
                        foreach ($variation['attributes'] as $attr_name => $attr_value) {
                          // Видаляємо префікс "attribute_"
                          $taxonomy = str_replace('attribute_', '', $attr_name);

                          // Отримуємо читабельну назву терміну
                          if (taxonomy_exists($taxonomy)) {
                            $term = get_term_by('slug', $attr_value, $taxonomy);
                            $attributes[] = $term ? $term->name : $attr_value;
                          } else {
                            // Для власних атрибутів виводимо значення як є
                            $attributes[] = $attr_value;
                          }
                        }
                        $variation_name = implode(' - ', $attributes);
                      ?>
                        <li>
                          <a href="<?= esc_url(wc_get_cart_url() . '?add-to-cart=' . $variation['variation_id']) ?>"
                            class="" data-product_id="<?= $variation['variation_id'] ?>" data-quantity="1">
                            <?= $variation_name ?>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php $book = get_field('2_book_bot'); ?>
          <div class="book-card-lg">
            <span class="book-card-lg__decor-left"></span>
            <span class="book-card-lg__decor-right"></span>
            <div class="book-card-lg__inner">
              <div class="book-card-lg__content">
                <div class="book-card-lg__img">
                  <img src="<?= get_the_post_thumbnail_url($book) ?>" alt="book" />
                </div>
                <div class="book-card-lg__text-sm">
                  <p><?= get_field('2_book_bot_label_1') ?></p>
                </div>
                <div class="book-card-lg__info">
                  <div class="book-card-lg__date"><?= get_field('year', $book) ?></div>
                  <div class="book-card-lg__sup-title"><?= get_field('2_book_bot_label_2') ?></div>
                  <div class="book-card-lg__title">"<?= $book->post_title; ?>"</div>
                  <div class="book-card-lg__text"><?= $book->post_content ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if (get_field('3_title')) { ?>
      <div class="books-page__section">
        <div class="container">
          <div class="bonus-book bonus-book--second">
            <div class="bonus-book__img">
              <picture>
                <source srcset="<?= get_field('3_img')['url'] ?>" type="image/webp"><img src="<?= get_field('3_img')['url'] ?>" alt="bonus" />
              </picture>
            </div>
            <div class="bonus-book__title"><?= get_field('3_title') ?></div>
            <div class="bonus-book__body">
              <div class="bonus-book__text">
                <p><?= get_field('3_text') ?></p>
              </div>
            </div>
            <div class="bonus-book__bottom">
              <a href="<?= get_field('3_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('3_btn_txt') ?></a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</main>

<?php get_footer(); ?>