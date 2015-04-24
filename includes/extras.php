<?php

function bsp_extras() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Extras' , 'bsp' ) ; ?>
						</h3>


						
<p>
<?php _e('Only 1 extra at the moment - others will be added', 'bbp-style-pack'); ?>
</p>
<p/>						
<h4><span style="color:blue"><?php _e('Forum template', 'bbp-style-pack' ) ; ?></span></h4>

<p>
<?php _e('This template shows the forums as Hierarchical', 'bbp-style-pack'); ?>
</p>
<table>
<th style="text-align:center"> <?php _e('FROM', 'bbp-style-pack'); ?> </th>
	<th style="text-align:center"> <?php _e('TO', 'bbp-style-pack'); ?> </th>
<tr>
<td><?php echo '<img src="' . plugins_url( 'images/extras1.JPG',dirname(__FILE__)  ) . '"  > '; ?></td>
<td><?php echo '<img src="' . plugins_url( 'images/extras2.JPG',dirname(__FILE__)  ) . '" > '; ?></td>
</tr>
</table>
<p><?php _e('To use this template :', 'bbp-style-pack'); ?>
</p>

<p>
<?php _e("1. Create a directory on your theme called 'bbpress'", 'bbp-style-pack'); ?>
</p>
 
<p>
<?php _e('ie wp-content/themes/%your-theme-name%/bbpress', 'bbp-style-pack'); ?>
</p>

<p><i>
<?php _e('where %your-theme-name% is the name of your theme', 'bbp-style-pack'); ?>
</i></p>

<p>
<?php _e("so if your theme is called 'lion', then the directory will be :", 'bbp-style-pack'); ?>
</p>


<p>
<?php _e('wp-content/themes/lion/bbpress', 'bbp-style-pack'); ?>
</p>



<p>
<?php _e('2. Find wp-content/plugins/bbp-style-pack/extras/loop-forums.php and make a copy', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('3. Paste this copy into the directory called bbpress that you created in 1. above, so you end up with :', 'bbp-style-pack'); ?>
</p>
<p>
<?php _e('wp-content/themes/%your-theme-name%/bbpress/loop-forums.php', 'bbp-style-pack'); ?>
</p>

<p>
<?php _e('so for a theme called lion you will have :', 'bbp-style-pack'); ?>
</p>

<p>
<?php _e('wp-content/themes/lion/bbpress/loop-forums.php', 'bbp-style-pack'); ?>
</p>


<p>
<?php _e('4. Reload the site - just refreshing the browser will <b> not </b> do.  If in doubt, shutdown your browser and restart.', 'bbp-style-pack'); ?>
 </p>

<p/>
<p>
<?php _e('To stop using this just delete the file wp-content/%your-theme-name%/bbpress/loop-forums.php', 'bbp-style-pack'); ?>
</p>









 
 <?php
}
