<?php

function bsp_shortcodes_display() {
 ?>
			
						<table class="form-table">
					
					<tr valign="top">
						<th colspan="2">
						
						<h3>
						<?php _e ('Additional Shortcodes' , 'bsp' ) ; ?>
						</h3>


						
<p><tt>[bsp-display-topic-index show='5' forum ='10']</tt>  Displays the latest topics, optionally from a single forum - see below for detailed explanation </p>
<p><tt>[bsp-display-forum-index forum= '2932, 2921' breadcrumb='no' search='no']</tt>  Displays the selected forum indexes - see below for detailed explanation </p>
<p><tt>[bsp-display-newest-users show = '10']</tt>  Displays the newest users together with their joining date in a table - see below for detailed explanation </p>
<p></p> 						
<h4><span style="color:blue"><?php _e('Display latest Topics', 'bsp' ) ; ?></span></h4>

<p>To change the number of topics displayed and optionally display from a single forum, show stickies, or have just the bare minimum.</p>

<p><em>Note : the 'show' attribute is mandatory, the other attributes are optional</em></p>
<p>use the shortcode   [bsp-display-topic-index show='5']</p>
<p></p>
<p>where 5 is the number of posts you want to display</p>
<p></p>
<p><b>Optional extras !</b></p>
<p></p>
<p><i>Forum</i></p>
</strong></p>
<p>You can limit to a single forum  eg [bsp-display-topic-index show='5' forum ='10']</p>
<p></p>
<p>To find the ID of a forum go into dashboard&gt;forums&gt;all forums and hover over the 'edit' of the forum you want to use.</p>
<p> You will see at the bottom of the page  http://www.mysite.com/wp-admin/post.php?post=10&amp;action=edit</p>
<p></p>
<p>where post=10 is the ID number of the forum.</p>
<p></p>
<p><i>Just the header and posts</i></p>
<p></strong>If you don't want the search function and 'viewing topics 1-5'</strong></p>
<p></p>
<p>then use    [bsp-display-topic-index show='5' template ='short' ]</p>
<p></p>
<p><i>Stickies</strong></i></p>
<p>If you want to show stickies then [bsp-display-topic-index show='5' show_stickies='true']</p>
<p></p>
<p><b>You can use these in any combination</b></p>
<p>eg</p>
<p>[bsp-display-topic-index show='6' show_stickies='true']</p>
<p>[bsp-display-topic-index show='6' template = 'short' show_stickies='true']</p>
<p>[bsp-display-topic-index show='5' forum ='10' show_stickies='true' template = 'short']</p>

<h4><span style="color:blue"><?php _e('Display one or more forum indexes ', 'bsp' ) ; ?></span></h4>

<p>To display one or more indexes, or create an index display in any order </p>

<p><em>Note : the 'forum' attribute is mandatory, the other attributes are optional</em></p>
<p>use the shortcode   [bsp-display-forum-index forum= '2932' ]  
<p>or for a list use [bsp-display-forum-index forum= '2932, 2922, 2921']</p>
<p></p>
<p>where the numbers are the ID's of the forum(s) </p>
<p></p>
<p>To find the ID of a forum go into dashboard&gt;forums&gt;all forums and hover over the 'edit' of the forum you want to use.</p>
<p> You will see at the bottom of the page  http://www.mysite.com/wp-admin/post.php?post=10&amp;action=edit</p>
<p></p>
<p>where post=10 is the ID number of the forum.</p>
<p></p>
<p><i>Take out search</i></p>
<p></strong>If you don't want the search function </strong></p>
<p></p>
<p>then use    [bsp-display-forum-index forum= '2932, 2922, 2921' search='no']</p>
<p></p>
<p><i>Breadcrumb</strong></i></p>
<p>If you don't want to show the breadcrumb then [bsp-display-forum-index forum= '11326, 2922, 2921' breadcrumb='no']</p>
<p></p>
<p><b>You can use these in any combination</b></p>
<p>eg</p>
<p>[bsp-display-forum-index forum= '2932, 2922, 2921' search='no']</p>
<p>[bsp-display-forum-index forum= '2932' breadcrumb='no' search='no']</p>
<p>[bsp-display-forum-index forum= '2932, 2922, 2921' breadcrumb='no']</p>

<h4><span style="color:blue"><?php _e('Display Newest Users ', 'bsp' ) ; ?></span></h4>

<p>This shortcode displays the newest users together with their joining date in a table.
 </p>

<p>use the shortcode   [bsp-display-newest-users]  and it will display the latest 5 users. 
<p>If you wish to display a different number of users use the 'show' parameter eg</p>
<p></p>
<p>[display-newest-users show = '10']   will show the latest 10 users
 </p>

 
 <?php
}
