<?php get_header(); ?>

    <div class="p-slider">
        <ul class="slider">
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol1_eyecatch.jpg" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol2_eyecatch.jpg" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol3_eyecatch.jpg" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol4_eyecatch.jpg" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol5-1_eyecatch.jpg" alt="スライダー画像"></li>
            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vol5-2_eyecatch.jpg" alt="スライダー画像"></li>
        </ul>
    </div>

    <main class="l-main">

        <section class="p-newslist">
            <h2 class="c-subTitle">News</h2>

            <?php get_template_part("components/archive-article"); ?>

            <button type="button" onclick="location.href='<?php bloginfo ('url'); ?>/news'" class="c-button--pink--list">See All News</button>
            <!-- WordPressの各ページへリンクを貼る方法（参考URL：https://www.sejuku.net/blog/61709） -->
            <!-- WordPressでは初期設定で「ブログ投稿記事一覧」のURLを取得し、利用できる状態にはなっていない！？（参考URL：https://designerbrg.com/blog_list_url/） -->

        </section>
        
        <section class="p-introduction">
            <h2>世界一垣根の低い<br>ダンスイベントを目指して</h2>
            
            <p>みなさんは、ダンスイベントに出たいと思っても、"上手い人ばかりで場違いじゃないかな…"と思ったことはありませんか？</p>

            <br><br>
            <!-- 行と行と行の間に一行分空ける方法（参考URL：https://detail.chiebukuro.yahoo.co.jp/qa/question_detail/q1124446611） -->

            <p>Emotion!!!は、ダンスの初心者や、まだまだダンスに自信がない人たちに寄り添うイベントです！</p>
            <br><br>
            <p>ダンスを始めたばかりの初心者さんも、経験豊富なダンサーさんも、"TVで踊ってたあのアーティストの振付を踊りたい!!!"という人も、みんなが同じ舞台に立ち、出演者の方々に踊ることを心の底から楽しんでもらえる笑顔いっぱいのダンスイベントを目指しています！</p>
            <br><br>
            <p>舞台で踊る楽しさを知って、経験を積んで、更に大きな舞台に羽ばたいて欲しい。。。そんな思いが詰まった、世界一あたたかいイベントです。(自称)</p>
            <br><br>
            <p>ダンスに自信がなくても、Emotion!!!なら大丈夫っっ♪</p>
            <p>勇気を出して、チャレンジしてみませんか？</p>
            <br><br>
            <p>みなさんのご参加、お待ちしております(*^^*)</p>
            <br><br>
            <br><br>
            <p>Emotion!!! 主催 MANA</p>

        </section>

    </main>

    
    <?php get_footer(); ?> 