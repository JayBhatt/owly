<?php do_action( 'ct_mission_news_main_bottom' ); ?>
</section> <!-- .main -->
<?php do_action( 'ct_mission_news_after_main' ); ?>
<?php get_sidebar( 'right' ); ?>
</div><!-- layout-container -->
</div><!-- content-container -->

<footer id="site-footer" class="site-footer" role="contentinfo">
    <?php do_action( 'ct_mission_news_footer_top' ); ?>
    <div class="footer-title-container">
        <?php echo '<img src="'.get_template_directory_uri(). '/assets/images/footer.png'.'" alt="News.com.au" width="850">'; ?>
        <?php ct_mission_news_social_icons_output( 'footer' ); ?>
    </div>
    <div id="menu-footer-container" class="menu-footer-container">
        <?php get_template_part( 'menu', 'footer' ); ?>
    </div>
    <?php get_sidebar( 'site-footer' ); ?>
    <div class="design-credit">
        <span>
            <?php
            // Translators: %s is the URL of the theme
            /*$footer_text = sprintf( __( '<a href="%s">Mission News Theme</a> by Compete Themes.', 'mission-news' ), 'https://www.competethemes.com/mission-news/' );
            $footer_text = apply_filters( 'ct_mission_news_footer_text', $footer_text );
            echo do_shortcode( wp_kses_post( $footer_text ) );*/
            ?>
        </span>
    </div>
    <?php do_action( 'ct_mission_snews_footer_bottom' ); ?>
</footer>
</div><!-- .max-width -->
</div><!-- .overflow-container -->

<?php do_action( 'ct_mission_news_body_bottom' ); ?>

<?php wp_footer(); ?>

</body>
</html>