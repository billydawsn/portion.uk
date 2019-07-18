<?php

 /* Template Name: About Us Page */

get_header();

?>

<div class="about-us" style="padding-top: 3em;">

<!-- BLOCK ONE -->

<div class="row block-one">
  <div class="container flex">
    <div class="five columns">
      <?php if( get_field('about_block_one_title') ): ?>
      <h2><?php the_field('about_block_one_title'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('about_block_one_copy') ): ?>
      <p><?php the_field('about_block_one_copy'); ?></p>
      <?php endif; ?>
    </div>
    <div class="seven columns image">
      <?php if( get_field('about_block_one_image') ): ?>
      <img src="<?php the_field('about_block_one_image'); ?>">
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- BLOCK TWO -->

<div class="row block-two">
  <div class="container flex">
    <div class="six columns image">
      <?php if( get_field('about_block_two_image') ): ?>
      <img src="<?php the_field('about_block_two_image'); ?>">
      <?php endif; ?>
    </div>
    <div class="six columns">
      <?php if( get_field('about_block_two_title') ): ?>
      <h2><?php the_field('about_block_two_title'); ?></h2>
      <?php endif; ?>
      <?php if( get_field('about_block_two_copy') ): ?>
      <p><?php the_field('about_block_two_copy'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<!-- BLOCK THREE -->

<div class="row block-three">
  <div class="container">
    <div class="six columns">
      <?php if( get_field('about_block_three_title') ): ?>
      <h2><?php the_field('about_block_three_title'); ?></h2>
      <?php endif; ?>
    </div>
    <div class="twelve columns flex">
      <div class="four columns">
        <?php if( get_field('about_block_three_copy') ): ?>
        <p><?php the_field('about_block_three_copy'); ?></p>
        <?php endif; ?>
      </div>
      <div class="eight columns image">
        <?php if( get_field('about_block_three_image') ): ?>
        <img src="<?php the_field('about_block_three_image'); ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

</div>

<?php

get_footer();

?>
