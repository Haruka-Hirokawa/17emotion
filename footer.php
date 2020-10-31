    <footer class="l-footer">

        <p class="l-footer__attention">Follow us</p>

        <div class="l-footer__socialmedia">
            <button><a href="https://twitter.com/17emotion___"><i class="fab fa-twitter-square fa-4x" style="color: #303030;"></i></a></button>
            <button><a href="https://www.instagram.com/17emotion___/?hl=ja"><i class="fab fa-instagram-square fa-4x" style="color: #303030;"></i></a></button>
            <button><a href="https://www.youtube.com/channel/UCyhqjH4tnRNRLKB_sy8NCuA"><i class="fab fa-youtube-square fa-4x" style="color: #303030;"></i></a></button>
            <!-- fontawesomeの色指定の方法（参考URL：https://pix524.net/fontawesome-color/） -->
        </div>

        <?php 
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'l-footer__privacy'
            ) ); 
        ?>
        
        <p class="l-footer__copyright">&copy; Emotion!!! All Rights Reserved.</p>
        
    </footer>
    <?php wp_footer(); ?>
</body>
</html>