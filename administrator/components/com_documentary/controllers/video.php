<?php
/**
 * @version     1.0.0
 * @package     com_documentary
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Simone Bestazza <simone.bestazza@gmail.com> - http://
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerform');

/**
 * Video controller class.
 */
class DocumentaryControllerVideo extends JControllerForm
{

    function __construct() {
        $this->view_list = 'videos';
        parent::__construct();
    }

}