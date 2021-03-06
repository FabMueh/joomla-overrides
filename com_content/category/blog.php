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

    <!-- load blog posts -->
    <?php foreach($this->items as $post) : ?>
        <div class="blog-item">
            <h3 class="blog-title"><?php echo $post->title; ?></h3>
            <div class="blog-text"><?php echo $post->introtext; ?></div>
            
            <!-- read more link -->
            <?php $link = JRoute::_(ContentHelperRoute::getArticleRoute($post->slug, $post->catid, $post->language)); ?>
            <a class="blog-readmore" href="<?php echo $link; ?>">weiterlesen</a>
        </div>
    <?php endforeach; ?>


    <!-- pagination -->
    <?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="pagination">
			<?php echo $this->pagination->getPagesLinks(); ?> 
        </div>
	<?php endif; ?>

</div>



