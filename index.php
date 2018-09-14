<?php get_header(); ?>

<main>

  <section class="">
    <div class="">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>

      <?php endwhile; else : ?>

        <p><?php _e( 'Index: No Results.'); ?></p>

      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>