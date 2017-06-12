<?php
// function wpm_custom_post_type() {
//
// 	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
// 	$labels = array(
// 		// Le nom au pluriel
// 		'name'                => _x( 'Séries TV', 'Post Type General Name'),
// 		// Le nom au singulier
// 		'singular_name'       => _x( 'Série TV', 'Post Type Singular Name'),
// 		// Le libellé affiché dans le menu
// 		'menu_name'           => __( 'Séries TV'),
// 		// Les différents libellés de l'administration
// 		'all_items'           => __( 'Toutes les séries TV'),
// 		'view_item'           => __( 'Voir les séries TV'),
// 		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
// 		'add_new'             => __( 'Ajouter'),
// 		'edit_item'           => __( 'Editer la séries TV'),
// 		'update_item'         => __( 'Modifier la séries TV'),
// 		'search_items'        => __( 'Rechercher une série TV'),
// 		'not_found'           => __( 'Non trouvée'),
// 		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
// 	);
//
// 	// On peut définir ici d'autres options pour notre custom post type
//
// 	$args = array(
// 		'label'               => __( 'Séries TV'),
// 		'description'         => __( 'Tous sur séries TV'),
// 		'labels'              => $labels,
// 		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
// 		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
// 		/*
// 		* Différentes options supplémentaires
// 		*/
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'has_archive'         => true,
// 		'rewrite'			  => array( 'slug' => 'series-tv'),
//
// 	);
//
// 	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
// 	register_post_type( 'seriestv', $args );
//
// }
//
// add_action( 'init', 'wpm_custom_post_type', 0 );





function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Trombinoscope', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Trombinoscope', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Trombinoscope'),
		// Les différents libellés de l'administration



		'all_items'           => __( 'Toutes les apprenant'),
		'view_item'           => __( 'Voir les apprenants'),
		'add_new_item'        => __( 'Ajouter un apprenant'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer'),
		'update_item'         => __( 'Modifier'),
		'search_items'        => __( 'Rechercher'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __( 'Ajoutez un.e apprenant.e'),
		'description'         => __( 'Infos apprenants'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/*
		* Différentes options supplémentaires
		*/
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'series-tv'),

	);

	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'seriestv', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );



// Ajout de custom post field :


add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');
 function wpc_champs_personnalises_defaut($post_id)
 {
 if ( $_GET['post_type'] != 'page' ) {
 add_post_meta($post_id, 'Prénom', '', true);
 add_post_meta($post_id, 'lien CV', '', true);
 add_post_meta($post_id, 'lien linkedin', '', true);
 add_post_meta($post_id, 'lien Github', '', true);
 }
 return true;
 }

?>
