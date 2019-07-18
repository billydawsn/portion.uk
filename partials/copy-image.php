<!-- IMAGE AND COPY
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php if (get_sub_field('type') == "img_left") { ?>

  <?php if (get_sub_field('image_type') == "round") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-left-round" style="height: auto;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
      <div class="container narrow">
        <div class="rounded-masthead" style="background: linear-gradient(to left, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover;background-position: 50%;">
        </div>
        <div class="copy-block">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
      </div>
    </div>

  <?php } elseif (get_sub_field('image_type') == "square") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-left-square" style="height: auto;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
      <div class="container narrow">
        <div class="rounded-masthead" style="background: linear-gradient(to left, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
        <div class="copy-block" data-jarallax-element="-30">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
      </div>
    </div>

  <?php } ?>

<?php } elseif (get_sub_field('type') == "img_right") { ?>

  <?php if (get_sub_field('image_type') == "round") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-right-round" style="height: auto;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
      <div class="container narrow">
        <div class="copy-block">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
        <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
      </div>
    </div>

  <?php } elseif (get_sub_field('image_type') == "square") { ?>

    <div class="row masthead full-masthead round-masthead copy-image copy-image-right-square" style="height: auto;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
      <div class="container narrow">
        <div class="copy-block" style="text-align: right;" data-jarallax-element="-30">
          <?php the_sub_field('copy'); ?>
          <?php if (get_sub_field('button_boolean') == "true") { ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button><?php the_sub_field('button_text'); ?><img src="/wp-content/themes/portion/assets/images/arrow.png"></button></a>
          <?php } ?>
        </div>
        <div class="rounded-masthead" style="background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_sub_field('image'); ?>'); background-size: cover; background-position: 50%;">
        </div>
      </div>
    </div>

  <?php } ?>

<?php } ?>
