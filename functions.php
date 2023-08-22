<?php 
$themename = "clean-theme";
/************************************************/
/* Requires file externals                      */
/************************************************/
require_once( get_stylesheet_directory().'/theme-options/theme-options.php' );

/************************************************/
/* Functions script and style                   */
/************************************************/
function get_theme_scripts(){
    global $post;
    wp_register_script('script-jquery', get_template_directory_uri().'/js/jquery-3.1.0.min.js', array(), '3.1.0', true );
    wp_enqueue_script( 'script-jquery');

    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array( 'script-jquery' ), '4.6.0', true);

    wp_enqueue_script( 'script-cycle', get_template_directory_uri().'/js/jquery.cycle2.min.js', array( 'script-jquery' ), '2.1.6', true);

    wp_enqueue_script( 'script-validate', get_template_directory_uri().'/js/jquery.validate.js', array( 'script-jquery' ), '2.3.4', true);

    wp_enqueue_script( 'script-custom', get_template_directory_uri().'/js/functions.js', array( 'script-jquery' ), '1.0', true);
    $translation_array = array(
        'templateUrl' => admin_url('admin-ajax.php')
    );
    wp_localize_script( 'script-custom', 'wpurl_ajax', $translation_array );

    wp_enqueue_script( 'script-sidr', get_template_directory_uri().'/js/jquery.sidr.min.js', array( 'script-jquery' ), '2.2.1', true);

}
add_action( 'wp_enqueue_scripts', 'get_theme_scripts' );

//Load styles
function get_theme_styles() {
    wp_enqueue_style( 'style-main', get_stylesheet_uri());
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.6.0');
    wp_enqueue_style( 'style-sidr', get_template_directory_uri().'/css/jquery.sidr.dark.min.css');
}
add_action( 'wp_enqueue_scripts', 'get_theme_styles' );


// Menu principal - Main menu
register_nav_menus( array(
	'principal'   => __( 'Menu principal', $themename ),
) );

add_post_type_support( 'page', 'excerpt' );

// Habilita las imagenes destacadas
add_theme_support( 'post-thumbnails' );

/*add image size crop*/
add_image_size( 'img-slider', 1776, 850, true );
add_image_size( 'img-single', 600, 600, true );
add_image_size( 'img-default', 693, 466, true );

add_theme_support( 'html5', array(
	'search-form'
) );

function my_login_logo() {
	$branding = get_option("themeoption_branding");
    wp_enqueue_script( 'login-script', get_template_directory_uri(). '/js/login.script.js',array( 'jquery' ), null, true);
?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $branding['logo-principal']; ?>);
            background-size: contain;
            padding-bottom: 5px;
			width: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function change_footer_admin() {
    echo $themename;
}
add_filter('admin_footer_text', 'change_footer_admin');

function remove_thumbnails($sizes){
    unset( $sizes['large']);
    unset( $sizes['medium']);
    unset( $sizes['thumbnail']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_thumbnails' );

//-----Función para limitar caracteres-----//
function cutString($string,$charlength,$key) {
    switch($string){
        case 'title':
            $string=wpautop(get_the_title(), 1 );
        break;
        case 'excerpt':
            $string=get_the_excerpt();
        break;
        case 'content':
            $string=wpautop(get_the_content(), 1 );
        break;
        case 'meta':
            $string=wpautop(get_option(''.$key.''), 1 );
        break;
        case 'var':
            $string= esc_html($key, $themename);
        break;
    }
    if(strlen($string)>$charlength) {
        $subex=substr($string,0,$charlength);
        echo $subex.'...';
    }else{
        echo $string;
    }
}

function get_img_feed($id){
	$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'slider-img');
	if($post_thumbnail){
		$post_thumbnail = $post_thumbnail[0];
	}else{
		$post_thumbnail = get_post_meta($id, 'image_proporcional', true);
	}
	return $post_thumbnail;
}

/************************************************/
/* Formulario de contacto para todos los sitios */
/************************************************/
function sendmail(){

    $data_array = $_POST;
    $configuration_theme = get_option("themeoption_configuration_general");
    $branding = get_option("themeoption_branding");
    
    $email_cc = !empty($data_array["email"]) ? $data_array["email"] : $configuration_theme['e-mail'];
    $send_email = !empty($configuration_theme['e-mail-formulario']) ? $configuration_theme['e-mail-formulario'] : $configuration_theme['e-mail'];
    
    $template = $data_array['config']['template_name'];
    $subject = $data_array['config']['subject'];
    $fromname = "Recibió un nuevo mensaje de ...";
    
    unset($data_array['config']);
    $formvars = $data_array;
    
    $formvars['logo-principal'] = $branding['logo-principal'];
    $formvars['permalink'] = home_url();
    
    require_once get_template_directory().'/lib/phpmailer/PHPMailerAutoload.php';
    
    function buildEmailBody($template, $formvars) {
        $body = file_get_contents(get_stylesheet_directory() . '/template-newsletter/' . $template . '.html');
        
        foreach ($formvars as $key => $value) {
            $body = str_replace('{' . $key . '}', $value, $body);
        }
        
        return $body;
    }
    
    $mailer = new PHPMailer(true);
    
    try {
        // Configuración del primer correo
        $mailer->IsSMTP();
        $mailer->Host = "smtp.gmail.com"; 
        $mailer->SMTPSecure = 'ssl';
        $mailer->SMTPAuth = true;
        $mailer->Port = 465;
    
        $mailer->Username = 'veracruz.oficial@gmail.com'; // Tu correo que envía
        $mailer->Password = 'kghltvfwekwadtaz'; // Tu contraseña temporal
    
        $mailer->SetFrom("no-responder@mail.com", $fromname);
        $mailer->AddAddress($send_email); // Correo del administrador
        $mailer->Subject = $subject;
        
        $body = buildEmailBody($template, $formvars);
    
        $mailer->CharSet = 'utf-8';
        $mailer->IsHTML(true);
        $mailer->MsgHTML($body);
    
        $mailer->Send();
    
        // Configuración del segundo correo
        $dataEmail = $email_cc;
        $dataSubject = 'Correo de confirmación';
        $dataBody = buildEmailBody('template_form_confirmation', $formvars);
    
        $mailer->ClearAddresses();
        $mailer->AddAddress($dataEmail);
        $mailer->Subject = $dataSubject;
        $mailer->Body = $dataBody;
    
        if($mailer->Send()){
            $result = array(
                "estatus" => "success",
                "mensaje" => "Gracias por contactarnos, recibirá un correo de confirmación.",
                "data" => $data_array,
            );
        }else{
            $error = "Mailer Error: " . $mailer->ErrorInfo;
            $result = array(
                "estatus" => "danger",
                "mensaje" => "Hubo un problema intentelo más tarde.",
                "code_error" => $error,
                "data" => $data_array,
                "email_cc" => $email_cc,
                "formvars" => $formvars,
                "body" => $body,
                "url" => $url,
                "template" => $template,
            );
        }
    
        // Manejo del resultado...
    } catch (Exception $e) {
        $error = "Mailer Error: " . $mailer->ErrorInfo;
        $result = array(
            "estatus" => "danger",
            "mensaje" => "Hubo un problema, inténtelo más tarde.",
            "code_error" => $error,
            "data" => $data_array,
        );
    
        // Manejo del resultado...
    }

    echo json_encode($result);
    die();
    
}
add_action('wp_ajax_sendmail', 'sendmail');
add_action('wp_ajax_nopriv_sendmail', 'sendmail');