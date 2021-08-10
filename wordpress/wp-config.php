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
define( 'DB_NAME', 'exampledb' );

/** MySQL database username */
define( 'DB_USER', 'exampleuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'examplepass' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'SpyGh2-G[44@)e2GEyTA#wjTIlTD&, 8MLK:Fo|0~{A1;?2(Zu)>8@*d2{Ta-,qf' );
define( 'SECURE_AUTH_KEY',  '][!?JlKXPD729]=PlT;.w`4)~#R>a>%5@1f%>99MiU>A!yB?p=v9CXN|:tJ@`*Vj' );
define( 'LOGGED_IN_KEY',    'a}ka/Qz*b)iek*uG&`8TxIvnT(|0fs91@c2KYVLlq*AW%#O+M?nzVy[/+,+P>NWJ' );
define( 'NONCE_KEY',        '6;ew]vrfl/7cGp-Gn6JoC85S&DcUse)* Eao{jjQQ8f~1utn=:i`?HzW!XPR}Af>' );
define( 'AUTH_SALT',        '{s3Pn=.4QtJ&hZ9whlVNnqj,#/</B/IPfg<*vTL*8I8<Wc)Bs,N |$@V->Zir=F2' );
define( 'SECURE_AUTH_SALT', '0iT8OXHd)H+zP$:QlD1/H#ifL*958a9K16RiXnK(Vt+a3T7UK%JmJw^XJF8G =yn' );
define( 'LOGGED_IN_SALT',   'IRay{elKO1J[C=4|Gb`-07+I!QH6$hy5^4MbRN&@Lt%L8AcN%Jl(C6ra MstWlkJ' );
define( 'NONCE_SALT',       'Z#;bhm1{W+:AMPm:oXB#,J>v${~gQJ^!V3Ni!1F06Tufth}~[8<[-3i=_`|^GJNB' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';