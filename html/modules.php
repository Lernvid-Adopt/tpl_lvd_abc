<?php
/**
 * @version		$Id: modules.php 10381 2008-06-01 03:35:53Z pasamio $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

function modChrome_rounded_flash($module, &$params, &$attribs)
{ ?>
		<div class="module<?php echo $params->get('moduleclass_sfx'); ?>">
			<div>
				<div>
					<div>
						<?php if ($module->showtitle != 0) : ?>
							<div class="fl1">
								<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
								codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
								width="190" height="10">
								<param name="movie" value="templates/abc_lernvid.com/fl/h3.swf" /> 
								<param name="quality" value="high" />
								<param name="menu" value="false" />
								<param name="wmode" value="transparent" />
								<param name="allowScriptAccess" value="sameDomain" />
								<!--[if !IE]> <-->
								<object data="templates/abc_lernvid.com/fl/h3.swf"
								width="190" height="10" type="application/x-shockwave-flash">
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
							<h3><?php echo $module->title; ?></h3>
						<?php endif; ?>
					<?php echo $module->content; ?>
					</div>
				</div>
			</div>
		</div>
	<?php
}

