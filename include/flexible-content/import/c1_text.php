<?php $text = get_sub_field('text'); ?>

<section class="flexible-inner-section bbh-inner-section c1-text">
    <div class="pad-container">
        <div class="text-container">
            <?php echo $text ?>


        <?php

// Check rows exists.
if( have_rows('buttons') ): ?>
    <div class="button-container">
    <?php while( have_rows('buttons') ) : the_row();
        $btn_choice = get_sub_field('btn_choice');
        $btn_color = get_sub_field('btn_color');
        if ($btn_choice == "download") {
            $download_text = get_sub_field('download_text');
            $download_link = get_sub_field('download_link'); ?>
            <a href="<?php echo $link['url'] ?>" class="download <?php if ($btn_color == "green"): echo "bbh-btn" ?>
            <?php elseif ($btn_color == "white") : echo "link-btn" ?>
            <?php endif; ?>"><?php echo $download_text ?></a>
            <?php
        }
        elseif ($btn_choice == "link") {
            $link = get_sub_field('link'); ?>
            <a href="<?php echo $link['url'] ?>" class="<?php if ($btn_color == "green"): echo "bbh-btn" ?>
            <?php elseif ($btn_color == "white") : echo "link-btn" ?>
            <?php endif; ?>"><?php echo $link['title'] ?></a>
            <?php
        }
    endwhile; ?>
    </div>
<?php endif; ?>
        </div>
    </div>
</section>
