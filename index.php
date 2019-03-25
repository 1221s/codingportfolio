<?php  get_header();  ?>

<body class="index">

  <!-- Here starts the index banner -->

<section class="indexWrapper homepage">

  <div class="maintxt">
    <div class="maintxtHeader">
      <h2><?php the_field('maintxtheader') ?></h2>
    </div>
    <span class="maintxtContent">
      <p><?php the_field('maintxtContent') ?></p>
    </span>

    <div class="buttons">
        <ul>
          <li id="button1">
            <a href="<?php the_field('button1') ?>" target="_blank"><i class="fas fa-file-download"></i> Download mit CV</a></li>


          <li id="button2">
            <a href="<?php the_field('button2') ?>"><i class="fas fa-mobile-alt"></i> Mit arbejde</a>
          </li>

          <li id="button3">
            <a href="<?php the_field('button3') ?>"><i class="fas fa-envelope"></i> Kontakt mig</a> </li>

          <li id="button4"><a href="<?php the_field('button4') ?>" target="_blank"><i class="fab fa-twitter"></i> @fiamma1221s</a></li>
        </ul>

    </div>
  </div>
  <div class="mainImg">
    <img class="mainImgFile" src="<?php the_field('mainimg') ?>" alt="this was supposed to be an img">
  </div>

</section>

<section class="indexWrapper arbejde">

  <h2>Mit Arbejde</h2>

  <?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post',
'post_status'=>'publish', 'posts_per_page'=>8)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>

<ul class="arbejdeList">

    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li class="arbejdeitem">
          <a href="<?php the_permalink(); ?>">
            <div class="postTitle">
            <p><?php the_title(); ?></p>
            </div>
            <?php the_post_thumbnail('medium'); ?>
          </a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->

</ul>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</section>


<section class="indexFooterBuffer">

</section>

<?php  get_footer();  ?>
</body>
