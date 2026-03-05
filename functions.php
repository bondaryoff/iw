<?php
function load_style_script() {
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/app.js', [], '2.0', true);
}
add_action('wp_enqueue_scripts', 'load_style_script');

register_nav_menus(['top' => 'top_menu', 'bottom' => 'footer_menu']);

if (function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
add_theme_support('post-thumbnails');

add_filter('wpcf7_autop_or_not', '__return_false');

// Classic checkout
add_filter('woocommerce_checkout_fields', function($fields) {
    $remove = [
        'billing_country',
        'billing_company',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_state',
        'billing_phone',
        'billing_postcode',
    ];
    foreach ($remove as $field) {
        unset($fields['billing'][$field]);
    }
    unset($fields['order']['mailpoet_woocommerce_checkout_optin']);
    return $fields;
});

// Block checkout — hide fields via locale settings
add_filter('woocommerce_get_country_locale', function($locale) {
    $fields = ['postcode', 'state', 'city', 'address_1', 'address_2', 'company', 'phone', 'country'];
    foreach (array_keys($locale) as $country) {
        foreach ($fields as $field) {
            $locale[$country][$field]['required'] = false;
            $locale[$country][$field]['hidden'] = true;
        }
    }
    return $locale;
});

add_filter('woocommerce_default_address_fields', function($fields) {
    $remove = ['country', 'company', 'address_1', 'address_2', 'city', 'state', 'postcode'];
    foreach ($remove as $field) {
        if (isset($fields[$field])) {
            $fields[$field]['required'] = false;
            $fields[$field]['hidden'] = true;
        }
    }
    return $fields;
});

add_action('init', 'add_taxonomies');
function add_taxonomies() {
    register_taxonomy('type', 'my_conf_items', [
        'labels' => [
            'menu_name' => 'Тип темы конференций'
        ],
        'public' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true
    ]);
}

// add posttypes
add_action('init', 'add_posttypes');
function add_posttypes() {
    ///// 1
    register_post_type( 'addit_sevices', [
        'labels' => [
            'menu_name' => 'Доп. услуги'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-airplane'
    ]);
    ///// 2
    register_post_type( 'my_books', [
        'labels' => [
            'menu_name' => 'Книги'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-book'
    ]);
    ///// 3
    register_post_type( 'my_feedbacks', [
        'labels' => [
            'menu_name' => 'Отзывы'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-edit-large'
    ]);
    ///// 4
    register_post_type( 'my_products', [
        'labels' => [
            'menu_name' => 'Мерч'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-cart',
    ]);
    ///// 5
    register_post_type( 'my_presents', [
        'labels' => [
            'menu_name' => 'Подарки'
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-smiley',
    ]);
    ///// 6
    register_post_type( 'my_youtube', [
        'labels' => [
            'menu_name' => 'Ютуб видео'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-video-alt3',
    ]);
    ///// 7
    register_post_type( 'my_podcasts', [
        'labels' => [
            'menu_name' => 'Аудио подкасты'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-microphone',
    ]);
    ///// 8
    register_post_type( 'my_conf_items', [
        'labels' => [
            'menu_name' => 'Темы конференций'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-admin-comments',
    ]);
    ///// 9
    register_post_type( 'my_interview', [
        'labels' => [
            'menu_name' => 'Примеры интервью'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-microphone',
    ]);
    ///// 10
    register_post_type( 'my_tickets', [
        'labels' => [
            'menu_name' => 'Мои письма'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-email-alt',
    ]);
    ///// 11
    register_post_type( 'my_authors', [
        'labels' => [
            'menu_name' => 'Сопровождение авторов'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-buddicons-buddypress-logo',
    ]);
    ///// 12
    register_post_type( 'my_retreats', [
        'labels' => [
            'menu_name' => 'Ретриты'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-admin-site',
    ]);
    ///// 13
    register_post_type( 'my_retreat_videos', [
        'labels' => [
            'menu_name' => 'Видео с ретритов'
        ],
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-video-alt2',
    ]);
}



class Menu_Walker extends Walker_Nav_Menu {

  function start_lvl( &$output, $depth = 0, $args = null ) {
    if ($depth === 0) {
      $output .= '<div class="sub-menu"><ul class="sub-menu__list">';
    }
  }

  function end_lvl( &$output, $depth = 0, $args = null ) {
    if ($depth === 0) {
      $output .= '</ul></div>';
    }
  }

  function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $li_class = $depth === 0 ? 'menu__item' : 'sub-menu__item';
    $a_class  = $depth === 0 ? 'menu__link' : 'sub-menu__link';

    $output .= '<li class="'. $li_class .'">';
    $output .= '<a href="'. esc_url($item->url) .'" class="'. $a_class .'">';
    $output .= esc_html($item->title);
    $output .= '</a>';
  }

  function end_el( &$output, $item, $depth = 0, $args = null ) {
    $output .= '</li>';
  }
}
