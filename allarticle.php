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
    $allarticle = new WP_Query($args);
?>
<?php if ($allarticle->have_posts()) : ?>    
<div class="pageNation">
    <?php
        $big = 999999999; 
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( $allarticle->get_pagenum_link( $big ) ) ),
            'show_all'=>true,
            'format' => 'page/%#%',
            'current' => max( 1, $allarticle->get_query_var('paged') ),
            'total' => $allarticle->max_num_pages
        ) );
    ?>
</div>
    <?php while ($allarticle->have_posts()) : $allarticle->the_post(); ?>
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
    <?php endwhile; ?>
<?php get_template_part("pagenation"); ?>
<?php endif; wp_reset_query();?>
</div><!-- main -->
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
