<div class="bot-menu-container">
    <nav class="bot-menu">
        <input type="checkbox" href="#" class="bot-menu-open" name="bot-menu-open" id="bot-menu-open" />
        <label class="bot-menu-open-button" for="bot-menu-open">
        <span>
            <i class="fab fa-earlybirds"></i>
        </span>
        </label>
        <a href="javascript:void(0);" id="search-btn" class="bot-menu-item">
            <i class="fas fa-search"></i><span><?php echo esc_html__( 'Search', 'mission-news' );?>
        </a>
        <a href="javascript:void(0);" class="bot-menu-item"> <i class="fa fa-plus"></i></a>
        <a href="javascript:void(0);" class="bot-menu-item"> <i class="fa fa-heart"></i></a>
        <a href="javascript:void(0);" class="bot-menu-item"> <i class="fa fa-envelope"></i></a>
        <a id="interest-btn" href="javascript:void(0);" class="bot-menu-item"> <i class="fas fa-briefcase"></i></a>
        <a id="word-search-btn" href="javascript:void(0);" class="bot-menu-item"><i class="fas fa-atlas"></i></a>
    </nav>
</div>

<div id="search-form-popup" class="search-form-popup">
    <div id="icon-cancel-btn" class="icon-cancel-btn hidden-node">
        <i class="fas fa-times"></i>
    </div>
    <div class="inner">
        <?php get_search_form(); ?>
    </div>
</div>