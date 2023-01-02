<?php
get_header();
?>
<div class="picturequote">

    <?php
    if (is_active_sidebar('start-puff')) : ?>
        <div id="start-puff">
            <?php dynamic_sidebar('start-puff'); ?>

        </div>
    <?php endif;
    ?>

</div>
<div class="newsmainpage">
<h2>SENASTE NYTT</h2>
<?php
//the loop orörd
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
    
     <div class="allnews">
            <div class="newssquare">
                <div class="newspic">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div>
                <div class="textsquare">
                    <h3><?= the_title(); ?> -
                        <?= the_time('Ymd'); ?> </h3>
                    <?= the_excerpt(); ?>
                    <a href="<?= the_permalink(); ?>">Läs mer</a>
                </div>
            </div>
        </div>
<?php
    endwhile;
endif;
?>
</div>
<div class="companysquare">
    <h2>SKOG AB</h2>
    <p>Vi är ett företag som tar oss an både stora och små uppdrag och vi riktar oss till
        företag
        men även privatpersoner.
        Behöver du hjälp med att ta ner en vissen björk, eller kanske trimma till häckarna utanför kontoret så
        kan vi hjälpa till!
        Använd vårt kontaktformulär så återkopplar vi så snart vi kan! Inget jobb är för stort eller för litet
        för oss.
    </p>
</div>
<div class="contactsquare">
    <h2>KONTAKTA OSS</h2>
    <div class="logos">
        <i class="fi fi-brands-whatsapp"></i>
        <i class="fi fi-brands-facebook"></i>
        <i class="fi fi-brands-telegram"></i>
        <i class="fi fi-brands-instagram"></i>
    </div>
</div>
<!-- footer -->
<?php
get_footer();
?>