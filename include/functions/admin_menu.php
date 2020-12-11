<?php
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Tema indstillinger',
		'menu_title'	=> 'Tema indstillinger',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
        'position'    => '3',
		'icon_url'    => 'dashicons-layout',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Top bar',
		'menu_title'	=> 'Top bar',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Kontaktformular - Footer',
		'menu_title'	=> 'Kontaktformular - Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Copyright bar',
        'menu_title'	=> 'Copyright bar',
        'parent_slug'	=> 'theme-general-settings',
    ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Anmeldelse - Overskrift',
		'menu_title'	=> 'Anmeldelse - Overskrift',
		'parent_slug'	=> 'edit.php?post_type=review',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog - Indstillinger',
		'menu_title'	=> 'Blog - Indstillinger',
		'parent_slug'	=> 'edit.php?post_type=blog',
	));


	/*
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	*/
} ?>
