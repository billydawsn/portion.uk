<div class="four columns featured-blogs" style="background: linear-gradient(0.25turn, rgba(256, 256, 256, 0), rgba(256, 256, 256, 0.75) 50%), url('<?php the_field('post_title_image'); ?>'); background-size: cover;">
  <div class="six columns">
    <a href="<?php the_permalink(); ?>">
      <div data-tilt data-tilt-perspective="5000" data-tilt-scale="1.01" data-tilt-speed="5000" class="journal-image" style="background-image: url('<?php the_field('journal-image'); ?>'); background-size: cover;"></div>
    </a>
    <div class="journal-title">
      <?php if( get_field('journal-tag-line') ): ?>
      <p class="note"><?php echo the_field('journal-tag-line'); ?></p>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
      <p class="desc"><?php the_field('journal-short-desc'); ?></p>
    </div>
  </div>
</div>
