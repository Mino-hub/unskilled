<div class="is text-center">
    <?php
    if(is_category()){
        $catId = get_query_var('cat'); 
        $cat = get_category($catId); 
        echo "カテゴリ 「{$cat->name}」";
    }
    else if(is_month()){
        $date = get_post_time( 'Y年m月' );
        echo  "アーカイブ 「{$date}」";
    }
    else if(is_search()){
        $s = get_query_var('s'); 
        echo "「{$s}」の検索結果";
    }
    else if(is_404()){
        echo "<h1>404</h1>";
        echo "<p>申し訳ありません。お探しのページは存在しないようです</p>";
    }
    else if(is_home()){
        echo " 最近更新した記事";
    }
    ?>
</div>
