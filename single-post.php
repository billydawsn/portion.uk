<?php

 /* PostType Page Template: Post Page */

get_header();

?>


<?php if( get_field('journal-image') ): ?>

  <meta property="og:type"   content="article" />
  <meta property="og:url"    content="<?php echo the_permalink(); ?>" />
  <meta property="og:title"  content="<?php echo the_field('post_title_image'); ?>" />
  <meta property="og:image"  content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png" />

    <div class="row flex" style="justify-content: center;height: 40vh; background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_field('journal-image'); ?>'); background-position-y: 50%; background-size: cover; background-repeat: no-repeat;">
    <div class="container narrow blog-masthead">
      <div class="text">
        <?php if( get_field('journal-tag-line') ): ?>
        <h3><?php echo the_field('journal-tag-line'); ?></h3>
        <?php endif; ?>
        <h1><?php the_title() ?></h1>
        <meta property="og:title" content="<?php the_field('post_title'); ?> on molino" />
        <?php if( get_field('journal-short-desc') ): ?>
        <p><?php echo the_field('journal-short-desc'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="container narrow blog-page-copy" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
          endwhile; else: ?>
    <?php endif; ?>
  </div>





  <div class="container featured-blog-holder narrow" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
    <?php

    $categories = get_the_category();
    $category_id = $categories[0]->cat_name;

    $current_post = get_the_ID();

    global $post; // required
    $args = array(
      "posts_per_page" => 3,
      "post__not_in"   => array( get_the_ID() ), // Exclude current post
      "orderby"        => "post_date",
      "post_type"  => "post",
      "category_name"  => $category_id
       );
    $custom_posts = get_posts($args);
    foreach($custom_posts as $post) : setup_postdata($post); ?>

       <?php include("partials/post-display-vertical.php") ?>

    <?php endforeach; ?>
  </div>


<?php

get_footer();

?>
