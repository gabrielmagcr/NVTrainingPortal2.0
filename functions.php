<?php
session_start();
function nvtp_files() {
	wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts.js'), NULL, '1.12', true);
  wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.3.5' );
  wp_enqueue_style('font_awsome', '//use.fontawesome.com/releases/v5.4.2/css/all.css');
    wp_enqueue_style( 'btc-style', get_template_directory_uri() . '/style.css' , array ('bootstrap-style'),'1.0.1');
    wp_enqueue_script ( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.5', false);
   

}

add_action('wp_enqueue_scripts', 'nvtp_files');

add_theme_support('menus');

function show_template() {
 
      global $template;
     
  if($template === '/home/naturvetadmin/public_html/training/wp-content/themes/NVTrainingPortal/single-quiz.php'){
    wp_enqueue_script('videoModal-js', get_theme_file_uri('/js/videoModal.js'), NULL, '1.35.0', true);
  }
}
add_action('wp_footer', 'show_template');
// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

//remove admin bar for subscriber users
add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl() {
  return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS() {
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_filter('login_headertitle', 'ourLoginTitle');

function ourLoginTitle() {
  return get_bloginfo('name');
}

//route for quiz api

add_action('rest_api_init', 'quiz_routes');

function quiz_routes() {
	register_rest_route('nvtp/v1', 'quizSubs', array(
		'methods' => 'POST',
		'callback' => 'addQuiz'
	));
}
//addQuiz Function creates a post with post type as completed-quizzes with the users information
function addQuiz($data) {
  $user_info = get_userdata($_SESSION["user_id"]);
  $quizID = sanitize_text_field($data['quizID']);
	$userID=sanitize_text_field($data['user_id']);
	wp_insert_post(array(
		'post_type' => 'completed-quizzes',
		'post_status' => 'publish',
    'post_title' => $user_info->user_email . '-quiz ' .$quizID ,
		'meta_input' => array(
      'completed_quiz_id' => $quizID,
      'user_id'=>$userID
		)
  ));
}



add_action('rest_api_init', 'completed_form_routes');

function completed_form_routes() {
	register_rest_route('completed/v1', 'form', array(
		'methods' => 'POST',
		'callback' => 'completed_gift_form'
	));
}




function completed_gift_form($data){
  
  if(!isset ($data['userGiftId'])){

    $return_value = 'Sorry a Error Occurred' ;

    wp_send_json_error ($return_value) ;
    }
    
    $id=$data['userGiftId'];
    add_user_meta($id,'completedGiftForm',true);
    
    $return_value = 'Successfully Completed' ;

    wp_send_json_success ($return_value) ;
   

  }
  
add_action( 'wp_print_scripts', 'DisableStrongPW', 100 );

function DisableStrongPW() {
    if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
        wp_dequeue_script( 'wc-password-strength-meter' );
    }
}

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');