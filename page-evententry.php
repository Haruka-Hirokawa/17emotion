<?php get_header(); ?>

    <main class="l-main">

        <div class="c-mainTitle">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="p-entryForm">
            <section class="p-entryForm__section">

                <h2>VOL.7<br>エントリー期限：2020/12/31</h2>
                
                <button type="button" onclick="window.open('https://docs.google.com/forms/d/18fcc81Fg76SB70yWajpUWBJ1fjz31JpDMsvSLd9xAaU/edit')" class="c-button--pink">K-pop Team</button>
                <button type="button" onclick="window.open('https://docs.google.com/forms/d/1XnxesKN0ziN4Tcy5ZbE8WJdNFWUcBPvSW1rdTtm1v_k/edit')" class="c-button--pink">Dance & J-POP Team</button>
                <!-- buttonタグ 新しいウィンドウを開いてリンクさせる方法 -->

            </section>

            <section class="p-entryForm__section">

                <h2>K-pop Dance Contest<br>COMING SOON</h2>
                
                <button type="button" onclick="location.href='#'" class="c-button--pink">K-pop Dance Contest</button>
                
            </section>
        </div>
    
    </main>
      
    <?php get_footer(); ?>