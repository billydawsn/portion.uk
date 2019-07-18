<?php

 /* Template Name: Whitepaper Page */

get_header();

?>

<?php include("partials/top-wave.php") ?>

<div class="container narrow" style="margin-top: 8em; max-width: 900px;">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
        endwhile; else: ?>
  <?php endif; ?>
</div>


<?php

get_footer();

?>
