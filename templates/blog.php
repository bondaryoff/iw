<?php

/** 
 * Template name: Блог
 **/
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>
<main class="page">
  <div class="blog">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="<?php echo home_url(); ?>">Главная</a></li>
          <li><span><?php the_title() ?></span></li>
        </ul>
      </div>
      <div class="blog__main">
        <div class="blog__content blog-content">
          <div class="blog-content__head">
            <h1 class="blog-content__title"><?php the_title() ?></h1>
            <div class="blog-content__text">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="blog-content__sorting">
            <div class="sorting">
              <a href="/blog/" class="sorting__btn active">Все</a>
              <?php
              $categories = get_categories(array(
                'type' => 'category',
                'hide_empty' => 0,
              ));
              ?>
              <?php foreach ($categories as $category) : ?>
                <a href="<?php echo get_category_link($category->term_id); ?>"
                  class="sorting__btn <?php echo $category->slug == get_queried_object()->slug ? 'active' : ''; ?>"><?php echo $category->name; ?></a>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="blog-content__articles">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'paged' => $paged,
              'post_type' => 'post',
              'posts_per_page' => 6
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post(); ?>

                <article class="blog-article">
                  <div class="blog-article__header">
                    <div class="blog-article__label"><span><?php echo get_the_category_list($post->ID); ?></span></div>
                    <div class="blog-article__img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                  <div class="blog-article__body">
                    <h5 class="blog-article__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
          <div class="blog-content__pagination">
            <div class="pagination">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $max_num_pages = $wp_query->max_num_pages;
              $big = 999999999;
              echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link())),
                'format' => '?paged=%#%',
                'current' => $paged,
                'total' => $max_num_pages,
                'prev_text'    => __('&larr;'),
                'next_text'    => __('&rarr;'),
                'type' => 'plain'
              ));
              ?>
            </div>
          </div>
        </div>
        <?php wp_reset_postdata(); ?>

        <aside class="blog__aside">
          <div class="latest-post">
            <h6 class="latest-post__title">Свежие посты блога</h6>
            <ul class="latest-post__list">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
              );
              $query = new WP_Query($args);
              if ($query->have_posts()) :
                while ($query->have_posts()) :
                  $query->the_post(); ?>

                  <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class="newsletter">
            <div class="newsletter__img">
              <img src="<?= $assetsPath ?>img/newsletter.webp" alt="letter" />
            </div>
            <div class="newsletter__body">
              <h6 class="newsletter__title">Смузи-рассылка</h6>
              <div class="newsletter__text">
                <p>
                  Раз в месяц я отправляю своим подписчикам письма. В них
                  я стараюсь сочетать живое и полезное.
                  <b>Хотите получать письма от меня?</b>
                </p>
              </div>
              <form action="#" class="newsletter__form">
                <input type="email" placeholder="Ваш E-mail" />
                <button type="submit" class="button button--accent">
                  Подписаться
                </button>
              </form>
            </div>
          </div>
          <div class="started">
            <div class="started__title">Скоро стартуют новые курсы!</div>
            <div class="started__items">
              <a href="#" class="started-item"
                style="background-image: url(<?= $assetsPath ?>img/courses/course-2.webp);">
                <div class="started-item__label"><span>Вебинар</span></div>
                <h5 class="started-item__title">Пишем сериал в соцсетях</h5>
              </a>
              <a href="#" class="started-item"
                style="background-image: url(<?= $assetsPath ?>img/courses/course-3.webp);">
                <div class="started-item__label"><span>Вебинар</span></div>
                <h5 class="started-item__title">Писательские скетчи</h5>
              </a>
              <a href="#" class="started-item"
                style="background-image: url(<?= $assetsPath ?>img/courses/course-1.webp);">
                <div class="started-item__label"><span>Мастерская</span></div>
                <h5 class="started-item__title">Тропы и фигуры: драгоценности текста</h5>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  <div class="footer-quote footer-quote--manifest"
    style="background-image: url(<?= $assetsPath ?>img/blog-footer.webp)">
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