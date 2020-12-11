
<section class="flexible-inner-section bbh-inner-section c4-prices">
    <div class="pad-container">
        <div class="large-grid-container">
            <?php
            $featured_posts = get_sub_field('prices');
            if( $featured_posts ): ?>
                <div class="prices-container">
                    <?php foreach( $featured_posts as $post ):
                        setup_postdata($post); ?>
                        <?php
                        $prices_title = get_the_title();
                        $prices_description = get_field('prices_description');
                        $prices_price = get_field('prices_price');
                        $prices_list = get_field('prices_list');
                        $prices_btn = get_field('prices_btn');
                        ?>
                        <div class="price-card">
                            <div class="info">
                                <h2><?php echo $prices_title; ?></h2>
                                <div class="description <?php if (!$prices_price) { echo "no-price"; } ?>">
                                    <?php echo $prices_description ?>
                                </div>
                                <?php if ($prices_price): ?>
                                    <div class="prices">
                                        <span><?php echo $prices_price ?></span>
                                        <span class="prices_tax">Prisen er ekskl. moms, og kørsel der afregnes efter statens takst.</span>
                                    </div>
                                <?php endif; ?>
                                <?php echo $prices_list ?>
                            </div>
                            <a href="<?php echo $prices_btn['url'] ?>" target="<?php echo $prices_btn['target'] ?>" class="bbh-btn"><?php echo $prices_btn['title'] ?></a>
                        </div>
                    <?php endforeach; ?>
                    <div class="placeholder">
                        <?php
                        // if (file_exists(get_stylesheet_directory() . '/include/flexible-content/import/c2_img_text.php')) {
                		// 	include( get_stylesheet_directory() . '/include/flexible-content/import/c2_img_text.php');
                		// } ?>
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
                                    <div class="img-text-container">
                                        <div class="imgbox lazyload" data-bgset="<?php echo $img['sizes']['medium'] ?>">

                                        </div>
                                        <div class="textbox white-off-bg">
                                            <?php if ($only_text == true): ?>
                                                <?php echo $text ?>
                                            <?php else: ?>
                                                <?php if ($title): ?>
                                                <h2 class="center"><?php echo $title ?></h2>
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
                        </section>

                    </div>
                </div>
                <?php
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
