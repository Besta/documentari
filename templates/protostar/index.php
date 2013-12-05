<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/documentari.css', $type = 'text/css');

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<link href='http://fonts.googleapis.com/css?family=Spinnaker' rel='stylesheet' type='text/css'>
	
	
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			
		
		
	<jdoc:include type="head" />
	
</head>

<body>

	<!-- Body -->
	<div class="body">
			<!-- Header -->
			<header class="header" role="banner">
				<jdoc:include type="modules" name="cerca" style="xhtml" />
				<a class="tutto">mostra tutto</a>
			</header>
					
					
			<jdoc:include type="modules" name="menu_category" style="xhtml" />
			<div class="row-fluid">

				<main id="content" role="main">
					<!-- Begin Content -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					
					<jdoc:include type="modules" name="breadcrumb" style="none" />
					<!-- End Content -->
				</main>			
			</div>
	</div>
	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		
	</footer>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>

