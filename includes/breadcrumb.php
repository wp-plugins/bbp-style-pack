<?php

//breadcrumb settings page

function bsp_breadcrumb_settings() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Breadcrumbs' , 'asc' ) ; ?>
						</h3>


						
<?php echo '<img src="' . plugins_url( 'images/breadcrumb.JPG',dirname(__FILE__)  ) . '"  > '; ?>
	
<p>Breadcrumbs are shown to allow users to track back and forth, clicking the links to jump to each area.</p>
<p/>
<p>If your theme provides breadcrumbs you may want to disable them, or you may simply not wish to show them.</p>
<p/>
<p>If you do show them, you may wish not to show all the links, or to change what the text says.</p>
<p/>
<p> The home breadcrumb link will take you to your theme's 'front page' as set in wordpress </p>
<p/>
<p> The root breadcrumb will take you to either : </p>
<p> a) The forum root as set in Dashboard>Settings>forums>Forum Root Slug>Forum Root
<p> or </p>
<p> b)to a page with a shortcode if you have set this up.  To do this create a page in wordpress and include the shortcode [bbp-forum-index] (or other bbpress shortcode). </p>
<p> Then either see what the permalink is for that page or set it to what you want (just under the title when editing), and put that exact end permalink into the forum root in </P>
<p> Dashboard>Settings>forums>Forum Root Slug>Forum Root


<p>The following settings let you control the breadcrumbs.
<?php 
global $bsp_breadcrumb ;
	?>
	 <Form method="post" action="options.php">
	<?php wp_nonce_field( 'breadcrumb', 'breadcrumb-nonce' ) ?>
	<?php settings_fields( 'bsp_breadcrumb' );
	?>	
	
	
	<table class="form-table">
	<tr valign="top">
	</tr>
	
<!--Don't show breadcrumbs---------------------------------------------------------------------->
	<tr>
	<td colspan="2">Disable All forum Breadcrumbs </td>
	<td colspan="2">
	<?php
			$item =  'bsp_breadcrumb[no_breadcrumb]' ;
			$item1 =  $bsp_breadcrumb['no_breadcrumb'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$item1, false ) . ' /> Click to disable breadcrumbs';
  			?>
	</td></tr>
	
<!--Breadcrumb Home ------------------------------------------------------------------->
				
			<tr>
			<?php 
			$name = 'Breadcrumb Home' ;
			$area1='Text' ;
			$item1="bsp_breadcrumb[".$name.$area1."]" ;
					
			?>
			<th><?php echo '1. '.$name ?></th>
			<td>Disable Home breadcrumb </td>
			<td><?php
			$item =  'bsp_breadcrumb[no_home_breadcrumb]' ;
			$itema =  $bsp_breadcrumb['no_home_breadcrumb'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$itema, false ) . ' /> Click to disable home breadcrumb';
  			?>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_breadcrumb[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'You can change what the home breadcrumb says eg "back to site", "Exit forums" "Back to home" etc', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			
<!--Breadcrumb root ------------------------------------------------------------------->
				
			<tr>
			<?php 
			$name = 'Breadcrumb Root' ;
			$area1='Text' ;
			$item1="bsp_breadcrumb[".$name.$area1."]" ;
					
			?>
			<th><?php echo '2. '.$name ?></th>
			<td>Disable Root breadcrumb </td>
			<td><?php
			$item =  'bsp_breadcrumb[no_root_breadcrumb]' ;
			$itema =  $bsp_breadcrumb['no_root_breadcrumb'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$itema, false ) . ' /> Click to disable root breadcrumb';
  			?>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_breadcrumb[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'You can change what the root breadcrumb says eg "The forums",  etc', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			
<!--current root ------------------------------------------------------------------->
				
			<tr>
			<?php 
			$name = 'Breadcrumb Current' ;
			$area1='Text' ;
			$item1="bsp_breadcrumb[".$name.$area1."]" ;
					
			?>
			<th><?php echo '3. '.$name ?></th>
			<td>Disable current breadcrumb </td>
			<td><?php
			$item =  'bsp_breadcrumb[no_current_breadcrumb]' ;
			$itema =  $bsp_breadcrumb['no_current_breadcrumb'] ;
			echo '<input name="'.$item.'" id="'.$item.'" type="checkbox" value="1" class="code" ' . checked( 1,$itema, false ) . ' /> Click to disable current breadcrumb';
  			?>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_breadcrumb[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'You can change what the current breadcrumb says eg "you are here", but this will apply to all "current" entries', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>			
			
			
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


