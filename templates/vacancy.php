<?php
/* Template name: vacancy */
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
  <div class="vacancy">
    <div class="container">
      <div class="vacancy__head">
        <h1 class="vacancy__title"><?php echo wp_strip_all_tags(get_the_content()) ?></h1>
      </div>

      <div class="vacancy__grid">
        <div class="vacancy__img">
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="vacancy" />
        </div>
        <div class="vacancy__block">
          <div class="vacancy__text">
            <p><?= get_field('txt_1') ?></p>
            <p><?= get_field('txt_2') ?></p>
            <p><?= get_field('txt_3') ?></p>
            <div class="vacancy__more">
              <a href="<?= get_field('btn_link') ?>" target="_blank" class="btn-lg btn-lg--accent"><?= get_field('btn_txt') ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

