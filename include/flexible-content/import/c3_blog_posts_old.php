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
            <?php $blog_sort = get_field('blog_sort','option'); ?>
            <?php if ($blog_sort == false): ?>
                <?php $sortOrder = 'ASC' ?>
            <?php elseif ($blog_sort == true): ?>
                <?php $sortOrder = 'DESC' ?>
            <?php endif; ?>
                <?php
                $args = array(
                'post_type'      => 'blog',
                'posts_per_page' => -3,
                'orderby'        => 'date',
                'order'          => $sortOrder,
            );
                // The Query
                $the_query = new WP_Query( $args );
                // The Loop
                if ( $the_query->have_posts() ) { ?>
                    <div class="all-blog-posts-container">
                        <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
                            <?php
                            $link = get_the_permalink();
                            $img = get_the_post_thumbnail();
                            $blog_intro_text = get_field('blog_intro_text');
                            ?>
                            <div class="blog-box">
                                <a class="img" href="<?php echo $link; ?>" >
                                    <?php echo $img ?>
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
                        <?php endwhile; ?>
                    </div>
                <?php
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata(); ?>

        </div>
    </div>
</section>
