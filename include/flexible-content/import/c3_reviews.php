<?php
if ( ! defined( 'ABSPATH' ) ) exit;
wp_enqueue_script('slickjs');
wp_enqueue_style('slick');
//wp_enqueue_style('slick_theme');
?>


<?php $slider_or_boxes = get_sub_field('slider_or_boxes'); ?>
<?php if ($slider_or_boxes == false): ?>
    <section class="flexible-inner-section bbh-inner-section c3-reviews">
<?php elseif ($slider_or_boxes == true): ?>
    <section class="flexible-inner-section bbh-inner-section all-reviews boxes">
<?php endif; ?>

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
            $featured_posts = get_sub_field('reviews');
            if( $featured_posts ): ?>
            <?php if ($slider_or_boxes == false): ?>
                <div class="review-container">
            <?php elseif ($slider_or_boxes == true): ?>
                <div class="all-review-container">
            <?php endif; ?>
                <?php foreach( $featured_posts as $post ): ?>
                    <div class="review-box">
                        <?php
                        $review_img = get_field('review_img');
                        $review_name = get_field('review_name');
                        $review_text = get_field('review_text'); ?>
                        <div class="review-img" style="background-image:url(<?php echo $review_img['sizes']['small']?>)"></div>
                        <div class="review-name"><?php echo $review_name ?></div>
                        <?php if ($slider_or_boxes == true): ?>
                            <?php $title_place = get_field('jobtitel_og_sted'); ?>
                            <div class="review-title-place"><?php echo $title_place ?></div>
                        <?php endif; ?>
                        <div class="review-text"><?php echo $review_text ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
            <?php endif; ?>

    </div>
</section>
