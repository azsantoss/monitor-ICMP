<?php
/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Pepijn Over <pep@mailbox.org>
 * @copyright   Copyright (c) 2008-2017 Pepijn Over <pep@mailbox.org>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: @package_version@
 * @link        http://www.phpservermonitor.org/
 * 
 * 
 * 
 * Modified by Anderson Santos <https://github.com/azsantoss>
 * Repository https://github.com/azsantoss/Monitor-ICMP
 * 
 * 
 *  **/

$sm_lang = array(
	'name' => 'English',
	'locale' => array('en_US.UTF-8', 'en_US', 'american', 'english-us'),
	'locale_tag' => 'en',
	'locale_dir' => 'ltr',
	'system' => array(
		'title' => 'Server Monitor',
		'install' => 'Install',
		'action' => 'Action',
		'save' => 'Save',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'date' => 'Date',
		'message' => 'Message',
		'yes' => 'Yes',
		'no' => 'No',
		'insert' => 'Insert',
		'add_new' => 'Add new',
		'update_available' => 'A new version ({version}) is available from <a href="http://www.phpservermonitor.org" target="_blank">http://www.phpservermonitor.org</a>.',
		'back_to_top' => 'Back to top',
		'go_back' => 'Go back',
		'ok' => 'OK',
		'cancel' => 'Cancel',
		// date/time format according the strftime php function format parameter http://php.net/manual/function.strftime.php
		'short_day_format' => '%B %e',
		'long_day_format' => '%B %e, %Y',
		'yesterday_format' => 'Yesterday at %k:%M',
		'other_day_format' => '%A at %k:%M',
		'never' => 'Never',
		'hours_ago' => '%d hours ago',
		'an_hour_ago' => 'about an hour ago',
		'minutes_ago' => '%d minutes ago',
		'a_minute_ago' => 'about a minute ago',
		'seconds_ago' => '%d seconds ago',
		'a_second_ago' => 'a second ago',
	),
	'menu' => array(
		'config' => 'Config',
		'server' => 'Servers',
		'server_log' => 'Log',
		'server_status' => 'Status',
		'server_update' => 'Update',
		'user' => 'Users',
		'help' => 'Help',
	),
	'users' => array(
		'user' => 'User',
		'name' => 'Name',
		'user_name' => 'Username',
		'password' => 'Password',
		'password_repeat' => 'Password repeat',
		'password_leave_blank' => 'Leave blank to keep unchanged',
		'level' => 'Level',
		'level_10' => 'Administrator',
		'level_20' => 'User',
		'level_description' => '<b>Administrators</b> have full access: they can manage servers, users and edit the global configuration.<br/><b>Users</b> can only view and run the updater for the servers that have been assigned to them.',
		'mobile' => 'Mobile',
		'email' => 'Email',
		'pushover' => 'Pushover',
		'pushover_description' => 'Pushover is a service that makes it easy to get real-time notifications. See <a href="https://pushover.net/">their website</a> for more info.',
		'pushover_key' => 'Pushover Key',
		'pushover_device' => 'Pushover Device',
		'pushover_device_description' => 'Device name to send the message to. Leave empty to send it to all devices.',
		'delete_title' => 'Delete User',
		'delete_message' => 'Are you sure you want to delete user \'%1\'?',
		'deleted' => 'User deleted.',
		'updated' => 'User updated.',
		'inserted' => 'User added.',
		'profile' => 'Profile',
		'profile_updated' => 'Your profile has been updated.',
		'error_user_name_bad_length' => 'Usernames must be between 2 and 64 characters.',
		'error_user_name_invalid' => 'The username may only contain alphabetic characters (a-z, A-Z), digits (0-9) and underscores (_).',
		'error_user_name_exists' => 'The given username already exists in the database.',
		'error_user_email_bad_length' => 'Email addresses must be between 5 and 255 characters.',
		'error_user_email_invalid' => 'The email address is invalid.',
		'error_user_level_invalid' => 'The given user level is invalid.',
		'error_user_no_match' => 'The user could not be found in the database.',
		'error_user_password_invalid' => 'The entered password is invalid.',
		'error_user_password_no_match' => 'The entered passwords do not match.',
	),
	'log' => array(
		'title' => 'Log entries',
		'type' => 'Type',
		'status' => 'Status',
		'email' => 'Email',
		'sms' => 'SMS',
		'pushover' => 'Pushover',
		'no_logs' => 'No logs',
	),
	'servers' => array(
		'server' => 'Server',
		'status' => 'Status',
		'label' => 'Label',
		'domain' => 'Domain/IP',
		'timeout' => 'Timeout',
		'timeout_description' => 'Number of seconds to wait for the server to respond.',
		'authentication_settings' => 'Authentication Settings (Optional)',
		'website_username' => 'Username',
		'website_username_description' => 'Username to access the site. (Only Apache authentication is supported.)',
		'website_password' => 'Password',
		'website_password_description' => 'Password to access the site. The password is encrypted in the database.',
		'fieldset_monitoring' => 'Monitoring',
		'fieldset_permissions' => 'Permissions',
		'port' => 'Port',
		'custom_port' => 'Custom Port',
		'popular_ports' => 'Popular Ports',
		'please_select' => 'Please select',
		'type' => 'Type',
		'type_website' => 'Website',
		'type_service' => 'Service',
		'type_ping' => 'Ping',
		'pattern' => 'Search string/pattern',
		'pattern_description' => 'If this pattern is not found on the website, the server will be marked offline. Regular expressions are allowed.',
		'last_check' => 'Last check',
		'last_online' => 'Last online',
		'monitoring' => 'Monitoring',
		'no_monitoring' => 'No monitoring',
		'email' => 'Email',
		'send_email' => 'Send Email',
		'sms' => 'SMS',
		'send_sms' => 'Send SMS',
		'pushover' => 'Pushover',
		'users' => 'Users',
		'delete_title' => 'Delete server',
		'delete_message' => 'Are you sure you want to delete server \'%1\'?',
		'deleted' => 'Server deleted.',
		'updated' => 'Server updated.',
		'inserted' => 'Server added.',
		'latency' => 'Latency',
		'latency_max' => 'Latency (maximum)',
		'latency_min' => 'Latency (minimum)',
		'latency_avg' => 'Latency (average)',
		'uptime' => 'Uptime',
		'year' => 'Year',
		'month' => 'Month',
		'week' => 'Week',
		'day' => 'Day',
		'hour' => 'Hour',
		'warning_threshold' => 'Warning threshold',
		'warning_threshold_description' => 'Number of failed checks required before it is marked offline.',
		'chart_last_week' => 'Last week',
		'chart_history' => 'History',
		// Charts date format according jqPlot date format  http://www.jqplot.com/docs/files/plugins/jqplot-dateAxisRenderer-js.html
		'chart_day_format' => '%Y-%m-%d',
		'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
		'chart_short_date_format' => '%m/%d %H:%M',
		'chart_short_time_format' => '%H:%M',
		'warning_notifications_disabled_sms' => 'SMS notifications are disabled.',
		'warning_notifications_disabled_email' => 'Email notifications are disabled.',
		'warning_notifications_disabled_pushover' => 'Pushover notifications are disabled.',
		'error_server_no_match' => 'Server not found.',
		'error_server_label_bad_length' => 'The label must be between 1 and 255 characters.',
		'error_server_ip_bad_length' => 'The domain / IP must be between 1 and 255 characters.',
		'error_server_ip_bad_service' => 'The IP address is not valid.',
		'error_server_ip_bad_website' => 'The website URL is not valid.',
		'error_server_type_invalid' => 'The selected server type is invalid.',
		'error_server_warning_threshold_invalid' => 'The warning threshold must be a valid integer greater than 0.',
	),
	'config' => array(
		'general' => 'General',
		'language' => 'Language',
		'show_update' => 'Check for updates?',
		'password_encrypt_key' => 'The encryption key password',
		'password_encrypt_key_note' => 'This key is used to encrypt passwords that are stored on servers for access to websites. If the key will change the stored password is invalid!',
		'proxy' => 'Enable proxy',
		'proxy_url' => 'Proxy URL',
		'proxy_user' => 'Proxy username',
		'proxy_password' => 'Proxy password',
		'email_status' => 'Allow sending email',
		'email_from_email' => 'Email from address',
		'email_from_name' => 'Email from name',
		'email_smtp' => 'Enable SMTP',
		'email_smtp_host' => 'SMTP host',
		'email_smtp_port' => 'SMTP port',
		'email_smtp_security' => 'SMTP security',
		'email_smtp_security_none' => 'None',
		'email_smtp_username' => 'SMTP username',
		'email_smtp_password' => 'SMTP password',
		'email_smtp_noauth' => 'Leave blank for no authentication',
		'sms_status' => 'Allow sending text messages',
		'sms_gateway' => 'Gateway to use for sending messages',
		'sms_gateway_mosms' => 'Mosms',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
        	'sms_gateway_textmarketer' => 'Textmarketer',
		'sms_gateway_smsglobal' => 'SMSGlobal',
		'sms_gateway_octopush' => 'Octopush',
		'sms_gateway_smsit' => 'Smsit',
		'sms_gateway_freevoipdeal' => 'FreeVoipDeal',
		'sms_gateway_freemobilesms' => 'FreeMobileSMS',
		'sms_gateway_clicksend' => 'ClickSend',
		'sms_gateway_nexmo' => 'Nexmo',
		'sms_gateway_smsgw' => 'SMSgw',
		'sms_gateway_username' => 'Gateway username',
		'sms_gateway_password' => 'Gateway password',
		'sms_from' => 'Sender\'s phone number',
		'pushover_status' => 'Allow sending Pushover messages',
		'pushover_description' => 'Pushover is a service that makes it easy to get real-time notifications. See <a href="https://pushover.net/">their website</a> for more info.',
		'pushover_clone_app' => 'Click here to create your Pushover app',
		'pushover_api_token' => 'Pushover App API Token',
		'pushover_api_token_description' => 'Before you can use Pushover, you need to <a href="%1$s" target="_blank">register an App</a> at their website and enter the App API Token here.',
		'alert_type' => 'Select when you\'d like to be notified.',
        'alert_type_description' => '<b>Status change:</b> '.
		    'You will receive a notifcation when a server has a change in status. So from online -> offline or offline -> online.<br/>'.
		    '<br /><b>Offline:</b> '.
		    'You will receive a notification when a server goes offline for the *FIRST TIME ONLY*. For example, '.
		    'your cronjob is every 15 mins and your server goes down at 1 am and stays down till 6 am. '.
		    'You will get 1 notification at 1 am and thats it.<br/>'.
		    '<br><b>Always:</b> '.
		    'You will receive a notification every time the script runs and a site is down, even if the site has been offline for hours.',
		'alert_type_status' => 'Status change',
		'alert_type_offline' => 'Offline',
		'alert_type_always' => 'Always',
		'alert_proxy' => 'Even if enabled, proxy is never used for services',
		'alert_proxy_url' => '<b>Format:</b> Host:Port',
		'log_status' => 'Log status',
		'log_status_description' => 'If log status is set to TRUE, the monitor will log the event whenever the Notification settings are passed.',
		'log_email' => 'Log emails sent by the script',
		'log_sms' => 'Log text messages sent by the script',
		'log_pushover' => 'Log pushover messages sent by the script',
		'updated' => 'The configuration has been updated.',
		'tab_email' => 'Email',
		'tab_sms' => 'SMS',
		'tab_pushover' => 'Pushover',
		'settings_email' => 'Email settings',
		'settings_sms' => 'Text message settings',
		'settings_pushover' => 'Pushover settings',
		'settings_notification' => 'Notification settings',
		'settings_log' => 'Log settings',
		'settings_proxy' => 'Proxy settings',
		'auto_refresh' => 'Auto-refresh',
		'auto_refresh_servers' =>
			'Auto-refresh servers page.<br/>'.
			'<span class="small">'.
			'Time in seconds, if 0 the page won\'t refresh.'.
			'</span>',
		'seconds' => 'seconds',
		'test' => 'Test',
		'test_email' => 'An email will be sent to the address specified in your user profile.',
		'test_sms' => 'An SMS will be sent to the phone number specified in your user profile.',
		'test_pushover' => 'A Pushover notification will be sent to the user key/device specified in your user profile.',
		'send' => 'Send',
		'test_subject' => 'Test',
		'test_message' => 'Test message',
		'email_sent' => 'Email sent',
		'email_error' => 'Error in email sending',
		'sms_sent' => 'Sms sent',
		'sms_error' => 'Error in sms sending',
		'sms_error_nomobile' => 'Unable to send test SMS: no valid phone number found in your profile.',
		'pushover_sent' => 'Pushover notification sent',
		'pushover_error' => 'An error has occurred while sending the Pushover notification: %s',
		'pushover_error_noapp' => 'Unable to send test notification: no Pushover App API token found in the global configuration.',
		'pushover_error_nokey' => 'Unable to send test notification: no Pushover key found in your profile.',
		'log_retention_period' => 'Log retention period',
		'log_retention_period_description' => 'Number of days to keep logs of notifications and archives of server uptime. Enter 0 to disable log cleanup.',
		'log_retention_days' => 'days',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'Server \'%LABEL%\' is DOWN: ip=%IP%, port=%PORT%. Error=%ERROR%',
		'off_email_subject' => 'IMPORTANT: Server \'%LABEL%\' is DOWN',
		'off_email_body' => "Failed to connect to the following server:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Error: %ERROR%<br/>Date: %DATE%",
		'off_pushover_title' => 'Server \'%LABEL%\' is DOWN',
		'off_pushover_message' => "Failed to connect to the following server:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Error: %ERROR%<br/>Date: %DATE%",
		'on_sms' => 'Server \'%LABEL%\' is RUNNING: ip=%IP%, port=%PORT%',
		'on_email_subject' => 'IMPORTANT: Server \'%LABEL%\' is RUNNING',
		'on_email_body' => "Server '%LABEL%' is running again:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
		'on_pushover_title' => 'Server \'%LABEL%\' is RUNNING',
		'on_pushover_message' => 'Server \'%LABEL%\' is running again:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%',
	),
	'login' => array(
		'welcome_usermenu' => 'Welcome, %user_name%',
		'title_sign_in' => 'Please sign in',
		'title_forgot' => 'Forgot your password?',
		'title_reset' => 'Reset your password',
		'submit' => 'Submit',
		'remember_me' => 'Remember me',
		'login' => 'Login',
		'logout' => 'Logout',
		'username' => 'Username',
		'password' => 'Password',
		'password_repeat' => 'Repeat password',
		'password_forgot' => 'Forgot password?',
		'password_reset' => 'Reset password',
		'password_reset_email_subject' => 'Reset your password for Monitor',
		'password_reset_email_body' => 'Please use the following link to reset your password. Please note it expires in 1 hour.<br/><br/>%link%',
		'error_user_incorrect' => 'The provided username could not be found.',
		'error_login_incorrect' => 'The information is incorrect.',
		'error_login_passwords_nomatch' => 'The provided passwords do not match.',
		'error_reset_invalid_link' => 'The reset link you provided is invalid.',
		'success_password_forgot' => 'An email has been sent to you with information how to reset your password.',
		'success_password_reset' => 'Your password has been reset successfully. Please login.',
	),
	'error' => array(
		'401_unauthorized' => 'Unauthorized',
		'401_unauthorized_description' => 'You do not have the privileges to view this page.',
	),
);
