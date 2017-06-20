<?php

// add_theme_support( 'post-thumbnails' );

add_action( 'init', 'create_post_type' );

function create_post_type() {

/* notre code PHP pour rajouter les custom post type */

register_post_type(

  'Trombinoscope',

  array(

    'label' => 'Apprenant.e.s',

    'labels' => array(

      'name' => 'Apprenant.e.s',

      'singular_name' => 'Apprenant.e.s',

      'all_items' => 'Tous les apprenant.e.s',

      'add_new_item' => 'Ajouter un apprenant.e.s',

      'edit_item' => 'Éditer un apprenant.e.s',

      'new_item' => 'Nouveau apprenant.e.s',

      'view_item' => 'Voir un apprenat.e.s',

      'search_items' => 'Rechercher parmi les apprenant.e.s',

      'not_found' => 'Pas dapprenant.e.s trouvé',

      'not_found_in_trash'=> 'Pas dapprenant.e.s dans la corbeille'

      ),

    'public' => true,

    'capability_type' => 'post',

    'supports' => array(

      'title',

      'editor',

      'thumbnail',

      'custom-fields'

    ),

    'has_archive' => true

  )

);

}

add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');

 function wpc_champs_personnalises_defaut($post_id)

 {

 if ( $_GET['post_type'] != 'page' ) {

 add_post_meta($post_id, 'Linkedin', '', true);

 add_post_meta($post_id, 'Github', '', true);

 }

 return true;

 }

?>
