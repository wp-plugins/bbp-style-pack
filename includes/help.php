<?php

function bsp_help() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Help' , 'bsp' ) ; ?>
						</h3>


						
 						
<h4><span style="color:blue"><?php _e('Colors', 'bsp' ) ; ?></span></h4>

<p>Colors are entered as a color eg 'red' or a hex number for that color eg '#ff0000'  </p>

<p>see <a href = "http://www.w3schools.com/html/html_colornames.asp" target="_blank"> www.w3schools.com/html/html_colornames.asp</a> for further info </p>

<p/>


<h4><span style="color:blue"><?php _e('Font', 'bsp' ) ; ?></span></h4>

<p>Fonts can be single  eg 'Arial' or or a font family such as 'arial, Times, serif' </p>

<p> Where a font has more than one word such as Times New Roman, the it must be entered with double quotes eg "Times New Roman" </p>

<p>see <a href = "http://www.w3schools.com/css/css_font.asp" target="_blank"> www.w3schools.com/css/css_font.asp</a> for further info </p>

<p/>


<h4><span style="color:blue"><?php _e('Font Size', 'bsp' ) ; ?></span></h4>

<p>Fonts can be specifed as absolute-size eg 'medium', relative size eg 'larger', length eg '12px' or '0.8em' or as a percentage eg 80%</p>

<p>A good explanation  is contained in <a href = "https://developer.mozilla.org/en-US/docs/Web/CSS/font-size" target="_blank"> https://developer.mozilla.org/en-US/docs/Web/CSS/font-size</a> </p>

<p> bbpress uses px eg '12px', but the choice is yours !

<p/>

<h4><span style="color:blue"><?php _e('Border style', 'bsp' ) ; ?></span></h4>

<p>Borders can be specifies as solid, dashed, dotted, groove, ridge, inset & outset</p>

<p>Common values are solid, dashed, dotted. </p>

<p>Values groove, ridge, inset & outset need a border wider than 1px (5px is a good start point) for the effect to work</p>

<p>A good explanation  is contained in <a href = "http://www.w3schools.com/css/css_border.asp" target="_blank"> www.w3schools.com/css/css_border.asp</a> </p>






 
 <?php
}
