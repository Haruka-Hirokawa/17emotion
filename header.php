<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WordPressにログインしている時のみ、ページ最上部に余白を作り、ヘッダー・サイドバーと管理バー（admin-bar）とが重ならないようにする -->
    <?php if( is_user_logged_in() ) : ?>
        <style type="text/css">
        .l-header {
            margin-top: 3.2rem;
        }
        </style>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header class="l-header">

        <div class="p-globalMenu">
            <span class="nav_toggle" id="nav_toggle">
                <i></i>
                <i></i>
                <i></i>
            </span>
             
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'nav-menu',
                    'menu_class' => 'nav_menu',
                    'menu_id' => 'nav_menu',
                ) ); 
            ?>
            <!-- ナビゲーションメニューの登録・有効化（参考URL：https://www.webdesignleaves.com/pr/wp/wp_nav_menus.html） -->
        </div>
        

        <!-- スマホ画面 ハンバーガーメニュー出現時 モーダル部分（body部分を透過） -->
        <div class="p-hamburger_menu-background" id="hamburger_menu-background"></div>


        
        <p class="l-header__sitesubname">Free Style Dance Event</p>
        
        <?php if( is_home() || is_front_page() ) : ?>
            
            <h1 class="l-header__sitename">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_title.png" class="l-header__sitename__img" alt="Emotion!!!ロゴ">
            </h1>

        <?php else : ?>

            <p class="l-header__sitename">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/header_title.png" class="l-header__sitename__img" alt="Emotion!!!ロゴ">
                </a>
            </p>

        <?php endif; ?>

        
    </header>