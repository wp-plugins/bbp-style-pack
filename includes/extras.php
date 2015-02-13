<?php

function bsp_extras() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Extras' , 'bsp' ) ; ?>
						</h3>


						
<p> Only 1 extra at the moment - others will be added </p>
<p/>						
<h4><span style="color:blue"><?php _e('Forum template', 'bsp' ) ; ?></span></h4>

<p>This template shows the forums as Hierarchical </p>
<table>
<tr>
<td><?php echo '<img src="' . plugins_url( 'images/extras1.JPG',dirname(__FILE__)  ) . '"  > '; ?></td>
<td><?php echo '<img src="' . plugins_url( 'images/extras2.JPG',dirname(__FILE__)  ) . '" > '; ?></td>
</tr>
</table>
<p>To use this template : </p>

<p>1. Create a directory on your theme called 'bbpress'</p>
 
<p>ie wp-content/themes/%your-theme-name%/bbpress</p>

<p>where %your-theme-name% is the name of your theme</p>


<p>2. Find wp-content/plugins/bbp-style-pack/extras/loop-forums.php and make a copy</p>
<p> 3. Paste this copy into the directory called bbpress that you created in 1. above, so you end up with</p>
<p>wp-content/themes/%your-theme-name%/bbpress/loop-forums.php</p>
<p/>
<p>To stop using this just delete the file wp-content/%your-theme-name%/bbpress/loop-forums.php</p>









 
 <?php
}
