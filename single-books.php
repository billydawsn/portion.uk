<?php

 /* PostType Page Template: Book Product Page */

get_header();

?>



<!-- BREADCRUMB -->

<div class="row light breadcrumb">
  <div class="container narrow">
      <div class="breadcrumb-text">
        <p id="breadcrumbOutput"></p>
      </div>
  </div>
</div>

<!-- END BREADCRUMB -->

<!-- PRODUCT TOP -->

<div class="row product-intro">
  <div class="container narrow flex vertical-middle space">
      <div class="six columns" style="order: 0;">
        <?php if( get_field('product_image_1') ): ?>
          <img src="<?php the_field('product_image_1'); ?>" />
        <?php endif; ?>
      </div>
      <div class="six columns" style="order: 1;">
        <?php if( get_field('product_image_1') ): ?>
          <h1><?php the_field('product_name'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('product_brand') ): ?>
          <?php if( get_field('product_price') ): ?>
            <h2><?php the_field('product_brand'); ?>  <?php the_field('product_price'); ?></h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if( get_field('product_short_description') ): ?>
          <p><?php the_field('product_short_description'); ?></p>
        <?php endif; ?>
        <?php if( get_field('product_buy_link') ): ?>
          <?php if( get_field('product_buy_at_image') ): ?>
              <span><a href="<?php the_field('product_buy_link'); ?>" class="button fill-button buy-now">buy now</a><p class="buy-now-at">@</p><img class="buy-now-img" src="<?php the_field('product_buy_at_image'); ?>"></span>
          <?php endif; ?>
        <?php endif; ?>
      </div>
  </div>
  <div class="container narrow flex vertical-middle space">
      <div class="six columns bottom second">
        <?php if( get_field('product_sub_title') ): ?>
          <h2><?php the_field('product_sub_title'); ?></h2>
        <?php endif; ?>
        <?php if( get_field('product_second_description') ): ?>
          <p><?php the_field('product_second_description'); ?></p>
        <?php endif; ?>
        <?php if( get_field('product_buy_link') ): ?>
          <?php if( get_field('product_buy_at_image') ): ?>
              <span><a href="<?php the_field('product_buy_link'); ?>" class="button fill-button buy-now">buy now</a><p class="buy-now-at">@</p><img class="buy-now-img" src="<?php the_field('product_buy_at_image'); ?>"></span>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="six columns top first">
        <?php if( get_field('product_image_2') ): ?>
          <img src="<?php the_field('product_image_2'); ?>" />
        <?php endif; ?>
      </div>
  </div>
</div>

<!-- END PRODUCT TOP -->

<!-- PRODUCT GRID LAYOUT -->

<div class="row grid featured-products">
  <div class="container narrow">
    <div class="twelve columns center">
      <h2>Here's some more <span id="seeMore"></span>:</h2>
    </div>
    <div class="product-grid">
      <?php

      global $post; // required
      $args = array(
        'category_name' => 'good-reads',
        'posts_per_page' => 5,
        'post__not_in'   => array( get_the_ID() ),
        "orderby"          => "post_date",
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <?php if( get_field('product_image_1') ): ?>
      <a href="<?php the_permalink(); ?>" class="item-container">
        <div class="item-content">
          <img src="<?php the_field('product_image_1'); ?>">
        </div>
      </a>
      <?php endif; ?>

      <?php endforeach; ?>

    </div>
  </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->


<script>
  var pathArray = window.location.pathname.split( '/' );
  var crumbLink = [];
  var breaker = '<span class="breadcrumb-line">|</span>';
  var title = pathArray[pathArray.length - 2].replace(/-/g, ' ');
  crumbLink[0] = '<a href="/' + pathArray[1] + '">' + pathArray[1].replace(/-/g, ' ') + '</a>';
  crumbLink[1] = '<a href="/' + pathArray[1] + '/' + pathArray[2] + '">' + pathArray[2].replace(/-/g, ' ') + '</a>';
  var crumbs = crumbLink[0] + breaker + crumbLink[1] + breaker + title;
  document.getElementById('breadcrumbOutput').innerHTML = crumbs;
  var category = pathArray[1].replace(/-/g, ' ');
  document.getElementById('seeMore').innerHTML = category;
</script>

<?php

get_footer();

?>
