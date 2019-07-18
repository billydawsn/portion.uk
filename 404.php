<?php

 /* Template Name: Home Page */

get_header();

?>

<!-- CENTER TEXT -->

<div class="row" style="padding-top: 8em;">
  <div class="container narrower center">
    <h1>404</h1>
    <h2>sorry about that!</h2>
    <p>It looks like we couldn't quite spot the page you're looking for there. Here's some of our latest additions, we think you'll like these.</p>
  </div>
</div>

<!-- END CENTER TEXT -->

<!-- PRODUCT GRID LAYOUT -->

<div class="row">
  <div class="container narrow">
    <div class="product-grid">
      <?php
      // Default arguments
        $args = array(
        	'posts_per_page' => 15, // How many items to display
        	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
          "orderby"          => "post_date",
          'post_type'  => "product"
        );

        // Query posts
        $wpex_query = new wp_query( $args );

        // Loop through posts
        foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

          <a href="<?php the_permalink(); ?>" class="item-container">
            <div class="item-content">
              <?php
              $images = acf_photo_gallery('product_gallery', $post->ID);
              $first = reset($images);
              ?>
              <img src="<?php echo $first['full_image_url']; ?>">
            </div>
          </a>


      <?php
      endforeach;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->

<?php

get_footer();

?>
