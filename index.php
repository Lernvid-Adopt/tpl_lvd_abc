<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<?php
	if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
	if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
	if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
?>
</head>
<body>
	<div id="wrapper">
			<a href=""><div id="masthead">
				<?php if($this->countModules('user4')) : ?>
					<div id="search">
							<div id="search_inner">
					             <jdoc:include type="modules" name="user4" style="xhtml" />
						</div>
					</div>
				<?php endif; ?>		
				<?php if (($this->params->get('showLogo')) !=0) : ?>
					<div id="logo"></div>	
				<?php endif; ?>	
				<?php if (($this->params->get('showFlashheader')) !=0) : ?>
					<div id="flash_header">
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
						width="400" height="200">
						<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/header.swf" /> 
						<param name="quality" value="high" />
						<param name="menu" value="false" />
						<param name="wmode" value="transparent" />
						<param name="allowScriptAccess" value="sameDomain" />
						<!--[if !IE]> <-->
						<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/header.swf"
						width="400" height="200" type="application/x-shockwave-flash">
						<param name="quality" value="high" />
						<param name="menu" value="false" />
						<param name="allowScriptAccess" value="sameDomain" />
						<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
						<param name="wmode" value="transparent" />
						FAIL (the browser should render some flash content, not this).
						</object>
						<!--> <![endif]-->
						</object>
					</div>
					<?php endif; ?>	
			</div></a>
		<div class="clr"></div>
		<div id="container">
			<?php if($this->countModules('user3')) : ?>
				<div id="navigation">
		             <jdoc:include type="modules" name="user3" style="xhmtl" />
				</div>
			<?php endif; ?>
			<?php if (($this->params->get('showFlashline')) !=0) : ?>
				<div id="flashline">
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
					codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
					width="998" height="10">
					<param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/flashline.swf" /> 
					<param name="quality" value="high" />
					<param name="menu" value="false" />
					<param name="wmode" value="transparent" />
					<param name="allowScriptAccess" value="sameDomain" />
					<!--[if !IE]> <-->
					<object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/flashline.swf"
					width="998" height="10" type="application/x-shockwave-flash">
					<param name="quality" value="high" />
					<param name="menu" value="false" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
					<param name="wmode" value="transparent" />
					FAIL (the browser should render some flash content, not this).
					</object>
					<!--> <![endif]-->
					</object>
				</div>
			<?php endif; ?>				
			<?php if($this->countModules('user5 or user6 or user7')) : ?>
				<div id="user_modules1">
					<?php if($this->countModules('user5')) : ?>
						<div id="user5_outer">
							<div id="user5">
					           <jdoc:include type="modules" name="user5" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user6')) : ?>
						<div id="user6_outer">
							<div id="user6">
					           <jdoc:include type="modules" name="user6" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user7')) : ?>
						<div id="user7_outer">
							<div id="user7">
					           <jdoc:include type="modules" name="user7" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
				</div>					
			<?php endif; ?>		
			<div class="clr"></div>
			<div id="page_content">
					<?php if($this->countModules('left')) : ?>
						<div id="left_outer">
			                <div id="left_inner_float">
				                <div id="left_inner">
				                	<jdoc:include type="modules" name="left" style="rounded_flash" />
				                </div>
			                </div>
		                </div>					
	       		   <?php endif; ?>		
					<?php if($this->countModules('right')) : ?>
						<div id="right_outer">
			                <div id="right_inner_float">
				                <div id="right_inner">
				                	<jdoc:include type="modules" name="right" style="rounded" />
				                </div>
			                </div>
		                </div>					
					<?php endif; ?>		
				    <div id="content_out<?php echo $contentwidth; ?>">
						<div id="content_outer">
								<div id="content">
									 <jdoc:include type="message" />
									 <jdoc:include type="component" />
								</div>
							<div class="clr"></div>
						</div>
					</div>
				</div>	
			<div id="container2">
			<?php if($this->countModules('user8 or user9 or user10')) : ?>
				<div id="user_modules3">
					<?php if($this->countModules('user8')) : ?>
						<div id="user8_outer">
							<div id="user8">
					           <jdoc:include type="modules" name="user8" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user9')) : ?>
						<div id="user9_outer">
							<div id="user9">
					           <jdoc:include type="modules" name="user9" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user10')) : ?>
						<div id="user10_outer">
							<div id="user10">
					           <jdoc:include type="modules" name="user10" style="rounded" />
							</div>
						</div>
					<?php endif; ?>			
				</div>					
			<?php endif; ?>		
			<div class="clr"></div>
			<?php if($this->countModules('user1 or user2')) : ?>
				<div id="user_modules2">
					<?php if($this->countModules('user1')) : ?>
						<div id="user1">
				           <jdoc:include type="modules" name="user1" style="rounded" />
						</div>
					<?php endif; ?>			
					<?php if($this->countModules('user2')) : ?>
						<div id="user2">
				           <jdoc:include type="modules" name="user2" style="rounded" />
						</div>
					<?php endif; ?>			
				</div>					
			<?php endif; ?>		
			<div class="clr"></div>			
				<div id="footer">
					<div id="copyright_info">
						<p><?php echo  $this->params->get('CopyrightInfo');  ?></p>
					</div>
					<?php if($this->countModules('footer')) : ?>
						<jdoc:include type="modules" name="footer" />
					<?php endif; ?>
					<div id="designed_by">
						<p>Design by: <a href="http://www.lernvid.com" target="_blank">LernVid.com</a></p>
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div>
</div>
<jdoc:include type="modules" name="debug" style="rounded" />
</body>
</html>