<?php
function register_nav() {
    register_nav_menus(
        array(
            'header' => "Header"
        )
    );

    register_nav_menus(
        array(
            'footer' => "Footer"
        )
    );

    register_nav_menus(
        array(
            '404' => "404"
        )
    );
}

if (! function_exists('setup'));
    function setup(){
        register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('team', 475, 475, array('center', 'center'));
    }
endif;