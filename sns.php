<div class="snsWrap">

    <!-- hatena -->
    <div class="snsBo hb">
    <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>"
            class="hatena-bookmark-button"
            data-hatena-bookmark-layout="standard-noballoon"
            data-hatena-bookmark-lang="ja"
            title="このエントリーをはてなブックマークに追加">
            <img 
                src="https://b.st-hatena.com/images/entry-button/button-only@2x.png"
                alt="このエントリーをはてなブックマークに追加"
                width="20" height="20"
                style="border: none;"/>
        </a>
    </div>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

    <!-- twitter -->
    <div class="snsBo tw">
        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>
            !function(d,s,id){
                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js,fjs);}
            }(document, 'script', 'twitter-wjs');
        </script>
    </div>

    <!-- fb -->
    <div class="snsBo fb">
        <div class="fb-like"
         data-href="<?php the_permalink(); ?>"
         data-layout="button"
         data-action="like"
         data-show-faces="true"
         data-share="true">
        </div>
    </div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</div>
