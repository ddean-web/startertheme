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

/** Set the HTTP host when running things from the CLI **/
if( defined('WP_CLI') && WP_CLI ) $_SERVER['HTTP_HOST'] = 'local.kingkombo.com'; //e.g. local.redolive.com

/** Find config file or use default DB config **/
$config_file = dirname( __FILE__ ) . '/_config/' . $_SERVER['HTTP_HOST'] . '.php';
if( file_exists( $config_file ) ) require_once $config_file;

if( ! defined( 'DB_NAME' ) ) {
	if(strstr($_SERVER['HTTP_HOST'],'redolive.co')){
		define('DB_NAME', array_shift((explode('.', $_SERVER['HTTP_HOST']))));
	} else {		
		define('DB_NAME', 'kingkombo');
	}
}
if( ! defined( 'DB_USER' ) ) 		define('DB_USER', 'ro-admin');
if( ! defined( 'DB_PASSWORD' ) )	define('DB_PASSWORD', '2 million dolla$$');
if( ! defined( 'DB_HOST' ) )		define('DB_HOST', 'localhost');
if( ! defined( 'DB_CHARSET' ) )		define('DB_CHARSET', 'utf8');
if( ! defined( 'DB_COLLATE' ) )		define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i3x|w DiC:V!>o=ln|Y<4S:3aqNmj(BGE~Dw$I(Y,,V4:|)c0wla$z<l9,4Sh0*d');
define('SECURE_AUTH_KEY',  ';wHo<:)N+l%,v^;#q,.&5*C,MP#kYIpc61E! 5c&f8>Ru`_v?m4z_GN+HCi]U4--');
define('LOGGED_IN_KEY',    '}EIT:me?,a5/Uki*!t 0<[3)Y^3c!Y+{$iGT8y:AG])wJd>MLsV|D|OPl}g,]mr#');
define('NONCE_KEY',        '%{s~DTzCagZ|G|8vU-=zq>BK28`qJ<mzWh)$dtS)cf+751-?=U8~X#A|w4L|GWaL');
define('AUTH_SALT',        'O+1NN#M_4eZ,^GQt%`b<zUJ,408fC{`Z^*36LSa-Tjm-Rc0~g`TxPi=kSy k_`>{');
define('SECURE_AUTH_SALT', '!pu#xGzXl+g<3<R+*4[66Lyy#uaE+SfwC}a8cr.UH:4ylfwQ|_q#e/G?-gi+c,*I');
define('LOGGED_IN_SALT',   '[/UU)/gxKR1lbgiW  izD_MTT&0mC%~~3J7vvKt%r-ndv8Bvx:MN-1D@$Jg#XHra');
define('NONCE_SALT',       '$iW+cPPOetvGMe,<2&#sK!i7p<[a<^qjiSe:O#u8OTy$[rmqji0mU+g)Gx:/*[7Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

if( ! defined( 'WP_DEBUG' ) ) define( 'WP_DEBUG', false );
if( ! defined( 'WP_DEBUG_LOG' ) ) define( 'WP_DEBUG_LOG', false );
if( ! defined( 'WP_DEBUG_DISPLAY' ) ) define( 'WP_DEBUG_DISPLAY', false );

$protocol = isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] ? 'https' : 'http';
define('WP_HOME', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/' );
define('WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
