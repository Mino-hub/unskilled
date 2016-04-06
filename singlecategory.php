<div class="related">
    <div class="relatedTitle">
        この記事のカテゴリ
    </div>
<ol>
        <?php
            foreach (get_the_category() as $item) {
                $link = get_category_link($item->term_id);
                echo "<li><a href=\"{$link}\">{$item->name}</a></li>";
            }
        ?>
</ol>
</div>

