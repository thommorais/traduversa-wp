<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<?php
  if(!is_user_logged_in()){
    get_template_part('/template-parts/waiting');
  }

?>


   <?php get_template_part( '/template-parts/banner'); ?>

    <?php get_template_part('/template-parts/about'); ?>

    <?php get_template_part('/template-parts/intro'); ?>

    <?php get_template_part('/template-parts/services'); ?>

    <?php get_template_part('/template-parts/call-to-action'); ?>

    <?php get_template_part('/template-parts/clients'); ?>

    <?php get_template_part('/template-parts/contact'); ?>

    <?php get_template_part('/template-parts/orcament'); ?>

<?php get_footer();
