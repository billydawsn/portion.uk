<?php

 /* Template Name: Shop Page */

get_header();

?>

<?php if( get_field('post_title') ): ?>
  <?php if( get_field('post_title_image') ): ?>
    <meta property="og:image" content="<?php echo the_field('post_title_image'); ?>" />
    <div class="row flex" style="height: 25vh; background-image:url('<?php the_field('post_title_image'); ?>'); background-position-y: 50%; background-size: cover; background-repeat: no-repeat;">
  <?php endif; ?>
    <div class="container narrow blog-masthead" style="margin-top: 4em">
      <div class="text">
        <h1><?php the_field('post_title'); ?></h1>
        <meta property="og:title" content="<?php the_field('post_title'); ?> on molino" />
        <p>Here's some things we find add value to our lives, we hope they do the same for you.</p>
      </div>
    </div>
  </div>
<?php endif; ?>

<!-- PRODUCT GRID LAYOUT -->

<div class="row home">
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
              <img src="<?php echo $first['full_image_url']; ?>" alt="<?php echo $first['title']; ?>">
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
