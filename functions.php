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













 function parkingsystem_menus()

{

    register_nav_menus(

        array(

            'menu-inicio' => __('Menu Inicio', 'parkingsystem'),

            'menu-eventos' => __('Menu Regeneradoras', 'parkingsystem'),

            'menu-servicios' => __('Menu Servicios', 'parkingsystem'),

        )

    );

} 






// Hook para cargar los estilos en el front-end

add_action('wp_enqueue_scripts', 'parkingsystem_scripts_styles');


// Hook para registrar los menús

add_action('init', 'parkingsystem_menus');

