<?php get_header(); ?>

    <main class="l-main">

        <div class="c-mainTitle">
            <h1>News</h1>
        </div>
    
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
    
    </main>    
    
    <?php get_footer(); ?>