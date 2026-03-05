<?php
/* Template name: Манифест */

$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>
<main class="page">
  <div class="manifest">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="<?php echo home_url(); ?>">Главная</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </div>
    </div>
    <section class="hero-manifest">
      <div class="container">
        <div class="hero-manifest__inner">
          <div class="hero-manifest__bg">
            <img src="<?= $assetsPath ?>img/manifest-bg.webp" alt="manifest" />
          </div>
          <h1 class="hero-manifest__title"><?php the_title(); ?></h1>
          <div class="hero-manifest__bg-char">
            <img src="<?= $assetsPath ?>img/manifest-char.webp" alt="manifest" />
          </div>

          <div class="hero-manifest__block">
            <div class="hero-manifest__text">
              <?php if (get_field('tekst')) : ?>
                <?php echo get_field('tekst'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="manifest__block">
        <div class="manifest-block">
          <div class="manifest-block__inner">
            <p>
              <?php if (get_field('tekst_2')) : ?>
                <?php echo get_field('tekst_2'); ?>
              <?php endif; ?>

            </p>
          </div>
        </div>
      </div>
      <div class="manifest__text-grid">
        <div class="manifest-grid">
          <div class="manifest-grid__row">
            <div class="manifest-grid__text">
              <?php if (get_field('tekst_3')) : ?>
                <?php echo get_field('tekst_3'); ?>
              <?php endif; ?>

            </div>
          </div>
          <div class="manifest-grid__row">
            <div class="manifest-grid__text">
              <?php if (get_field('tekst_4')) : ?>
                <?php echo get_field('tekst_4'); ?>
              <?php endif; ?>

            </div>
            <div class="manifest-grid__text-lg">
              <?php if (get_field('tekst_5')) : ?>
                <?php echo get_field('tekst_5'); ?>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
      <div class="manifest__accent-text">
        <div class="manifest-accent">
          <div class="manifest-accent__inner">
            <div class="manifest-accent__text">
              <?php if (get_field('tekst_6')) : ?>
                <?php echo get_field('tekst_6'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="manifest__buttons">
        <?php if (get_field('knopki')) : ?>
          <div class="buttons">
            <?php $knopki = get_field('knopki'); ?>

            <?php foreach ($knopki as $i => $knopka) : ?>
              <a href="<?= $knopka['link']; ?>" type="button" class="button <?php if ($i == 0) echo 'button--accent'; ?>"><?= $knopka['zagolovok']; ?></a>
            <?php endforeach ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer-quote footer-quote--manifest" style="background-image: url(<?= $assetsPath ?>img/manifest-footer.webp)">
    <div class="container">
      <div class="footer-quote__content">
        <div class="footer-quote__text">
          <p>
            “Глубокий и красивый человеческий контакт — мое любимое
            удовольствие в жизни”
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>