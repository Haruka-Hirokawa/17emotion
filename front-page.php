<?php get_header(); ?>

    <main class="l-main">

        <!-- スライダーを実装するまでの仮の写真 l-header.scssにスタイリング記載-->
        <!-- <div class="topimage">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.jpg" alt="">
        </div> -->

        <ul class="slider">
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.jpg" class="p-topimage01--sp" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.jpg" class="p-topimage01--sp" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.jpg" class="p-topimage01--sp" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/example.jpg" class="p-topimage01--sp" alt="スライダー画像"></li>
        </ul>
    
    
        
        <section class="p-newslist">
            <h2>News</h2>

            <ul>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>                
                <li class="c-news">
                    <p class="c-news__date"><?php echo get_the_date(); ?></p>
                    <a href="<?php the_permalink(); ?>">
                        <p class="c-news__title"><?php the_title(); ?></p>
                    </a>
                    <hr>
                </li>       
                <?php endwhile; else: ?>
                <p>新着情報はありません</p>
                <?php endif; ?>           
            </ul>

            <button type="button" onclick="location.href='<?php bloginfo ('url'); ?>/news'" class="c-button--pink u-width--80">See All News</button>
            <!-- WordPressの各ページへリンクを貼る方法（参考URL：https://www.sejuku.net/blog/61709） -->
            <!-- WordPressでは初期設定で「ブログ投稿記事一覧」のURLを取得し、利用できる状態にはなっていない！？（参考URL：https://designerbrg.com/blog_list_url/） -->

        </section>
        
        <section class="p-introduction">
            <h2>世界一垣根の低い<br>ダンスイベントを目指して</h2>
            
            <p>皆さんは、ダンスのイベントに出たいと思っても、「上手い人ばかりで場違いじゃないかな…」と思ったことはありませんか？</p>

            <br><br>
            <!-- 行と行と行の間に一行分空ける方法（参考URL：https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1124446611） -->

            <p>Emotion!!!は、ダンスを始めたばかりの初心者さんも、ベテランのダンサーさんも、「TVで見るあのアーティストの振付やりたい！」という人も、皆が同じ舞台に立って、楽しむことができる場を目指しています！</p>
            <br><br>
            <p>舞台で踊る楽しさを知って、経験を積んで、更に大きな舞台に羽ばたいて欲しい。</p>
            <p>そんな思いが詰まった、あたたかいイベントです。</p>
            <br><br>
            <p>皆さんのご参加をお待ちしています！</p>
        </section>

    </main>

    
    <?php get_footer(); ?> 