<?php



function parkingsystem_setup(){

    // Imagenes Destacadas

    add_theme_support('post-thumbnails');



    // Titulos para SEO

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'parkingsystem_setup' );



function parkingsystem_scripts_styles()

{

  

    // Encolar la hoja de estilos principal (style.css)

    wp_enqueue_style("style", get_stylesheet_uri(), array(), '1.0.0');

}



function parkingsystem_enqueue_scripts_header()

{

    // Encolar Swiper CSS

    wp_enqueue_style(

        'swiper-css',

        'https://unpkg.com/swiper/swiper-bundle.min.css'

    );



    // Encolar Swiper JS (en el header)

    wp_enqueue_script(

        'swiper-js',

        'https://unpkg.com/swiper/swiper-bundle.min.js',

        array(), // Dependencias (puedes poner otras si fuera necesario)

        null, // Sin versión específica

        false // Se carga en el header

    );



}










function parkingsystem_menus()

{

    register_nav_menus(

        array(

            'menu-inicio' => __('Menu Inicio', 'parkingsystem'),

            'menu-regeneradoras' => __('Menu Regeneradoras', 'parkingsystem'),

            'menu-servicios' => __('Menu Servicios', 'parkingsystem'),

        )

    );

}






function bvd_equipos_setup() {

    add_theme_support('custom-logo', array(

        'height'      => 100, // Altura del logo

        'width'       => 300, // Anchura del logo

        'flex-height' => true,

        'flex-width'  => true,

    ));

}

add_action('after_setup_theme', 'bvd_equipos_setup');




// Hook para cargar los estilos en el front-end

add_action('wp_enqueue_scripts', 'parkingsystem_scripts_styles');



// Hook para cargar los scripts del header en el front-end

add_action('wp_enqueue_scripts', 'parkingsystem_enqueue_scripts_header');



// Hook para cargar los scripts del footer en el front-end

add_action('wp_footer', 'parkingsystem_enqueue_scripts_footer');

// Hook para registrar los menús

add_action('init', 'parkingsystem_menus');

