<section class="flexible-inner-section bbh-inner-section white-off-bg all-blog-posts c3-blog-posts">
    <div class="pad-container">
        <div class="large-grid-container">
            <div class="frontpage-title-container">
                <?php
                $title_link = get_sub_field('title_link');
                $title_text = get_sub_field('title_text');
                ?>
                <a href="<?php echo $title_link['url'] ?>" target="<?php echo $title_link['target'] ?>" class="frontpage-title-link"><?php echo $title_link['title'] ?></a>
                <?php echo $title_text; ?>
            </div>

            <?php
                $featured_posts = get_sub_field('blog_posts');
                if( $featured_posts ): ?>
                    <div class="all-blog-posts-container">
                    <?php foreach( $featured_posts as $post ): ?>
                        <div class="blog-box">
                            <?php
                            $link = get_the_permalink();
                            $img = get_the_post_thumbnail_url();
                            $blog_intro_text = get_field('blog_intro_text'); ?>
                                <a class="img" href="<?php echo $link; ?>" >
                                  <div class="thumbnail-img lazyload" data-bgset="<?php echo $img ?>" >
                                  </div>
                                </a>
                                <div class="textbox">
                                        <div class="content">
                                        <h3><?php echo get_the_title(); ?></h3>
                                        <p class="text"><?php echo $blog_intro_text ?></p>
                                        </div>
                                    <div class="link">
                                        <a href="<?php echo $link; ?>" >Læs mere</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php
                // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>
    </div>
</section>
