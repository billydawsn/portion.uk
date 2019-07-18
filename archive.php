<?php

get_header();

$category = get_queried_object();
$image = get_field('category_image', 'product-category' . '_' . $category->term_id);
$title = get_field('category_title', 'product-category' . '_' . $category->term_id);
$description = get_field('category_short_description', 'product-category' . '_' . $category->term_id);

?>

<div class="top-wave">
  <img src="/wp-content/themes/eligam/assets/images/top-wave.svg">
</div>

<div class="row masthead full-masthead round-masthead" style="height: calc(60vh - 4em);">
  <div class="container narrow">
    <div class="copy-block">
      <h3>the shop</h3>
      <h1><?php echo $title; ?></h1>
      <p><?php echo $description; ?></p>
    </div>
    <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php echo $image; ?>'); background-size: cover;">
    </div>
  </div>
</div>


<!-- PRODUCT GRID LAYOUT -->

<div class="row home" style="text-align: center; padding-bottom: 0;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <div class="container narrow">
    <div class="product-grid">
      <?php

      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      // Default arguments
        $args = array(
          'paged' => $paged,
        	'posts_per_page' => 18, // How many items to display
          "orderby"          => "post_date",
          'post_type'  => "product",
          'tax_query' => array(
            array(
                'taxonomy' => 'product-category',
                'field'    => 'term_id',
                'terms'    => $category->term_id,
            )
          )
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
    endforeach; ?>
    </div>
    </div>
    <div class="pagination">
      <div class="previous-page"><?php previous_posts_link( '< back' );?></div>
      <div class="next-page"><?php next_posts_link( 'next >', $wpex_query->max_num_pages ); ?></div>
    </div>
    <?php

      wp_reset_postdata();
      ?>


</div>

<!-- END PRODUCT GRID LAYOUT -->

<?php include("partials/email-subscribe.php") ?>

<?php

get_footer();

?>
