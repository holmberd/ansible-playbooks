<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

{{ wp_salt.stdout }}

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', {{auto_up_disable}} );

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', {{core_update_level}} );

/** Custom Configurations */

/* AWS */

define( 'AWS_ACCESS_KEY_ID', 'AKIAJD6BIP2REF7RSXHA' );
define( 'AWS_SECRET_ACCESS_KEY', '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' );

/* LPA */

define('LPA_RAVEN_CLIENT_URL', 'https://b5d85edf669045ed8adac1d3b44bd080:b00562fe25b14a6eb9cc674b21aa06f4@app.getsentry.com/66762');

define('LPA_BUNDLE_SECRET_KEY', '445020ee');

define('LPA_PROSPER_DATABASE_NAME', 'prosper_db');
define('LPA_PROSPER_DATABASE_USER', 'root');
define('LPA_PROSPER_DATABASE_PASSWORD', 'root');
define('LPA_PROSPER_DATABASE_HOST', 'localhost');
define('LPA_PROSPER_DATABASE_PORT', '3306');

define('LPA_TEXTBROKER_BUDGET_KEY', '64f655977c20830883d447e1b8749475');
define('LPA_TEXTBROKER_BUDGET_PASSWORD', '7rR4aKHDey[f;FpnAiap');

define('LPA_INSTALLCORE_ACCOUNT', '9358');
define('LPA_MAC_INSTALLCORE_ACCOUNT', '9358');
define('LPA_WINDOWS_INSTALLCORE_ACCOUNT', '9226');
define('LPA_AV_CHROME_INSTALLCORE_ACCOUNT', '10164');
define('LPA_MAC_INSTALLCORE_ACCOUNT_ISP', 'http://isp.lmdelivery.com');
define('LPA_MAC_INSTALLCORE_ACCOUNT_CDN', 'http://cdn.lmdelivery.com');
define('LPA_WIN_INSTALLCORE_ACCOUNT_ISP', 'http://isp.lmdelivery.com');
define('LPA_WIN_INSTALLCORE_ACCOUNT_CDN', 'http://cdn.lmdelivery.com');

/* Allow Unfiltered Uploads for Admin Only */
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
