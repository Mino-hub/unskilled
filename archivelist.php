<div class="archive">
    <div class="text-center archiveTitle">
        アーカイブ
    </div>
    <div class="archiveSpace">
    <?php
    $args = array(
        'type'            => 'monthly',
        'limit'           => '',
        'format'          => 'html', 
        'before'          => '',
        'after'           => '',
        'show_post_count' => true,
        'echo'            => 1,
        'order'           => 'DESC'
    );
    wp_get_archives( $args );
    ?>
    </div>
</div>
