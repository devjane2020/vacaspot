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
define( 'DB_NAME', 'vacaspot' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'm-2,08&11%eX>a~N&eA`1.II?NV_;mF)IT|4adJqa2/}DHT/ua=W{B?NGR(GoDi>' );
define( 'SECURE_AUTH_KEY',  'i{!Br3Nv8@Q6m3!CD,s)N1XD~C$Cb8CVq[9yfn;0BcuG+FEqEP@pUhqw]?Oq)!Rt' );
define( 'LOGGED_IN_KEY',    '-$[wFv7tgBY8(gTO>S+1*@VX0#vbuI1KI-5nL6F>f>rk[Ocf*SE-adA.N5o(]{.%' );
define( 'NONCE_KEY',        'IhY6LTavc,~k[1$SJ>_)w9W(a}8TskS-lI,; +]{0~;pBL27`&q<8  @D|N2(.~@' );
define( 'AUTH_SALT',        'Bp_n+HB3v%?|@%wyS!e:NO!!KtP@{!15WochoW4}M2OQK/w_a}{XSr9zE%BMdNI~' );
define( 'SECURE_AUTH_SALT', '+Qmu;EJA7>Ksh^8)Y6{)D@m tyS)vkU?!+8&+Gc&[E5Ex4t?%XX SO=09VSIa{no' );
define( 'LOGGED_IN_SALT',   '*uMoZEiT6tn@o`g2BPJuOC5t%4Nwfe$#wW{;bIJC5HMY<f$Z3(QRmz@5mC(4Ns6w' );
define( 'NONCE_SALT',       'EM.fxP!PD+kKyk__uH[{d{i?PxXEp-ImG,<H Eh+|ZOR~+9AO+$}JYJ ND7D:kHR' );

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
