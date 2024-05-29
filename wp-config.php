<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'User1' );

/** Database password */
define( 'DB_PASSWORD', 'Bulldog323' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-f8Ip=ENGgL*!(xe_Gk1L>4T&s Ygx#rbT%~X+M]aB&/9cdMX68$10R9Cnt|Gb~!' );
define( 'SECURE_AUTH_KEY',  'mi Er9$OHJWu/ic&DYgB`0BukKE!X%NOHsT^Hm?Yq~#t$>u0=KS@DvwRtpRp!w[B' );
define( 'LOGGED_IN_KEY',    '6a{bU%kP{}KcjTL^r1I92M8G%v=8-8MIP^5IJB(CLdRX=[JB+(;OU^ecU@SiBwlx' );
define( 'NONCE_KEY',        'UHTe_F*-)y7(nzw7#%^}3)tSR~M;BIN{>HQ..v_&4,19eO6M#Dgy<Fg>)ASajK7R' );
define( 'AUTH_SALT',        '+n),8H(7o aN@2cS35i/;@9QL+;I;t:[@p-HK@weNo40g~mBO-8L@j{`#By8k}y;' );
define( 'SECURE_AUTH_SALT', 'Dk;6@Iwfl9@*SBV*!nOf5p6ge2:>IuW1S+;KEP%ph:OJMxg]pOuXFS::4(2,p}Za' );
define( 'LOGGED_IN_SALT',   'eqKBm:wSbArE:.yP<Mvod+00?IyapUS{er<J}YOU/OvN:} bszl3 zn]x;-6{j_t' );
define( 'NONCE_SALT',       'P~nfAL>A%^-zj0Zl^|+.vxBXOz]pz&E-I+[UcScVmQX/Gva0,KS2MFwlLbB5!1BL' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
