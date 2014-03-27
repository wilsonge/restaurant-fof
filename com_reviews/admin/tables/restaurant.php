<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();

include_once JPATH_LIBRARIES.'/fof/include.php';

class ReviewsTableRestaurant extends FOFTable
{
	/**
	 * The content type of the table. Required if using tags or content history behaviour
	 * 
	 * @var  string
	 */
	protected $contentType = null;

	/**
	 * Public constructor
	 *
	 * @param   array  $config  The configuration variables
	 */
	public function __construct($table, $key, &$db, $config = array())
	{
		if (!isset($config['behaviors'])) {
			$config['behaviors'] = array('tags', 'contenthistory');
		}
		else
		{
			$config['behaviors'] = array_merge(array('tags'), (array) $config['behaviors']);
		}
		
		self::setHasTags(true);
		
		$this->contentType = 'com_reviews.restaurant';

		parent::__construct($table, $key, $db, $config);
	}
}
