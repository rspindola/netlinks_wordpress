<?php
  /* Disable WordPress Admin Bar for all users */
  add_filter( 'show_admin_bar', '__return_false' );
  // add_theme_support( 'post-thumbnails' );

  // Hook <strong>lc_custom_post_movie()</strong> to the init action hook
  add_action( 'init', 'lc_custom_post_squad' );
 
  // The custom function to register a movie post type
  function lc_custom_post_squad() {
  
    // Set the labels, this variable is used in the $args array
    $labels = array(
      'name'               => __( 'Squad' ),
      'singular_name'      => __( 'Squad' ),
      'add_new'            => __( 'Add Novo Integrante' ),
      'add_new_item'       => __( 'Add Novo Integrante' ),
      'edit_item'          => __( 'Editar Integrante' ),
      'new_item'           => __( 'Novo Integrante' ),
      'all_items'          => __( 'Todos Integrante' ),
      'view_item'          => __( 'Ver Integrante' ),
      'search_items'       => __( 'Procurar Integrantes' ),
      'featured_image'     => 'Avatar',
      'set_featured_image' => 'Add Avatar'
    );
  
    // The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
      'labels'            => $labels,
      'description'       => 'Sobre alguns integrantes da empresa',
      'public'            => true,
      'menu_position'     => 5,
      'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      'has_archive'       => false,
      'show_in_admin_bar' => false,
      'show_in_nav_menus' => true
    );
  
    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('squad', $args);
    add_post_type_support( 'squad', 'thumbnail' );
  }
?>