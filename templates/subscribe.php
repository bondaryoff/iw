<?php
/* Template name: subscribe */
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
    <div class="subscribe">
        <div class="container-left">
            <div class="hero-subscribe">
                <div class="hero-subscribe__head">
                    <h1 class="hero-subscribe__title">
                        Смузи-<span>рассылка</span>
                    </h1>
                    <div class="hero-subscribe__head-text">
                        <p><?php the_content() ?></p>
                    </div>
                </div>
                <div class="hero-subscribe__body">
                    <div class="hero-subscribe__img">
                        <span class="hero-subscribe__img-decor"></span>
                        <picture><source srcset="<?= get_the_post_thumbnail_url() ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="desktop" /></picture>
                        <picture><source srcset="<?= get_field('1_mobile_img')['url'] ?>" type="image/webp"><img src="<?= get_field('1_mobile_img')['url'] ?>" alt="" class="mobile" /></picture>
                    </div>
                    <div class="hero-subscribe__right">
                        <div class="hero-subscribe__block">
                            <div class="hero-subscribe__text">
                                <p><?= get_field('1_text_1') ?></p>
                            </div>
                        </div>
                        <div class="hero-subscribe__bottom">
                            <div class="hero-subscribe__text">
                                <p><?= get_field('1_text_2') ?></p>
                            </div>
                            <div class="hero-subscribe__text">
                                <p>
                                    <b><?= get_field('1_text_3') ?></b>
                                </p>
                            </div>
<!--  need a solution   -->
                            <div class="hero-subscribe__more">
                                <form action="#" class="hero-subscribe__form">
                                    <div class="field">
                                        <input type="email" placeholder="Ваш E-mail" />
                                    </div>
                                    <button type="submit" class="btn-lg btn-lg--accent fonr-bold">
                                        Подписаться
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="subscribe-slider">
            <div class="container">
                <h2 class="subscribe-slider__title"><?= get_field('2_title') ?></h2>
                <div class="subscribe-slider__slider">
                    <div class="subscribe-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach(get_field('2_mails') as $mail): ?>
                            <div class="swiper-slide">
                                <div class="subscribe-letter">
                                    <div class="subscribe-letter__img">
                                        <picture><source srcset="<?= get_the_post_thumbnail_url($mail) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($mail) ?>" alt="letter" /></picture>
                                    </div>
                                    <div class="subscribe-letter__body">
                                        <button class="subscribe-letter__icon">
                                            <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.3736 0H23.6264C25.537 0 26.5 0.885 26.5 2.685V15.315C26.5 17.1 25.537 18 23.6264 18H3.3736C1.46296 18 0.5 17.1 0.5 15.315V2.685C0.5 0.885 1.46296 0 3.3736 0ZM13.4924 12.9L23.7945 4.605C24.1614 4.305 24.4518 3.615 23.9932 3C23.55 2.385 22.7399 2.37 22.2049 2.745L13.4924 8.535L4.79512 2.745C4.26014 2.37 3.45003 2.385 3.00676 3C2.54821 3.615 2.83862 4.305 3.20547 4.605L13.4924 12.9Z" fill="#A96A7D" />
                                            </svg>
                                        </button>
                                        <div class="subscribe-letter__name"><?= get_the_title($mail) ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="subscribe-slider__nav">
                        <button type="button" class="subscribe-button-prev slider-button-prev"></button>
                        <button type="button" class="subscribe-button-next slider-button-next"></button>
                    </div>
                    <div class="subscribe-slider__pagination">

                        <div class="subscribe-pagination slider-pagination" data-da=".subscribe-slider__nav,1023.98,1"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="subscribe-bottom">
            <div class="container">
                <div class="subscribe-bottom__content">
                    <h2 class="subscribe-bottom__title"><?= get_field('3_title') ?></h2>
                    <div class="subscribe-bottom__social">
                        <a href="<?= get_field('youtube_link', 'options') ?>"><svg width="60" height="51" viewBox="0 0 60 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.7335 0.230713C32.3356 0.240088 36.3438 0.280716 40.604 0.458852L42.1161 0.527606C46.4033 0.736994 50.6875 1.09952 52.8146 1.71518C55.6498 2.54648 57.8759 4.96538 58.6289 8.03433C59.829 12.9096 59.979 22.4165 59.997 24.7197L60 25.1948V25.7386C59.979 28.0418 59.829 37.5518 58.6289 42.424C57.8669 45.5023 55.6378 47.9243 52.8146 48.7431C50.6875 49.3588 46.4033 49.7213 42.1161 49.9307L40.604 50.0026C36.3438 50.1776 32.3356 50.2213 30.7335 50.2276L30.0285 50.2307H29.2635C25.8733 50.2088 11.6946 50.0495 7.18236 48.7431C4.35022 47.9118 2.12111 45.4929 1.36807 42.424C0.168009 37.5487 0.0180009 28.0418 0 25.7386V24.7197C0.0180009 22.4165 0.168009 12.9065 1.36807 8.03433C2.13011 4.95601 4.35922 2.53398 7.18536 1.71831C11.6946 0.408848 25.8763 0.249464 29.2665 0.230713H30.7335ZM23.9982 14.2941V36.1705L41.9991 25.2323L23.9982 14.2941Z" fill="#DBA96F" />
                            </svg>
                        </a>
                        <a href="<?= get_field('telegram_link', 'options') ?>">
                            <svg width="55" height="56" viewBox="0 0 55 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.5 0.730713C12.3131 0.730713 0 13.0438 0 28.2307C0 43.4176 12.3131 55.7307 27.5 55.7307C42.6869 55.7307 55 43.4176 55 28.2307C55 13.0438 42.6869 0.730713 27.5 0.730713ZM41.0071 19.5705L36.4925 40.8372C36.1602 42.3451 35.2619 42.7118 34.0083 42.0013L27.1333 36.9368L23.8196 40.1313C23.6572 40.3415 23.4489 40.5117 23.2105 40.6289C22.9722 40.7461 22.7102 40.8072 22.4446 40.8074H22.4331L22.9213 33.8086L35.6629 22.2999C36.2129 21.8118 35.5392 21.5345 34.8081 22.0226L19.0667 31.9363L12.2833 29.8188C10.8167 29.3536 10.7754 28.3522 12.5927 27.6326L39.0981 17.4163C40.331 16.9672 41.4035 17.7097 41.0048 19.5728L41.0071 19.5705Z" fill="#DBA96F" />
                            </svg>
                        </a>
                        <a href="<?= get_field('instagram_link', 'options') ?>"><svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.6728 0.233912C30.57 0.226631 32.4673 0.2457 34.3639 0.29111L34.8683 0.309309C35.4507 0.330109 36.0252 0.356108 36.7194 0.387307C39.4857 0.517302 41.3732 0.954088 43.0293 1.59627C44.7452 2.25664 46.1907 3.15101 47.6363 4.59656C48.958 5.89549 49.9809 7.46673 50.6339 9.20101C51.2761 10.8572 51.7129 12.7473 51.8428 15.5136C51.874 16.2052 51.9 16.7823 51.9208 17.3647L51.9364 17.8691C51.9826 19.7649 52.0026 21.6613 51.9962 23.5577L51.9988 25.4973V28.9031C52.0052 30.8004 51.9853 32.6976 51.939 34.5943L51.9234 35.0987C51.9026 35.6811 51.8766 36.2557 51.8454 36.9499C51.7155 39.7162 51.2735 41.6037 50.6339 43.2598C49.983 44.996 48.9598 46.5685 47.6363 47.8669C46.3362 49.1885 44.7642 50.2114 43.0293 50.8646C41.3732 51.5068 39.4857 51.9436 36.7194 52.0735C36.0252 52.1047 35.4507 52.1307 34.8683 52.1515L34.3639 52.1671C32.4673 52.2134 30.57 52.2333 28.6728 52.2269L26.7333 52.2295H23.3301C21.4329 52.236 19.5357 52.216 17.639 52.1697L17.1346 52.1541C16.5174 52.1318 15.9004 52.1058 15.2835 52.0761C12.5173 51.9462 10.6298 51.5042 8.97104 50.8646C7.23611 50.2129 5.66463 49.1898 4.36668 47.8669C3.04346 46.5677 2.01958 44.9954 1.36643 43.2598C0.724263 41.6037 0.287485 39.7162 0.157492 36.9499C0.128537 36.3329 0.102538 35.7159 0.079496 35.0987L0.066497 34.5943C0.0185648 32.6977 -0.00310306 30.8004 0.00150012 28.9031V23.5577C-0.00575601 21.6613 0.0133117 19.765 0.0586974 17.8691L0.0768964 17.3647C0.0976953 16.7823 0.123694 16.2052 0.154892 15.5136C0.284886 12.7447 0.721663 10.8597 1.36383 9.20101C2.01737 7.46588 3.04325 5.89508 4.36928 4.59916C5.66634 3.27516 7.23683 2.25033 8.97104 1.59627C10.6298 0.954088 12.5147 0.517302 15.2835 0.387307L17.1346 0.309309L17.639 0.29631C19.5348 0.248401 21.4311 0.226733 23.3275 0.231312L28.6728 0.233912ZM26.0002 13.2335C24.2778 13.2091 22.5677 13.5273 20.9694 14.1696C19.371 14.8119 17.9163 15.7655 16.6896 16.9749C15.463 18.1843 14.489 19.6255 13.8242 21.2146C13.1594 22.8037 12.817 24.5091 12.817 26.2317C12.817 27.9543 13.1594 29.6597 13.8242 31.2489C14.489 32.838 15.463 34.2792 16.6896 35.4886C17.9163 36.698 19.371 37.6516 20.9694 38.2938C22.5677 38.9361 24.2778 39.2543 26.0002 39.23C29.4478 39.23 32.7542 37.8604 35.1921 35.4225C37.6299 32.9846 38.9995 29.6781 38.9995 26.2304C38.9995 22.7827 37.6299 19.4762 35.1921 17.0384C32.7542 14.6005 29.4478 13.2335 26.0002 13.2335ZM26.0002 18.4333C27.0362 18.4142 28.0657 18.6018 29.0285 18.985C29.9912 19.3683 30.868 19.9395 31.6075 20.6654C32.347 21.3913 32.9345 22.2573 33.3355 23.2128C33.7366 24.1683 33.9433 25.1941 33.9435 26.2304C33.9436 27.2667 33.7373 28.2926 33.3366 29.2482C32.9358 30.2038 32.3486 31.07 31.6094 31.7962C30.8701 32.5223 29.9935 33.0939 29.0309 33.4774C28.0683 33.861 27.0388 34.0489 26.0028 34.0302C23.9342 34.0302 21.9503 33.2084 20.4876 31.7457C19.0249 30.2829 18.2032 28.299 18.2032 26.2304C18.2032 24.1618 19.0249 22.1779 20.4876 20.7152C21.9503 19.2524 23.9342 18.4307 26.0028 18.4307L26.0002 18.4333ZM39.6495 9.3336C38.8107 9.36717 38.0175 9.72398 37.436 10.3293C36.8544 10.9346 36.5296 11.7415 36.5296 12.5809C36.5296 13.4203 36.8544 14.2272 37.436 14.8325C38.0175 15.4378 38.8107 15.7946 39.6495 15.8282C40.5114 15.8282 41.338 15.4858 41.9474 14.8763C42.5569 14.2668 42.8993 13.4402 42.8993 12.5783C42.8993 11.7164 42.5569 10.8897 41.9474 10.2803C41.338 9.6708 40.5114 9.3284 39.6495 9.3284V9.3336Z" fill="#DBA96F" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class="subscribe-bottom__img">
                <picture><source srcset="<?= get_field('3_pre_footer_img')['url'] ?>" type="image/webp"><img src="<?= get_field('3_pre_footer_img')['url'] ?>" alt="subscribe" /></picture>

                <div class="subscribe-bottom__quote">
                    <span><?= get_field('3_pre_footer_text') ?></span>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

