<?php
// TEXTBOX
$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('button_link');

// IMGBOX
$img = get_sub_field('img');
$speech_bubble = get_sub_field('speech_bubble');
 ?>

<section class="flexible-inner-section bbh-inner-section c2-full-text-img-frontpage">
    <div class="text-img-box-container">
        <div class="textbox">
            <div class="frontpage-title-container">
                <?php echo $title ?>
            </div>
            <?php echo $text ?>
            <?php if( have_rows('icon_text_repeater') ): ?>
                <div class="list-container">
                <?php
                while( have_rows('icon_text_repeater') ) : the_row();
                    $icomoon = get_sub_field('icomoon');
                    $text = get_sub_field('text');
                    ?>
                    <div class="list-item">
                        <span class="list-icon <?php echo $icomoon; ?>" ></span>
                        <?php echo $text ?>
                    </div>
                    <?php
                endwhile; ?>
                </div>
            <?php
            endif; ?>
            <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>" class="bbh-btn"><?php echo $link['title'] ?></a>
        </div>
        <div class="imgbox lazyload" data-bgset="<?php echo $img['sizes']['medium'] ?>">
            <div class="speech-bubble-container">
                <span class="triangle"></span>
                <div class="speech-bubble">
                    <span class="icon-quote-up absolute"></span><span class="icon-quote-up invis"></span><?php echo $speech_bubble ?><span class="icon-quote-down invis"></span><span class="icon-quote-down absolute"></span>
                </div>
            </div>
        </div>
    </div>
</section>
