<div class="container featured-blog-holder narrow" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <?php

  global $post; // required
  $args = array(
    "posts_per_page" => 6,
    "orderby"        => "post_date",
    "post_type"  => "post",
     );
  $custom_posts = get_posts($args);
  foreach($custom_posts as $post) : setup_postdata($post); ?>

     <?php include("post-display-vertical.php") ?>

  <?php endforeach; ?>
</div>
<?php

  wp_reset_postdata();
  ?>
<div class="container narrow" style="text-align: center;">
  <a href="/shop/"><button>view all posts<img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
</div>
