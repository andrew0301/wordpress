<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_user');

/** MySQL database password */
define('DB_PASSWORD', 'aJ2001&mB');

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
define('AUTH_KEY',         '7xmfVHnObuag(HoX1YYkgvTe8dG9&!XfB#@VzS#kCkadXr1^W7KTI^h7ehBc7kyv');
define('SECURE_AUTH_KEY',  'icFMMz*DmS4)ufipxa9yHRS0Ey)L3M55UwRUcDQh(y#jQ0@ReTK@)#w&PU8OrA7D');
define('LOGGED_IN_KEY',    'MvmRQiIc^oVSFIa533BHI&dV2%A@O1eWip9JX#)w*3B0TT2O7MrDzzJijXS&52h6');
define('NONCE_KEY',        'QxGS*6wDg2YAjD6glEJaeR1JGa%i8y9wU^w9XhRJbv(Pm!Ll@ecg)aSgde2duo%%');
define('AUTH_SALT',        '44al^z5cvYNYrOm5Q24VDrg^n1YrnfWggt^%kAamm7YvFH8X#IFl&5hwi^j3KdWe');
define('SECURE_AUTH_SALT', 'fiihGSa1la%k*jDYpy6(Q3fj%9jWTe!6Bo^rDiJ4X3EClhds#GhOVRmsD2zD40G%');
define('LOGGED_IN_SALT',   'L7PznJOjZ@y(kg1(%U^5RtcSD%ePMGVlh101UK4x!T2phy2u3Z2ZzcFod*rh8ssD');
define('NONCE_SALT',       'LkrXKQHjU5RFrs(i@LzaHtryXmg0aIXFYPiwBm)sfMJ7n&70Yz@FUbwucXygc*pC');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'af23_wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
