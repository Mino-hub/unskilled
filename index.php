<?php get_header(); ?>
<?php get_template_part("is"); ?>
<?php get_template_part("pagenation"); ?>
<?php if (have_posts()) : ?>    
    <?php while (have_posts()) : the_post(); ?>
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
        <div class="articleCategory text-center">
        <?php
            $posttags = get_the_tags();
            if ($posttags) {
                  foreach($posttags as $tag) {
                       echo "<a href=\"". get_tag_link($tag->term_id) ."\">" . $tag->name . "</a>";
                  }
            }
        ?>
        </div>
        <div class="recomend text-center">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <?php //the_excerpt();?>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; wp_reset_query();?>
<?php get_template_part("pagenation"); ?>
</div><!-- main -->
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
