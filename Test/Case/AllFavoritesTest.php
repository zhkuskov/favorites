<?php
/**
 * Copyright 2009 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class AllFavoritesPluginTest extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$Suite = new CakeTestSuite('All Favorites Plugin tests');

		$basePath = CakePlugin::path('Users') . DS . 'Test' . DS . 'Case' . DS;
		$Suite->addTestDirectory($basePath . DS . 'Controller');
		$Suite->addTestDirectory($basePath . DS . 'Model');
		$Suite->addTestDirectory($basePath . DS . 'Model' . DS . 'Behavior');
		$Suite->addTestDirectory($basePath . DS . 'View' . DS . 'Helper');
		return $Suite;
	}

}
