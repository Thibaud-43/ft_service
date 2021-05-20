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

/** set the site URL */
//define('WP_HOME','http://localhost/index.php');
//define('WP_SITEURL','http://localhost/index.php');
/** Fix to get the dashboard working with the reverse proxy.*/
//$_SERVER['REQUEST_URI'] = str_replace("/wp-admin/", "/wordpress/wp-admin/",  $_SERVER['REQUEST_URI']);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', MYSQL_DATABASE);

/** MySQL database username */
define( 'DB_USER', MYSQL_USER);

/** MySQL database password */
define( 'DB_PASSWORD', MYSQL_PASSWORD);

/** MySQL hostname */
define( 'DB_HOST', 'db-service:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_ALLOW_REPAIR', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eo@rSm+T(+3|q^m6VX&-T3~&VW8pSx57YW4!3w:/=7&[+tF&dJ7@[j e4wog[?p<');
define('SECURE_AUTH_KEY',  '~+>)e~vLQ0fX6]_~3$];v_J=|NeJ7$Krn+L J]ML6|:fS/T[[aQ@wGBA?Q*=,dE4');
define('LOGGED_IN_KEY',    '-;!<}m:^/|~@MT% =SyGa3j&3(Zu+Wq+8]U-E(>1S@kp!LdnHX7mB-q2_?TE|3+T');
define('NONCE_KEY',        '(@o%!#CtmcwG/jqR&p+Jdqd&[9MBKTGn/{p-s~D<O={jm{3C]Z ?/c9:aM59xMQv');
define('AUTH_SALT',        '_|bQ[m)]RnPWCKy5o`$sWjh~S|M=G81e7cU|-3+A[iQ2Q*kQG0`[-!$uh~rI3K8;');
define('SECURE_AUTH_SALT', 'T0$$T`$fKj~ng0/EP-X+85fn]iX|VnAMu9.XQ19y+Xx}!Lue{|+gh(1zhvfW|QH+');
define('LOGGED_IN_SALT',   '[h--+gQ5;e>M:6f+wf4l+j.H7j?D(*W/[,1FJfnLq]e/RLc<=9KqSsuyI#j?!sTu');
define('NONCE_SALT',       'm+-I,B>lcH-hsg.e,8C|fQOhblJ x|b$071c-.1.,UJf/9)T-`?qg#PW 3>V[TYS');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
