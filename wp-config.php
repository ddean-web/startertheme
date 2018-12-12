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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yLJ48uI9s/9AA3IZbbb3n8lpusBzesYTlAzcAx2hGaybNm63n0MTg9g1W4XbvcuA6BoITK7eQa6afuMXut6ZGw==');
define('SECURE_AUTH_KEY',  'N3WhHSDVWgO81PC0DFoV/lUxo7TMOGxUUu++8RJvyn/67cH7LWW2UVFQ+WHBK0k+a2w6qXf2wZ9uGhVZj7dDsg==');
define('LOGGED_IN_KEY',    'nLBqvWhqas2lFUjwY16Xpg1uHtMh0MGJbagTAXgySYSIn4w0kcvMmkBTevK2K7/4TZH1QD5HFMkjj0d3x5A7XQ==');
define('NONCE_KEY',        '3EI/FAOi8OXO6jTTuYRZE+TcDFUvoWsWWNR2LLiIrRoqUegqrnc8gkz7+4ZDK43qdZ61TW645I22apdbVvW3kA==');
define('AUTH_SALT',        '6d7iEVj9DMQfV9dqo1QeF8///3Xp00py0RW3NMze86G1EfBXUULXii0PIH+irSODRRPFw48XlQ7/QRSjYVJuCA==');
define('SECURE_AUTH_SALT', 'OkASmdWtlZHl91jNrQlwbDlpYVWWkPbFubc6O8M3wWjdbh2IWk/nySbmsOsTWYRTU20ENifHtg3zaerIukDyEw==');
define('LOGGED_IN_SALT',   '61NjW/iTVRIzVX7tkm7LHhQsglyY2txSR/NPtHLddlIbtgz7rxieDw7KWyjUt7BU5Ofc09bqOAQ/i+bsnnA8iw==');
define('NONCE_SALT',       '59OCdXzBA7mJKoom4/D21iV7iyROgo6N6yqEFtZB/D+tGWpNV6XpBT+LvhU3xfI7J0FUHLFxAt48/L0sxnCnEQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
