<?php
function products_shortcode() {
  ob_start();?>
  <div class="row grid" style="padding-top: 6em; padding-bottom: 6em;">
       <div class="product-grid">

         <?php if( get_field('post_products') ):
           $products = get_field('post_products', false, false);
           $productArray = explode(',', $products);
          endif;
         ?>
         <?php
         global $post; // required
         $args = array(
           "posts_per_page" => 4,
           'post__in' => $productArray,
           "orderby"        => "post_date",
           "post_type"  => "product"
            );
         $custom_posts = get_posts($args);
         foreach($custom_posts as $post) : setup_postdata($post); ?>
         <a href="<?php the_permalink(); ?>" class="item-container">
           <div class="item-content">
             <?php
             $images = acf_photo_gallery("product_gallery", $post->ID);
             $first = reset($images);
             ?>
             <img src="<?php echo $first["full_image_url"]; ?>">
           </div>
         </a>
         <?php endforeach; ?>
      </div>
   </div>
   <?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
?>
