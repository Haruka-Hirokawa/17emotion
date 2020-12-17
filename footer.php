    <section class="p-information">
        <div class="p-information__inner">
            <div>
                <h2 class="c-subTitle">Contact</h2>

                <p>イベント出演などに関する<br>お問い合わせは<br>こちらよりお願いします</p>

                <div class="p-information__inner__picture">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/qr_officialLine.jpg" alt="QRコード">
                </div>

                <p>Emotion!!!公式LINE</p>
                <p class="u-margin">（QRコードでLINEの友だちを追加）</p>          

            </div>

            <div>
                <h2 class="c-subTitle">Studio</h2>

                <p>Emotion!!! 主催 MANA<br>運営スタジオ<br>公式HPはこちら↓↓</p>

                <a href ="https://studio-1-brood.crayonsite.com/" target="_blank">
                    <div class="p-information__inner__picture">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon_studio1brood.jpg" alt="提携スタジオアイコン画像">
                    </div>
                </a>

                <p>スタジオエインブロード</p>
                <p class="u-margin">初心者も経験者も大歓迎！</p>
            </div>
        </div>
        
    </section>

    
    <footer class="l-footer">
        <div class="l-footer__inner">

            <p class="l-footer__inner__attention">Follow us</p>

            <div class="l-footer__inner__socialmedia">
                <button type="button" onclick="window.open('https://twitter.com/17emotion___')"><i class="fab fa-twitter-square fa-4x" style="color: white;"></i></button>
                <button type="button" onclick="window.open('https://www.instagram.com/17emotion___/?hl=ja')"><i class="fab fa-instagram-square fa-4x" style="color: white;"></i></button>
                <button type="button" onclick="window.open('https://www.youtube.com/channel/UCyhqjH4tnRNRLKB_sy8NCuA')"><i class="fab fa-youtube-square fa-4x" style="color: white;"></i></button>
                <button type="button" onclick="window.open('https://line.me/R/ti/p/%40dsi7070l')"><i class="fab fa-line fa-4x" style="color: white;"></i></button>
                <!-- fontawesomeアイコンの色指定の方法（参考URL：https://pix524.net/fontawesome-color/） -->
                <!-- fontawesomeアイコンの大きさの指定の方法（参考URL：https://fontawesome.com/how-to-use/on-the-web/styling/sizing-icons） -->
            </div>

            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'l-footer__inner__privacy'
                ) ); 
            ?>
            
            <p class="l-footer__inner__copyright">&copy; Emotion!!! All Rights Reserved.</p>

        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>