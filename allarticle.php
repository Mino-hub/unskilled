<?php
/*
 * Template Name:allarticle 
 * */
?>
<?php get_header(); ?>
<?php get_template_part("is"); ?>
<?php
    $args = array(
        'posts_per_page'   => 15, 
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => array('post'),
        'post_status'      => 'publish'
    );
    $wp_query = new WP_Query($args);
?>
<?php if (have_posts()) : ?>    
    <?php while (have_posts()) : the_post(); ?>
<?php get_template_part("pagenation"); ?>
    <div class="indexEx">
        <div class="articleDate text-center">
            <time>最終更新日時 <?php echo get_the_modified_date("Y/m/d H:i:s");?></time>
        </div>
        <div class="articleTitle text-center">
            <h1>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title();?>
                </a>
            </h1>
        </div>
    </div>
<?php get_template_part("pagenation"); ?>
    <?php endwhile; ?>
<?php endif; wp_reset_query();?>
</div><!-- main -->
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
