<!-- IMAGE AND COPY
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php if (get_sub_field('type') == "img_left") { ?>

  <?php if (get_sub_field('image_type') == "round") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-left-round <?php the_sub_field('background'); ?>" style="height: auto;">
      <div class="container narrow">
        <div class="rounded-masthead" style="background: linear-gradient(to left, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover;background-position: 50%;">
        </div>
        <div class="copy-block">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
      </div>
    </div>

  <?php } elseif (get_sub_field('image_type') == "square") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-left-square <?php the_sub_field('background'); ?>" style="height: auto;" >
      <div class="container narrow">
        <div class="rounded-masthead" style="background: linear-gradient(to left, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
        <div class="copy-block" data-jarallax-element="-30">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
      </div>
    </div>

  <?php } ?>

<?php } elseif (get_sub_field('type') == "img_right") { ?>

  <?php if (get_sub_field('image_type') == "round") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-right-round <?php the_sub_field('background'); ?>" style="height: auto;" >
      <div class="container narrow">
        <div class="copy-block">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
        <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
      </div>
    </div>

  <?php } elseif (get_sub_field('image_type') == "square") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-right-square <?php the_sub_field('background'); ?>" style="height: auto;" >
      <div class="container narrow">
        <div class="copy-block" style="text-align: right;" data-jarallax-element="-30">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion.uk/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
        <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
      </div>
    </div>

  <?php } ?>

<?php } ?>

<?php if (get_sub_field('background') == "green") { ?>
  <svg xmlns="http://www.w3.org/2000/svg" class="module_wave" viewBox="0 0 1440 320"><path fill="#4F6E5D" fill-opacity="1" width="100%" height="150px" preserveAspectRatio="none" d="M0,192L60,213.3C120,235,240,277,360,266.7C480,256,600,192,720,154.7C840,117,960,107,1080,128C1200,149,1320,203,1380,229.3L1440,256L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
<?php } ?>
