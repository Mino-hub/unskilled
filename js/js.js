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

    $(".outlineList").children(".outlineh2, .outlineh3, .outlineh4, .outlineh5, .outlineh6").on("click",function(){
        var h_index = $(this).index();
        var article_content_h = $(".content").children("h1,h2,h3,h4,h5,h6").eq(h_index).offset().top;
        $("html,body").animate({ scrollTop: article_content_h - 100 }, "2000");
    });

    $("#top").on("click",function(){
        $("html,body").animate({ scrollTop: 0}, 200);
    });
});
