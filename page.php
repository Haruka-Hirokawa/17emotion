<?php get_header(); ?>

    <main class="l-main">

        <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <div class="c-mainTitle">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="p-post">
            <?php the_content(); ?>
        </div>
        
        <?php endwhile; else: ?>
            <p>お探しのページはありません</p>
        <?php endif; ?>
    
    </main>
      
    <?php get_footer(); ?>