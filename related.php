<?php
$category = get_the_category();
foreach ($category as $item) {
        $categoryarray[] = $item->term_id;
}
$args = array(
    'posts_per_page'   => 8, 
    'offset'           => 0,
    'category'         => $categoryarray,
    'orderby'          => '',
    'order'            => 'DESC',
    'post_type'        => array('post'),
    'post_status'      => 'publish',
    'suppress_filters' => true
);   
$wp_query = new WP_Query($args);
?>
<div class="related">
    <div class="relatedTitle">
        関連する記事
    </div>
    <ul>
        <?php if (have_posts()) : ?>    
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
            </li>
            <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </ul>
</div>

