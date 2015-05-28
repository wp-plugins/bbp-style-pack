<?php

//functions 




global $bsp_forum_display ;
global $bsp_login ;
global $bsp_breadcrumb ;

/**********forum list create vertical list************/
function bsp_sub_forum_list($args) {
  $args['separator'] = '<br>';
  return $args;
}

if ($bsp_forum_display['forum_list'] == true) {
add_filter('bbp_before_list_forums_parse_args', 'bsp_sub_forum_list' );
}

/**********remove counts*********************/
function bsp_remove_counts($args) {
$args['show_topic_count'] = false;
$args['show_reply_count'] = false;
$args['count_sep'] = '';
 return $args;
}

if ($bsp_forum_display['hide_counts'] == true) {
add_filter('bbp_before_list_forums_parse_args', 'bsp_remove_counts' );
}



/**********removes 'private' and protected prefix for forums ********************/
function bsp_remove_private_title($title) {
	if (is_bbpress()  ) {
	return '%s';
	}
		
}

if ($bsp_forum_display['remove_private'] == true  ) {
add_filter('private_title_format', 'bsp_remove_private_title');
}



/**********Create new topic    ********/


function bsp_create_new_topica () {
	global $bsp_forum_display ;
	if (!empty ($bsp_forum_display['Create New Topic Description'])) $text=$bsp_forum_display['Create New Topic Description'] ;
	else $text=__('Create New Topic', 'bbp-style-pack') ;
	if ( bbp_current_user_can_access_create_topic_form() && !bbp_is_forum_category() ) echo '<div style="text-align: center;">  <a href ="#topic">'.$text.'</a></div>' ;
	}
	
	
function bsp_create_new_topicb () {
	echo '<a name="topic"></a>' ;
	}

	
if ($bsp_forum_display['create_new_topic'] == true ) {
add_action ( 'bbp_template_before_single_forum', 'bsp_create_new_topica' ) ;
add_action( 'bbp_theme_before_topic_form', 'bsp_create_new_topicb' ) ;
}


/**********Add forum description    ********/

/** filter to add description after forums titles on forum index */
function bsp_add_display_forum_description() {
    echo '<div class="bsp-forum-content">' ;
    bbp_forum_content() ;
    echo '</div>';
    }
	
if ($bsp_forum_display['add_forum_description'] == true ) {
add_action( 'bbp_template_before_single_forum' , 'bsp_add_display_forum_description' );
}




/**********BSP LOGIN*******************/
		
/**********adds login/logout to menu*******************/
if ($bsp_login['add_login'] == true  ) {
add_filter( 'wp_nav_menu_items', 'bsp_nav_menu_login_link' );
}

function bsp_nav_menu_login_link($menu) {
	global $bsp_login ;
    if ($bsp_login['only_bbpress'] == true ) {
    if(is_bbpress()) {
    $loginlink = bsp_login() ;
    }
    else {
    $loginlink="" ;
    }
	}
	else {
	$loginlink = bsp_login();
	}
        $menu = $menu . $loginlink ;
        return $menu;
	
}

function bsp_login () {
global $bsp_login ;
if (is_user_logged_in()) {
		if (!empty($bsp_login['Login/logoutLogout page'] )) {
        $url=$bsp_login['Login/logoutLogout page'] ;
		}
		else {
		$url=site_url();
		}		
		$url2=wp_logout_url($url) ;
        $loginlink = '<li><a href="'.$url2.'">Logout</a></li>';
		return $loginlink ;
        }
    else {
        if (!empty($bsp_login['Login/logoutLogin page'] )) {
		$url = $bsp_login['Login/logoutLogin page'] ;
		}
		else {
		$url=site_url().'/wp-login.php' ;
		}	
        $loginlink = '<li><a href="'.$url.'/">Login</a></li>';
		return $loginlink ;
		
	}
		
}

if ($bsp_login['edit_profile'] == true  ) {
add_filter( 'wp_nav_menu_items', 'bsp_edit_profile' );
}

function bsp_edit_profile ($menu) { 
global $bsp_login ;		
if (!is_user_logged_in())
		return $menu;
	else
		$current_user = wp_get_current_user();
		$user=$current_user->user_nicename  ;
		$user_slug =  get_option( '_bbp_user_slug' ) ;
			if (get_option( '_bbp_include_root' ) == true  ) {	
			$forum_slug = get_option( '_bbp_root_slug' ) ;
			$slug = $forum_slug.'/'.$user_slug.'/' ;
			}
			else {
			$slug=$user_slug . '/' ;
			}
			if (!empty($bsp_login['edit profileMenu Item Description'] )) {
			$edit_profile=$bsp_login['edit profileMenu Item Description'] ;
			}
			else $edit_profile = __('Edit Profile', 'bbp-style-pack') ;
		$profilelink = '<li><a href="/' .$slug.  $user . '/edit">'.$edit_profile.'</a></li>';
		$menu = $menu . $profilelink;
		return $menu;
	
}

if ($bsp_login['register'] == true  ) {
add_filter( 'wp_nav_menu_items', 'bsp_register' );
}

function bsp_register ($menu) { 
global $bsp_login ;	
if (is_user_logged_in())
		return $menu;
	else
	$url = $bsp_login['Register PageRegister page'] ;
	if (!empty($bsp_login['Register PageMenu Item Description'] )) {
        $desc=$bsp_login['Register PageMenu Item Description'] ;
		}
	else $desc=__('Register', 'bbp-style-pack') ;
	$registerlink = '<li><a href="'.$url.'">'.$desc.'</a></li>';
	
	$menu = $menu . $registerlink;
		return $menu;
	
}


/**********breadcrumbs    ********/

//no breadcrumbs
function bsp_no_breadcrumb ($param) { 
return true;
}
if ($bsp_breadcrumb['no_breadcrumb'] == true ) {
add_filter ('bbp_no_breadcrumb', 'bsp_no_breadcrumb');
}



function bsp_breadcrumbs ($args) {
	global $bsp_breadcrumb ;
	if ($bsp_breadcrumb['no_home_breadcrumb'] == true) $args['include_home'] = false;
	if ($bsp_breadcrumb['no_root_breadcrumb'] == true) $args['include_root'] = false;
	if ($bsp_breadcrumb['no_current_breadcrumb'] == true) $args['include_current'] = false;
	if (!empty ($bsp_breadcrumb['Breadcrumb HomeText'] )) $args['home_text'] = $bsp_breadcrumb['Breadcrumb HomeText'];
	if (!empty ($bsp_breadcrumb['Breadcrumb RootText'] )) $args['root_text'] = $bsp_breadcrumb['Breadcrumb RootText'];
	if (!empty ($bsp_breadcrumb['Breadcrumb CurrentText'] )) $args['current_text'] = $bsp_breadcrumb['Breadcrumb CurrentText'];
	return $args ;
	
	
}


//add the filter - if no args set then this does nothing
add_filter('bbp_before_get_breadcrumb_parse_args', 'bsp_breadcrumbs');





//This function changes the text wherever it is quoted
function bsp_change_text( $translated_text ) {
global $bsp_login ;
	if ( $translated_text == 'You are already logged in.' ) {
	$translated_text = $bsp_login['Login/logoutLogged in text'];
	}
	return $translated_text;
}

if (!empty ($bsp_login['Login/logoutLogged in text'] )) add_filter( 'gettext', 'bsp_change_text', 20 );

