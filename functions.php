<?php
/**
 * Generate child theme functions and definitions
 *
 * @package Generate
 */

/*=================================================
=         Enqueue all files from folder           =
=================================================*/
// Standard files
foreach(glob(get_theme_file_path() . "/include/standards/*.php") as $file){
	require $file;
}
// Custom files
foreach(glob(get_theme_file_path() . "/include/functions/*.php") as $file){
	require $file;
}
