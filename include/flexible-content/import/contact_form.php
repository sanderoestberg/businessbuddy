<?php $title_text = get_sub_field('title_text'); ?>

<section class="flexible-inner-section bbh-inner-section contact-form">
    <div class="grid-container">
        <div class="contact-form-container">
            <div class="contact-text">
            <?php echo $title_text ?>
            </div>
            <?php echo do_shortcode('[gravityform id="2"]'); ?>
        </div>
    </div>
</section>
