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
    <?php related_posts(); ?>
</div>

