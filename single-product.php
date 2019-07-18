<?php

 /* PostType Page Template: Product Page */

get_header();

?>


<?php include("partials/top-wave.php") ?>

<?php

$retailer = explode(",", get_field('retailer'));

?>


<!-- PRODUCT TOP -->

<div class="row product-intro">

  <div class="container narrow flex space">
      <div class="six columns">
        <div class="slider-wrapper" onscroll="scrolledImages()" id="slider-wrapper" style="order: 0; overflow: hidden; overflow-x: scroll; -webkit-overflow-scrolling: touch;">
        <div class="slider-container" id="slider-container">
        <?php
        $images = acf_photo_gallery('product_gallery', $post->ID);
        if( count($images) ):
          foreach($images as $image):
              $id = $image['id'];
              $full_image_url= $image['full_image_url'];
        ?>
        <?php if( !empty($url) ){ ?><a href="<?php echo $url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
            <meta property="og:image" content="<?php echo $full_image_url; ?>" />
            <img class="slider-image" src="<?php echo $full_image_url; ?>">
        <?php if( !empty($url) ){ ?></a><?php } ?>
        <?php endforeach; endif; ?>
        </div>
        </div>
        <div class="slider-nav" id="sliderNav">
        </div>
      </div>
      <div class="six columns" style="order: 1;display: flex;align-items: center;">
        <div class="wrapper">
          <?php if( get_field('product_brand') ): ?>
              <h3><?php the_field('product_brand'); ?></h2>
          <?php endif; ?>
        <?php if( get_field('product_name') ): ?>
          <h1><?php the_field('product_name'); ?></h1>
          <?php if( get_field('product_brand') ): ?>
            <meta property="og:title" content="<?php the_field('product_name'); ?> by <?php the_field('product_brand'); ?>" />
          <?php endif; ?>
        <?php endif; ?>

          <?php if( get_field('product_price') ): ?>
            <h2 style="font-weight: 400;"><?php the_field('product_price'); ?><span style="font-size: 0.4em;opacity: 0.5;margin-top: 1em;position: absolute;margin-left: 1em;">+ delivery</span></h2>
          <?php endif; ?>

        <?php if( get_field('product_short_description') ): ?>
          <p><?php the_field('product_short_description'); ?></p>
          <meta property="og:description" content="<?php the_field('product_short_description'); ?>" />
        <?php endif; ?>
        <?php if( get_field('product_buy_link') ): ?>
              <span><a target="_blank" href="<?php the_field('product_buy_link'); ?>"><button style="float: left;" id="button" data-retailer="<?php echo $retailer[0] ?>">buy now<img src="/wp-content/themes/eligam/assets/images/arrow.png"></button></a><p class="buy-now-at">@</p><img class="buy-now-img" src="<?php echo $retailer[1] ?>"></span>
        <?php endif; ?>
        </div>
      </div>
  </div>
</div>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "description": "<?php the_field('product_short_description'); ?>",
  "name": "<?php the_field('product_name'); ?>",
  "image": "<?php echo $full_image_url; ?>",
  "review": [
    {
      "@type": "Review",
      "author": "molino",
      "datePublished": "<?php echo get_the_date('c'); ?>",
      "description": "<?php the_field('product_short_description'); ?>",
      "name": "<?php the_field('product_name'); ?> Review",
      "headline": "<?php the_field('product_name'); ?> Review",
      "reviewBody": "<?php the_field('product_short_description'); ?>",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "4.5",
        "worstRating": "0"
      }
    }
  ]
}
</script>

<!-- END PRODUCT TOP -->

<?php

// check if the flexible content field has rows of data
if( have_rows('modules') ):

     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();

        if( get_row_layout() == 'masthead' ):

          include("partials/masthead.php");

        elseif ( get_row_layout() == 'image_copy_block' ):

          include("partials/copy-image.php");

        elseif ( get_row_layout() == 'email_subscribe' ):

          include("partials/email-subscribe.php");

        elseif ( get_row_layout() == 'product_grid_full' ):

          include("partials/product-display-full.php");

        elseif ( get_row_layout() == 'product_grid_small' ):

          include("partials/product-display-small.php");

        elseif ( get_row_layout() == 'product_categories' ):

          include("partials/product-categories.php");

        elseif ( get_row_layout() == 'journal_display_full' ):

          include("partials/journal-display-full.php");

        elseif ( get_row_layout() == 'journal_categories_block' ):

          include("partials/journal-category-block.php");

        elseif ( get_row_layout() == 'top_wave' ):

          include("partials/top-wave.php");

        elseif ( get_row_layout() == 'journal_display_small' ):

          include("partials/journal-display-small.php");

        endif;

    endwhile;
    // no layouts found

endif;

?>

<!-- PRODUCT GRID LAYOUT -->

<div class="row grid featured-products" style="margin-top: 6em;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <div class="container narrow">
    <div class="twelve columns center">
    </div>
    <div class="product-grid">
      <?php

      $categories = get_the_category();
      $category_id = $categories[0]->cat_name;

      // Default arguments
        $args = array(
        	'posts_per_page' => 6, // How many items to display
        	'post__not_in'   => array( get_the_ID() ), // Exclude current post
        	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
          'post_type'  => "product",
          "category_name"  => $category_id,
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

<?php include("partials/email-subscribe.php") ?>


<script>

  // SET IMAGE WIDTHS AND SLIDER

  function scrolledImages() {
    var scrollPoint = document.getElementById('slider-wrapper').scrollLeft;
    var imageWidth = document.getElementById('slider-wrapper').clientWidth;
    var imageNumber = Math.round(scrollPoint / imageWidth);
    $('.slider-icons').each(function(index) {
      if (index == imageNumber) {
        $(this).css('background-color', '#D96C06');
      } else {
        $(this).css('background-color', '#E3E1E3');
      }
    });
  }

  $(document).ready(function() {
    var imageCount = $('.slider-image').length;
    var sliderWidth = imageCount * 100;
    var imageWidth = 99 / imageCount;
    var wrapper = document.getElementById("slider-wrapper");
    scrolledImages();

    document.getElementById("slider-container").style.width = sliderWidth + '%';
    $('.slider-image').each(function() {
      $(this).css('width', 'calc(' + imageWidth + '% - 1px)');
      $(this).css('opacity', '1');
    });
  });

  // AND THE SLIDER NAV

           // START VARIABLES AND FUNCTIONS

           var width = document.getElementById('slider-wrapper').clientWidth;
           setNavigation();

           function scrolly(amount) {
             setWidth();
             document.getElementById('slider-wrapper').scrollTo({
               top: 0,
               left: amount,
               behavior: 'smooth'
             });
            }

           function setWidth() {
             width = document.getElementById('slider-wrapper').clientWidth;
             var scrollBy = width;
           }

           var numItems = $('.slider-image').length - 1;

           function setNavigation() {
             var numItems = $('.slider-image').length;
             var navigation = " ";
               for (y = 0; y < numItems; y++) {
                 var x = y + 1;
                 var images = y;
                 var scrollAmount = y * width;
                 var pageLink = "<div class='slider-icons' onclick='scrolly(" + scrollAmount + ")'></div>";
                 navigation = navigation.concat(pageLink);
               }
             // var navOutput = navigation.toString().replace(/,/g, '');
             var navOutput = navigation;
             scrolledImages();
             document.getElementById('sliderNav').innerHTML = navOutput;
           }

           var tracker = 0;




</script>

<?php

get_footer();

?>
