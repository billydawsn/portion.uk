<!-- PRODUCT GRID LAYOUT -->

<div class="row" style="text-align: center;padding-bottom: 0em; " data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <div class="container narrow">
    <div class="product-grid">
      <?php
      // Default arguments
        $args = array(
        	'posts_per_page' => 12, // How many items to display
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
              <img src="<?php echo $first['full_image_url']; ?>" alt="<?php echo $first['title']; ?>">
            </div>
          </a>


      <?php
      endforeach;
      wp_reset_postdata();
      ?>
    </div>
  </div>
  <a href="/shop/"><button style="margin-top: 6em;">view all products<img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
</div>

<!-- END PRODUCT GRID LAYOUT -->
