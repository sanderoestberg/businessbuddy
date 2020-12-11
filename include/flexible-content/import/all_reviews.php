<section class="flexible-inner-section bbh-inner-section all-reviews">
    <div class="large-grid-container">
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
                <div class="all-review-container">
                    <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
                        <div class="review-box">
                            <?php
                            $review_img = get_field('review_img');
                            $review_name = get_field('review_name');
                            $review_text = get_field('review_text');
                            $title_place = get_field('jobtitel_og_sted');?>
                            <?php if ($review_img): ?>
                                <div class="review-img" style="background-image:url(<?php echo $review_img['sizes']['small']?>)"></div>
                            <?php else: ?>
                                <div class="review-img" style="background-image:url('/wp-content/themes/businessbuddy/template-parts/review-placeholder.png')"></div>
                            <?php endif; ?>
                            <div class="review-name"><?php echo $review_name ?></div>
                            <div class="review-title-place"><?php echo $title_place ?></div>
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
