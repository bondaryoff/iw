  <section class="retreats">
    <div class="container">
      <div class="retreats__inner">
        <h2 class="retreats__title"><?= get_field('7_title') ?></h2>
        <div class="retreats__head">
          <div class="row">
            <div class="col-5">
              <div class="retreats__img">
                <picture>
                  <source srcset="<?= get_field('7_img_l_webp')['url'] ?>" type="image/webp"><img
                    src="<?= get_field('7_img_l_webp')['url'] ?>" alt="retreats" />
                </picture>
              </div>
            </div>
            <div class="col-7">
              <div class="retreats__content">
                <div class="retreats__text">
                  <?= get_field('7_txt_r') ?>
                </div>
                <a href="<?= get_field('7_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('7_btn_txt') ?></a>
                <div class="retreats__decor-text">
                  <p><?= get_field('7_label') ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="retreats__body">
          <div class="retreats__sub-title"><?= get_field('8_title') ?></div>
          <div class="retreats__slider">
            <div class="retreats-swiper swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="retreats-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/sliders/school-slide-1.webp" width="280" alt="school" />
                  </div>
                </div>
                <?php $gallery = get_field('8_gallery'); ?>
                <?php foreach ($gallery as $photoLink): ?>
                  <div class="swiper-slide">
                    <div class="retreats-slide">
                      <img src="<?= $photoLink ?>" width="580" alt="school" />
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="slider-nav slider-nav--lg">
              <button type="button" class="retreats-button-prev slider-button-prev"></button>
              <button type="button" class="retreats-button-next slider-button-next"></button>
            </div>
          </div>
          <div class="retreats-pagination slider-pagination"></div>
          <div class="retreats__bottom">
            <a href="<?= get_field('8_btn_1_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('8_btn_1_txt') ?></a>
            <a href="<?= get_field('8_btn_2_link') ?>" class="btn-lg"><?= get_field('8_btn_2_txt') ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>