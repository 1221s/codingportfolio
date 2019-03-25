<?php
/*
Template Name: Archives
*/
get_header(); ?>

<body class="archives index">


  <div id="mainContainer">
      <div class="indexHeader">
      <h2><?php the_title(); ?></h2>
      </div><!-- #content -->

      <?php
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'post',
    'post_status'=>'publish', 'posts_per_page'=>100)); ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>

    <ul class="archivesList">
      <div class="searchArchive">
        <?php get_search_form(); ?>
      </div>

        <!-- the loop -->
        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <li class="archivesListItem">
              <a href="<?php the_permalink(); ?>">
                <div class="postTitle">
                <p><?php the_title(); ?>
                  <p class="postTitleNoTop"><?php the_date(); ?></p></p>
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

  </div><!-- #container -->


</body>

<?php get_footer(); ?>
