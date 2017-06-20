<?php

/*

Template Name: Trombinoscope

*/

?>

<?php get_header(); ?>

<div class="wrap">

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

        <?php

            $args = array( 'post_type' => 'trombinoscope', 'posts_per_page' => 20 );

            $loop = new WP_Query( $args );

echo '<div class="trombi">';

            while ( $loop->have_posts() ) : $loop->the_post();

echo '<div class="apprenant">';

                echo '<div class="trombi-title">';

                the_title();

                echo '</div>';

                echo '<div class="trombi-content">';

                the_content();

              if(!empty(get_post_meta($post->ID, 'Linkedin' , true))){

                  echo '<p><a href=' . get_post_meta($post->ID, 'Linkedin' , true) . '>Linkedin</a></p>';

              }

                if(!empty(get_post_meta($post->ID, 'Github' , true))){

                  echo '<p><a href=' . get_post_meta($post->ID, 'Github' , true) . '>Github</a></p>';

              }

                echo '</div>';

echo '</div>';

            endwhile;

echo '</div>';

       ?>

        </main><!-- #main -->

    </div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer(); ?>
