<?php

function create_post_type() {
  register_post_type( 'product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'product-category' ),
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-cart',
      'rewrite' => array( 'slug' => 'shop' ),
    )
  );
  register_taxonomy(
       'product-category',
       'product',
       array(
           'label' => __( 'Categories' ),
           'rewrite' => array( 'slug' => 'shop' ),
           'hierarchical' => true,
           'has_archive' => true
       )
   );
}
add_action( 'init', 'create_post_type' );

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


//===STEP 1 (affect only these CUSTOM POST TYPES)
$GLOBALS['my_post_typesss'] = array('product');



//===STEP 2  (create desired PERMALINKS)
add_filter('post_type_link',    'my_func88888', 6, 4 );
                        function my_func88888( $post_link, $post, $sdsd){
    if (!empty($post->post_type) && in_array($post->post_type, $GLOBALS['my_post_typesss']) ) {
        $SLUGG = $post->post_name;
        $post_cats = get_the_category($id);
        if (!empty($post_cats[0])){ $target_CAT= $post_cats[0];
            while(!empty($target_CAT->slug)){
                $SLUGG =  $target_CAT->slug .'/'.$SLUGG;
                if  (!empty($target_CAT->parent)) {$target_CAT = get_term( $target_CAT->parent, 'category');}   else {break;}
            }
            $post_link= get_option('home').'/'. urldecode($SLUGG);
        }
    }
    return  $post_link;
}


// STEP 3  (by default, while accessing:  "EXAMPLE.COM/category/postname"     WP thinks, that a standard post is requested. So, we are adding CUSTOM POST TYPE into that query.
add_action('pre_get_posts', 'my_func4444',  12);
                    function my_func4444($q){
    if ($q->is_main_query() && !is_admin() && $q->is_single){
        $q->set( 'post_type',  array_merge(array('post'), $GLOBALS['my_post_typesss'] )   );
    }
    return $q;
}

include( get_stylesheet_directory() . '/products-shortcode.php' );

add_shortcode('products', 'products_shortcode');

//Create extra fields called Altnative Text and Custom Classess
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    $args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
    $args['class'] = array('type' => 'text', 'label' => 'Custom Classess', 'name' => 'class', 'value' => get_field($field . '_class', $attachment_id) ); // Creates Custom Classess field
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );


function remove_page_from_query_string($query_string)
{
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');

?>
