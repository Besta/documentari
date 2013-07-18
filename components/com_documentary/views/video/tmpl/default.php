<?php
/**
 * @version     1.0.0
 * @package     com_documentary
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Simone Bestazza <simone.bestazza@gmail.com> - http://
 */
// no direct access
defined('_JEXEC') or die;

//Load admin language file
$lang = JFactory::getLanguage();
$lang->load('com_documentary', JPATH_ADMINISTRATOR);

?>
<?php if ($this->item) : ?>
     <a href="<?php echo JRoute::_('index.php?option=com_documentary&view=videos&catid='.(int)$this->item->catid)?>"> <?php echo $this->item->categoria; ?> </a>
     
    <div class="item_fields"> 
		<div class="video_title"><?php echo $this->item->title ?></div>
		<?php echo $this->item->iframe; ?>
		<?php echo $this->item->durata; ?>
   
		
    </div>
<?php
else:
    echo JText::_('COM_DOCUMENTARY_ITEM_NOT_LOADED');
endif;
?>
