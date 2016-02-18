<?php
header("Content-type: text/css");
if (isset($_GET['width'])) 
{ $width = $_GET['width'];}
else { $width = '980'; }
if (isset($_GET['font'])) 
{ $font = $_GET['font'];}
else { $font = 'sans-serif'; }
if (isset($_GET['font_title'])) 
{ $font_title = $_GET['font_title'];}
else { $font_title = 'sans-serif'; }
if (isset($_GET['font_content'])) 
{ $font_content = $_GET['font_content'];}
else { $font_content = 'sans-serif'; }
if (isset($_GET['width_left'])) 
{ $width_left = $_GET['width_left'];}
else { $width_left = '200px'; }
if (isset($_GET['width_right'])) 
{ $width_right = $_GET['width_right'];}
else { $width_right = '200px'; }
if (isset($_GET['width_item'])) 
{ $width_item = $_GET['width_item'];}
else { $width_item = '170'; }
if (isset($_GET['color_item1'])) 
{ $color_item1 = $_GET['color_item1'];}
else { $color_item1 = 'ff6600'; }
if (isset($_GET['color_item2'])) 
{ $color_item2 = $_GET['color_item2'];}
else { $color_item2 = 'ff6600'; }
if (isset($_GET['color_item3'])) 
{ $color_item3 = $_GET['color_item3'];}
else { $color_item3 = 'ff6600'; }
if (isset($_GET['color_item4'])) 
{ $color_item4 = $_GET['color_item4'];}
else { $color_item4 = 'ffffff'; }
if (isset($_GET['color_item5'])) 
{ $color_item5 = $_GET['color_item5'];}
else { $color_item5 = 'ff6600'; }
if (isset($_GET['color_item6'])) 
{ $color_item6 = $_GET['color_item6'];}
else { $color_item6 = 'ff6600'; }
if (isset($_GET['color_item7'])) 
{ $color_item7 = $_GET['color_item7'];}
else { $color_item7 = 'ff6600'; }
if (isset($_GET['color_item8'])) 
{ $color_item8 = $_GET['color_item8'];}
else { $color_item8 = 'ff6600'; }
if (isset($_GET['color_item9'])) 
{ $color_item9 = $_GET['color_item9'];}
else { $color_item9 = 'ff6600'; }
if (isset($_GET['color_item10'])) 
{ $color_item10 = $_GET['color_item10'];}
else { $color_item10 = 'ff6600'; }
if (isset($_GET['colorh2'])) 
{ $colorh2 = $_GET['colorh2'];}
else { $colorh2 = '006d98'; }
if (isset($_GET['color_link'])) 
{ $color_link = $_GET['color_link'];}
else { $color_link = 'c35d1e'; }
if (isset($_GET['color_title_color'])) 
{ $color_title_color = $_GET['color_title_color'];}
else { $color_title_color = 'c35d1e'; }
?>


/** 	COLOR 			**/


.logo .website-title-color {
color:#<?php echo $color_title_color ; ?>;
}



/** 			MENUS 		**/

.top_menu li.active a, .top_menu li:hover a {
color: #<?php echo $color_link ; ?>;
}

.bottom_menu li.active a, .bottom_menu li:hover a {
color: #<?php echo $color_link ; ?>;
}

a, .readmore a, input[type="submit"], button, .breadcrumb a:hover,
.top_menu li.active a, .top_menu li:hover a, .bottom_menu li.active a, .bottom_menu li:hover a,
.horizontal_menu li.active a, .horizontal_menu li:hover a {
color: #<?php echo $color_link ; ?>;
}

.drop-down li li:hover > a, .drop-down li li.active > a, .drop-down li li.active > span {
color: #<?php echo $color_link ; ?>;
}

/**		TITLE 		**/

h2, h2 a {
color: #<?php echo $colorh2 ; ?>;
}


/** 		DROP DOWN MENU 			**/

.drop-down li {
width : <?php echo $width_item ; ?>px;
}

.drop-down li ul {
width : <?php echo $width_item ; ?>px;
}

.drop-down li ul ul {
left: <?php echo ( $width_item - 3 ); ?>px;
}


.drop-down > ul > li > a, .drop-down > ul > li > span.separator {
border-bottom : 2px solid #<?php echo $color_item1 ; ?>;
}

.drop-down > ul > li + li > a, .drop-down > ul > li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item2 ; ?>;
}

.drop-down > ul > li + li + li > a, .drop-down > ul > li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item3 ; ?>;
}

.drop-down > ul > li + li + li+ li > a, .drop-down > ul > li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item4 ; ?>;
}

.drop-down > ul > li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item5 ; ?>;
}

.drop-down > ul > li + li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item6 ; ?>;
}

.drop-down > ul > li + li + li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item7 ; ?>;
}

.drop-down > ul > li + li + li + li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item8 ; ?>;
}

.drop-down > ul > li + li + li + li + li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item9 ; ?>;
}

.drop-down > ul > li + li + li + li + li + li + li + li + li + li > a, .drop-down > ul > li + li + li + li + li + li + li + li + li + li > span.separator {
border-bottom : 2px solid #<?php echo $color_item10 ; ?>;
}




/**		FONT	**/

.logo span {
font-family: '<?php echo $font_title ; ?>', 'Open Sans';
}

h1, .componentheading, h2.contentheading, .blog-featured h2, h2 {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

.drop-down ul li a, .drop-down ul li span.separator {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

.left_column h3, .right-module-position h3, .top-module-position h3, .bottom-module-position h3, .user1 h3, .user2 h3, .user3 h3, 
.user4 h3, .user5 h3, .user6 h3, .user_image1 h3, .user_image2 h3, .user_image3 h3 {
font-family: '<?php echo $font ; ?>', 'Open Sans';
}

body {
font-family: '<?php echo $font_content ; ?>';
}


/**			Width 		**/

body {
min-width : <?php echo $width ; ?>px;
}

.wrapper-site, .drop-down {
width:<?php echo $width ; ?>px;
}

.left_column {
width:<?php echo $width_left ; ?>;
}

.right-module-position {
width:<?php echo $width_right ; ?>;
}