<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- テンプレートタグでのlang属性の書き方（参考URL：https://www.irohabook.com/wordpress-language-attributes） -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F2Q44KE63C"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F2Q44KE63C');
    </script>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <!-- Google Chromeの position:fixed; 要素が表示されないことに関するバグの解決策（参考URL：https://stackoverflow.com/questions/44679794/position-fixed-on-chrome-mobile-causing-element-to-move-on-scroll-up-down）-->
    

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