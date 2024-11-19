<?php
/**
 * The template for displaying all single posts.
 *
 * @package Tu_Tema
 */

defined( 'ABSPATH' ) || exit;

get_header(  ); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Inicia el loop para mostrar el contenido del post.
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post(); // Configura los datos del post actual.

                // Llama a una plantilla para mostrar el contenido del post.
                // Puedes personalizar esta parte en un archivo separado como content-single.php.
                get_template_part( 'template-parts/content', 'single' );

                // Muestra la sección de comentarios si están habilitados.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile;
        else :
            // Si no hay contenido, muestra un mensaje alternativo.
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer( );