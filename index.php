<?php get_template_part( 'top' ); ?>
<?php wp_head(); ?>

<div id='left_column'>
     <?php get_template_part( 'loop', 'index' ); ?>
</div>
<div id='right_column'>
     <?php get_sidebar( $name ); ?> 
</div>

<?php wp_footer(); ?>