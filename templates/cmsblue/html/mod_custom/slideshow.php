<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_custom
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>


<div id="<?php echo $moduleclass_sfx ?>"> 
	<?php echo $module->content; ?>
</div>
<div id="slidenav">
      <a href="#"><span id="previousbutton">&nbsp;</span></a>
      <ul id="pagenavi"></ul>
      <a href="#"><span id="nextbutton">&nbsp;</span></a>
    </div>