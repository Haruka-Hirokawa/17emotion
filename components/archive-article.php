            
            <ul>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>                
                <li class="c-news">
                    <div>
                        <p class="c-news__date"><?php echo get_the_date(); ?></p>
                        <a href="<?php the_permalink(); ?>">
                            <p class="c-news__title"><?php the_title(); ?></p>
                        </a>
                    </div>
                    <hr>
                </li>       
                <?php endwhile; else: ?>
                <p>新着情報はありません</p>
                <?php endif; ?>           
            </ul>