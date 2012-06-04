<?php get_header(); ?>

  <section id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="entry" id="entry-<?php the_ID(); ?>">
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'simpletheme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <time><?php the_time( 'Y M d' ); ?></time>
        <!-- <span class="author-link"><?php the_author_posts_link(); ?></span> -->
      </header>
      <div class="entry-content">
        <?php the_content( __( '&raquo; Continue reading', 'pbsimpletheme' ) ); ?>
      </div>
      <aside>
      </aside>
      <footer>
        <span class="categories-link">Categories: <?php the_category( ', ' ); ?></span>
        <span class="tags-link"><?php the_tags( __( 'Tags: ', 'pbsimpletheme' ), ', ', '') ?></span>
      </footer>
    </article><!-- #entry-<?php the_ID(); ?> -->
    <!-- <hr /> -->
  <?php endwhile; else : ?>
    <?php include (TEMPLATEPATH . '/frag-404.php'); ?>
  <?php endif; ?>
    
    <nav>
      <span><?php next_posts_link( __( '&laquo; Previous posts', 'pbsimpletheme' ) ); ?></span>
      <span><?php previous_posts_link( __( 'Newest posts &raquo;', 'pbsimpletheme' ) ); ?></span>
    </nav>
  </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>