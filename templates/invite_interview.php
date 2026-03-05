<?php
/* Template name: invite-interview */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>

<main class="page">
  <div class="container">
    <div class="breadcrumbs">
      <ul class="breadcrumbs__list">
        <?php
        $step2Link = apply_filters('wpml_current_language', NULL) === 'ru' ? get_page_by_path('conferencies') : get_page_by_path('conferencies-en');
        $step2Name = apply_filters('wpml_current_language', NULL) === 'ru' ? 'Конференции' : 'Conferencies';
        $step3Name = apply_filters('wpml_current_language', NULL) === 'ru' ? 'Пригласить' : 'Invite';
        ?>
        <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
        <li><a href="<?= get_permalink($step2Link) ?>"><?= $step2Name ?></a></li>
        <li><span><?= $step3Name ?></span></li>
      </ul>
    </div>
  </div>
  <div class="invite">
    <div class="container">
      <div class="invite-header">
        <div class="invite-header__left">
          <h1 class="invite-header__title"><?= get_field('1_title') ?></h1>
          <div class="invite-header__navs">
            <a href="/invite-event/" class="btn-lg font-bold">Пригласить на конференцию</a>
            <a href="<?= get_field('btn_invite_podcast_link', 'options') ?>" class="btn-lg font-bold"><?= get_field('btn_invite_podcast_text', 'options') ?></a>
            <a href="<?= get_field('btn_invite_retr_link', 'options') ?>" class="btn-lg font-bold"><?= get_field('btn_invite_retr_text', 'options') ?></a>
          </div>
        </div>
        <div class="invite-header__text-decor" data-da=".invite-header__left,1023.98,1"><?= get_field('1_label') ?></div>
      </div>
    </div>
    <div class="invite__form">
      <div class="container">
        <div class="invite-form">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
</main>


<style>
  .field textarea {
    height: 151px;
  }
</style>
<?php get_footer(); ?>