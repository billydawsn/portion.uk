<!-- PRODUCT GRID LAYOUT -->

<div class="row categories" style="text-align: center; padding-bottom: 4em;" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
  <div class="container narrow">
    <div class="product-grid">
      <?php
         $args = array(
                     'taxonomy' => 'product-category',
                     'orderby' => 'name',
                     'order'   => 'ASC',
                     'parent' => 0
                 );

         $cats = get_categories($args);

         foreach($cats as $cat) {
           if ($cat->name == "Uncategorized") {
           } else {
            $image = get_field('category_image', 'product-category' . '_' . $cat->term_id);
            ?>

               <div class="three columns" data-tilt data-tilt-perspective="5000" data-tilt-scale="1.01" data-tilt-speed="5000" style="transform-style: preserve-3d;">
                 <a href="<?php echo get_term_link($cat); ?>">
                   <div class="image-holder" style="background: linear-gradient(to top, rgba(256, 256, 256, 0.8), rgba(256, 256, 256, 0.1)), url('<?php echo $image ?>'); background-size: cover;">
                     <p style="transform: translateZ(10px)"><?php echo ($cat->name)?></p>
                   </div>
                 </a>
               </div>

      <?php
           }
         }
      ?>
    </div>
  </div>
</div>

<!-- END PRODUCT GRID LAYOUT -->
