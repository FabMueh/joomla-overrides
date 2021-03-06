<?php
/**
 * @package Joomla.Site
 * @subpackage com_content
 *
 * @copyright Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');
?>


<div class="blog-wrapper">
    <?php foreach($this->item as $post) : ?>
        <div class="blog-post">
            
        </div>
    <?php endforeach; ?>
</div>

