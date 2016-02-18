$(window).on("load",function(){
    var bool = true;
    $("span.outlineToggle").on("click",function(){
        $(".outlineList").toggle();
        if(bool === true){
                $("span.outlineToggle").text("[表示]");
                bool = false;
        }else{
                $("span.outlineToggle").text("[非表示]");
                bool = true;
        }
    });
});
