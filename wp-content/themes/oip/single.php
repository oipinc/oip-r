<?php get_header(); ?>

<?php if (in_category('3')) {
   get_template_part('post-templates/case-study');
} elseif (in_category('4')) {
   get_template_part('post-templates/service');
} elseif (in_category('6')) {
   get_template_part('post-templates/job');
} elseif (in_category('7')) {
   get_template_part('post-templates/product');
} ?>

<?php get_footer(); ?>
