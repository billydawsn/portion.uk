<!-- FULL MASTHEAD
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php if (get_sub_field('type') == "classic") { ?>

<div class="row masthead full-masthead" style="overflow-x: hidden;background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; height: calc(<?php the_sub_field('height'); ?>vh - 4em);">
  <div class="container narrow">
    <div class="copy-block" data-jarallax-element="-30">
      <h3><?php the_sub_field('top_note'); ?></h3>
      <h1><?php the_sub_field('title'); ?></h1>
      <p><?php the_sub_field('copy'); ?></p>
      <?php if (get_sub_field('button_boolean') == "true") { ?>
        <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
      <?php } ?>
    </div>
  </div>
</div>

<?php } elseif (get_sub_field('type') == "round") { ?>

  <div class="row masthead full-masthead round-masthead" style=" overflow-x: hidden;padding-bottom: 6em;height: calc(<?php the_sub_field('height'); ?>vh - 4em);">
    <div class="container narrow">
      <div class="copy-block" data-jarallax-element="-30">
        <h3><?php the_sub_field('top_note'); ?></h3>
        <h1><?php the_sub_field('title'); ?></h1>
        <p><?php the_sub_field('copy'); ?></p>
        <?php if (get_sub_field('button_boolean') == "true") { ?>
          <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
        <?php } ?>
      </div>
      <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover;">
      </div>
    </div>
  </div>

<?php } ?>
