        <?php if(have_posts()): while(have_posts()): the_post(); ?>

            <div class="p-post">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        
        <?php endwhile; else: ?>
            <p>お探しの記事はありません</p>
        <?php endif; ?>