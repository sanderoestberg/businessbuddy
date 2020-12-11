<?php get_header(); ?>
</div>
</div>
<?php
$img = get_the_post_thumbnail();
$blog_text = get_field('blog_text');
$hide = get_field('blog_hide_img_title');
// $archive = get_post_type_archive_link('blog');
?>
<section class="single-blog-post">
    <div class="pad-container">
        <div class="breadcrumbs-container single-post large-grid-container">
        <?php
          // if ( function_exists('yoast_breadcrumb') ) {
          //   yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
          // }
          // ?>
          <p id="breadcrumbs"><span><span>
            <a href="/">Forside</a>
            <span class="bread-seperator">&gt;</span>
            <a href="/blog">Blog</a>
            <span class="bread-seperator">&gt;</span>
            <strong class="breadcrumb_last" aria-current="page"><?php echo get_the_title() ?></strong>
            </span></span></p>
        </div>
    </div>
    <div id="primary" <?php generate_content_class();?>>
    	<main id="main" <?php generate_main_class(); ?>>
    		<?php
    		do_action( 'generate_before_main_content' ); ?>
            <div class="pad-container">
			    <div class="small-grid-container">
                    <?php if ($hide == true): ?>
                    <?php else: ?>
                    <div class="single-blog-top">
                        <?php echo $img ?>
                    </div>
                    <h1><?php echo get_the_title(); ?></h1>
                    <?php endif; ?>
                    <div class="blog-content">
                        <?php echo $blog_text ?>
                    </div>

                </div>
            </div>
            <?php
					//Include flexible content
					include(STYLESHEETPATH . '/include/flexible-content/flexible-content.php');
			?>


    	</main><!-- #main -->
    </div><!-- #primary -->
</section>

<?php get_footer(); ?>
