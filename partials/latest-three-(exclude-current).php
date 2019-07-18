<div class="container divider-text">
  <div class="row">
    <div class="divider"></div>
      <h4>The Latest</h4>
    <div class="divider"></div>
  </div>
</div>

<div class="container featured-blog-holder">
  <?php

  global $post; // required
  $args = array(
    "posts_per_page" => 3,
    "post__not_in"   => array( $current_post ), // Exclude current post
    "orderby"        => "post_date",
    "post_type"  => "post"
     ); // exclude category 9
  $custom_posts = get_posts($args);
  foreach($custom_posts as $post) : setup_postdata($post); ?>

    <?php include("post-display-vertical.php") ?>

  <?php endforeach; ?>
</div>
