<?php
$only_text = get_sub_field('only_text');
$img = get_sub_field('img');
$title = get_sub_field('title');
$quote = get_sub_field('quote');
$text = get_sub_field('text');
$download_btn = get_sub_field('download_btn');
$link = get_sub_field('download_file');

 ?>

<section class="flexible-inner-section bbh-inner-section  c2-img-text">
    <div class="pad-container">
        <div class="large-grid-container">
            <div class="img-text-container">
                <div class="imgbox lazyload" data-bgset="<?php echo $img['sizes']['medium'] ?>">

                </div>
                <div class="textbox white-off-bg">
                    <?php if ($only_text == true): ?>
                        <?php echo $text ?>
                    <?php else: ?>
                        <?php if ($title): ?>
                        <?php echo $title ?>
                        <?php endif; ?>
                        <?php if ($quote): ?>
                        <div class="title-text-container quote">
                            <span class="icon-quote-up"></span><p class="quote-text"><?php echo $quote?></p><span class="icon-quote-down"></span>
                        </div>
                        <?php endif; ?>
                        <?php echo $text ?>
                        <?php if ($link): ?>
                        <div class="download-container">
                            <a href="<?php echo $link['url'] ?>" target=”_blank” class="download bbh-btn"><?php echo $download_btn ?></a>
                        </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
