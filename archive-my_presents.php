<?php
/* Template name: archive-presents */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
$slug = apply_filters('wpml_current_language', NULL) === 'ru' ? 'gifts' : 'gifts-en';
$gifts = get_page_by_path($slug);
?>
<main class="page">
  <div class="gift-page">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
          <li><span><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Подарки' : 'Gifts' ?></span></li>
        </ul>
      </div>
      <div class="gift-page__hero">
        <div class="gift-hero">
          <h1 class="gift-hero__title"><span><?= get_field('1_title', $gifts) ?></span></h1>
          <div class="gift-hero__inner">
            <div class="gift-hero__left">
              <picture>
                <source srcset="<?= get_field('1_main_image', $gifts)['url'] ?>" type="image/webp"><img src="<?= get_field('1_main_image', $gifts)['url'] ?>" alt="gift-hero" />
              </picture>
            </div>
            <div class="gift-hero__right">
              <div class="gift-hero__content">
                <div class="gift-hero__text">
                  <p><?= get_field('1_text_1', $gifts) ?></p>
                  <p><?= get_field('1_text_2', $gifts) ?></p>
                  <p><b><?= get_field('1_text_3', $gifts) ?></b></p>
                </div>
              </div>
              <div class="gift__images">
                <div class="gift__img">
                  <img src="<?= get_field('1_image_1')['url'] ?>" alt="gift" />
                </div>

                <div class="gift__img">
                  <img src="<?= get_field('1_image_2')['url'] ?>" alt="gift" />
                </div>
                <div class="gift__img">
                  <img src="<?= get_field('1_image_3')['url'] ?>" alt="gift" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="gift-page__blocks">
        <?php $chek_list = get_field('chek_list'); ?>
        <div class="gift-block">
          <div class="gift-block__content">
            <h3 class="gift-block__title"><?= $chek_list['zagolovok']; ?></h3>
            <div class="gift-block__text"><?= $chek_list['tekst']; ?></div>
            <a class="btn-lg btn-lg--accent" download href="<?= $chek_list['file']; ?>"><?= $chek_list['tekst_knopki']; ?></a>
          </div>
          <div class="gift-block__img">
            <img src="<?= $chek_list['izobrazhenie']; ?>" alt="gift" />
          </div>
        </div>

        <?php $oboi = get_field('podderzhivayushhie_oboi'); ?>
        <div class="gift-block">
          <div class="gift-block__content">
            <h3 class="gift-block__title"><?= $oboi['zagolovok']; ?></h3>
            <div class="gift-block__text"><?= $oboi['tekst']; ?></div>
            <a class="btn-lg btn-lg--accent" download href="<?= $oboi['file']; ?>"><?= $oboi['tekst_knopki']; ?></a>
          </div>
          <div class="gift-block__img">
            <img src="<?= $oboi['izobrazhenie']; ?>" alt="gift" />
          </div>
        </div>


        <?php $poster_s_ulitkoj = get_field('poster_s_ulitkoj'); ?>
        <div class="gift-block">
          <div class="gift-block__content">
            <h3 class="gift-block__title"><?= $poster_s_ulitkoj['zagolovok']; ?></h3>
            <div class="gift-block__text"><?= $poster_s_ulitkoj['tekst']; ?></div>
            <a class="btn-lg btn-lg--accent" download href="<?= $poster_s_ulitkoj['file']; ?>"><?= $poster_s_ulitkoj['tekst_knopki']; ?></a>
          </div>
          <div class="gift-block__img">
            <img src="<?= $poster_s_ulitkoj['izobrazhenie']; ?>" alt="gift" />
          </div>
        </div>



        <?php $kurs = get_field('kurs'); ?>
        <div class="gift-block">
          <div class="gift-block__content">
            <h3 class="gift-block__title"><?= $kurs['zagolovok']; ?></h3>
            <div class="gift-block__text"><?= $kurs['tekst']; ?></div>
            <a class="btn-lg btn-lg--accent" download href="<?= $kurs['file']; ?>"><?= $kurs['tekst_knopki']; ?></a>
          </div>
          <div class="gift-block__img">
            <img src="<?= $kurs['izobrazhenie']; ?>" alt="gift" />
          </div>
        </div>


      </div>


      <div class="gift-page__social gift-social">
        <div class="gift-social__items">
          <div class="gift-social__text"><?= get_field('2_text', $gifts) ?></div>
          <div class="social-card">
            <div class="social-card__head">
              <img src="<?= $assetsPath ?>img/icons/instagram.svg" alt="icon" />
              <h3 class="social-card__title">Instagram</h3>
            </div>
            <div class="social-card__body">
              <div class="social-card__text">
                <p><?= get_field('2_text_insta', $gifts) ?></p>
              </div>
            </div>
            <div class="social-card__bottom">
              <a href="<?= get_field('instagram_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('btn_subscribe', 'options') ?></a>
            </div>
          </div>
          <div class="social-card">
            <div class="social-card__head">
              <img src="<?= $assetsPath ?>img/icons/youtube.svg" alt="icon" />
              <h3 class="social-card__title">YouTube</h3>
            </div>
            <div class="social-card__body">
              <div class="social-card__text">
                <p><?= get_field('2_text_yt', $gifts) ?></p>
              </div>
            </div>
            <div class="social-card__bottom">
              <a href="<?= get_field('youtube_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('btn_subscribe', 'options') ?></a>
            </div>
          </div>
          <div class="social-card">
            <div class="social-card__head">
              <img src="<?= $assetsPath ?>img/icons/email.svg" alt="icon" />
              <h3 class="social-card__title"><?= get_field('2_text_email_title', $gifts) ?></h3>
            </div>
            <div class="social-card__body">
              <div class="social-card__text">
                <p><?= get_field('2_text_email_text', $gifts) ?></p>
              </div>
            </div>
            <div class="social-card__bottom">
              <a href="#" class="btn-lg btn-lg--accent"><?= get_field('btn_subscribe', 'options') ?></a>
            </div>
          </div>
        </div>
        <div class="gift-social__items">
          <div class="social-card">
            <div class="social-card__head">
              <img src="<?= $assetsPath ?>img/icons/telegram.svg" alt="icon" />
              <h3 class="social-card__title">Telegram</h3>
            </div>
            <div class="social-card__body">
              <div class="social-card__text">
                <?= get_field('2_text_tg', $gifts) ?>
              </div>
            </div>
            <div class="social-card__bottom">
              <a href="<?= get_field('telegram_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('btn_subscribe', 'options') ?></a>
            </div>
          </div>
          <div class="social-card">
            <div class="social-card__head">
              <img src="<?= $assetsPath ?>img/icons/facebook.svg" alt="icon" />
              <h3 class="social-card__title">Facebook</h3>
            </div>
            <div class="social-card__body">
              <div class="social-card__text">
                <?= get_field('2_text_fb', $gifts) ?>
              </div>
            </div>
            <div class="social-card__bottom">
              <a href="<?= get_field('fb_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('btn_subscribe', 'options') ?></a>
            </div>
          </div>
          <div class="gift-social__img">
            <picture>
              <source srcset="<?= get_field('2_pre_foot_img', $gifts)['url'] ?>" type="image/webp"><img src="<?= get_field('2_pre_foot_img', $gifts)['url'] ?>" alt="gift" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>