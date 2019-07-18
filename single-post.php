<?php

 /* PostType Page Template: Post Page */

get_header();

?>


<?php if( get_field('journal-image') ): ?>

  <meta property="og:type"   content="article" />
  <meta property="og:url"    content="<?php echo the_permalink(); ?>" />
  <meta property="og:title"  content="<?php echo the_field('post_title_image'); ?>" />
  <meta property="og:image"  content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png" />

    <div class="row flex" style="justify-content: center;height: 40vh; background: linear-gradient(to right, rgba(256, 256, 256, 0.7), rgba(256, 256, 256, 0.1)), url('<?php the_field('journal-image'); ?>'); background-position-y: 50%; background-size: cover; background-repeat: no-repeat;">
    <div class="container narrow blog-masthead">
      <div class="text">
        <?php if( get_field('journal-tag-line') ): ?>
        <h3><?php echo the_field('journal-tag-line'); ?></h3>
        <?php endif; ?>
        <h1><?php the_title() ?></h1>
        <meta property="og:title" content="<?php the_field('post_title'); ?> on molino" />
        <?php if( get_field('journal-short-desc') ): ?>
        <p><?php echo the_field('journal-short-desc'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>




  <div class="container narrow blog-page-copy" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
          endwhile; else: ?>
    <?php endif; ?>
    <div class="authorship">
      <div class="divider"></div>
      <div class="social-sharing">
        <p class="share">Share this article:</p>
        <div class="social-links">
          <a id="facebook-share-button"><img src="/wp-content/themes/eligam/assets/images/facebook.png"></a>
          <a onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo the_field('post_title'); ?>%20@bromeosin%0D%0A<?php echo the_permalink(); ?>','name','width=600,height=400')"><img src="/wp-content/themes/eligam/assets/images/twitter.png"></a>
          <a href="#"><img src="/wp-content/themes/eligam/assets/images/linkedin.png"></a>
          <a href="mailto:?subject=From molino.uk | <?php echo the_field('post_title'); ?>&body=<?php echo the_field('journal-short-desc'); ?>%0D%0A%0D%0ACheck it out: <?php echo the_permalink(); ?>"><img src="/wp-content/themes/eligam/assets/images/email.png"></a>
          <a class="copy-link" data-clipboard-text="<?php echo the_permalink(); ?>"><img src="/wp-content/themes/eligam/assets/images/copy-link.png"></a>
          <script>
          var clipboard = new ClipboardJS('.copy-link');

          clipboard.on('success', function(e) {
            alert('success');
            e.clearSelection();
          });

  window.fbAsyncInit = function() {
    FB.init({
      appId            : '1166919546810180',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
          <script>
          document.getElementById('facebook-share-button').onclick = function() {
            console.log('called');
            FB.ui({
              method: 'share',
              display: 'popup',
              href: '<?php echo the_permalink(); ?>',
            }, function(response){});
          }
          </script>
        </div>
      </div>
      <div class="divider"></div>
      <div class="author">
        <?php
        $author_id = get_the_author_meta('ID');
        $author_bio = get_field('author_bio', 'user_'. $author_id );
        $author_names = get_field('author_name', 'user_'. $author_id );
        $author_image_url = get_field('author_image', 'user_'. $author_id );
        ?>
        <div class="image">
          <img src="<?php echo $author_image_url ?>" alt="<?php echo $author_names ?>">
        </div>
        <div class="author-text">
          <p class="written">written by</p>
          <p class="name"><?php echo $author_names ?></p>
          <p class="bio"><?php echo $author_bio?></p>
        </div>
      </div>
    </div>
  </div>







  <div class="container featured-blog-holder narrow" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease">
    <?php

    $categories = get_the_category();
    $category_id = $categories[0]->cat_name;

    $current_post = get_the_ID();

    global $post; // required
    $args = array(
      "posts_per_page" => 3,
      "post__not_in"   => array( get_the_ID() ), // Exclude current post
      "orderby"        => "post_date",
      "post_type"  => "post",
      "category_name"  => $category_id
       );
    $custom_posts = get_posts($args);
    foreach($custom_posts as $post) : setup_postdata($post); ?>

       <?php include("partials/post-display-vertical.php") ?>

    <?php endforeach; ?>
  </div>

<?php include("partials/email-subscribe.php") ?>

<?php

get_footer();

?>
