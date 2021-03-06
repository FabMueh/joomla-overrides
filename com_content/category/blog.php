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
        <div class="blog-post">

        </div>

        <!-- read more link -->
        <?php if ($params->get('show_readmore') && $this->item->readmore) :
	        if ($params->get('access-view')) :
		        $link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language));
	        else :
                $menu = JFactory::getApplication()->getMenu();
                $active = $menu->getActive();
                $itemId = $active->id;
                $link = new JUri(JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId, false));
                $link->setVar('return', base64_encode(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)));
	        endif; ?>
	        <a class="blog-readmore" href="<?php echo $link ?>">weiterlesen</a>
        <?php endif; ?>

    <?php endforeach; ?>


    <!-- pagination -->
    <?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
		<div class="pagination">
			<?php echo $this->pagination->getPagesLinks(); ?> 
        </div>
	<?php endif; ?>

</div>

