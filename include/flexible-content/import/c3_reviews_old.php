<section class="flexible-inner-section bbh-inner-section white-off-bg c3-reviews">
    <div class="large-grid-container">
        <div class="frontpage-title-container">
            <?php
            $title_link = get_field('reviews_title_link','option');
            $title_text = get_field('review_title_text','option');
            ?>
            <a href="<?php echo $title_link['url'] ?>" target="<?php echo $title_link['target'] ?>" class="frontpage-title-link"><?php echo $title_link['title'] ?></a>
            <?php echo $title_text; ?>
        </div>

            <?php
            $args = array(
			'post_type'      => 'review',
			'posts_per_page' => -1,
			'order'          => 'DESC',
		);
            // The Query
            $the_query = new WP_Query( $args );
            // The Loop
            if ( $the_query->have_posts() ) { ?>
                <div class="review-container">
                    <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
                    <div class="review-box">
                        <?php
                        $review_img = get_field('review_img');
                        $review_name = get_field('review_name');
                        $review_text = get_field('review_text'); ?>
                        <?php if ($review_img): ?>
                            <div class="review-img" style="background-image:url(<?php echo $review_img['sizes']['small']?>)"></div>
                        <?php else: ?>
                            <div class="review-img" style="background-image:url('/wp-content/themes/businessbuddy/template-parts/review-placeholder.png')"></div>
                        <?php endif; ?>
                        <div class="review-name"><?php echo $review_name ?></div>
                        <div class="review-text"><?php echo $review_text ?></div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>

    </div>
</section>
