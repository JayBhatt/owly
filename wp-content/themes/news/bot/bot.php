<div class="bot-menu-container">
    <nav class="bot-menu">
        <input type="checkbox" href="#" class="bot-menu-open" name="bot-menu-open" id="bot-menu-open" />
        <label class="bot-menu-open-button" for="bot-menu-open">
        <span>
            <i class="fab fa-earlybirds"></i>
        </span>
        </label>
        <a href="javascript:void(0);" id="search-btn" class="bot-menu-item"><i class="fas fa-search"></i></a>
        <a id="fact-btn" href="javascript:void(0);" class="bot-menu-item"> <i class="fas fa-info"></i></a>
        <a id="speach-btn" href="javascript:void(0);" class="bot-menu-item"> <i class="fas fa-volume-down"></i></a>
        <a id="share-widget-btn" href="javascript:void(0);" class="bot-menu-item"> <i class="fas fa-share-alt"></i></a>
        <a id="interest-btn" href="javascript:void(0);" class="bot-menu-item"> <i class="fas fa-briefcase"></i></a>
        <a id="word-search-btn" href="javascript:void(0);" class="bot-menu-item"><i class="fas fa-atlas"></i></a>
        <a id="drawer-btn" href="javascript:void(0);" class="bot-menu-item"><i class="fas fa-folder-minus"></i></a>
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

<div id="text-to-speech-content" class="hidden-node">
    At the Melbourne park where Courtney Herron was found killed, her grief-stricken family gathered to say goodbye to the 25-year-old woman.
    Earlier today, the man accused of the brutal bashing murder of Melbourne woman Courtney Herron has appeared briefly in court.
    Henry Hammond, 27, was arrested on Sunday afternoon, a day after Ms Herron’s body was found behind logs at Royal Park in Parkville, a short walk from Melbourne Zoo.
    Mr Hammond, of no fixed address, wore no shoes, appeared to have a black eye and smiled as he sat in the dock at the Melbourne Magistrates’ Court this morning. He was clean shaven and has shoulder-length brown hair.
    The court heard Mr Hammond was previously diagnosed with ADHD and has “possible delusional disorder”, “possible autism spectrum disorder” and has been prescribed Ritalin.
    The 27-year-old nodded when he was told he will be remanded in custody to appear again on September 16.
    The court heard prosecutors will go over CCTV footage, and a forensic analysis of Ms Herron’s body will be carried out.
    Hammond, who turns 28 on Wednesday, lists himself as single on a number of different social media profiles.
    His profiles indicate he has fathered two children and spent time overseas after the birth of his second child.
    Mr Hammond’s lawyer Bernie Balmer told 9 News his client had been caught up in a “very tragic and complicated situation”.
    Ms Herron was found by dog walkers in near Elliot Avenue about 9.15am Saturday.
    Homicide squad Detective Inspector Andrew Stamper said there appeared to have been some attempts made to conceal her body.
    “The level of violence involved here was extreme in my view,” he told reporters on Sunday. “This was a particularly, particularly horrendous attack.”
    The exact cause of death was yet to be determined, and police do not believe Ms Herron’s death was sexually motivated.
    “Homicide Squad detectives arrested and interviewed the 27-year-old on Sunday and charged him overnight with one count of murder,” Victoria Police said in a statement this morning.
    Inspector Stamper said Ms Herron had been couch surfing and sleeping rough, as well as struggling with drug and mental health issues.
    The last confirmed sighting of the 25-year-old was on May 14 at St Albans when she was in contact with police.
</div>

<?php if(!empty($_REQUEST['scroll'])) { ?>
    <script type="application/javascript">
      jQuery(document).ready(function($){
        window.scrollTo({
          top: <?php echo $_REQUEST['scroll']; ?>,
          left: 0,
          behavior: 'smooth'
        });
      });
    </script>
<?php } ?>