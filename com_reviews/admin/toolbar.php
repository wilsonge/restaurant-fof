<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/
// no direct access
defined('_JEXEC') or die();

class ReviewsToolbar extends FOFToolbar
{
    public function onRestaurantsEdit()
    {
        parent::onEdit();

		$user = JFactory::getUser();

		if (JComponentHelper::getParams('com_reviews')->get('save_history', 1) && $user->authorise('core.edit'))
		{
			JToolbarHelper::versions('com_reviews.restaurant', $this->input->get('id'));
		}
	}

	public function onRestaurantsBrowse()
	{
		parent::onBrowse();

		JToolBarHelper::preferences('com_reviews', 550, 875);
	}
}
