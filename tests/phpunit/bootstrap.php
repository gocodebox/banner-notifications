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
	 * Load the standalone plugin source BEFORE LifterLMS core so the bundled
	 * copy's class_exists / defined checks cause it to bail instead of ours.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function load() {

		// Assets are shared between phpunit and e2e tests.
		$this->assets_dir = dirname( $this->tests_dir ) . '/assets';

		// Pre-define constants so the bundled copy inside LifterLMS cannot claim them.
		define( 'GOCODEBOX_BANNER_NOTIFICATIONS_PLUGIN_FILE', $this->plugin_dir . '/banner-notifications.php' );
		define( 'GOCODEBOX_BANNER_NOTIFICATIONS_PLUGIN_DIR', $this->plugin_dir );

		// Load our source first — the bundled copy will see class_exists() and bail.
		require_once $this->plugin_dir . '/src/notifications.php';

		parent::load();

	}

}

return new Banner_Notifications_Tests_Bootstrap();
