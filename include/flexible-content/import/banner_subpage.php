
<?php $only_breadcrumbs = get_sub_field('only_breadcrumbs'); ?>

<?php if ($only_breadcrumbs == false): ?>

<?php $banner_background_img = get_sub_field('banner_background_img'); ?>
<?php $banner_title = get_sub_field('banner_title'); ?>
<?php $banner_text = get_sub_field('banner_text'); ?>
<?php $show_quote = get_sub_field('show_quote'); ?>
<?php $quote_text = get_sub_field('quote_text'); ?>


    <?php if ($show_quote == true): ?>
<section class="flexible-inner-section bbh-inner-section banner-subpage quote-margin">
        <div class="banner-green-filter">
        </div>
            <div class="lazyload banner-flex" style="height:188px" data-bgset="<?php echo $banner_background_img['sizes']['large'] ?>">
                <div class="title-text-container quote">
                    <span class="icon-quote-up"></span><p class="quote-text"><?php echo $quote_text ?></p><span class="icon-quote-down"></span>
                </div>
            </div>
</section>
    <?php else: ?>
<section class="flexible-inner-section bbh-inner-section banner-subpage">
        <div class="banner-black-filter">
        </div>
        <div class="lazyload banner-flex" style="height:350px" data-bgset="<?php echo $banner_background_img['sizes']['large'] ?>">
            <div class="title-text-container">
                <h1><?php echo $banner_title ?></h1>
                <p><?php echo $banner_text ?></p>
            </div>
        </div>
        <div class="pad-container">
            <div class="breadcrumbs-container large-grid-container">
            <?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
              ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php else: ?>
    <section class="flexible-inner-section bbh-inner-section banner-subpage">
        <div class="pad-container">
            <div class="breadcrumbs-container large-grid-container">
                <?php
                  if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                  }
                  ?>
            </div>
        </div>
    </section>
<?php endif; ?>
