<?php

//forum style settings page

function bsp_style_settings_f () {
	global $bsp_style_settings_f ;
	?>
	 <Form method="post" action="options.php">
	<?php wp_nonce_field( 'style-settings_f', 'style-settings-nonce' ) ?>
	<?php settings_fields( 'bsp_style_settings_f' );
	//create a style.css on entry and on saving
	generate_style_css() ;
	?>
	<table>
	<tr>
	<td>
	<p> This section allows you to amend styles.  </p>
	<p> You only need to enter those styles and elements within a style that you wish to alter</p>
	</td>
	<td>	
	<?php
	//show style image
	 echo '<img src="' . plugins_url( 'images/forums-list.JPG',dirname(__FILE__)  ) . '" > '; ?>
	</td>
	</tr>
	</table>

	
	
	<table class="form-table">
	
	
	
	<!--Forum Content background ---------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Forum Content' ;
			$area1='Background color - odd numbers' ;
			$area2='Background color - even numbers' ;
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			?>
			<th><?php echo '1. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default #fbfbfb Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default #fff Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
	
	<!--Forum/Topic/Reply headers/footers background ------------------------------------------------------------------->
			<tr valign='top'>
			<?php 
			$name = 'Forum/Topic Headers/Footers' ;
			$area1='Background Color' ;
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			?>
			<th><?php echo '2. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default #f4f4f4 Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
	
	<!--Font - Forum headings  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Forum Headings Font' ;
			$area1='Size' ;
			$area2='Color' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '3. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
	<!--Font - breadcrumb font  ------------------------------------------------------------------->
			
			
			<tr>
			<?php 
			$name = 'Breadcrumb Font' ;
			$area1='Size' ;
			$area2='Color' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '4. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
					
	<!--Font - links   ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Links' ;
			$area1='Link Color' ;
			$area2='Visited Color' ;
			$area3='Hover Color' ;
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			?>
			<th><?php echo '5. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			
			
	<!--Font - forum and category lists   ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Forum and Category List Font' ;
			$area1='Size' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '6. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
			
	<!--Font - sub forums   ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Sub Forum List Font' ;
			$area1='Size' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '7. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
	<!--Font - forum description  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Forum Description Font' ;
			$area1='Size' ;
			$area2='Color' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '8. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
	<!--Font - freshness  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Freshness Font' ;
			$area1='Size' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '9. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
	<!--Font - freshness author  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Freshness Author Font' ;
			$area1='Size' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '10. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
	<!--Forum Border  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Forum Border' ;
			$area1='Line width' ;
			$area3='Line style' ;
			$area4='Color';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '11. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 1px  - Set to 0px to hide border', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default solid - solid, dashed, dotted are common values - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item4.'" class="large-text" name="'.$item4.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area4] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
	<!--Font - topic count  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Topic Count Font' ;
			$area1='Size' ;
			$area2='Color' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '12. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
	<!--Font - Post Count  ------------------------------------------------------------------->
			<tr>
			<?php 
			$name = 'Post Count Font' ;
			$area1='Size' ;
			$area2='Color' ;
			$area3='Font' ;
			$area4='Style';
			$item1="bsp_style_settings_f[".$name.$area1."]" ;
			$item2="bsp_style_settings_f[".$name.$area2."]" ;
			$item3="bsp_style_settings_f[".$name.$area3."]" ;
			$item4="bsp_style_settings_f[".$name.$area4."]" ;
			?>
			<th><?php echo '13. '.$name ?></th>
			<td> <?php echo $area1 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item1.'" class="large-text" name="'.$item1.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area1] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Default 12px - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area2 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item2.'" class="large-text" name="'.$item2.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area2] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter color by name or hex value - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area3 ; ?> </td>
			<td>
			<?php echo '<input id="'.$item3.'" class="large-text" name="'.$item3.'" type="text" value="'.esc_html( $bsp_style_settings_f[$name.$area3] ).'"<br>' ; ?> 
			<label class="description"><?php _e( 'Enter Font eg Arial - see help for further info', 'bbp-style-pack' ); ?></label><br/>
			</td>
			</tr>
			<tr>
			<td></td>
			<td> <?php echo $area4 ; ?> </td>
			<td>
			<select name="<?php echo $item4 ; ?>">
			<?php echo '<option value="'.esc_html( $bsp_style_settings_f[$name.$area4]).'">'.esc_html( $bsp_style_settings_f[$name.$area4] ) ; ?> 
			<option value="Normal">Normal</option>
			<option value="Italic">Italic</option>
			<option value="Bold">Bold</option>
			<option value="Bold and Italic">Bold and Italic</option>
			</select>
			</td>
			</tr>
			
	
	
			
			
			
			
					
					</table>
					<!-- save the options -->
				<p class="submit">
					<input type="submit" class="button-primary" value="<?php _e( 'Save changes', 'bsp_style_settings' ); ?>" />
				</p>
				</form>
		</div><!--end sf-wrap-->
	</div><!--end wrap-->
	
	 
		<?php
		}
		

	
