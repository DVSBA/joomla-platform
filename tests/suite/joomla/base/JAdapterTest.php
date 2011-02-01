<?php
/**
 * @version		$Id: JAdapterTest.php 20196 2011-01-09 02:40:25Z ian $
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once JPATH_LIBRARIES.'/joomla/base/adapter.php';

/**
 * Test class for JAdapter.
 * Generated by PHPUnit on 2009-10-08 at 11:42:24.
 */
class JAdapterTest extends JoomlaDatabaseTestCase {
	/**
	 * @var	JAdapter
	 * @access protected
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp() {
		//$this->object = new JAdapter;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @access protected
	 */
	protected function tearDown() {
	}

	/**
	 * @todo Implement testGetDBO().
	 */
	public function testGetDBO() {
		$this->object = new JAdapter(JUnitHelper::normalize(dirname(__FILE__)), 'Test', 'TestAdapters');
		$db = JFactory::getDbo();
		$this->assertThat(
			$this->object->getDbo(),
			$this->identicalTo($db)
		);
	}

	/**
	 * @todo Implement testSetAdapter().
	 */
	public function testSetAdapter() {
		require_once(JPATH_LIBRARIES.'/joomla/base/adapterinstance.php');
		$this->object = new JAdapter(JUnitHelper::normalize(dirname(__FILE__)), 'Test', 'TestAdapters');
		$this->object->setAdapter('Testadapter');

		$this->assertThat(
			$this->object->getAdapter('Testadapter'),
			$this->isInstanceOf('TestTestadapter')
		);

		$this->assertThat(
			$this->object->setAdapter('NoAdapterHere'),
			$this->isFalse()
		);

		$this->assertThat(
			$this->object->setAdapter('Testadapter2'),
			$this->isFalse()
		);

	}

	/**
	 * @todo Implement testGetAdapter().
	 */
	public function testGetAdapter() {
		require_once(JPATH_LIBRARIES.'/joomla/base/adapterinstance.php');
		$this->object = new JAdapter(JUnitHelper::normalize(dirname(__FILE__)), 'Test', 'TestAdapters');

		$this->assertThat(
			$this->object->getAdapter('Testadapter3'),
			$this->isInstanceOf('TestTestadapter3')
		);

		$this->assertThat(
			$this->object->getAdapter('badadapter'),
			$this->isFalse()
		);

	}

	/**
	 * @todo Implement testLoadAllAdapters().
	 */
	public function testLoadAllAdapters() {
		require_once(JPATH_LIBRARIES.'/joomla/base/adapterinstance.php');
		$this->object = new JAdapter(JUnitHelper::normalize(dirname(__FILE__)), 'Test', 'TestAdapters');
		$this->object->loadAllAdapters();

		$this->assertThat(
			$this->object->getAdapter('Testadapter4'),
			$this->isInstanceOf('TestTestadapter4')
		);
	}
}
