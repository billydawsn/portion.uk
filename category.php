<?php

 /* Template Name: Category Page */

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
      <h3>the journal</h3>
      <h1><?php echo $title; ?></h1>
      <p><?php echo $description; ?></p>
    </div>
    <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php echo $image; ?>'); background-size: cover;">
    </div>
  </div>
</div>

<div class="container featured-blog-holder narrow" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <?php

  $paged = get_query_var('paged') ? get_query_var('paged') : 1;

  global $post; // required
  $args = array(
    'paged' => $paged,
    'posts_per_page' => 18, // How many items to display
    "orderby"        => "post_date",
    "post_type"  => "post",
     );
  $custom_posts = get_posts($args);
  foreach($custom_posts as $post) : setup_postdata($post); ?>


     <?php include("partials/post-display-vertical.php") ?>

  <?php endforeach; ?>
</div>
<div class="pagination">
  <div class="previous-page"><?php previous_posts_link( '< back' );?></div>
  <div class="next-page"><?php next_posts_link( 'next >', $wpex_query->max_num_pages ); ?></div>
</div>
<?php

  wp_reset_postdata();
  ?>
<?php include("partials/email-subscribe.php") ?>

<?php

get_footer();

?>
