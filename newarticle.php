<?php
    $args = array(
        'posts_per_page'   => 25, 
        'orderby'          => 'rand',
        'post_type'        => array('post'),
        'post_status'      => 'publish'
    );
    $wp_query = new WP_Query($args);
?>

<div class="newArticle">
    <div class="text-center newArticleTitle">
        おすすめ記事
    </div>
    <div class="newArticleSpace">
    <?php if (have_posts()) : ?>    
            <ul>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title();?>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
    <?php endif; wp_reset_query();?>
    </div>
</div>
