<?php
/* Template name: confirm */
$assetsPath = get_template_directory_uri() . '/assets/';
get_header();
?>

<main class="page page--confirm">
    <div class="container">
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Главная' : 'General' ?></a></li>
                <li><span><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'Заявка принята' : 'Application accepted' ?></span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="confirm">
            <svg width="652" height="583" viewBox="0 0 652 583" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M542.663 179.944C592.332 249.871 668.417 321.091 647.5 404.165C626.571 487.284 528.092 518.341 449.129 551.417C383.77 578.795 313.929 591.764 245.645 572.498C178.982 553.689 128.699 505.544 87.8733 449.49C41.3759 385.65 -6.93427 316.66 2.22489 238.285C12.3761 151.422 60.6405 67.0711 137.423 25.4928C212.276 -15.0401 303.494 1.64719 383.156 32.0091C453.545 58.8368 499 118.474 542.663 179.944Z" stroke="#A96A7D" stroke-opacity="0.5" />
            </svg>

            <svg width="636" height="591" viewBox="0 0 636 591" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M312.105 561.895C224.662 577.822 124.407 617.979 55.6086 561.875C-13.2277 505.742 0.85057 399.666 4.46508 311.024C7.45692 237.652 25.9423 166.4 74.0035 110.759C120.923 56.4401 188.19 30.3749 258.73 16.6583C339.068 1.03624 425.036 -14.027 494.585 28.9759C571.667 76.6365 629.66 158.971 634.983 249.299C640.172 337.356 584.464 415.657 520.993 477.107C464.911 531.404 388.975 547.893 312.105 561.895Z" fill="#FFFDFA" />
            </svg>
            <div class="confirm__inner">
                <h1 class="confirm__title"><?php the_title() ?></h1>
                <div class="confirm__text">
                    <p><?php the_content() ?></p>
                </div>
                <a class="btn-lg btn-lg--accent font-bold" href="<?= home_url() ?>"><?= apply_filters('wpml_current_language', NULL) === 'ru' ? 'На главную' : 'Go to general page' ?></a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
