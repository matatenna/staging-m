<?php
/**
* @copyright	Copyright (C) 2012 - JoomSpirit. All rights reserved.
*/

defined('_JEXEC') or die('Restricted access');

$path = $this->baseurl.'/templates/'.$this->template;
$bootstrap = $this->params->get('bootstrap');
$bootstrap_js = $this->params->get('bootstrap_js');
$jquery = $this->params->get('jquery');
$responsive = $this->params->get('responsive');
$column_responsive = $this->params->get('column_responsive');
$website_title_color = $this->params->get('website_title_color');
$website_title_black = $this->params->get('website_title_black');
$color_title_color = $this->params->get('color_title_color');
$slogan = $this->params->get('slogan');
$drop_down_menu = $this->params->get('drop_down_menu');
$width = $this->params->get('width');
$width_right = $this->params->get('width_right');
$width_left = $this->params->get('width_left');
$user1_width = $this->params->get('user1_width');
$user3_width = $this->params->get('user3_width');
$user4_width = $this->params->get('user4_width');
$user6_width = $this->params->get('user6_width');
$min_height_content = $this->params->get('min_height_content');
$width_item = $this->params->get('width_item');
$color_item1 = $this->params->get('color_item1');
$color_item2 = $this->params->get('color_item2');
$color_item3 = $this->params->get('color_item3');
$color_item4 = $this->params->get('color_item4');
$color_item5 = $this->params->get('color_item5');
$color_item6 = $this->params->get('color_item6');
$color_item7 = $this->params->get('color_item7');
$color_item8 = $this->params->get('color_item8');
$color_item9 = $this->params->get('color_item9');
$color_item10 = $this->params->get('color_item10');
$colorh2 = $this->params->get('colorh2');
$color_link = $this->params->get('color_link');
$font = $this->params->get('font');
$font_title = $this->params->get('font_title');
$font_content = $this->params->get('font_content');
$text_social_icons = $this->params->get('text_social_icons');
$google1 = $this->params->get('google1');
$google_code = $this->params->get('google_code');

$app = JFactory::getApplication();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
$js='<div class="js-copyright" ><a class="jslink" target="_blank" href="http://www.template-joomspirit.com" >template joomla by JoomSpirit</a></div>';
} else {$js='' ;}

if ($this->params->get('fontSize') == '') 
{ $fontSize ='0.75em'; } 
else { $fontSize = $this->params->get('fontSize'); }

JHtml::_('behavior.framework', true);

$filepath = JURI::root(true).'/templates/'.$this->template;
$doc = JFactory::getDocument();

$doc->addStyleSheet(JURI::root(true).'/templates/system/css/general.css' , 'text/css', 'all');

if ($bootstrap == 'yes') {
	$doc->addStyleSheet($filepath.'/css/bootstrap.css', 'text/css','screen');
	$doc->addStyleSheet($filepath.'/css/overwrite-bootstrap.css', 'text/css','screen');
	}
	
$doc->addStyleSheet($filepath.'/css/main.css' , 'text/css', 'all');
$doc->addStyleSheet($filepath.'/css/nav.css' , 'text/css', 'all');
$doc->addStyleSheet($filepath.'/css/template.css' , 'text/css', 'all');
$doc->addStyleSheet($filepath.'/css/print.css' , 'text/css', 'print');

$doc->addStyleSheet($filepath.'/css/dynamic_css.php?font=' .$font .
	'&amp;font_title=' . $font_title .
	'&amp;font_content=' . $font_content .
	'&amp;width=' . $width .
	'&amp;width_left=' . $width_left .
	'&amp;width_right=' . $width_right .
	'&amp;width_item=' . $width_item .
	'&amp;color_item1=' . $color_item1 .
	'&amp;color_item2=' . $color_item2 .
	'&amp;color_item3=' . $color_item3 .
	'&amp;color_item4=' . $color_item4 .
	'&amp;color_item5=' . $color_item5 .
	'&amp;color_item6=' . $color_item6 .
	'&amp;color_item7=' . $color_item7 .
	'&amp;color_item8=' . $color_item8 .
	'&amp;color_item9=' . $color_item9 .
	'&amp;color_item10=' . $color_item10 .
	'&amp;colorh2='. $colorh2 .
	'&amp;color_link=' . $color_link .
	'&amp;color_title_color=' . $color_title_color );

if ($responsive == 'yes') {
    	$doc->addStyleSheet($filepath.'/css/media_queries.css', 'text/css','screen');
	} else {
   		$doc->addStyleSheet($filepath.'/css/media_queries_no_responsive.css', 'text/css','screen');
	}

// load all non standard fonts from Google
$defaultFonts = array('Arial', 'Verdana', 'Trebuchet', 'Georgia', 'Times', 'Tahoma');
$allFonts = array($font_title, $font_content, $font);
$googleFonts = array_diff($allFonts, $defaultFonts);
foreach ($googleFonts as $loadFont) {
    
    $doc->addStyleSheet($filepath.'/css/font-'. $loadFont .'.css');
}

$doc->addStyleSheet($filepath.'/css/custom.css' , 'text/css', 'all');
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>

<jdoc:include type="head" />

<?php if ($responsive == 'yes') : ?>
<meta name="viewport" content="initial-scale=1" />
<?php endif; ?>

<?php if ($jquery == 'yes') : ?>
	<script type="text/javascript">
		if (typeof jQuery === 'undefined') {
			document.write(unescape("%3Cscript src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/lib/js/jquery-181.js' type='text/javascript'%3E%3C/script%3E"));
		}
	</script>
	<script type="text/javascript">
		jQuery.noConflict();
	</script>
<?php endif; ?>

<!--[if lte IE 9]>
<style type="text/css">
	.gradient {
    filter: none;
    }
</style>
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo $filepath ?>/css/ie8.css" type="text/css" />
<script type="text/javascript" src="<?php echo $filepath ?>/lib/js/html5.js"></script>
<script type="text/javascript" src="<?php echo $filepath ?>/lib/js/css3-mediaqueries.js"></script>
<?php if ($responsive == 'yes') : ?>
<link rel="stylesheet" type="text/css" href="<?php echo $filepath ?>/css/ie8_responsive.css" media="screen" />
<?php endif; ?>
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo $filepath ?>/css/ie7.css" type="text/css" />
<?php if ($responsive == 'yes') : ?>
<link rel="stylesheet" type="text/css" href="<?php echo $filepath ?>/css/ie7_responsive.css" media="screen" />
<?php endif; ?>
<![endif]-->



<?php if ($bootstrap_js == 'yes') : ?>
<script src="<?php echo $filepath ?>/lib/js/bootstrap.min.js"></script>
<?php endif; ?>

</head>

<body <?php echo ('style="font-size:'.$fontSize.';"');?> class="theme-<?php echo $color_theme ; ?>">

	<div class="wrapper-site zindex1">


		<header class="top-header zindex1">
	
			<?php if($this->countModules('translate')) : ?>
			<div id="translate">
				<jdoc:include type="modules" name="translate" style="joomspirit" />
			</div>	
			<?php endif; ?>				

			<?php if($this->countModules('top_menu')) : ?>
			<nav class="top_menu" role="navigation">
				<jdoc:include type="modules" name="top_menu" style="joomspirit" />
			</nav>	
			<?php endif; ?>

		</header>					<!-- 			END OF HEADER 				-->		
	
		<div class="logo-header zindex1 clearfix">
	
			<div class="logo clearfix" >
			<?php if($this->countModules('logo')) : ?>
				<jdoc:include type="modules" name="logo" style="joomspirit" />
			<?php else : ?>
				<a href="index.php" >
				<span class="website-title"><?php echo $website_title_black ; ?></span>
				<span class="website-title-color"><?php echo $website_title_color ; ?></span>
				</a>
				<?php if ( $slogan != "" ) : ?>
					<span class="slogan"><?php echo $slogan ; ?></span>
				<?php endif; ?>
			<?php endif; ?>
			</div>			

		</div>				<!-- 			END OF LOGO-HEADER 			-->				

	
		<?php if($this->countModules('menu')) : ?>
		<nav id="js_navigation" class="drop-down zindex3 clearfix" role="navigation" >
		
			<span class="title_menu">
				<a href="#js_navigation"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/icon-menu.png" alt="" class="icon-menu" />menu</a>
			</span>
						
			<jdoc:include type="modules" name="menu" style="joomspirit" />
		</nav>
		<?php endif; ?>
	

		<div id="website-middle" class="zindex1" >
		
			<?php if($this->countModules('top')) : ?>
			<div class="top-module-position" >
				<jdoc:include type="modules" name="top" style="joomspirit" />
			</div>
			<?php endif; ?>			
			
			
			<div class="middle-site">
						
				<?php if($this->countModules('left')) : ?>
				<aside class="left_column <?php if ( $column_responsive == 'yes' && $responsive == 'yes' ) : ?>visible-desktop<?php endif; ?>" >
					<div>
						<div>
							<jdoc:include type="modules" name="left" style="joomspirit" />
							
						</div>	
					</div>
				</aside>
				<?php endif; ?>
				
				<?php if($this->countModules('right')) : ?>
				<aside class="right-module-position <?php if ( $column_responsive == 'yes' && $responsive == 'yes' ) : ?>visible-desktop<?php endif; ?>" >
					<div>
						<div>
							<jdoc:include type="modules" name="right" style="joomspirit" />
						</div>	
					</div>
				</aside>
				<?php endif; ?>				
		
				<!--  MAIN COLUMN -->
				<div class="main_content clearfix <?php if($this->countModules('left')) : ?>with-left-column<?php endif ; ?> <?php if($this->countModules('right')) : ?>with-right-column<?php endif ; ?>">					
						
					<!--  USER 1, 2, 3 -->
					<?php if($this->countModules('user1') || $this->countModules('user2') || $this->countModules('user3')) : ?>
					<aside class="users_top clearfix">
																
						<?php if($this->countModules('user1')) : ?>
						<div class="user1" <?php echo ('style="width:'.$user1_width.'%;"');?>>
							<jdoc:include type="modules" name="user1" style="joomspirit" />
						</div>
						<?php endif; ?>
											
						<?php if($this->countModules('user3')) : ?>
						<div class="user3" <?php echo ('style="width:'.$user3_width.'%;"');?>>
							<jdoc:include type="modules" name="user3" style="joomspirit" />
						</div>
						<?php endif; ?>
					
						<?php if($this->countModules('user2')) : ?>
						<div class="user2">
							<jdoc:include type="modules" name="user2" style="joomspirit" />
						</div>
						<?php endif; ?>
											
					</aside>
					<?php endif; ?>  <!--	END OF USERS TOP	-->
				
					<?php if( ! $this->countModules('no-content')) : ?>
					<div class="main_component" style="min-height:<?php echo $min_height_content ; ?>px;" >
								
						<!--  MAIN COMPONENT -->
						<jdoc:include type="message" />
						<jdoc:include type="component" />
												
					</div>
					<?php endif; ?>	
					
					<!--  USER 4, 5, 6 -->
					<?php if($this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6')) : ?>
					<aside class="users_bottom clearfix">
																
						<?php if($this->countModules('user4')) : ?>
						<div class="user4" <?php echo ('style="width:'.$user4_width.'%;"');?>>
							<jdoc:include type="modules" name="user4" style="joomspirit" />
						</div>
						<?php endif; ?>
											
						<?php if($this->countModules('user6')) : ?>
						<div class="user6" <?php echo ('style="width:'.$user6_width.'%;"');?>>
							<jdoc:include type="modules" name="user6" style="joomspirit" />
						</div>
						<?php endif; ?>
					
						<?php if($this->countModules('user5')) : ?>
						<div class="user5">
							<jdoc:include type="modules" name="user5" style="joomspirit" />
						</div>
						<?php endif; ?>
											
					</aside>
					<?php endif; ?>  <!--	END OF USERS BOTTOM	-->
					
					<div class="clr"></div>
		
				</div>	  <!--	END OF MAIN COLUMN 	-->	
					
				<!-- important for left column -->
				<div class="clr"></div>
	
				<?php if($this->countModules('bottom')) : ?>
				<div class="bottom-module-position" >
					<jdoc:include type="modules" name="bottom" style="joomspirit" />
				</div>
				<?php endif; ?>
				
				<?php if( ($this->countModules('left')) && ($column_responsive == 'yes') && ($responsive == 'yes') ) : ?> 				<!-- Left and right column are duplicate to modify the order on mobiles devices 	-->
				<aside class="left_column hidden-desktop" >
					<div>
						<div>
							<jdoc:include type="modules" name="left" style="joomspirit" />			
						</div>	
					</div>
				</aside>
				<?php endif; ?>
				
				<?php if( ($this->countModules('right')) && ($column_responsive == 'yes') && ($responsive == 'yes') ) : ?>
				<aside class="right-module-position hidden-desktop" >
					<div>
						<div>
							<jdoc:include type="modules" name="right" style="joomspirit" />
						</div>	
					</div>
				</aside>
				<?php endif; ?>
				
				<?php if ($this->countModules( 'search' )) : ?>
				<div id="search">
					<jdoc:include type="modules" name="search" style="joomspirit" />
				</div>	
				<?php endif; ?>					

				<?php if($this->countModules('breadcrumb')) : ?>
				<nav class="breadcrumb" role="navigation">
					<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
				</nav>	
				<?php endif; ?>
					
			
			</div>		<!--			END OF MIDDLE SITE			-->
		</div>					<!--			END OF WEBSITE MIDDLE 		-->


		<footer class="website-footer zindex1 clearfix">	
				
			<!--	bottom nav	-->
			<?php if ($this->countModules( 'bottom_menu' )) : ?>
			<nav class="bottom_menu" role="navigation">
				<jdoc:include type="modules" name="bottom_menu" style="joomspirit" />
			</nav>
			<?php endif; ?>

			<?php if($this->countModules('address')) : ?>
			<div class="address">
				<jdoc:include type="modules" name="address" style="joomspirit" />
			</div>
			<?php endif; ?>
			
						<!--	SOCIAL LINKS	-->
			<?php if( ($google1 == 'yes') || ($this->params->get('twitter') != '') || ($this->params->get('blogger') != '') || ($this->params->get('delicious') != '') || ($this->params->get('flickr') != '') || ($this->params->get('facebook') != '') || ($this->params->get('digg') != '') || ($this->params->get('rss') != '') || ($this->params->get('linkedin') != '') || ($this->params->get('myspace') != '') || ($this->params->get('youtube') != '') || ($this->params->get('vimeo') != '') || ($this->params->get('picasa') != '') || ($this->params->get('stumbleupon') != '') || ($this->params->get('technorati') != '') || ($this->params->get('tumblr') != '') || ($this->params->get('yahoo') != '') ) : ?>
			<div class="social-links <?php if (! $this->countModules( 'bottom_menu' )) : ?>without-bottom-menu<?php endif ; ?>" >
				<ul>
					
					<?php if ($text_social_icons != '') : ?>
					<li class="text_social_icons"><span><?php echo $text_social_icons ; ?></span></li>
					<?php endif; ?>
					
					<?php if ($google1 == 'yes') : ?>
					<li class="google">
					<div class="g-plusone" data-size="small" data-count="false" ></div>
					</li>
					<?php endif; ?>
					
					<?php if ($this->params->get('twitter') != '') : ?>
					<li><a target="_blank" id="twitter" title="Twitter" href="<?php echo $this->params->get('twitter') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/twitter-bird3.png" alt="" /></a></li>
					<?php endif; ?>		
					<?php if ($this->params->get('blogger') != '') : ?>
					<li><a target="_blank" id="blogger" title="Blogger" href="<?php echo $this->params->get('blogger') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/blogger.png" alt="" /></a></li>
					<?php endif; ?>
			
					<?php if ($this->params->get('delicious') != '') : ?>
					<li><a target="_blank" id="delicious" title="Delicious" href="<?php echo $this->params->get('delicious') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/delicious.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('facebook') != '') : ?>
					<li><a target="_blank" id="facebook" title="Facebook" href="<?php echo $this->params->get('facebook') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/facebook-logo.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('rss') != '') : ?>
					<li><a target="_blank" id="rss" title="RSS" href="<?php echo $this->params->get('rss') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/rss-badge.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('linkedin') != '') : ?>
					<li><a target="_blank" id="linkedin" title="Linkedin" href="<?php echo $this->params->get('linkedin') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/linkedin-logo.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('myspace') != '') : ?>
					<li><a target="_blank" id="myspace" title="Myspace" href="<?php echo $this->params->get('myspace') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/myspace-logo.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('yahoo') != '') : ?>
					<li><a target="_blank" id="yahoo" title="Yahoo" href="<?php echo $this->params->get('yahoo') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/yahoo.png" alt="" /></a></li>
					<?php endif; ?>
			
					<?php if ($this->params->get('flickr') != '') : ?>
					<li><a target="_blank" id="flickr" title="Flickr" href="<?php echo $this->params->get('flickr') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/flickr.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('youtube') != '') : ?>
					<li><a target="_blank" id="youtube" title="Youtube" href="<?php echo $this->params->get('youtube') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/you-tube1.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('vimeo') != '') : ?>
					<li><a target="_blank" id="vimeo" title="Vimeo" href="<?php echo $this->params->get('vimeo') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/vimeo.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('digg') != '') : ?>
					<li><a target="_blank" id="digg" title="Digg" href="<?php echo $this->params->get('digg') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/digg.png" alt="" /></a></li>
					<?php endif; ?>
					<?php if ($this->params->get('picasa') != '') : ?>
					<li><a target="_blank" id="picasa" title="Picasa" href="<?php echo $this->params->get('picasa') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/picasa.png" alt="" /></a></li>
					<?php endif; ?>	
					<?php if ($this->params->get('stumbleupon') != '') : ?>
					<li><a target="_blank" id="stumbleupon" title="Stumbleupon" href="<?php echo $this->params->get('stumbleupon') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/stumbleupon.png" alt="" /></a></li>
					<?php endif; ?>	
					<?php if ($this->params->get('technorati') != '') : ?>
					<li><a target="_blank" id="technorati" title="Technorati" href="<?php echo $this->params->get('technorati') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/technorati-logo.png" alt="" /></a></li>
					<?php endif; ?>	
					<?php if ($this->params->get('tumblr') != '') : ?>
					<li><a target="_blank" id="tumblr" title="Tumblr" href="<?php echo $this->params->get('tumblr') ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/social-icons/tumblr.png" alt="" /></a></li>
					<?php endif; ?>
					
					
				</ul>
			</div> 			<!-- 	end of Website icons 		-->
			<?php endif; ?>
												
		</footer>					<!--			END OF FOOTER 		-->
	
	</div> 							<!--			END OF WRAPPER SITE 		-->
	
	<!-- 		JS code for position fixed of the header 		-->
	<?php if( $drop_down_menu == 'yes') : ?>
		<script type="text/javascript">
			
			window.onload = function()
			{
				var Position = document.getElementById("js_navigation").offsetTop ;
				
				// for IE9+ and others browsers
				if (document.addEventListener) {
	
					window.addEventListener("scroll", function()
					{
						if(document.documentElement.scrollTop > Position || document.body.scrollTop > Position)
						{
							document.getElementById("js_navigation").className = 'drop-down zindex3 barre-fixed';
							document.getElementById("website-middle").style.marginTop = "60px";
						}
						else
						{
							document.getElementById("js_navigation").className = 'drop-down zindex3';
							document.getElementById("website-middle").style.marginTop = "0px";
						}
					}, false);
				}
				
				// for IE8-7
				else {
	
					window.attachEvent("onscroll", function()
					{
						if(document.documentElement.scrollTop > Position || document.body.scrollTop > Position)
						{
							document.getElementById("js_navigation").className = 'drop-down zindex3 barre-fixed';
							document.getElementById("website-middle").style.marginTop = "60px";
						}
						else
						{
							document.getElementById("js_navigation").className = 'drop-down zindex3';
							document.getElementById("website-middle").style.marginTop = "0px";
						}
					});
				
				}	
			}		
		</script>
	<?php endif; ?>	
	
	<?php if ($google1 == 'yes') : ?>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<?php endif; ?>
	
	<?php echo $js; ?>
	
	<?php // Google Analytics Tracking Code
	if( $google_code ) {echo '<script type="text/javascript">'; echo $google_code; echo '</script>';}?>

</body>
</html>