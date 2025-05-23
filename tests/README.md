# Banner Notifications Tests

This directory contains tests for the Banner Notifications plugin.

## PHPUnit Tests

The PHPUnit tests are located in the `phpunit` directory. They test the functionality of the Banner Notifications plugin, particularly the notification test functions that conditionally show/hide notifications based on certain conditions.

### Running the Tests

To run the PHPUnit tests, use the following command from the plugin root directory:

```bash
vendor/bin/phpunit
```

### Test Structure

The tests are organized as follows:

- `phpunit/bootstrap.php`: Sets up the testing environment.
- `phpunit/framework/class-banner-notifications-unit-test-case-base.php`: Base test case class with utility methods for testing notifications.
- `phpunit/unit-tests/class-banner-notifications-test-plugin.php`: Tests for the main plugin file.
- `phpunit/unit-tests/class-banner-notifications-test-functions.php`: Tests for the notification test functions.
- `phpunit/unit-tests/class-banner-notifications-test-example.php`: Tests for the example notification from the issue description.
- `phpunit/unit-tests/class-banner-notifications-test-transient.php`: Tests for setting the notifications transient and retrieving notifications.

### Test Coverage

The tests cover the following functionality:

1. **Plugin Initialization**: Tests for the main plugin file.
   - Tests that the plugin is loaded and initialized.
   - Tests that the notification test filters are registered.
   - Tests that the get_all_notifications method returns an array.
   - Tests that the get_next_notification method returns false when there are no notifications.
   - Tests that the get_next_notification method returns a notification when there are notifications.

2. **Notification Test Functions**: Tests for the various `notification_test_*` functions that conditionally show/hide notifications based on certain conditions.
   - `notification_test_plugins_active`: Tests if specified plugins are active.
   - `notification_test_check_plugin_version`: Tests if a plugin is active and meets version requirements.
   - `notification_test_site_url_match`: Tests if the site URL matches a specified URL.
   - `notification_test_check_option`: Tests if a WordPress option has a specified value.

3. **Notification Display Logic**: Tests for the functions that determine whether a notification should be shown.
   - `is_notification_applicable`: Tests if a notification should be shown based on various conditions.
   - `should_show_notification`: Tests if a notification meets all the "show_if" conditions.
   - `should_hide_notification`: Tests if a notification meets any of the "hide_if" conditions.

4. **Example Notification**: Tests for the example notification from the issue description, which has specific show_if and hide_if conditions related to plugins being active.
   - Tests when neither plugin is active.
   - Tests when only convertkit is active.
   - Tests when only lifterlms-convertkit is active.
   - Tests when both plugins are active.

5. **Transient Handling**: Tests for setting the notifications transient and retrieving notifications.
   - Tests setting the transient with the example notification and retrieving it.
   - Tests retrieving notifications when convertkit is active.
   - Tests retrieving notifications when lifterlms-convertkit is active.

### Mocking

The tests use several mocking techniques:

1. **Mock Notifications**: The `create_mock_notification` method creates a mock notification object with default values that can be overridden.
2. **Mock Transient**: The `set_mock_notifications` method sets a transient with mock notifications.
3. **Mock Active Plugins**: The `mock_plugin_active` method simulates plugins being active or inactive.

These mocking techniques allow the tests to run without requiring actual plugins to be installed or actual notifications to be fetched from a remote server.
