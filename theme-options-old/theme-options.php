<?php
$themename = "clean-theme";
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	$menu = add_menu_page( 
		__( 'Opciones de Tema', 'clean-theme' ), 
		__( 'Opciones de Tema', 'clean-theme'), 
		'edit_theme_options', 
		'theme_options', 
		'theme_options_do_page',
		'dashicons-layout' 
	);
	add_action( 'admin_print_styles-' . $menu, 'admin_theme_style' );
	add_action( 'admin_print_scripts-' . $menu, 'admin_theme_script' );
}

function admin_theme_style(){
	wp_enqueue_style( 'style_theme_option', get_stylesheet_directory_uri().'/theme-options/css/style.css');
	wp_enqueue_style( 'style_theme_bootstrap', get_stylesheet_directory_uri().'/theme-options/css/bootstrap.min.css');

	/*fontawesome*/
	wp_enqueue_style( 'style_fontawesome', get_stylesheet_directory_uri().'/theme-options/css/fontawesome.min.css');
	wp_enqueue_style( 'style_fontawesome_solid', get_stylesheet_directory_uri().'/theme-options/css/solid.css');
	wp_enqueue_style( 'style_fontawesome_regular', get_stylesheet_directory_uri().'/theme-options/css/regular.css');
}

function admin_theme_script(){
	wp_enqueue_script( 'script-popper', get_stylesheet_directory_uri().'/js/popper.min.js', '1.0', true);

	wp_enqueue_script( 'script_theme_boostrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js',  '1.0', true);

	wp_enqueue_media();
	wp_enqueue_script( 'editor' );

	$translation_array = array(
        'templateUrl' => get_stylesheet_directory_uri()
    );
	wp_register_script( 'script_theme_functions', get_template_directory_uri().'/theme-options/js/functions.js', '1.0', true );
	wp_enqueue_script( 'script_theme_functions' );
	wp_localize_script( 'script_theme_functions', 'theme_metadata', $translation_array );

	wp_register_script('jquery-script', get_template_directory_uri().'/js/jquery.min.js', '3.1.0', true );
	wp_enqueue_script( 'jquery-script');
}

function theme_options_do_page() {
	?>
	<div class="wrap">
		<form class="theme_options" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="theme-options-panel">
			<!--Button save theme option-->
			<div class="wrap-title">
				<div class="row">
					<div class="col-md-6">
						<h2 class='title-theme-option'>
							<?php echo __( 'Opciones de Tema', 'clean-theme' ); ?>
							<span> <?php echo __( 'Tema:', 'clean-theme' ); ?> <?php echo wp_get_theme(); ?></span>
						</h2>
					</div>
					<div class="col-md-6">
						<div class="pull-right text-right">
			                <button type="submit" class="btn-custom" name="submit"/>
			                	<i class="spin-loader fas fa-save"></i> <?php echo __( 'Guardar Opciones', 'clean-theme' ); ?>
			                </button>
			            </div>
					</div>
				</div>
	        </div>

			<?php get_template_part( 'theme-options/content', 'template' ); ?>
        	
			<div class="wrap-title">
				<div class="row">
					<div class="offset-md-8 col-md-4">
						<div class="pull-right text-right">
			                <input type="hidden" name="action" value="themeoption_save" />
			                <button type="submit" class="btn-custom" name="submit"/>
			                	<i class="spin-loader fas fa-save"></i>  <?php echo __( 'Guardar Opciones', 'clean-theme' ); ?>
			                </button>
			            </div>
					</div>
				</div>
	        </div>
        </form>
	</div>
	<?php
}

function themeoption_save(){

	/* Configuraciones Generales
	============================================= */
	$configuration_general = array(
		"text-header-title"      => $_POST["text-header-title"],
		"text-descripcion-corta" => $_POST["text-descripcion-corta"],
		"keywords" 				 => $_POST["keywords"],
		"code-google-analytics"  => $_POST["code-google-analytics"],
		"e-mail"     		 	 => $_POST["e-mail"],
	);

	/* Branding y social media
	============================================= */
	$branding = array(
		/*Logos header*/
		"favicon" 				 => $_POST["favicon"],
		"logo-principal"		 => $_POST["logo-principal"],
		
		/*redes sociales*/
		"facebook-url"	=> $_POST["facebook-url"],
		"youtube-url"   => $_POST["youtube-url"],
		"twitter-url"   => $_POST["twitter-url"],
		"instagram-url" => $_POST["instagram-url"]
	);
	
	/* Home - Menu
	============================================= */
	$home_slider = array(
		"image_file_slide"   => array_filter($_POST["image_file_slide"], 'removeEmptyElements'),
		"image_titulo_slide" => array_filter($_POST["image_titulo_slide"], 'removeEmptyElements'),
		"image_subtitle_slide" => array_filter($_POST["image_subtitle_slide"], 'removeEmptyElements'),
		"image_url_slide"    => array_filter($_POST["image_url_slide"], 'removeEmptyElements'),
		"image_aling_slide"  => array_filter($_POST["image_aling_slide"], 'removeEmptyElements'),
	);


	echo json_encode($_POST);

	//Configuration general
	update_option("themeoption_configuration_general", array_merge($configuration_general));

	//Branding y social media
	update_option("themeoption_branding", array_merge($branding));

	//Home
	update_option("themeoption_home_slider", $home_slider);

	exit();
}
add_action('wp_ajax_themeoption_save', 'themeoption_save');

function theme_after_setup_theme(){
	if(!get_option($themename . "_installed")){

		$general_settings = array(
			"logo-url-main" => $_POST["logo-url-main"],
		);
		$slider_option = array(
			"slider1" => "Inspiration",
		);

		add_option($themename . "_general_setting", $general_settings);
		add_option($themename . "_installed", 1);
	}
}
add_action("after_setup_theme", "theme_after_setup_theme");

function theme_switch_theme($theme_template){
	global $themename;
	delete_option($themename . "_installed");
}
add_action("switch_theme", "theme_switch_theme");

function removeEmptyElements(&$element){
    if (is_array($element)) {
        if ($key = key($element)) {
            $element[$key] = array_filter($element);
        }

        if (count($element) != count($element, COUNT_RECURSIVE)) {
            $element = array_filter(current($element), __FUNCTION__);
        }

        $element = array_filter($element);

        return $element;
    } else {
        return empty($element) ? false : $element;
    }
}