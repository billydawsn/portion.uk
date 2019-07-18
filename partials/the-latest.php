
<?php
global $post; // required
global $IDArray;
$IDArray = array();
$args = array(
  "posts_per_page" => 5,
  "post__not_in"   => array( get_the_ID() ), // Exclude current post
  "orderby"        => "post_date",
  "post_type"  => "post"
   ); // exclude category 9
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);

  array_push($IDArray, get_the_ID());

endforeach;

?>


<div class="container divider-text">
  <div class="row">
    <div class="divider"></div>
      <h4>The Latest</h4>
    <div class="divider"></div>
  </div>
</div>
  <div class="container main-section">
    <div class="three columns">

      <?php
      global $post; // required
      $postID = $IDArray[1];
      $args = array(
        "posts_per_page" => 1,
        "post_type"  => "post",
        'post__in' => [$postID]
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
        <div class="six columns">
          <a href="<?php the_permalink(); ?>">
            <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover; height: 160px;"></div>
          </a>
          <div class="journal-title">
            <?php if( get_field('journal-tag-line') ): ?>
            <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><h4 style="margin-bottom: 0.4em;"><?php the_title(); ?></h4></a>
            <?php
            $author_id = get_the_author_meta('ID');
            $author_names = get_field('author_name', 'user_'. $author_id );
            ?>
            <div class="base-copy">
              <p class="date">Written by <?php echo $author_names ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

      <?php
      global $post; // required
      $postID = $IDArray[3];
      $args = array(
        "posts_per_page" => 1,
        "post_type"  => "post",
        'post__in' => [$postID]
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
        <div class="six columns">
          <a href="<?php the_permalink(); ?>">
            <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover; height: 160px;"></div>
          </a>
          <div class="journal-title">
            <?php if( get_field('journal-tag-line') ): ?>
            <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><h4 style="margin-bottom: 0.4em;"><?php the_title(); ?></h4></a>
            <?php
            $author_id = get_the_author_meta('ID');
            $author_names = get_field('author_name', 'user_'. $author_id );
            ?>
            <div class="base-copy">
              <p class="date">Written by <?php echo $author_names ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>


    </div>
    <div class="six columns">
      <?php
      global $post; // required
      $postID = $IDArray[0];
      $args = array(
        "posts_per_page" => 1,
        "post_type"  => "post",
        'post__in' => [$postID]
         );
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
        <div class="six columns">
          <a href="<?php the_permalink(); ?>">
            <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover; height: 350px;"></div>
          </a>
          <div class="journal-title">
            <?php if( get_field('journal-tag-line') ): ?>
            <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><h4 style="margin-bottom: 0.4em;"><?php the_title(); ?></h4></a>
            <?php if( get_field('journal-short-desc') ): ?>
            <p><?php echo the_field('journal-short-desc'); ?></p>
            <?php endif; ?>
            <div class="base-copy">
              <p class="date"><?php echo get_the_date( 'jS F Y' ); ?></p>
              <a href="<?php the_permalink(); ?>" class="read">Read Now ></a>
              <p class="share">Share</p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>
    <div class="three columns">

      <?php
      global $post; // required
      $postID = $IDArray[2];
      $args = array(
        "posts_per_page" => 1,
        "post_type"  => "post",
        'post__in' => [$postID]
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
        <div class="six columns">
          <a href="<?php the_permalink(); ?>">
            <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover; height: 160px;"></div>
          </a>
          <div class="journal-title">
            <?php if( get_field('journal-tag-line') ): ?>
            <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><h4 style="margin-bottom: 0.4em;"><?php the_title(); ?></h4></a>
            <?php
            $author_id = get_the_author_meta('ID');
            $author_names = get_field('author_name', 'user_'. $author_id );
            ?>
            <div class="base-copy">
              <p class="date">Written by <?php echo $author_names ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

      <?php
      global $post; // required
      $postID = $IDArray[4];
      $args = array(
        "posts_per_page" => 1,
        "post_type"  => "post",
        'post__in' => [$postID]
         ); // exclude category 9
      $custom_posts = get_posts($args);
      foreach($custom_posts as $post) : setup_postdata($post); ?>

      <div class="twelve columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
        <div class="six columns">
          <a href="<?php the_permalink(); ?>">
            <div class="journal-image" style="background-image: url('<?php the_field('post_title_image'); ?>'); background-size: cover; height: 160px;"></div>
          </a>
          <div class="journal-title">
            <?php if( get_field('journal-tag-line') ): ?>
            <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><h4 style="margin-bottom: 0.4em;"><?php the_title(); ?></h4></a>
            <?php
            $author_id = get_the_author_meta('ID');
            $author_names = get_field('author_name', 'user_'. $author_id );
            ?>
            <div class="base-copy">
              <p class="date">Written by <?php echo $author_names ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>
