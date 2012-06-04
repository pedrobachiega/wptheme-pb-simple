<?php get_header(); ?>

  <section id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="entry" id="entry-<?php the_ID(); ?>">
      <header>
        <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
        <time><?php the_time( 'Y M d' ); ?></time>
        <!-- <span class="author-link"><?php the_author_posts_link(); ?></span> -->
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <aside>
      </aside>
      <footer>
        <span class="categories-link">Categories: <?php the_category( ', ' ) ?></span>
        <span class="tags-link"><?php the_tags( __( 'Tags: ', 'pbsimpletheme' ), ', ', '') ?></span>
      </footer>
      <section id="entry-comments">
        <?php comments_template( '', true ); ?>
      </section>
    </article><!-- #entry-<?php the_ID(); ?> -->
  <?php endwhile; else : ?>
    <?php include (TEMPLATEPATH . '/frag-404.php'); ?>
  <?php endif; ?>
  </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>