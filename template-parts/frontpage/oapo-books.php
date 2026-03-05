  <section class="oapo-books">
    <div class="container">
      <div class="oapo-books__inner">
        <h2 class="oapo-books__title"><?= get_field('4_title') ?></h2>

        <div class="book-slider">
          <div class="book-slider__left">
            <div class="oapo-swiper swiper">
              <div class="swiper-wrapper">
                <?php foreach (get_field('4_books') as $book): ?>
                  <div class="swiper-slide">
                    <div class="book-oapo-img">
                      <picture>
                        <source srcset="<?= get_the_post_thumbnail_url($book) ?>" type="image/webp"><img
                          src="<?= get_the_post_thumbnail_url($book) ?>" alt="book" />
                      </picture>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="book-slider__navs">
              <button type="button" class="oapo-button-prev slider-button-prev"></button>
              <button type="button" class="oapo-button-next slider-button-next"></button>
            </div>
          </div>
          <div class="book-slider__right">
            <div class="oapo-item">
              <div class="oapo-item__img oapo-swiper2" style="overflow: hidden;flex-shrink:0;">
                <div class="swiper-wrapper">
                  <?php foreach (get_field('4_books') as  $book): ?>

                    <div class="swiper-slide">
                      <picture>
                        <source srcset="<?= get_the_post_thumbnail_url($book) ?>" type="image/webp"><img
                          src="<?= get_the_post_thumbnail_url($book) ?>" alt="book" />
                      </picture>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="oapo-swiper3" style="overflow: hidden;">
                <div class="swiper-wrapper">
                  <?php foreach (get_field('4_books') as  $book):
                    $product = null;
                    $product_id = get_field('buy_text_text', $book);
                    if ($product_id) {
                      $product = wc_get_product($product_id);
                    }
                  ?>

                    <div class="swiper-slide">
                      <div class="oapo-item__content">
                        <div class="oapo-item__year"><?= get_field('year', $book) ?></div>
                        <div class="oapo-item__label"><?= get_field('type', $book) ?></div>
                        <div class="oapo-item__title"><?= get_the_title($book) ?></div>
                        <div class="oapo-item__text">
                          <p><?= $book->post_content ?></p>
                        </div>
                        <div class="oapo-item__bottom desktop">
                          <? if (get_field('description_text', $book)) :  ?>
                            <a href="<?= get_permalink($book) ?>" class="btn-lg btn-lg--accent">
                              <?= get_field('description_text', $book) ?>
                            </a>
                          <? endif; ?>
                          <?php if ($product && $product->is_type('variable')): ?>
                          <div class="oaro-home-by-boock">
                            <span>Купить <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.987 1.30149C11.7143 -2.67287 8.89659 3.55135 6.15797 5.39558C4.83244 4.54663 2.58881 1.84612 1.49154 0.524601C0.394266 -0.796914 -0.610121 1.42802 0.449785 3.12372C1.50969 4.81941 5.57097 8.00289 6.15797 8C6.74498 7.9971 8.26118 6.54351 9.80178 4.9889C11.0602 3.39269 12.131 2.1375 11.987 1.30149Z" fill="#A96A7D" />
                              </svg></span>
                            <ul>
                              <?php
                              $variations = $product->get_available_variations();
                              foreach ($variations as $variation):
                                $attributes = [];
                                foreach ($variation['attributes'] as $attr_name => $attr_value) {
                                  $taxonomy = str_replace('attribute_', '', $attr_name);
                                  if (taxonomy_exists($taxonomy)) {
                                    $term = get_term_by('slug', $attr_value, $taxonomy);
                                    $attributes[] = $term ? $term->name : $attr_value;
                                  } else {
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
                            </ul>
                          </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="oapo-item__bottom mobile">
                      <? if (get_field('description_text', $book)) :  ?>
                        <a href="<?= get_permalink($book) ?>" class="btn-lg btn-lg--accent">
                          <?= get_field('description_text', $book) ?>
                        </a>
                      <? endif; ?>
                      <?php if ($product && $product->is_type('variable')): ?>
                        <?php
                        $variations = $product->get_available_variations();
                        foreach ($variations as $variation):
                          $variation_obj = wc_get_product($variation['variation_id']);
                          $variation_name = implode(', ', $variation['attributes']);
                        ?>
                          <a href="<?= esc_url(wc_get_cart_url() . '?add-to-cart=' . $variation['variation_id']) ?>"
                            class="btn-lg" data-product_id="<?= $variation['variation_id'] ?>" data-quantity="1">
                            <?= $variation_name ?>
                          </a>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>