All home page content down there~!!~#@!

<?php while (have_posts()) : the_post(); ?>

	hello home page!!!
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
