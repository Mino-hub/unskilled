<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri();?>/img/favicon.png">
    </head>
    <body>
        <div class="container-fluid">
            <div class="main col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <header class="text-center">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/prog3.png">
                    </a>
                    <nav class="navbar center-block hidden-xs">
                        <ul class="nav text-center navbar-nav">
                            <?php get_template_part("mainnav"); ?>
                        </ul>
                        <form id="inner_srach" method="get" action="<?php bloginfo('url') ?>" />
                            <input type="text" class="form-control" name="s" placeholder="検索したいキーワードを入力(enter)">
                        </form>
                    </nav>
                    <nav class="navbar center-block visible-xs">
                        <ul class="nav navbar-nav">
                            <li class="dropdown text-center">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                 role="button" aria-haspopup="true" aria-expanded="false">menu<span class="caret"></span></a>
                                 <ul class="dropdown-menu">
                                    <?php get_template_part("mainnav"); ?>
                                </ul>
                            </li>
                        </ul>
                        <form id="inner_srach" method="get" action="<?php bloginfo('url') ?>" />
                            <input type="text" class="form-control" name="s" placeholder="検索したいキーワードを入力(enter)">
                        </form>
                    </nav>
                </header>
