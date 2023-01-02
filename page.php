<?php
get_header();
?>
<div class="allnewsmain">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <?= the_content(); ?>
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