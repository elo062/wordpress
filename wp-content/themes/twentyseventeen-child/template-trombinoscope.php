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
			$args = array( 'post_type' => 'Trombinoscope', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );

			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<div class="trombi-title">';
				the_title();
				echo '</div>';

				echo '<div class="trombi-content">';
				the_content();
				echo '</div>';
			endwhile;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div><!-- .wrap -->


<?php get_footer(); ?>
