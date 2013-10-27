<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/

// Get the restaurant view from the XML file
$viewTemplate = $this->getRenderedForm();
echo $viewTemplate;

// Get the comments view from the XML file
$inputvars = array(
	'show_filters' => false,
	'show_pagination' => false,
	'show_header' => false
);
$input = new FOFInput($inputvars);

FOFDispatcher::getTmpInstance('com_reviews', 'comments', array('input' => $input))->dispatch();
