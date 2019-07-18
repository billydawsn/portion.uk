<?php

 /* Template Name: Journal Page */

get_header();

?>

<?php if( get_field('post_title') ): ?>
  <?php if( get_field('post_title_image') ): ?>
    <meta property="og:image" content="<?php echo the_field('post_title_image'); ?>" />
    <div class="row flex" style="height: 40vh; background-image:url('<?php the_field('post_title_image'); ?>'); background-position-y: 50%; background-size: cover; background-repeat: no-repeat;">
  <?php endif; ?>
    <div class="container narrow blog-masthead" style="margin-top: 4em">
      <div class="text">
        <h3>what's going on?</h3>
        <h1><?php the_field('post_title'); ?></h1>
        <meta property="og:title" content="<?php the_field('post_title'); ?> on molino" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper velit ut ultricies condimentum. Nunc eros dolor, porta fermentum faucibus aliquam, dictum quis nulla.</p>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php include("partials/the-latest.php") ?>

<?php include("partials/email-subscribe-banner.php") ?>

<div class="container divider-text">
  <div class="row">
    <div class="divider"></div>
      <h4>Some New Products</h4>
    <div class="divider"></div>
  </div>
</div>

<!-- PRODUCT GRID LAYOUT -->

  <div class="container">
    <div class="product-grid">
      <?php
      // Default arguments
        $args = array(
        	'posts_per_page' => 5, // How many items to display
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

<div class="row list-display">
  <div class="container">

    <?php $categories = get_categories( array(
              'orderby' => 'name',
              'parent'  => 0
          ) );
          foreach ( $categories as $category ) { ?>

            <div class="six columns">
              <div class="divider-text">
                  <div class="divider"></div>
                    <h4>Latest <?php echo $category->name ?></h4>
                  <div class="divider"></div>
              </div>

                  <?php
                  global $post; // required
                  $args = array(
                    "posts_per_page" => 2,
                    "post_type"  => "post",
                    'category_name' => $category->name
                     ); // exclude category 9
                  $custom_posts = get_posts($args);
                  foreach($custom_posts as $post) : setup_postdata($post); ?>

                  <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
                    <div class="six columns">
                      <a href="<?php the_permalink(); ?>">
                        <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover;"></div>
                      </a>
                    </div>
                    <div class="six columns">
                      <div class="journal-title">
                        <?php if( get_field('journal-tag-line') ): ?>
                        <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>"><h4 style="text-align: left;"><?php the_title(); ?></h4></a>
                        <div class="base-copy">
                          <p class="date"><?php echo get_the_date( 'jS F Y' ); ?></p>
                          <a href="<?php the_permalink(); ?>" class="read">Read Now ></a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <?php endforeach; ?>

            </div>

      <?php } ?>

  </div>
</div>


<?php

get_footer();

?>
