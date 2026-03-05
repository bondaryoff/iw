<?php
// There is nothing output here because block themes do not use php templates.
// There is a core ticket discussing removing this requirement for block themes:
// https://core.trac.wordpress.org/ticket/54272.

$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>
<main class="page">
  <div class="article">
    <div class="container">
      <div class="article__main">
        <?php the_content() ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>