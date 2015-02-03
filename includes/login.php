<?php

//login settings page

function bsp_login_settings() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Login options' , 'asc' ) ; ?>
						</h3>


						
					
<p>There are many ways to get users logged into forums.</p>
<p/>
<p>1. Remember bbPress just uses the wordpress login, so any plugin that does wordpress login will also do bbPress.There are lots out there go to https://wordpress.org/plugins/</p>
<p>2. Within bbPress you can use the sidebar login widget Dashboard>appearance>widgets and look for (bbpress) Login widget</p>
<p>3. Or use a page or post to display the widget using the shortcode  [bbp-login]</p>
<p>4. The following adds a simple login/logout to your menu and/or Register/Edit Profile</p>
<p> This can the give you the combination of 'login/Register' and 'logout/edit profile' as a menu display, which means users only see relevant items</p>
<p></p>
<?php 
global $bsp_login ;
	?>
	 <Form method="post" action="options.php">
	<?php wp_nonce_field( 'login', 'login-nonce' ) ?>
	<?php settings_fields( 'bsp_login' );
	?>	
	<table class="form-table">
	<th style="text-align:center"> Not Logged in</th>
	<th style="text-align:center"> Logged in </th>
	<tr>
	<td>
	<?php echo '<img src="' . plugins_url( 'images/logina.JPG',dirname(__FILE__)  ) . '"  > '; ?></td>
	<td>
	<?php echo '<img src="' . plugins_url( 'images/loginb.JPG',dirname(__FILE__)  ) . '"  > '; ?></td>
	</tr>
	</table>
	
	<table class="form-table">
	<tr valign="top">
	</tr>
	
<!--Click to add login/logout---------------------------------------------------------------------->
	<tr>
	<td colspan="2">Add login/logout to menu items</td>
	<td colspan="2">
	<?php
			$item =  'bsp_login[add_login]' ;
			$item1 =  $bsp_login['add_login'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$item1, false ) . ' /> Click to activate';
  			?>
	</td></tr>
<!--only show on bbpress pages ---------------------------------------------------------------------->
	<tr>
	<td colspan="2">You can opt to only show these menu items on forum pages</td>
	<td colspan="2">
	<?php
			$item =  'bsp_login[only_bbpress]' ;
			$item1 =  $bsp_login['only_bbpress'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$item1, false ) . ' /> Only show on forum pages';
  			?>
	</td></tr>

<!--login details ---------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Login/logout' ;
			$area1='Login page' ;
			$area2='Logout page' ;
			$item1="bsp_login[".$name.$area1."]" ;
			$item2="bsp_login[".$name.$area2."]" ;
			?>
			<th><?php echo $name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_login[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'You should create a wordpress page with a login shortcode such as [bbp-login] and put the full url in here e.g. http://www.mysite.com/loginpage. If left blank the default wordpress login page will be used.', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_login[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'This will be the url of the page you want users sent to on logout. For example this might be the home page or forums page http://www.mysite.com/home or http://www.mysite.com/forums', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			
<!--show register to non-logged on users ---------------------------------------------------------------------->			
			<tr>
	<td colspan="2">Show a menu 'Register' item to non-logged in users</td>
	<td colspan="2">
	<?php
			$item =  'bsp_login[register]' ;
			$item1 =  $bsp_login['register'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$item1, false ) . ' /> Click to activate';
  			?>
	</td></tr>

	
	
<!--register page ---------------------------------------------------------------------->
			<tr>
			<?php 
			$name ='Register Page' ;
			$area1='Register page' ;
			$area2='Menu Item Description' ;
			$item1="bsp_login[".$name.$area1."]" ;
			$item2="bsp_login[".$name.$area2."]" ;
			?>
			<th><?php echo $name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_login[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'You should create a wordpress page with a register shortcode such as [bbp-register] and put the full url in here e.g. http://www.mysite.com/loginpage. If left blank the default wordpress login page will be used.', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_login[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter the words you want on the menu item eg "Register", "Sign-up", "Join this group" etc.', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
				
			
			
			
<!--show edit profile to logged on users ---------------------------------------------------------------------->			
			<tr>
	<td colspan="2">Show a menu 'Edit profile' item to logged in users</td>
	<td colspan="2">
	<?php
			$item =  'bsp_login[edit_profile]' ;
			$item1 =  $bsp_login['edit_profile'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$item1, false ) . ' /> Click to activate';
  			?>
	</td></tr>
			
				</table>
<!-- save the options -->
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e( 'Save changes', 'bbp-style-pack' ); ?>" />
				</p>
				</form>
		</div><!--end sf-wrap-->
	</div><!--end wrap-->
	
	 
		

<?php
}


