<?php
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
    <div class="hero-retreat">
        <div class="hero-retreat__inner">
            <div class="hero-retreat__top">
                <div class="hero-retreat__bg">
                    <span></span>
                    <span></span>
                    <picture><source srcset="<?= get_the_post_thumbnail_url() ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url() ?>" alt="retreat" /></picture>
                </div>
                <div class="container">
                    <div class="hero-retreat__top-inner">
                        <h1 class="hero-retreat__title"><?php the_content() ?></h1>
                        <!-- </div> -->
                        <div class="hero-retreat__date">
                            <span class="hero-retreat__date-decor"></span><?= get_field('1_date') ?></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="hero-retreat__bottom">
                    <div class="hero-retreat__text">
                        <?= get_field('1_left_text') ?>
                    </div>
                    <div class="hero-retreat__text">
                        <?= get_field('1_right_text') ?>
                        <span class="hero-retreat__decor-text"><?= get_field('1_label') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="eyes">
        <div class="container">
            <?php
            $video = get_field('2_main_video');
            ?>
            <div class="eyes__head">
                <h2 class="eyes__title"><?= get_field('2_title') ?></h2>
                <div class="video-player video-player--vertical">
                    <div class="video-player__block">
                        <div class="video-player__frame">
                            <picture><source srcset="<?= get_the_post_thumbnail_url($video) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($video) ?>" alt="video" /></picture>
                        </div>
                        <div class="video-player__layout">
                            <button class="video-player__play" data-width="640" data-height="360" data-fancybox data-src="<?= get_field('video_link', $video) ?>" allowfullscreen="true">
                                <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z" fill="#A96A7D" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="eyes__text">
                    <p><?= $video->post_content; ?></p>
                </div>
            </div>
            <div class="eyes__body">
                <div class="eyes__slider">
                    <div class="eyes-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(get_field('2_gallery_video') as $video): ?>
                            <div class="swiper-slide">
                                <div class="eye-card">
                                    <div class="eye-card__head">
                                        <div class="video-player video-player--vertical">
                                            <div class="video-player__block">
                                                <div class="video-player__frame">
                                                    <picture><source srcset="<?= get_the_post_thumbnail_url($video) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($video) ?>" alt="video" /></picture>
                                                </div>
                                                <div class="video-player__layout">
                                                    <button class="video-player__play" data-width="640" data-height="360" data-fancybox data-src="<?= get_field('video_link', $video) ?>" allowfullscreen="true">
                                                        <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z" fill="#A96A7D" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eye-card__body">
                                        <div class="eye-card__sup-title"><?= get_field('2_label') ?></div>
                                        <div class="eye-card__title"><?= get_the_title($video) ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="eyes__slider-nav slider-nav">
                        <button type="button" class="eye-button-prev slider-button-prev"></button>
                        <button type="button" class="eye-button-next slider-button-next"></button>
                    </div>
                    <div class="eye-pagination slider-pagination" data-da=".eyes__slider-nav,1023.98,1"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
    $plans = get_field('3_plans');
    foreach ($plans as $plan) {
        switch ($plan['num']) {
            case 1: $item1 = $plan;
            case 2: $item2 = $plan;
            case 3: $item3 = $plan;
            case 4: $item4 = $plan;
            case 5: $item5 = $plan;
            case 6: $item6 = $plan;
            case 7: $item7 = $plan;
            case 8: $item8 = $plan;
            case 9: $item9 = $plan;
            case 10: $item10 = $plan;
        }
    }
    ?>
    <?php if(count($plans)): ?>
    <section class="daily">
        <div class="container">
            <div class="daily__inner">
                <h2 class="daily__title"><?= get_field('3_title') ?></h2>
                <div class="desktop">
                    <div class="daily__gallery">
                        <div class="daily__gallery-col">
                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__span-one"></div>
                                    <div class="daily-item__span-two"></div>
                                    <div class="daily-item__number">1</div>
                                    <div class="daily-item__title"><?php if(isset($item1)) echo $item1['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item1)) echo $item1['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item1)) echo $item1['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item1)) echo $item1['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>

                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">3</div>
                                    <div class="daily-item__title"><?php if(isset($item3)) echo $item3['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item3)) echo $item3['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <div class="daily-item__img-square"></div>
                                    <picture><source srcset="<?php if(isset($item3)) echo $item3['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item3)) echo $item3['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>

                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">5</div>
                                    <div class="daily-item__title"><?php if(isset($item5)) echo $item5['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item5)) echo $item5['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item5)) echo $item5['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item5)) echo $item5['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>

                            <div class="daily-item">
                                <div class="daily-item__img-square"></div>
                                <div class="daily-item__content">
                                    <div class="daily-item__number">7</div>
                                    <div class="daily-item__title">
                                        <?php if(isset($item7)) echo $item7['title'] ?>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item7)) echo $item7['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item7)) echo $item7['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>

                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">9</div>
                                    <div class="daily-item__title"><?php if(isset($item9)) echo $item9['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item9)) echo $item9['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item9)) echo $item9['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item9)) echo $item9['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>
                        </div>
                        <div class="daily__gallery-col">
                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">2</div>
                                    <div class="daily-item__title"><?php if(isset($item2)) echo $item2['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item2)) echo $item2['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item2)) echo $item2['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item2)) echo $item2['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>
                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">4</div>
                                    <div class="daily-item__title"><?php if(isset($item4)) echo $item4['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item4)) echo $item4['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item4)) echo $item4['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item4)) echo $item4['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>
                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">6</div>
                                    <div class="daily-item__title"><?php if(isset($item6)) echo $item6['title'] ?></div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item6)) echo $item6['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item6)) echo $item6['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>
                            <div class="daily-item">
                                <div class="daily-item__content">
                                    <div class="daily-item__number">8</div>
                                    <div class="daily-item__title"><?php if(isset($item8)) echo $item8['title'] ?></div>
                                    <div class="daily-item__text">
                                        <p><?php if(isset($item8)) echo $item8['text'] ?></p>
                                    </div>
                                </div>
                                <div class="daily-item__img">
                                    <picture><source srcset="<?php if(isset($item8)) echo $item8['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item8)) echo $item8['img']['url'] ?>" alt="daily" /></picture>
                                </div>
                            </div>
                        </div>
                        <div class="daily-item daily-item--lg">
                            <div class="daily-item__content">
                                <div class="daily-item__number">10</div>
                                <div class="daily-item__title"><?php if(isset($item10)) echo $item10['title'] ?></div>
                                <div class="daily-item__text">
                                    <?php
                                        if (isset($item10['text'])) {
                                            $strings = explode('|delimiter|', $item10['text']);
                                        }
                                    ?>
                                    <div class="daily-item__text-line">
                                        <p>
                                            <?php if(isset($strings[0])) echo $strings[0] ?>
                                        </p>
                                    </div>
                                    <div class="daily-item__text-line">
                                        <p>
                                            <?php if(isset($strings[1])) echo $strings[1] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <div class="daily-item__img-square"></div>
                                <picture><source srcset="<?php if(isset($item10)) echo $item10['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item10)) echo $item10['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile">
                    <div class="daily__gallery">
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__span-one"></div>
                                <div class="daily-item__span-two"></div>
                                <div class="daily-item__number">1</div>
                                <div class="daily-item__title"><?php if(isset($item1)) echo $item1['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item1)) echo $item1['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item1)) echo $item1['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item1)) echo $item1['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">2</div>
                                <div class="daily-item__title"><?php if(isset($item2)) echo $item2['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item2)) echo $item2['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item2)) echo $item2['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item2)) echo $item2['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">3</div>
                                <div class="daily-item__title"><?php if(isset($item3)) echo $item3['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item3)) echo $item3['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <div class="daily-item__img-square"></div>
                                <picture><source srcset="<?php if(isset($item3)) echo $item3['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item3)) echo $item3['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">4</div>
                                <div class="daily-item__title"><?php if(isset($item4)) echo $item4['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item4)) echo $item4['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item4)) echo $item4['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item4)) echo $item4['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">5</div>
                                <div class="daily-item__title"><?php if(isset($item5)) echo $item5['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item5)) echo $item5['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item5)) echo $item5['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item5)) echo $item5['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">6</div>
                                <div class="daily-item__title"><?php if(isset($item6)) echo $item6['title'] ?></div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item6)) echo $item6['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item6)) echo $item6['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__img-square"></div>
                            <div class="daily-item__content">
                                <div class="daily-item__number">7</div>
                                <div class="daily-item__title"><?php if(isset($item7)) echo $item7['title'] ?></div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item7)) echo $item7['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item7)) echo $item7['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">8</div>
                                <div class="daily-item__title"><?php if(isset($item8)) echo $item8['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item8)) echo $item8['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item8)) echo $item8['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item8)) echo $item8['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item">
                            <div class="daily-item__content">
                                <div class="daily-item__number">9</div>
                                <div class="daily-item__title"><?php if(isset($item9)) echo $item9['title'] ?></div>
                                <div class="daily-item__text">
                                    <p><?php if(isset($item9)) echo $item9['text'] ?></p>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <picture><source srcset="<?php if(isset($item9)) echo $item9['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item9)) echo $item9['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                        <div class="daily-item daily-item--lg">
                            <div class="daily-item__content">
                                <div class="daily-item__number">10</div>
                                <div class="daily-item__title"><?php if(isset($item10)) echo $item10['title'] ?></div>
                                <div class="daily-item__text">
                                    <?php
                                    if (isset($item10['text'])) {
                                        $strings = explode('|delimiter|', $item10['text']);
                                    }
                                    ?>
                                    <div class="daily-item__text-line">
                                        <p>
                                            <?php if(isset($strings[0])) echo $strings[0] ?>
                                        </p>
                                    </div>
                                    <div class="daily-item__text-line">
                                        <p>
                                            <?php if(isset($strings[1])) echo $strings[1] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="daily-item__img">
                                <div class="daily-item__img-square"></div>
                                <picture><source srcset="<?php if(isset($item10)) echo $item10['img']['url'] ?>" type="image/webp"><img src="<?php if(isset($item10)) echo $item10['img']['url'] ?>" alt="daily" /></picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endif ?>

    <div class="container">
        <div class="retreat-review">
            <h2 class="retreat-review__title"><?= get_field('4_title') ?></h2>
            <div class="retreat-review__slider">
                <div class="retreat-swiper swiper">
                    <div class="swiper-wrapper">

                        <?php foreach(get_field('4_feedbacks') as $feedback): ?>
                        <div class="swiper-slide">
                            <div class="retreat-envelope">
                                <div class="retreat-envelope__head">
                                    <div class="retreat-envelope__left">
                                        <div class="retreat-envelope__img">
                                            <picture><source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="avatar" /></picture>
                                        </div>
                                        <div class="retreat-envelope__name"><?= get_the_title($feedback) ?></div>
                                    </div>
                                    <div class="retreat-envelope__title"><?= get_field('summary', $feedback) ?></div>
                                </div>
<!--                                <div class="retreat-envelope__body">-->
<!--                                    <a href="#" class="btn-lg btn-lg--accent">Читать отзыв</a>-->
<!--                                </div>-->
                                <div class="retreat-envelope__decor">
                                    <picture><source srcset="<?= $assetsPath ?>img/flower.webp" type="image/webp"><img src="<?= $assetsPath ?>img/flower.png" alt="flower" /></picture>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="retreat-envelope__slider-nav slider-nav">
                    <button type="button" class="retreat-button-prev slider-button-prev"></button>
                    <button type="button" class="retreat-button-next slider-button-next"></button>
                </div>

                <div class="retreat-pagination slider-pagination" data-da=".retreat-envelope__slider-nav,1023.98,1"></div>
            </div>
            <div class="retreat-feedback">
                <div class="retreat-feedback__decor">
                    <svg width="1600" height="577" viewBox="0 0 1600 577" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1678.9 42.4182C1456.29 -97.8574 1464.62 159.909 1491.11 210.184C1506.89 240.12 1559.79 201.267 1514.83 169.063C1167.78 -79.505 1548.13 614.012 932.458 495.734C717.711 454.478 486.334 192.786 331.645 199.388C176.956 205.989 280.037 481.209 313.391 475.376C387.777 458.027 137.738 309.348 -48.0013 575.874" stroke="url(#paint0_linear_1_4533)" stroke-width="1.15895" />
                        <defs>
                            <linearGradient id="paint0_linear_1_4533" x1="27.9853" y1="260.474" x2="1608.54" y2="442.581" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#C19561" stop-opacity="0.28" />
                                <stop offset="0.157694" stop-color="#B7836D" stop-opacity="0.38" />
                                <stop offset="0.386361" stop-color="#A96A7D" stop-opacity="0.15" />
                                <stop offset="0.718893" stop-color="#B07775" stop-opacity="0.16" />
                                <stop offset="1" stop-color="#C19561" stop-opacity="0.44" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <?php $feedback = get_field('4_main_feedback')?>
                <div class="retreat-feedback__body">
                    <div class="retreat-feedback__title"><?= get_the_title($feedback) ?></div>
                    <div class="retreat-feedback__text">
                        <p>
                            <?= get_field('summary', $feedback) ?>
                        </p>
                    </div>
                </div>
                <div class="retreat-feedback__img">
                    <picture><source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="avatar" /></picture>
                </div>
            </div>
        </div>
        <section class="visit">
            <div class="visit__content">
                <h3 class="visit__title"><?= get_field('5_title') ?></h3>
                <div class="visit__body">
                    <div class="visit__text">
                        <p><?= get_field('5_text') ?></p>
                    </div>
                    <a href="<?= get_field('5_btn_link') ?>" class="btn-lg btn-lg--accent"><?= get_field('5_btn_text') ?></a>
                </div>
            </div>
            <div class="visit__img">
                <picture><source srcset="<?= get_field('5_image_1')['url'] ?>" type="image/webp"><img src="<?= get_field('5_image_1')['url'] ?>" alt="visit" /></picture>
            </div>
            <div class="visit__right">
                <div class="visit__img-sm">
                    <picture><source srcset="<?= get_field('5_image_2')['url'] ?>" type="image/webp"><img src=<?= get_field('5_image_2')['url'] ?>" alt="visit" /></picture>
                </div>
            </div>
        </section>
    </div>
    <div class="retreat-bottom">
        <div class="retreat-bottom__img">
            <div class="container">
                <div class="retreat-bottom__quote">
                    <span><?= get_field('6_pre_footer_text') ?></span>
                </div>
            </div>
            <picture><source srcset="<?= get_field('6_pre_footer_img')['url'] ?>" type="image/webp"><img src="<?= get_field('6_pre_footer_img')['url'] ?>" alt="bottom" /></picture>
        </div>
    </div>
</main>

<?php get_footer(); ?>

