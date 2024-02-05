<?php

function enqueue_custom_styles()
{
// Enqueue Animate CSS
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');

// Enqueue AOS CSS
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');

// Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

// Enqueue CV CSS
    wp_enqueue_style('cv', get_template_directory_uri() . '/assets/css/cv.css');

// Enqueue Datepicker CSS
    wp_enqueue_style('datepicker', get_template_directory_uri() . '/assets/css/datepicker.css');

// Enqueue Font Awesome CSS
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

// Enqueue IcoFont CSS
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css');

// Enqueue Magnific Popup CSS
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');

// Enqueue Main CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

// Enqueue Nice Select CSS
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');

// Enqueue Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

// Enqueue Owl Carousel CSS
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css');

// Enqueue Responsive CSS
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

// Enqueue Slicknav CSS
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles', 10);

function enqueue_custom_scripts()
{
    // Enqueue jQuery (use the version bundled with WordPress)
    wp_enqueue_script('jquery');

    // Enqueue Popper.js
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js', array(), null, true);

    // Enqueue Bootstrap JavaScript (depends on jQuery and Popper.js)
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/styles/core/bootstrap.min.js', array('jquery', 'popper'), null, true);

    // Enqueue other core JavaScript files
    $core_js_files = array(
        'jquery.3.2.1.min.js',
        'popper.min.js',
        'bootstrap.min.js', // Include Bootstrap after Popper.js
    );

    // Enqueue core scripts with their dependencies
    enqueue_scripts_with_path($core_js_files, 'core', array('jquery', 'popper'));

    // Enqueue plugins JavaScript files
    $plugins_js_files = array(
        'bootstrap-datepicker.js',
        'bootstrap-switch.js',
        'jquery.sharrre.js',
        'nouislider.min.js',
    );

    // Enqueue plugin scripts with their dependencies
    enqueue_scripts_with_path($plugins_js_files, 'plugins', array('jquery'));

    // Enqueue additional JavaScript files
    $additional_js_files = array(
        'aos.js',
        'colors.js',
        'cv.js',
        'easing.js',
        'gmaps.min.js',
        'jquery.counterup.min.js',
        'jquery.magnific-popup.min.js',
        'jquery.nav.js',
        'jquery.scrollUp.min.js',
        'jquery-ui.min.js',
        'main.js',
        'map-active.js',
        'niceselect.js',
        'now-ui-kit.js',
        'owl-carousel.js',
        'slicknav.min.js',
        'steller.js',
        'tilt.jquery.min.js',
        'wow.min.js',
    );

    // Enqueue additional scripts with their dependencies
    enqueue_scripts_with_path($additional_js_files, '', array('jquery'));

    // Enqueue Google Maps API with your API key
    $google_maps_api_key = 'AIzaSyAUUU4Kdq2kniiKbniPVnwoEpAx0nSmYkY'; // Replace with your actual API key
    wp_enqueue_script(
        'google-maps-api',
        'https://maps.googleapis.com/maps/api/js?key=' . $google_maps_api_key,
        array(),
        null,
        true
    );
}

function enqueue_scripts_with_path($files, $folder, $dependencies)
{
    foreach ($files as $file) {
        $path = ($folder) ? "/styles/$folder/$file" : "/styles/$file";
        $handle = 'madsen-' . basename($file, '.js');

        wp_enqueue_script(
            $handle,
            get_template_directory_uri() . $path,
            $dependencies,
            null,
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');