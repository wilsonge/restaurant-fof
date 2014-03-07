<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/
// No direct access
defined('_JEXEC') or die();

class ReviewsModelComments extends FOFModel
{
	/**
	 * The ID of the restaurant that the comments should be loaded for
	 *
	 * @var    integer
	 */
	protected $restaurant = null;

	/**
	 * Public constructor
	 *
	 * @param   array  $config  The configuration variables
	 */
    public function __construct($config = array())
	{
        parent::__construct($config);

       	if ($config['input']->get('restaurantid', null))
		{
			$this->restaurant = (int) $config['input']->get('restaurantid');
		}
    }

	/**
	 * This event allows us to search for the comments from a specific restaurant
	 *
	 * @param   FOFModel        &$model  The model which calls this event
	 * @param   JDatabaseQuery  &$query  The query being built
	 *
	 * @return  void
	 */
	public function onAfterBuildQuery(&$model, &$query)
	{
		if ($this->restaurant)
		{
			$db = $model->getDbo();
			$query->where($db->quoteName('restaurant') . ' = ' . $this->restaurant);
		}
	}
}
