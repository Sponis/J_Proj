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
	<h4 class="head"><?php echo $module->title; ?></h4>

	<?php echo $module->content;?>
</div>
