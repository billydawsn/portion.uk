<?php

 /* Template Name: Journal Page */

get_header();

?>

<?php if( get_field('post_title') ): ?>
  <?php if( get_field('post_title_image') ): ?>
    <meta property="og:image" content="<?php echo the_field('post_title_image'); ?>" />
    <div class="row flex" style="height: 40vh; background-image:url('<?php the_field('post_title_image'); ?>'); background-position-y: 50%; background-size: cover; background-repeat: no-repeat;">
  <?php endif; ?>
    <div class="container narrow blog-masthead">
      <div class="text">
        <h3>what's going on?</h3>
        <h1><?php the_field('post_title'); ?></h1>
        <meta property="og:title" content="<?php the_field('post_title'); ?> on molino" />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper velit ut ultricies condimentum. Nunc eros dolor, porta fermentum faucibus aliquam, dictum quis nulla.</p>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="row">
  <div class="container journal" style="margin-top: 2em;">


    <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$temp =  $query;
$query = null;
$query = new WP_Query( array(
  'posts_per_page' => 1,
  "orderby"          => "post_date",
  'post_type'  => "post"
) );
$query -> query('post_type=post&posts_per_page=8'.'&paged='.$paged);
if ( $query->have_posts() ) :
 while ( $query->have_posts() ) : $query->the_post();
  ?>


  <div class="four columns journal-container" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover; background-position-y: 50%;">
    <div class="six columns">
      <a href="<?php the_permalink(); ?>">
        <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover;"></div>
      </a>
      <div class="journal-title">
        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
      </div>
      <div class="journal-desc">
        <p><?php the_title(); ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="journal-button">
        <a href="<?php the_permalink(); ?>" class=" fill-button">read more</a>
      </div>
    </div>
  </div>


  <?php endwhile;?>


  <?php
  $prev_link = get_previous_posts_link('< Previous', $query->max_num_pages);
  $next_link = get_next_posts_link('Next >', $query->max_num_pages);
  // as suggested in comments
  if ($prev_link || $next_link) { ?>
    <!-- PAGINATION -->
    <div class="row light sort-by">
      <div class="container narrow">
        <div class="previous-page">
          <?php previous_posts_link('< Previous', $query->max_num_pages) ?>
        </div>
        <div class="next-page">
          <?php next_posts_link('Next >', $query->max_num_pages) ?>
        </div>
      </div>
    </div>
    <!-- END PAGINATION -->
  <?php }
   endif;
   $query = null; $query = $temp; ?>


  </div>
</div>


<?php

get_footer();

?>
