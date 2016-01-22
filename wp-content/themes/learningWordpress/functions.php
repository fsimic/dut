
<?php 

/* registrira menu opciju u dashboardu pod appearance->menus */
register_nav_menu( 'primary', __( 'Primary Menu', 'yourthemename' ) );




/*
function learningWordpress_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' ) );

	wp_register_script( 'jquery', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array( 'jquery' ) );
	wp_register_script( 'jquery1.11', get_template_directory_uri() . '/js/jquery.1.11.1.js', array( 'jquery' ) );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_register_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array( 'jquery' ) );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array( 'jquery' ) );

	wp_register_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ) );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
	

	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'modernizr' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery1.11' );

	wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'SmoothScroll' );
	wp_enqueue_script( 'isotope' );

	wp_enqueue_script( 'owl.carousel' );
	wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'learningWordpress_scripts_with_jquery' );

*/
?>