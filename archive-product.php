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
      <h3>the INDEX TEST</h3>
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

<!-- PRODUCT GRID LAYOUT -->

<div class="row categories" style="text-align: center; padding-bottom: 4em;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <div class="container narrow">
    <div class="product-grid">
      <?php
         $args = array(
                     'taxonomy' => 'product-category',
                     'orderby' => 'name',
                     'order'   => 'ASC',
                     'parent' => 0
                 );

         $cats = get_categories($args);

         foreach($cats as $cat) {
           if ($cat->name == "Uncategorized") {
           } else {
            $image = get_field('category_image', 'product-category' . '_' . $cat->term_id);
            ?>

               <div class="three columns" data-tilt data-tilt-perspective="5000" data-tilt-scale="1.01" data-tilt-speed="5000" style="transform-style: preserve-3d;">
                 <a href="<?php echo get_term_link($cat); ?>">
                   <div class="image-holder" style="background: linear-gradient(to top, rgba(256, 256, 256, 0.8), rgba(256, 256, 256, 0.1)), url('<?php echo $image ?>'); background-size: cover;">
                     <p style="transform: translateZ(10px)"><?php echo ($cat->name)?></p>
                   </div>
                 </a>
               </div>

      <?php
           }
         }
      ?>
    </div>
  </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->


<?php include("partials/email-subscribe.php") ?>

<?php

get_footer();

?>
