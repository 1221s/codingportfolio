<?php  get_header();  ?>

<body class="index">

  <!-- Here starts the index banner -->
<div class="indexBannerWrapper">
    <div class="indexBanner" id="banner">
      <?php
        $id = 64;
        $p = get_page($id);
        echo apply_filters('the_content', $p->post_content);
      ?>
    </div>
    <div class="bannerBit">
      <p>Giveaway piece: rms/0R0Y2O</p>
    </div>
</div>
<div class="bannerHeader">
  <h2><?php the_field('welcome') ?></h2>
  <span>Do you think portfolios are boring? Would you rather be playing ... a game?</span>
  <span>I've hidden three pieces of a puzzle around the website, some in plain sight, others a little more obscure.</span>
  <span id="findThemAll">Find them all to enter a giveaway!</span>
  <span class="bannerHint"> <?php the_field('hint'); ?> </span>
</div>

<!-- HERE starts posts -->
<div class="indexHeader">
<h2 class="indexHeaderWSidetxt">Newest projects</h2>
<p>To see more take a look at the <a href="<?php echo get_page_link(19); ?>">Archive</a> </p>
</div>

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post',
'post_status'=>'publish', 'posts_per_page'=>6)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>

<div class="postWrapperContainer">
      <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

      <a href="<?php the_permalink() ?>" class="postWrapper">
        <div class="authorIndex">
        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        </div>
          <div class="thumbnailIndex">
            <?php the_post_thumbnail('medium_large'); ?>
          </div>
      </a>
      <?php endwhile; ?>
      </div>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php  get_footer();  ?>


</body>
