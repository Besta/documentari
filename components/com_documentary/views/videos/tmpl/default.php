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
	$height = (ceil(count($this->items)/3)*220); 
?>
<div class="videos" style="height:<?php echo $height ?>px">

		
        <?php foreach ($this->items as $item) { ?>
			<?php
						$show = true;
						$item->tempo= JHtml::_("Documentary.getConvert",$item->durata );
						?>            
						<a class="videos_video" id="video_<?php echo $item->id ?>" style="background-size: 100%; background-image:url(<?php echo $item->image?>)" href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>"  >     
							<div class="videos_top"><?php
               					 echo $item->tcat 
               				?></div>
							<div class="videos_bot">
                				<span class="videos_title"><?php echo $item->title ?></span>
                				<span class="videos_time"><?php echo $item->tempo ?></span>
                			</div>
                		</a>

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

