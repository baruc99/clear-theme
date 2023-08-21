<?php
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	$menu = add_menu_page( 
		__( 'Opciones de tema', 'themeoption' ), 
		__( 'Opciones generales', 'themeoption' ), 
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
	wp_enqueue_script( 'script-popper', get_stylesheet_directory_uri().'/js/popper.min.js');

	wp_enqueue_script( 'script_theme_boostrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js');

	wp_enqueue_media();
	wp_enqueue_script( 'editor' );

	$translation_array = array(
        'templateUrl' => get_stylesheet_directory_uri(),
        'ajax_url' => admin_url( 'admin-ajax.php')
    );
	wp_register_script( 'script_functions', get_stylesheet_directory_uri().'/theme-options/js/functions.js', '1.0', true );
	wp_enqueue_script( 'script_functions' );
	wp_localize_script( 'script_functions', 'theme_metadata', $translation_array );

	wp_register_script('jquery-script', get_stylesheet_directory_uri().'/js/jquery.min.js', '2.2.4', true );
	wp_enqueue_script( 'jquery-script');

    wp_enqueue_script( 'jquery-ui', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js');
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
							<?php echo __( 'Opciones del tema', 'theme-option' ); ?>
							<span>Tema: <?php echo wp_get_theme(); ?></span>
						</h2>
					</div>
					<div class="col-md-6">
						<div class="pull-right text-right">
			                <button type="submit" class="btn-custom" name="submit">
			                	<i class="spin-loader fas fa-save"></i> Guardar opciones
			                </button>
			            </div>
					</div>
				</div>
	        </div>
			<?php get_template_part( 'theme-options/content', 'template' ); ?>
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
		"banner-footer"  	 	 => $_POST["banner-footer"],
		"footer-description"  	 => $_POST["footer-description"],
		"lat-lng"     	         => $_POST["lat-lng"],
		"code-google-analytics"  => $_POST["code-google-analytics"],
		"e-mail"     		 	 => $_POST["e-mail"],
		"e-mail-formulario"	 	 => $_POST["e-mail-formulario"],
		"e-mail-congresos"	 	 => $_POST["e-mail-congresos"],
		'phone'					 => $_POST["phone"]
	);

	/* Branding y social media
	============================================= */
	$branding = array(
		/*Logos header*/
		"favicon" 				 => $_POST["favicon"],
		"logo-principal"		 => $_POST["logo-principal"],
		"logo-principal-nocturno"=> $_POST["logo-principal-nocturno"],

		/*paleta de colores - generales*/
		"title-color-g"	=> $_POST["title-color-g"],
		"texto-color-g"	=> $_POST["texto-color-g"],
		"link-color-g"	=> $_POST["link-color-g"],
		"bg-color-g"	=> $_POST["bg-color-g"],
		"border-color-g"=> $_POST["border-color-g"],
		
		/*paleta de colores - header*/
		"icons-header"	=> $_POST["icons-header"],
		"bg-menu"		=> $_POST["bg-menu"],
		"a-menu"		=> $_POST["a-menu"],

		/*paleta de colores - footer*/
		"title-color-footer"	=> $_POST["title-color-footer"],
		"parrafos-color-footer"	=> $_POST["parrafos-color-footer"],
		"bg-map-links"			=> $_POST["bg-map-links"],
		"bg-menu-footer"		=> $_POST["bg-menu-footer"],

		/*Branding Servicios*/
		"title-color-servicio"	=> $_POST["title-color-servicio"],
		"hover-title-servicio"	=> $_POST["hover-title-servicio"],
		"box-color-servicio"	=> $_POST["box-color-servicio"],
		"hover-box-servicio"	=> $_POST["hover-box-servicio"],
		"border-box-servicio"	=> $_POST["border-box-servicio"],
		
		/*redes sociales*/
		"facebook-url"	=> $_POST["facebook-url"],
		"twitter-url"   => $_POST["twitter-url"],
		"youtube-url"   => $_POST["youtube-url"],
		"instagram-url" => $_POST["instagram-url"]
	);
	
	/* Home - Menu
	============================================= */
	$home_slider = array(
		"slider-active"   => $_POST["slider-active"],
		"num-slider"	  => $_POST["num-slider"],
		"category-slider" => $_POST["category-slider"]
	);

	$home_multimedia = array(
		"multimedia-active" => $_POST["multimedia-active"],
		"num-videos"		=> $_POST["num-videos"]
	);

	$home_noticias = array(
		'noticias-active'   => $_POST["noticias-active"],
		'titulo-noticias'   => $_POST["titulo-noticias"],
		'category-noticias'	=> $_POST["category-noticias"],
		'cuenta-twitter'	=> $_POST["cuenta-twitter"]
	);

	//Home - Servicios generales
	$home_servicios_generales_op = array(
		"servicios-g-active" => $_POST["servicios-g-active"]
	);

	$home_servicios_generales = array(
		"image_file_service_g"   => array_filter($_POST["image_file_service_g"], 'removeEmptyElements'),
		"image_titulo_service_g" => array_filter($_POST["image_titulo_service_g"], 'removeEmptyElements'),
		"image_url_service_g"    => array_filter($_POST["image_url_service_g"], 'removeEmptyElements'),
        "new_window_service_g"   => array_filter($_POST["new_window_service_g"], 'removeEmptyElements')
	);

	//Home - Galeria videos
	$galeria_videos_op = array(
		"galeria-videos-active" => $_POST["galeria-videos-active"]
	);

	$galeria_videos = array(
		"url_video_youtube"    => array_filter($_POST["url_video_youtube"], 'removeEmptyElements'),
		"titulo_video_youtube" => array_filter($_POST["titulo_video_youtube"], 'removeEmptyElements')
	);

	//Servicios
	$home_servicios_op = array(
		"servicios-active" => $_POST["servicios-active"],
	);
	$home_servicios = array(
		"image_file_service" => array_filter($_POST["image_file_service"], 'removeEmptyElements'),
		"image_titulo_service" => array_filter($_POST["image_titulo_service"], 'removeEmptyElements'),
		"image_url_service"  => array_filter($_POST["image_url_service"], 'removeEmptyElements'),
        "new_window_service" => array_filter($_POST["new_window_service"], 'removeEmptyElements')
	);

	$banners_options = array(
		"banner-active"		 => $_POST["banner-active"]
	);

	$banners_carrousel = array(
		"image_file_banner" => array_filter($_POST["image_file_banner"], 'removeEmptyElements'),
		"image_url_banner"  => array_filter($_POST["image_url_banner"], 'removeEmptyElements'),
        "new_window_banner" => array_filter($_POST['new_window_banner'], 'removeEmptyElements')
	);

    $modal_options = array(
        "modal-active" 	=> $_POST["modal-active"],
		"img-modal" 	=> $_POST["img-modal"],
		"titulo-alerta" => $_POST["titulo-alerta"],
		"content-modal" => $_POST["content-modal"],
		"link-modal" 	=> $_POST["link-modal"],
		"url-video" 	=> $_POST["url-video"]
    );

	
	//Configuration general
	update_option("themeoption_configuration_general", array_merge($configuration_general));

	//Branding y social media
	update_option("themeoption_branding", array_merge($branding));

	//Home
	update_option("themeoption_home_slider", array_merge($home_slider));
	update_option("themeoption_home_multimedia", array_merge($home_multimedia));
	update_option("themeoption_home_noticias", array_merge($home_noticias));

	//Servicios generales
	update_option("themeoption_servicios_generales", $home_servicios_generales );
	update_option("themeoption_servicios_generales_op", $home_servicios_generales_op );

	//Galeria videos
	update_option("themeoption_galeria_videos", $galeria_videos );
	update_option("themeoption_galeria_videos_op", $galeria_videos_op );


	
	update_option("themeoption_banners_sidebar", $banners_sidebar );
    update_option("themeoption_modal_options", array_merge($modal_options));
    
    echo json_encode($_POST);
	die();
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