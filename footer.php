    <section class="p-contact">
        <h2 class="c-subTitle">Contact</h2>

        <p>イベント出演などに関する<br>お問い合わせは<br>こちらよりお願いします</p>

        <div class="p-contact__qr">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/qr_officialLine.jpg" alt="スライダー画像">
        </div>

        <p>Emotion!!!公式LINE</p>
        <p>（QRコードでLINEの友だちを追加）</p>
    </section>
    
    <footer class="l-footer">

        <p class="l-footer__attention">Follow us</p>

        <div class="l-footer__socialmedia">
            <button type="button" onclick="window.open('https://twitter.com/17emotion___')"><i class="fab fa-twitter-square fa-4x" style="color: white;"></i></button>
            <button type="button" onclick="window.open('https://www.instagram.com/17emotion___/?hl=ja')"><i class="fab fa-instagram-square fa-4x" style="color: white;"></i></button>
            <button type="button" onclick="window.open('https://www.youtube.com/channel/UCyhqjH4tnRNRLKB_sy8NCuA')"><i class="fab fa-youtube-square fa-4x" style="color: white;"></i></button>
            <button type="button" onclick="window.open('https://line.me/R/ti/p/%40dsi7070l')"><i class="fab fa-line fa-4x" style="color: white;"></i></button>
            <!-- fontawesomeアイコンの色指定の方法（参考URL：https://pix524.net/fontawesome-color/） -->
            <!-- fontawesomeアイコンの大きさの指定の方法（参考URL：https://fontawesome.com/how-to-use/on-the-web/styling/sizing-icons） -->
        </div>

        <!-- <?php 
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'l-footer__privacy'
            ) ); 
        ?> -->
        
        <p class="l-footer__copyright">&copy; Emotion!!! All Rights Reserved.</p>
        
    </footer>
    <?php wp_footer(); ?>
</body>
</html>