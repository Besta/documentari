<?php
// no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' ); 

$document =JFactory::getDocument();

// Head styles
$document->addStyleSheet( 'modules/mod_menuCategorie/mod_menuCategorie.css');

// Head script
$document->addScript(JURI::root() . 'modules/mod_menuCategorie/mod_menuCategorie.js');

$db = JFactory::getDbo();
$query = $db->getQuery(true);

$query->select('id,title,alias,extension,published');
$query->from('#__categories');
$query->where('extension = "com_documentary"');
$query->where('published = 1');
$query->order('title');

$db->setQuery($query);

$categories = $db->loadObjectList();

?>
	<ul class="nav menu">
	<?php foreach($categories as $item) { 
		echo '<li>';
		echo '<a href="'.JURI::root().'index.php?option=com_documentary&view=videos&catid='.$item->id.'">'.$item->title.'</a>';
		echo '</li>';
	}
	?>
	</ul>





