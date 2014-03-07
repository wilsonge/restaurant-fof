<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/

// Get the restaurant view from the XML file
$viewTemplate = $this->getRenderedForm();
echo $viewTemplate;

// Get the restaurant ID and set it up for injection into the dispatcher
$inputvars = array(
	'restaurantid' => $this->config['input']->get('id'),
);
$input = new FOFInput($inputvars);

FOFDispatcher::getTmpInstance('com_reviews', 'comments', array('input' => $input))->dispatch();

FOFDispatcher::getTmpInstance('com_reviews', 'comment', array())->dispatch();
