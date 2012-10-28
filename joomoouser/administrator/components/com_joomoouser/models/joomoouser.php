<?php
/**
 * @author      Tom Hartung <webmaster@tomhartung.com>
 * @package     Joomla
 * @link        http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:components/
 * @subpackage  JoomooUser
 * @copyright   Copyright (C) 2010 Tom Hartung. All rights reserved.
 * @since       1.5
 * @license     GNU/GPL, see LICENSE.php
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport( 'joomla.application.component.model' );

/**
 * JoomooUser Model for com_joomoouser component
 */
class JoomooUserModelJoomooUser extends JoomoobaseModelJoomoobaseDb
{
	/**
	 * Overridden constructor
	 * @access protected
	 */
	public function __construct()
	{
		parent::__construct();

		// print "Hello from JoomooUserModelJoomooUser::__construct()<br />\n";

		$this->_tableName = "#__joomoouser";
	}

	/**
	 * create lists array containing ordering and filtering lists
	 * @access public
	 * @return array lists to use when outputing HTML to display the list of rows
	 */
	public function getLists( )
	{
		// print "Hello from JoomooUserModelJoomooUser::getLists()<br />\n";
		// print "getLists before: count(this->_lists) = " . count($this->_lists) . "<br />\n";

		if ( count($this->_lists) == 0 )
		{
			parent::getLists();
		//	print "getLists after: count(this->_lists) = " . count($this->_lists) . "<br />\n";
		}

		return $this->_lists;
	}
	/**
	 * builds order by clause for _listquery (implements ordering)
	 * @access protected
	 * @return: order by clause for query
	 */  
	protected function _getOrderByClause( $orderByColumns )
	{   
		//	print "Hello from JoomooUserModelJoomooUser::_getOrderByClause()<br />\n";

		$default_filter_order = 'id';
		$orderByClause = parent::_getOrderByClause( $orderByColumns, $default_filter_order );

		//	print "JoomooUserModelJoomooUser::_getOrderByClause: returning orderByClause = \"$orderByClause\"<br />\n";

		return $orderByClause;
	}   
	/**
	 * builds order by clause for _listquery (implements ordering) - from p. 230 of Mastering book
	 * @access protected
	 * @return: order by clause for query
	 */
	protected function _buildQueryOrderBy()
	{
		// print "Hello from JoomooUserModelJoomooUser::_buildQueryOrderBy()<br />\n";
		//
		// array of fields that can be sorted:
		//
		$orderByColumns = array( 'id', 'user_id', 'comment_emails' );
		$orderByClause = $this->_getOrderByClause( $orderByColumns );

		// print "_buildQueryOrderBy: returning orderByClause = \"$orderByClause\"<br />\n";
		return $orderByClause;
	}
}
?>
