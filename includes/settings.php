<?php


function bsp_settings_page()
{

	?>
	<div class="wrap">
		<div id="upb-wrap" class="upb-help">
			<h2><?php _e('bbp Style pack', 'bbp-style-pack'); ?></h2>
			<?php
			if ( ! isset( $_REQUEST['updated'] ) )
				$_REQUEST['updated'] = false;
			?>
			<?php if ( false !== $_REQUEST['updated'] ) : ?>
			<div class="updated fade"><p><strong><?php _e( 'Settings saved', 'bbp-style-pack'); ?> ); ?></strong></p></div>
			<?php endif; ?>
			
			<?php //tests if we have selected a tab ?>
			<?php
            if( isset( $_GET[ 'tab' ] ) ) {
				//if ($active_tab == 'styling_settings') bsp_style_settings($tab) ; 
				$active_tab = $_GET[ 'tab' ];}
			else { $active_tab= 'forums_index_styling';
            } // end if
        ?>
		
		<?php // sets up the tabs ?>			
		<h2 class="nav-tab-wrapper">
		
	<a href="?page=bbp-style-pack&tab=forums_index_styling" class="nav-tab <?php echo $active_tab == 'forums_index_styling' ? 'nav-tab-active' : ''; ?>">Forums Index Styling</a>
	<a href="?page=bbp-style-pack&tab=topic_index_styling" class="nav-tab <?php echo $active_tab == 'topic_index_styling' ? 'nav-tab-active' : ''; ?>">Topics Index Styling</a>	
	<a href="?page=bbp-style-pack&tab=topic_styling" class="nav-tab <?php echo $active_tab == 'topic_styling' ? 'nav-tab-active' : ''; ?>">Topic/Reply Styling</a>
	<a href="?page=bbp-style-pack&tab=topic_form" class="nav-tab <?php echo $active_tab == 'topic_form' ? 'nav-tab-active' : ''; ?>">Topic/Reply Form</a>
	<a href="?page=bbp-style-pack&tab=forum_display" class="nav-tab <?php echo $active_tab == 'forum_display' ? 'nav-tab-active' : ''; ?>">Forum Display</a>
	<a href="?page=bbp-style-pack&tab=login" class="nav-tab <?php echo $active_tab == 'login' ? 'nav-tab-active' : ''; ?>">Login</a>
	<a href="?page=bbp-style-pack&tab=breadcrumb" class="nav-tab <?php echo $active_tab == 'breadcrumb' ? 'nav-tab-active' : ''; ?>">Breadcrumbs </a>
	<a href="?page=bbp-style-pack&tab=shortcodesd" class="nav-tab <?php echo $active_tab == 'shortcodesd' ? 'nav-tab-active' : ''; ?>">Shortcodes </a>
	<a href="?page=bbp-style-pack&tab=extras" class="nav-tab <?php echo $active_tab == 'extras' ? 'nav-tab-active' : ''; ?>">Extras </a>
	<a href="?page=bbp-style-pack&tab=widgets" class="nav-tab <?php echo $active_tab == 'widgets' ? 'nav-tab-active' : ''; ?>">Widgets </a>
	<a href="?page=bbp-style-pack&tab=help" class="nav-tab <?php echo $active_tab == 'help' ? 'nav-tab-active' : ''; ?>">Help </a>
	
	
	</h2>
	<table class="form-table">
			<tr>		
			<td>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="S6PZGWPG3HLEA">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</td>
<td>
<?php _e("If you find this plugin useful, please consider donating just a few dollars to help me develop and maintain it. You support will be appreciated", 'bbp-style-pack'); ?>


</td>
<td> With thanks to Jacobo Feijóo for extensive testing ! </td>
</tr>
</table>
<?php
//****  Forum index style settings
if ($active_tab == 'forums_index_styling' ) {
bsp_style_settings_f();
}

//****  topic index style settings
if ($active_tab == 'topic_index_styling' ) {
bsp_style_settings_ti();
}

//****  topic style settings
if ($active_tab == 'topic_styling' ) {
bsp_style_settings_t();
}

//****  forum settings
if ($active_tab == 'forum_display' ) {
bsp_forum_display();
}
//****  topic form settings
if ($active_tab == 'topic_form' ) {
bsp_style_settings_form();
}

//****  login settings
if ($active_tab == 'login' ) {
bsp_login_settings();
}

//****  breadcrumb settings
if ($active_tab == 'breadcrumb' ) {
bsp_breadcrumb_settings();
}

//****  shortcode page
if ($active_tab == 'shortcodesd' ) {
bsp_shortcodes_display();
}

//****  widgets page
if ($active_tab == 'widgets' ) {
bsp_widgets();
}

//****  extras page
if ($active_tab == 'extras' ) {
bsp_extras();
}

//****  help page
if ($active_tab == 'help' ) {
bsp_help();
}

//end of function bsp_settings_page()
}

// register the plugin settings
function bsp_register_settings() {

	register_setting( 'bsp_style_settings_f', 'bsp_style_settings_f' );
	register_setting( 'bsp_style_settings_ti', 'bsp_style_settings_ti' );
	register_setting( 'bsp_style_settings_t', 'bsp_style_settings_t' );
	register_setting( 'bsp_style_settings_form', 'bsp_style_settings_form' );
	register_setting( 'bsp_forum_display', 'bsp_forum_display' );
	register_setting( 'bsp_login', 'bsp_login' );
	register_setting( 'bsp_breadcrumb', 'bsp_breadcrumb' );
	
	}
//call register settings function
add_action( 'admin_init', 'bsp_register_settings' );

function bsp_settings_menu() {

	// add settings page
	add_submenu_page('options-general.php', __('bbp Style Pack', 'bbp-style-pack'), __('bbp Style Pack', 'bbp-style-pack'), 'manage_options', 'bbp-style-pack', 'bsp_settings_page');
}
add_action('admin_menu', 'bsp_settings_menu');



