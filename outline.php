<div class="outline">
<div class="outlineTitle text-center">
目次 <span class="outlineToggle">[非表示]</span>
</div>
<ul class="outlineList">
<?php
$content = $post->post_content;
// var_dump($content);
preg_match_all("/<(h[1-6]{1}).*>(.*)<\/h[1-6]{1}>/u", $content, $htag, PREG_SET_ORDER);
// var_dump($htag);

$h1Flag = $h2Flag = $h3Flag = $h4Flag = $h5Flag = $h6Flag = 0;
foreach ($htag as $data) {
    if($data[1] === "h1"){
        $h1Flag++;
        echo "<li class=\"outline{$data[1]}\">{$h1Flag}:{$data[2]}</li>";
        $h2Flag = $h3Flag = $h4Flag = $h5Flag = $h6Flag = 0;
    }
    else if($data[1] === "h2"){
        $h2Flag++;
        if($h1Flag === 0){
            echo "<li class=\"outline{$data[1]}\">{$h2Flag}:{$data[2]}</li>";
        }else{
            echo "<li class=\"outline{$data[1]}\">{$h1Flag}.{$h2Flag}:{$data[2]}</li>";
        }
        $h3Flag = $h4Flag = $h5Flag = $h6Flag = 0;
    }
    else if($data[1] === "h3"){
        $h3Flag++;
        if($h1Flag === 0){
            echo "<li class=\"outline{$data[1]}\">{$h2Flag}.{$h3Flag}:{$data[2]}</li>";
        }else{
            echo "<li class=\"outline{$data[1]}\">{$h1Flag}.{$h2Flag}.{$h3Flag}:{$data[2]}</li>";
        }
        $h4Flag = $h5Flag = $h6Flag = 0;
    }
    else if($data[1] === "h4"){
        $h4Flag++;
        if($h1Flag === 0){
            echo "<li class=\"outline{$data[1]}\">{$h2Flag}.{$h3Flag}.{$h4Flag}:{$data[2]}</li>";
        }else{
            echo "<li class=\"outline{$data[1]}\">{$h1Flag}.{$h2Flag}.{$h3Flag}.{$h4Flag}:{$data[2]}</li>";
        }
        $h5Flag = $h6Flag = 0;
    }
    else if($data[1] === "h5"){
        $h5Flag++;
        if($h1Flag === 0){
            echo "<li class=\"outline{$data[1]}\">{$h2Flag}.{$h3Flag}.{$h4Flag}.{$h5Flag}:{$data[2]}</li>";
        }else{
            echo "<li class=\"outline{$data[1]}\">{$h1Flag}.{$h2Flag}.{$h3Flag}.{$h4Flag}.{$h5Flag}:{$data[2]}</li>";
        }
        $h6Flag = 0;
    }
    else if($data[1] === "h6"){
        $h6Flag++;
        if($h1Flag === 0){
            echo "<li class=\"outline{$data[1]}\">{$h2Flag}.{$h3Flag}.{$h4Flag}.{$h5Flag}.{$h6Flag}:{$data[2]}</li>";
        }else{
            echo "<li class=\"outline{$data[1]}\">{$h1Flag}.{$h2Flag}.{$h3Flag}.{$h4Flag}.{$h5Flag}.{$h6Flag}:{$data[2]}</li>";
        }
    }
}
?>
</ul>
</div>

