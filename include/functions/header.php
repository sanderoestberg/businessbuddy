
<?php
/*=============================================
  = Move mobile header inside our sticky container =
===============================================*/
remove_action( 'generate_after_header', 'generate_menu_plus_mobile_header', 5 );
add_action('generate_header', 'generate_menu_plus_mobile_header', 60);

 ?>

<?php
/*=============================================
          = Wrap masthead to include top bar =
===============================================*/
add_action('generate_header', 'bbh_wrap_masthead_start', 1);
function bbh_wrap_masthead_start() {
    if (is_front_page() == true) {
        echo "<div id='fixed-header' class='frontpage-header'>";
    }
    else{
	echo "<div id='fixed-header'>";
    }
};

add_action('generate_header', 'bbh_wrap_masthead_end', 99);
function bbh_wrap_masthead_end() {
	echo "</div>";
};
 ?>

 <?php /*=============================================
          = Add call to action in mobile menu - Slideout =
===============================================*/
add_action('generate_inside_slideout_navigation', 'bbh_add_logo_slideout', 80);
function bbh_add_logo_slideout() {
	?>

    <?php $logo = get_custom_logo(); ?>
    <div class="slideout-logo">
        <?php echo $logo; ?>
    </div>


	<?php
}; ?>


<?php add_action( 'generate_before_navigation','addOtherLogo' );
function addOtherLogo() { ?>
    <div class="site-logo white-logo">
		<a href="/" title="Business Buddy" rel="home">
			<img class="header-image is-logo-image" alt="Business Buddy" src="/wp-content/themes/businessbuddy/template-parts/logo.png" title="Business Buddy" alt="Business Buddy Logo">
		</a>
	</div>
<?php } ?>
