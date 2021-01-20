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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'britnine_WPSM4');

/** MySQL database username */
define('DB_USER', 'britnine_WPSM4');

/** MySQL database password */
define('DB_PASSWORD', 'C=.5K*DMn5ezE3rTC');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9fe4eb537ea2d2d9759ee38e52df01f2f3a37c02afbe08a2aec6f26de06a73f6');
define('SECURE_AUTH_KEY', 'fe6c07853ca9812534fb03817a7313140f83f970a1d915e9c6b094b2061c917b');
define('LOGGED_IN_KEY', '9a276e948c75926c4df037a2f5893e61f647132af0f921425ed8beb46b8830b7');
define('NONCE_KEY', 'd1da38911eb81121d508ca5db818d1b7987afda664d179dc23f4caa8a545c811');
define('AUTH_SALT', '56161ee8a8bc7dda13a0a8790c554110b00a6a201e6b2fcd64cc861ac0254915');
define('SECURE_AUTH_SALT', 'ff9f8554ef06a3c1dca0939d90b6a7049435202bb00c8dd65fb4716b7b0f94f4');
define('LOGGED_IN_SALT', '1f679e14ab5e992d327a01ab85afa2e8c91d59e4026e325904a865d26c0cbca2');
define('NONCE_SALT', '0000a94cd24138fa87c604fd21fb477e4cde6ce7eea4f6fdd0ff59cbbe45dde9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BVo_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
