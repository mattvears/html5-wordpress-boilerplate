<?php get_template_part( 'top' ); ?>
<?php wp_head(); ?>

<div id='left-column'>
     <?php get_template_part( 'loop', 'page' ); ?>
     <?php edit_post_link(); ?>
     <?php comments_template(); ?>
</div>
<div id='right-column'>
     <?php get_sidebar( $name ); ?> 
</div>

<?php wp_footer(); ?>