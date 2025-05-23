<?php
/**
 * Testing Bootstrap
 *
 * @package Banner_Notifications/Tests
 *
 * @since   1.0.0
 * @version 1.0.0
 */

require_once './vendor/lifterlms/lifterlms-tests/bootstrap.php';

class Banner_Notifications_Tests_Bootstrap extends LLMS_Tests_Bootstrap {

	/**
	 * __FILE__ reference, should be defined in the extending class
	 *
	 * @var [type]
	 */
	public $file = __FILE__;

	/**
	 * Name of the testing suite
	 *
	 * @var string
	 */
	public $suite_name = 'Banner Notifications';

	/**
	 * Main PHP File for the plugin
	 *
	 * @var string
	 */
	public $plugin_main = 'banner-notifications.php';

	/**
	 * Load the plugin
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function load() {

		// Assets are shared between phpunit and e2e tests.
		$this->assets_dir = dirname( $this->tests_dir ) . '/assets';
		parent::load();

	}

}

return new Banner_Notifications_Tests_Bootstrap();
