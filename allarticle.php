<?php
/*
 * Template Name:allarticle 
 * */
?>
<?php get_header(); ?>
<?php get_template_part("is"); ?>
<?php
    $args = array(
        'posts_per_page'   => -1, 
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => array('post'),
        'post_status'      => 'publish'
    );
    $wp_query = new WP_Query($args);
?>
<?php if (have_posts()) : ?>    
<div class="is text-center">
    全記事リスト
</div>
<ol>
    <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title();?>
                </a>
            </li>
    <?php endwhile; ?>
</ol>
<?php endif; wp_reset_query();?>
</div><!-- main -->
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
