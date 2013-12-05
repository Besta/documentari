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
?>
<?php 
	$show = false; 
	$height = (ceil(count($this->items)/4)*220); 
?>

<div id="videos">

		
        <?php foreach ($this->items as $item) { ?>
			<?php
						$date =&JFactory::getDate($item->created_date);
						$date =JHtml::date($date , 'd-m-Y');
						$show = true;
						$item->tempo= JHtml::_("Documentary.getConvert",$item->tempo );
						

						?>
	
			 <div class="video_container">
			 <div class="time_n video_button">
			 <?php echo $item->tempo; ?>
			 <div class="time video_button"></div>
			 </div>
			 		 
			 <div class="flip_n video_button"><div class="info">info</div>
			 <div class="flip video_button"></div>
			 </div>
			 <a class="play video_button"  href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"></a>
			 
			 <a class="play_link video_button" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>">
			 <div class="link_mini video_button">Play</div> 
			 <div class="play_icon video_button"></div>
			 </a>
			 <a class="cate_link video_button" href="<?php echo JRoute::_('index.php?option=com_documentary&view=videos&catid='.(int)$item->catid)?>">
			 <div class="cate_icon video_button"></div>
			 <div class="link_mini_cate video_button"><?php echo $item->tcat; ?></div> 
			 </a>
			 
			 <div id="card" class="video">
   			 
     		 
     		 <div class="front">
     		 
     		 <a class="video_title" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"><?php echo ucfirst(strtolower($item->title)); ?></a>
			 <a class="video_link"  style="background-image:url(<?php echo $item->image?>)" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"  ></a>
     		 </div>
      		<div class="back">
      		
      		 <a class="video_title" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"><?php echo ucfirst(strtolower($item->title)); ?></a>
      		 <a class="video_description" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"><span>Descrizione : </span><?php echo $item->description; ?></a>
      		 <div class="video_data video_button" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>">pubblicato: <?php echo $date; ?></div>
      		 <div class="video_like video_button">like: 50  rating: 80%</div>
      		 
      		 </div>
      
   			 </div>			
			 </div>			
						

		<?php } ?>
        <?php
        if (!$show):
            echo JText::_('COM_DOCUMENTARY_NO_ITEMS');
        endif;
        ?>
</div>
<?php if ($show): ?>
    <div class="pagination">
        <p class="counter"><?php echo $this->pagination->getPagesCounter(); ?></p>
        <?php echo $this->pagination->getPagesLinks(); ?>
    </div>
<?php endif; ?>
