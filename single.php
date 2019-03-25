<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage portfoliotheme
 * @since 0.1
 */

get_header();?>
  <body class="single">
    <?php
    /* Here starts posts */
          while ( have_posts() ) : the_post(); ?>

<div class="postWrapperContainer">
<h2 class="post-title"> <?php the_title(); ?> </h2>
      <div class="postWrapper">
          <div class="contentWrapper"><?php the_content();?>
            <article class="author"> <p>This post was published: <?php the_date(); ?> </p></article>
          </div>
          <div class="imgSingle">
            <?php the_post_thumbnail('full'); ?>
          </div>
      </div>
</div>

<!-- The back and forth buttons -->
<div class="nextPrevLinkWrapper">
  <?php $next_post = get_next_post();
  $previous_post = get_previous_post();
  ?>
  <!-- previous post -->
<?php if (!empty( $next_post )): ?>
  <div class="prevPostLink">
    <?php next_post_link('%link', '<i class="fas fa-arrow-left"></i> Newer: %title'); ?>
  </div>
  <?php else: ?>
<?php endif; ?>

<!-- next post -->
<?php if (!empty( $previous_post )): ?>
<div class="nextPostLink">
  <?php previous_post_link('%link', 'Older: %title <i class="fas fa-arrow-right"></i>'); ?>

</div>
<?php else: ?>
<?php endif; ?>
</div>

  <?php endwhile; ?>

</body>
  <?php

      get_footer();  ?>
