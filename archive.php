<?php get_header(); ?>

    <main class="l-main">

        <div class="c-mainTitle">
            <h1>News</h1>
        </div>
    
        <?php get_template_part("components/archive-article"); ?>

        <div class="p-pagenation">
            <?php if(function_exists("wp_pagenavi")): ?>
            <?php wp_pagenavi(); ?>
            <?php else: ?>
            <?php endif; ?>
        </div>
    
    </main>    
    
    <?php get_footer(); ?>