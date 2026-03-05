<?php
/* Template name: Биография */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>
<main class="page">
  <div class="bio">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
          <li><a href="#">Главная</a></li>
          <li>
            <span>Биография</span>
          </li>
        </ul>
      </div>
      <section class="bio__about bio-about" data-aos="fade-up">
        <div class="bio-about__left" style="background-image: url(<?php echo get_field('izobrazhenie_1-1'); ?>)">
          <div class="bio-about__head">
            <h1 class="bio-about__title"><?php if (get_field('zagolovok_1-1')) : ?>
              <?php echo get_field('zagolovok_1-1'); ?>
              <?php endif; ?>
            </h1>
          </div>
        </div>
        <div class="bio-about__content">
          <h3 class="bio-about__sub-title">
            <?php if (get_field('zagolovok_1-2')) : ?>
            <?php echo get_field('zagolovok_1-2'); ?>
            <?php endif; ?>
          </h3>
          <div class="bio-about__text">
            <p>
              <?php if (get_field('tekst_1-1')) : ?>
              <?php echo get_field('tekst_1-1'); ?>
              <?php endif; ?>
            </p>
          </div>
          <div class="bio-about__accent">
            <p>
              <?php if (get_field('tekst_1-2')) : ?>
              <?php echo get_field('tekst_1-2'); ?>
              <?php endif; ?>
            </p>
          </div>
        </div>
      </section>
      <section class="bio-detail">
        <h3 class="bio-detail__title" data-da=".bio-detail__text,1023.98,0">Больше деталей</h3>
        <div class="bio-detail__block">
          <div class="bio-detail__text" data-aos="fade-right">
            <p>
              Екатерину часто называют литературным терапевтом, а студенты
              любят экологичность ее обратной связи и комфортные четкие
              границы, внутри которых становится неожиданно легко творить.
              Ее бестселлер “Держись и пиши!” сразу переименовали в народе
              в “Держись и живи!”.
            </p>
            <p>
              В курсах Екатерины нет места стыду, так часто
              сопровождающему творческий процесс. Вернее, стыд испаряется,
              уступая место тому, что действительно важно: радости
              создавать и овладевать мастерством. О чем бы ни был курс: о
              коммуникации, писательстве, творческом планировании своей
              жизни… –в нем сияют ценности роста, бережного развития,
              экологичного общения, смелости жить и проявляться.
            </p>
          </div>
          <div class="bio-detail__frame" data-aos="fade-left" data-da=".bio-detail__text,1023.98,0">
            <div class="bio-detail__frame-inner">
              <p>
                Это не мир розовых единорогов и не мир токсичной критики.
                Это пространство деятельного внимания, в котором в вас
                верят и инвестируют в вас.
              </p>
            </div>
          </div>
        </div>
        <div class="bio-detail__block">
          <div class="bio-detail__images">
            <figure data-aos="zoom-out-up">


              <img src="<?php echo get_field('foto_2-1'); ?>" alt="bio" />
              <figcaption><span><?php echo get_field('podpis_foto_2-1'); ?></span></figcaption>
            </figure>
            <figure data-aos="zoom-out-up" data-aos-delay="200">
              <img src="<?php echo get_field('foto_2-2'); ?>" alt="bio" />
              <figcaption><span><?php echo get_field('podpis_foto_2-2'); ?></span></figcaption>
            </figure>
            <div class="bio-detail__decor" data-aos="zoom-out" data-aos-delay="200">
              <img src="<?= $assetsPath ?>img/bio/bio-decor.webp" alt="decor" />
            </div>
          </div>
          <div class="bio-detail__text-lg" data-aos="fade-left" data-aos-delay="200">
            <p>
              <?php echo get_field('opisanie_2-1'); ?>
            </p>
          </div>
        </div>
        <div class="bio-detail__block">
          <div class="bio-detail__text-lg" data-aos="fade-right" data-aos-delay="200">
            <p>
              <?php echo get_field('opisanie_2-2'); ?>
            </p>
          </div>
          <div class="bio-detail__images">
            <figure data-aos="zoom-out" data-aos-delay="200">
              <img src="<?php echo get_field('foto_2-3'); ?>" alt="bio" />
              <figcaption><span><?php echo get_field('podpis_foto_2-3'); ?></span></figcaption>
            </figure>
            <figure data-aos="zoom-out">
              <img src="<?php echo get_field('foto_2-4'); ?>" alt="bio" />
              <figcaption><span>Мі<?php echo get_field('podpis_foto_2-4'); ?>нск</span></figcaption>
            </figure>
          </div>
        </div>
        <div class="bio-detail__block">
          <div class="bio-detail__images">
            <figure data-aos="zoom-out">
              <img src="<?php echo get_field('foto_2-5'); ?>" alt="bio" />
              <figcaption><span><?php echo get_field('podpis_foto_2-5'); ?></span></figcaption>
            </figure>
            <figure data-aos="zoom-out" data-aos-delay="200">
              <img src="<?php echo get_field('foto_2-6'); ?>" alt="bio" />
              <figcaption><span><?php echo get_field('podpis_foto_2-6'); ?></span></figcaption>
            </figure>
          </div>
          <div class="bio-detail__text-lg" data-aos="fade-left" data-aos-delay="200">
            <?php echo get_field('opisanie_2-3'); ?>
          </div>
        </div>
      </section>

      <div class="bio-grid">
        <div class="bio-grid__text">
          <p>
            <?php if (get_field('tekst_2-3')) : ?>
            <?php echo get_field('tekst_2-3'); ?>
            <?php endif; ?>

          </p>
        </div>
        <div class="bio-grid__text">
          <?php if (get_field('tekst_2-4')) : ?>
          <?php echo get_field('tekst_2-4'); ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="bio__books">
        <div class="bio-book">
          <div class="bio-book__inner">
            <div class="bio-book__header">
              <div class="bio-book__img">
                <img src="<?= $assetsPath ?>img/books/book-1.png" alt="@@title" />
              </div>
              <div class="bio-book__top">
                <div class="bio-book__year">2019</div>
                <div class="bio-book__type">
                  <div class="bio-book__type-text">Бестселлер</div>
                </div>
                <h5 class="bio-book__title">«Держись и пиши!»</h5>
                <h6 class="bio-book__subtitle">Бесстрашная книга о создании текстов</h6>
              </div>
            </div>

            <div class="bio-book__body">
              <div class="bio-book__text">
                <p>Каждая глава – один миф о писательстве (их 29). К примеру: миф о писательском отпуске, о кабинете, о
                  вдохновении или о том, что писательство – дело одинокое.</p>

                <p>Книга содержит множество практических советов и упражнений, которые помогают бесстрашно приступить к
                  делу и не опасаться за результат. В книге есть выдержки из черновиков классиков.</p>

                <p>Первый тираж книги увеличивали дважды еще до того, как книга вышла из типографии. «Держись и пиши!»
                  стала настольной для многих писателей, редакторов и людей не только творческих профессий.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bio-book">
          <div class="bio-book__inner">
            <div class="bio-book__header">
              <div class="bio-book__img">
                <img src="<?= $assetsPath ?>img/books/book-2.png" alt="@@title" />
              </div>
              <div class="bio-book__top">
                <div class="bio-book__year">2021</div>
                <div class="bio-book__type">
                  <div class="bio-book__type-text">Бестселлер</div>
                </div>
                <h5 class="bio-book__title">«Европа во мне»</h5>
                <h6 class="bio-book__subtitle">Как не потерять себя в новых странах, условиях и ролях</h6>
              </div>
            </div>

            <div class="bio-book__body">
              <div class="bio-book__text">
                <p>Книга «Европа во мне» отчасти об опыте эмиграции, но всегда – о доме, который мы строим сами внутри и
                  снаружи. Об адаптивности в современном быстро меняющемся мире. О том, что важно узнавать себя, крепко
                  стоять на своем и в то же время быть готовой измениться в любую минуту.</p>

                <p>Это короткие зарисовки, в которых много жизни, которые вырывают из обычного ее течения в чудо
                  человеческого общения.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bio-book bio-book-last">
          <div class="bio-book__inner">
            <div class="bio-book__header">
              <div class="bio-book__img">
                <img src="<?= $assetsPath ?>img/books/book-3.png" alt="@@title" />
              </div>
              <div class="bio-book__top">
                <div class="bio-book__year">2014</div>
                <div class="bio-book__type">
                  <div class="bio-book__type-text">премия “Дэбют”</div>
                </div>
                <h5 class="bio-book__title">«Сарочае радыё»</h5>
                <!-- <h6 class="bio-book__subtitle">@@subtitle</h6> -->
              </div>
            </div>

            <div class="bio-book__body">
              <div class="bio-book__text">
                <p>За эту книгу Екатерина получила премию «Дэбют».</p>

                <p>«Сарочае радыё» (в русском варианте – «Сарафанное радио») – это документальная повесть о девушке,
                  желающей быть честным журналистом в очень непростой стране.</p>

                <p>Написана на белорусском языке во время работы Кати на «Европейском радио для Беларуси». Тираж
                  распродан, больше купить нельзя.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="bio__teach">
          <div class="bio-teach">
            <div class="bio-teach__inner">
              <div class="bio-teach__top">
                <div class="bio-teach__content">
                  <div class="bio-teach__text">
                    <p>
                      Екатерина провела больше <b>100</b> прямых эфиров, презентаций и вебинаров, выступала на
                      конференции ProWomen.by, конференции по копирайтингу и других. <b>Опыт</b> работы на радио,
                      преподавательский опыт, неугасимый интерес к риторике и ораторскому мастерству, а также
                      постоянная практика делают ее <b>выступления увлекательными</b>.
                    </p>
                  </div>
                </div>
                <div class="bio-teach__decor">
                  <div class="bio-teach__img">
                    <img src="<?= $assetsPath ?>img/bio/bio-work.webp" alt="biography">
                  </div>
                </div>
              </div>
              <div class="bio-teach__material">
                <div class="bio-teach__title-sm">
                  <?php if ( get_field('zagolovok_4-1') ) : ?>
                  <?php echo get_field('zagolovok_4-1'); ?>
                  <?php endif; ?>
                </div>
                <div class="bio-teach__tags">
                  <?php $knopki_1 = get_field('knopki_1'); ?>
                  <?php foreach( $knopki_1 as $item) :  ?>
                  <a href="<?= $item['ccylka']; ?>" class="bio-teach__tag"><?= $item['tnkst']; ?></a>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="bio-teach__auth"><span>Пожалуйста, указывайте авторство фотографий</span></div>
            </div>
          </div>
        </div>
        <div class="bio__buttons">
          <div class="buttons">
            <?php $knopki_2 = get_field('knopki_2'); ?>
            <?php foreach( $knopki_2 as $key => $item) :  ?>
            <a href="<?= $item['ccylka']; ?>" class="button <?php if($kay === 0) { echo 'button--accent'; } ?>"><?= $item['tnkst']; ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-quote footer-quote--manifest"
      style="background-image: url(<?= $assetsPath ?>img/bio-footer.webp)">
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