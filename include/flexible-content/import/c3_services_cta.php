<section class="flexible-inner-section bbh-inner-section white-off-bg c3-services-cta">
        <div class="grid-container">
            <div class="frontpage-title-container">
                <?php
                $title_link = get_sub_field('title_link');
                $title_text = get_sub_field('title_text');
                ?>
                <a href="<?php echo $title_link['url'] ?>" target="<?php echo $title_link['target'] ?>" class="frontpage-title-link"><?php echo $title_link['title'] ?></a>
                <?php echo $title_text; ?>
            </div>
        <?php
        if( have_rows('service_boxes') ): ?>
            <div class="service-cta-container">
            <?php
            while( have_rows('service_boxes') ) : the_row();
                $icomoon = get_sub_field('icomoon');
                $service_title = get_sub_field('service_title');
                $service_text = get_sub_field('service_text');
                $link = get_sub_field('service_link');
                ?>
                <a class="service-box" href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>">
                
                    <span class="<?php echo $icomoon; ?>"></span>
                    <h3><?php echo $service_title; ?></h3>
                    <?php echo $service_text; ?>
                    <br>
                    <p class="read-more"><?php echo $link['title'] ?></p>

                </a>
                <?php
            endwhile; ?>
            </div>
        <?php
        endif; ?>
        </div>
</section>
