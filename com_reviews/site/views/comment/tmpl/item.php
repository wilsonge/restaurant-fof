<?php
/**
 * @copyright (C) 2013 JoomJunk. All rights reserved.
 * @package    Restaurant Reviews
 * @license    http://www.gnu.org/licenses/gpl-3.0.html
 **/

defined('_JEXEC') or die();
JHtml::_('behavior.tooltip');
JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', false, true);

?>
<p></p>
<form action="index.php" method="post" name="adminForm" id="adminForm" class="form form-horizontal">
	<input type="hidden" name="option" value="com_reviews" />
	<input type="hidden" name="view" value="comment" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="reviews_comment_id" value="0" />
	<input type="hidden" name="<?php echo JFactory::getSession()->getFormToken();?>" value="1" />
	<div class="control-group">
		<label for="username_field" class="control-label"><?php echo JText::_('COM_REVIEW_COMMENTS_FIELD_USER_NAME'); ?></label>
		<div class="controls">
			<span id="username_field"><?php echo JFactory::getUser()->username; ?></span>
			<input type="hidden" name="username" value="<?php echo JFactory::getUser()->id; ?>" />
		</div>
	</div>
	<div class="control-group">
		<label for="calendar_field" class="control-label"><?php echo JText::_('COM_REVIEW_COMMENTS_FIELD_DATE'); ?></label>
		<div class="controls">
			<?php echo JHtml::_('calendar', JFactory::getDate()->toSql(), 'date', 'calendar_field', '%Y-%m-%d %H:%i:%s', array('readonly'=>true)); ?>
		</div>
	</div>
	<div class="control-group">
		<label for="comment_field" class="control-label"><?php echo JText::_('COM_REVIEW_COMMENTS_FIELD_COMMENT'); ?></label>
		<div class="controls">
			<textarea id="comment_field" name="comment" class="comment"></textarea>
		</div>
	</div>
	<div class="control-group">
		<label for="restaurant_field" class="control-label"><?php echo JText::_('COM_REVIEW_COMMENTS_FIELD_RESTAURANT'); ?></label>
		<div class="controls">
			<?php
				$db = JFactory::getDbo();
				$query = $db->getQuery(true);
				$query->select(array($db->quoteName('reviews_restaurant_id', 'value'), $db->quoteName('name', 'text')))
					->from($db->quoteName('#__reviews_restaurants'));
				$db->setQuery($query);

				$items = $db->loadObjectList();

				// Let's assume their are restaurants because otherwise noone should be accessing this view!
				$options = array();
				for ($i = 0, $n = count($items); $i < $n; $i++)
				{
					$options[] = JHtml::_('select.option', $items[$i]->value, $items[$i]->text);
				}

				echo JHtml::_('select.genericlist', $options, 'restaurant');
			?>
		</div>
	</div>
	<div class="form-actions">
		<button id="commentnow" class="btn btn-small btn-primary" type="submit">
			<?php echo JText::_('COM_REVIEWS_COMMENT_SUBMIT')?>
		</button>
	</div>
</form>
