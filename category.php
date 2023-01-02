<?php
get_header();
?>
<div class="allnewsmain">
    <h2>NYHETER</h2>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
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
                    <?= the_content(); ?>
                </div>
            </div>
        
<?php
    endwhile;
endif;
?>
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