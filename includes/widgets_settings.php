<?php

function bsp_widgets() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Widgets' , 'bsp' ) ; ?>
						</h3>


						
<p> Only 1 extra at the moment - others will be added </p>
<p/>						
<h4><span style="color:blue"><?php _e('Latest activity', 'bsp' ) ; ?></span></h4>

<p>This widget combines Recent Topics and Recent replies to give a single more clear latest activity widget </p>
<table>
<th style="text-align:center"> FROM </th>
	<th style="text-align:center"> TO </th>
<tr>
<td><?php echo '<img src="' . plugins_url( 'images/widgets1.JPG',dirname(__FILE__)  ) . '"  > '; ?></td>
<td><?php echo '<img src="' . plugins_url( 'images/widgets2.JPG',dirname(__FILE__)  ) . '" > '; ?></td>
</tr>
</table>
<p>The widget is in </p>

<p>Dashboard>appearance>widgets  as (bbp style pack) Latest Activity</p>

<p> and includes options for displaying author, date and forum </p>




 
 <?php
}
