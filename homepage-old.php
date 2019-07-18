<?php

 /* Template Name: Home Page */

get_header();

?>


<?php

// check if the flexible content field has rows of data
if( have_rows('modules') ):

     // loop through the rows of data
    while ( have_rows('modules') ) : the_row();

        if( get_row_layout() == 'masthead' ):

          include("partials/masthead.php");

        elseif ( get_row_layout() == 'image_copy_block' ):

          include("partials/copy-image.php");

        elseif ( get_row_layout() == 'email_subscribe' ):

          include("partials/email-subscribe.php");

        elseif ( get_row_layout() == 'product_grid_full' ):

          include("partials/product-display-full.php");

        elseif ( get_row_layout() == 'product_grid_small' ):

          include("partials/product-display-small.php");

        elseif ( get_row_layout() == 'product_categories' ):

          include("partials/product-categories.php");

        elseif ( get_row_layout() == 'journal_display_full' ):

          include("partials/journal-display-full.php");

        elseif ( get_row_layout() == 'journal_categories_block' ):

          include("partials/journal-category-block.php");

        elseif ( get_row_layout() == 'top_wave' ):

          include("partials/top-wave.php");

        elseif ( get_row_layout() == 'journal_display_small' ):

          include("partials/journal-display-small.php");

        elseif ( get_row_layout() == 'home_masthead' ):

          include("partials/main-masthead.php");

        endif;

    endwhile;
    // no layouts found

endif;

?>






<?php

get_footer();

?>
