
<?php 
$dataf= get_option('bsp_style_settings_f') ;
$datati= get_option('bsp_style_settings_ti') ;
$datat= get_option('bsp_style_settings_t') ;
$datafd=get_option('bsp_forum_display') ;
?>



/*----------------------  forum list backgrounds --------------------------*/
<?php 
$field=$dataf['Forum ContentBackground color - odd numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums ul.odd
 {
 background-color: <?php echo $field ;?> ;
 }
<?php } ?>

<?php 
$field=$dataf['Forum ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums ul.even
  {
 background-color: <?php echo $field ; ?>;
 }
<?php } ?>


 
 /*----------------------  headers backgrounds --------------------------*/

<?php 
$field=$dataf['Forum/Topic Headers/FootersBackground Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-footer 
 {
 background-color: <?php echo $field ;?> ;
 }
<?php } ?>
 
 
 
 
 /*----------------------  Font - Forum headings --------------------------*/
 
<?php 
$field=$dataf['Forum Headings FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums ul.forum-titles
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Forum Headings FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums ul.forum-titles
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$dataf['Forum Headings FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums ul.forum-titles
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Forum Headings FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums ul.forum-titles
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums ul.forum-titles
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums ul.forum-titles
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

 
 /*----------------------  Font - breadcrumb --------------------------*/
 

 
 
 
 <?php 
$field=$dataf['Breadcrumb FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-breadcrumb
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Breadcrumb FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-breadcrumb
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$dataf['Breadcrumb FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-breadcrumb
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Breadcrumb FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-breadcrumb
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-breadcrumb
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-breadcrumb
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
  /*----------------------  Font - links --------------------------*/
 
<?php 
$field=$dataf['LinksLink Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:link
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['LinksVisited Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:visited
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 <?php 
$field=$dataf['LinksHover Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a:hover
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 


 /*----------------------  Font - Forum and category lists --------------------------*/
 
<?php 
$field=$dataf['Forum and Category List FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$dataf['Forum and Category List FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Forum and Category List FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-title
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
 
 
 
 /*----------------------  Font - Sub Forum lists --------------------------*/
 
<?php 
$field=$dataf['Sub Forum List FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forums-list li
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$dataf['Sub Forum List FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Sub Forum List FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forums-list li
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forums-list li
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
  /*----------------------  Font - forum description --------------------------*/
 

 
  
<?php 
$field=$dataf['Forum Description FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-content
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Forum Description FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-content
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$dataf['Forum Description FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-content
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Forum Description FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-content
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-content
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-content
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
  /*----------------------  Font - Freshness --------------------------*/
 
<?php 
$field=$dataf['Freshness FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-forum-freshness
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$dataf['Freshness FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-forum-freshness
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Freshness FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-forum-freshness
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-forum-freshness
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-forum-freshness
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*----------------------  Font - Freshness Author--------------------------*/
 
<?php 
$field=$dataf['Freshness Author FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$dataf['Freshness FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Freshness FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-freshness-author
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-topic-freshness-author
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 
 
 
  /*----------------------  Forum boarder --------------------------*/
 
<?php 
$field1=$dataf['Forum BorderLine width'] ;
$field2=$dataf['Forum BorderLine style'] ;
$field3=$dataf['Forum BorderColor'] ;

if (!empty ($field1) || !empty ($field2) ||!empty ($field3)) {
$field=$field1.' '.$field2.' '.$field3
?>

#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-topics,
#bbpress-forums .bbp-reply-header,
#bbpress-forums div.odd,
#bbpress-forums div.even


  {
Border:  <?php echo $field ; ?> ;
 }
 
#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-body ul.forum,
#bbpress-forums li.bbp-body ul.topic,
#bbpress-forums li.bbp-footer,
#bbpress-forums ul.forum

{
 
 Border-top:  <?php echo $field ; ?> ;
 
 }
 
 
#bbpress-forums li.bbp-footer


{
 
 Border-bottom:  <?php echo $field ; ?> ;
 
 }
 
 
 
 
<?php } ?>



 /*----------------------  Font - topic count --------------------------*/
 
<?php 
$field=$dataf['Topic Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Topic Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$dataf['Topic Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Topic Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-forum-topic-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-forum-topic-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>



 /*----------------------  Font - Post counts --------------------------*/
 
<?php 
$field=$dataf['Post Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Post Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$dataf['Post Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$dataf['Post Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-forum-reply-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-forum-reply-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

 
/*********_________________TOPIC INDEX___________________________________________*/ 

/*----------------------  Font - pagination --------------------------*/
 
<?php 
$field=$datati['Pagination FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-pagination
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Pagination FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-pagination
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datati['Pagination FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Pagination FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-pagination
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums .bbp-pagination
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>


/*----------------------  Font - voice count --------------------------*/
 
<?php 
$field=$datati['Voice Count FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums li.bbp-topic-voice-count
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Voice Count FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-topic-voice-count
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datati['Voice Count FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums li.bbp-topic-voice-count
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Voice Count FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums li.bbp-topic-voice-count
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums li.bbp-topic-voice-count
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums li.bbp-topic-voice-count
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

 /*----------------------  topic title Font - links --------------------------*/
 
<?php 
$field=$datati['Topic Title LinksLink Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:link
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Topic Title LinksVisited Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:visited
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datati['Topic Title LinksHover Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-topic-permalink:hover
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 

/*----------------------  Font - Topic Title --------------------------*/
 
<?php 
$field=$datati['Topic Title FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-title
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$datati['Topic Title FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Topic Title FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-title
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums .bbp-topic-title
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 /*----------------------  Font - template notice --------------------------*/
 
<?php 
$field=$datati['Template Notice FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-template-notice p
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Template Notice FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datati['Template Notice FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-Family::  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Template Notice FontStyle'] ;

if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-template-notice
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else { ?>
 #bbpress-forums .bbp-template-notice
 
 {
Font-weight:  normal ; 
 }
 
 
 <?php
}
 
}

?>

/*----------------------  Font - template background --------------------------*/
 
<?php 
$field=$datati['Template NoticeBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
background-color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 



/*----------------------  Font - template border --------------------------*/
 
<?php 
$field=$datati['Template Notice BorderLine width'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
border-width:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datati['Template Notice BorderLine Style '] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
border-style:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datati['Template Notice BorderLine Color'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-template-notice
 
 {
border-color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 


/*********_________________TOPIC/REPLY___________________________________________*/ 


 
 /*----------------------topic/reply backgrounds   --------------------------*/

<?php 
$field=$datat['Topic/Reply ContentBackground color - odd numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.odd
 {
 background-color: <?php echo $field ; ?> ;
 }
<?php } ?>

<?php 
$field=$datat['Topic/Reply ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.even
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
  /*----------------------  Topic/reply header background --------------------------*/
 
<?php 
$field=$datat['Topic/Reply HeaderBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums div.bbp-reply-header,
#bbpress-forums div.bbp-topic-header

  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 
 
 
 /*----------------------  Trash/Spam backgrounds --------------------------*/
 
<?php 
$field=$datat['Trash/Spam ContentBackground color - odd numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-trash.odd,
#bbpress-forums .status-spam.odd 
 {
 background-color: <?php echo $field ; ?> ;
 }
<?php } ?>

<?php 
$field=$datat['Trash/Spam ContentBackground color - even numbers'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-trash.even,
#bbpress-forums .status-spam.even
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 /*----------------------  Closed Topic backgrounds --------------------------*/
 
<?php 
$field=$datat['Closed Topic ContentBackground color'] ;
if (!empty ($field)) {
?>
#bbpress-forums .status-closed,
#bbpress-forums .status-closed a
  {
background-color: <?php echo $field ; ?> ;
 }
 <?php } ?>
 
  /*----------------------  Font - topic/reply date --------------------------*/
 

 
 
 
 <?php 
$field=$datat['Topic/Reply Date FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-reply-post-date

 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Topic/Reply Date FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datat['Topic/Reply Date FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Topic/Reply Date FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-reply-post-date
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
 #bbpress-forums .bbp-reply-post-date
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>

 
 
 /*----------------------  Font - topic/reply text --------------------------*/
 

 
 <?php 
$field=$datat['Topic/Reply Text FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums .bbp-topic-content p, 
#bbpress-forums .bbp-reply-content p
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Topic/Reply Text FontColor'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-content p, 
#bbpress-forums .bbp-reply-content p
 
 {
color:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
 <?php 
$field=$datat['Topic/Reply Text FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums .bbp-topic-content p, 
#bbpress-forums .bbp-reply-content p
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Topic/Reply Text FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums .bbp-topic-content p,
#bbpress-forums .bbp-reply-content p
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums .bbp-topic-content p,
#bbpress-forums .bbp-reply-content p
 
 {
Font-weight:  bold ; 
 }
 <?php }
else {?>
#bbpress-forums .bbp-topic-content p,
#bbpress-forums .bbp-reply-content p
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 /*----------------------  Font - Author name --------------------------*/
 
<?php 
$field=$datat['Author Name FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums a.bbp-author-name
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$datat['Author Name FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Author Name FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums a.bbp-author-name
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums a.bbp-author-name
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
  /*----------------------  Font - reply permalink --------------------------*/
 
<?php 
$field=$datat['Reply Link FontSize'] ;
if (!empty ($field)) {
if (is_numeric($field)) $field=$field.'px' ;
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
font-size:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 

 
 <?php 
$field=$datat['Reply Link FontFont'] ;
if (!empty ($field)) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-Family:  <?php echo $field ; ?> ;
 }
 <?php } ?>
 
<?php 
$field=$datat['Reply Link FontStyle'] ;
if (!empty ($field)) {
if (strpos($field,'Italic') !== false) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-Style:  italic ; 
 }
 <?php } 

if (strpos($field,'Bold') !== false) {
?>
#bbpress-forums a.bbp-reply-permalink
 
 {
Font-weight:  bold ; 
 }
 <?php }
 else {?>
 #bbpress-forums a.bbp-reply-permalink
 
 {
Font-weight:  normal ; 
 }
 <?php
 }
 }
 ?>
 
 
 /*********_________________FORUM DISPLAY___________________________________________*/ 
 
 
 /*----------------------  Move breadcrumb --------------------------*/
 <?php 
$field=$datafd['move_subscribe'] ;
if (!empty ($field)) {
?>
.subscription-toggle  {	
	float:right ;
 }
 <?php } ?>
 
 
  /*----------------------  forum description styling --------------------------*/
 
#bbpress-forums div.bsp-forum-content {
clear:both;
margin-left: 0px ;
padding: 0 0 0 0 ;
	}
	
 /*----------------------  Rounded corners --------------------------*/
 
 
<?php 
$field=$datafd['rounded_corners'] ;
if (!empty ($field)) {
?>	
	.bbp-forums , .bbp-topics  , .bbp-replies  {
	
border-top: 1px solid #EEEEEE ;
border-top-left-radius: 10px ;
border-top-right-radius: 10px ;
border-bottom: 1px solid #EEEEEE ;
border-bottom-left-radius: 10px ;
border-bottom-right-radius: 10px ;
	}
	
	
	
	
<?php
}	

	
	

?>

 
 
