<?php get_header(); ?>

<?php if (in_category('3')) {
   get_template_part('post-templates/case-study');
} elseif (in_category('4')) {
   get_template_part('post-templates/service');
} ?>

<?php get_footer(); ?>
