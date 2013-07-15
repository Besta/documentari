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
	$height = (ceil(count($this->items)/4)*160); 
?>
<div class="videos" style="height:<?php echo $height ?>px">

		
        <?php foreach ($this->items as $item) { ?>
			<?php
						$show = true;
						?>
						<div class="videos_video" >
								<a href="<?php echo JRoute::_('index.php?option=com_documentary&view=video&id='.(int)$item->id)?>">
									<img src="<?php echo $item->image?>"/> 
									<br/>
									<span class="video_title"><?php echo $item->title;?></span>
								</a>
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

