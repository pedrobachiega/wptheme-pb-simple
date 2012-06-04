<?php get_header(); ?>

  <section id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="entry" id="entry-<?php the_ID(); ?>">
      <header>
        <h1 class="entry-title"><span><?php the_title(); ?></span></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <aside>
      </aside>
      <footer>
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