<?php
//----------------------------------------------------------------------------------
// Load scripts and stylesheets for the front-end
//----------------------------------------------------------------------------------
function ct_mission_news_load_scripts_styles() {

	$font_args = array(
		'family' => urlencode( 'Abril Fatface|PT Sans:400,700|PT Serif:400,400i,700,700i' ),
		'subset' => urlencode( 'latin,latin-ext' )
	);
	$fonts_url = add_query_arg( $font_args, '//fonts.googleapis.com/css' );

	wp_enqueue_style( 'ct-mission-news-google-fonts', $fonts_url );
	wp_enqueue_script( 'ct-mission-news-js', get_template_directory_uri() . '/js/build/production.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-masonry', get_template_directory_uri() . '/bot/masonry.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-js-render', get_template_directory_uri() . '/bot/js-render.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-js-notify', get_template_directory_uri() . '/bot/notify.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-js-images-loaded', get_template_directory_uri() . '/bot/images-loaded.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-js-tooptip', get_template_directory_uri() . '/bot/tooltip.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-js', get_template_directory_uri() . '/bot/bot.js', array( 'jquery' ), '', true );
    //wp_enqueue_script( 'ct-mission-news-bot-tts', '//microsoft.cognitiveservices.speech.sdk.bundle.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-share', "//platform-api.sharethis.com/js/sharethis.js#property=5ceba461ba33c80012fc555f&product='inline-share-buttons'", array( 'jquery' ), '', true );
    wp_enqueue_script( 'ct-mission-news-bot-tts', "//cdn.jsdelivr.net/npm/talkify-tts@2.6.0/dist/talkify.min.js", array( 'jquery' ), '', true );

	wp_localize_script( 'ct-mission-news-js', 'mission_news_objectL10n', array(
		'openMenu'       => esc_html__( 'open menu', 'mission-news' ),
		'closeMenu'      => esc_html__( 'close menu', 'mission-news' ),
		'openChildMenu'  => esc_html__( 'open dropdown menu', 'mission-news' ),
		'closeChildMenu' => esc_html__( 'close dropdown menu', 'mission-news' )
	) );
	wp_enqueue_style( 'ct-mission-news-font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.min.css' );
	wp_enqueue_style( 'ct-mission-news-style', get_stylesheet_uri() );
    wp_enqueue_style( 'ct-mission-news-tooltip', get_template_directory_uri() . '/bot/tooltip.css' );
    wp_enqueue_style( 'ct-mission-news-bot', get_template_directory_uri() . '/bot/bot.css' );

	// enqueue comment-reply script only on posts & pages with comments open ( included in WP core )
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ct_mission_news_load_scripts_styles' );

//----------------------------------------------------------------------------------
// Load stylesheet for the widget & theme options page
//----------------------------------------------------------------------------------
function ct_mission_news_enqueue_admin_styles( $hook ) {

	if ( $hook == 'appearance_page_mission-options' || $hook == 'widgets.php' ) {
		wp_enqueue_style( 'ct-mission-news-admin-styles', get_template_directory_uri() . '/styles/admin.min.css' );
	}
	if ( $hook == 'post.php' || $hook == 'post-new.php' ) {

		$font_args = array(
			'family' => urlencode( 'PT Sans:400,700|PT Serif:400,400i,700,700i' ),
			'subset' => urlencode( 'latin,latin-ext' )
		);
		$fonts_url = add_query_arg( $font_args, '//fonts.googleapis.com/css' );
	
		wp_enqueue_style( 'ct-mission-news-google-fonts', $fonts_url );
	}
}
add_action( 'admin_enqueue_scripts', 'ct_mission_news_enqueue_admin_styles' );

//----------------------------------------------------------------------------------
// Load script and stylesheet for Customizer
//----------------------------------------------------------------------------------
function ct_mission_news_enqueue_customizer_scripts() {
	wp_enqueue_style( 'ct-mission-news-customizer-styles', get_template_directory_uri() . '/styles/customizer.min.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'ct_mission_news_enqueue_customizer_scripts' );

//----------------------------------------------------------------------------------
// Load script for postMessage support in Customizer
//----------------------------------------------------------------------------------
function ct_mission_news_enqueue_customizer_post_message_scripts() {
	wp_enqueue_script( 'ct-mission-news-customizer-post-message-js', get_template_directory_uri() . '/js/build/postMessage.min.js', array( 'jquery' ), '', true );
}
add_action( 'customize_preview_init', 'ct_mission_news_enqueue_customizer_post_message_scripts' );