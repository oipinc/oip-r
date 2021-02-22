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
define( 'DB_NAME', 'oip-r' );

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
define( 'AUTH_KEY',         'W6Lc*NpciDT(kC^5gp3T/9&O,kaSXUM0*TT_sTC3ln5LwnvUr>H|6RWe(c;Ecn#f' );
define( 'SECURE_AUTH_KEY',  'MB(iA@Luf`!3(b)&Ut~M?gW&P[4{&!L|DPYYM0[P2;2TTv%<CYLphvsuH-zkP2LZ' );
define( 'LOGGED_IN_KEY',    'hsPRYyY@l*Av`Zq9WPgEp+5<v?O:1ujn[9y03k:MB-;#sgaUpusds-1d;]fwDpv(' );
define( 'NONCE_KEY',        'X@XmmUeN k7V#kHQ5,q9>Yv4:THy0+u!fD#x$Hkz#:F7148p<Zw%XFhI{h6?8W}[' );
define( 'AUTH_SALT',        '4fWk]X;x1|S4Li6@0L/%o1|Wj!s_ikW=Nftzsi%Xx~jvJ#!)/Y:N9-j$n^T9*j>p' );
define( 'SECURE_AUTH_SALT', '6lB.!>IbN_A_i>KtXaQ-]sYku~cxL1b>+-;D>,J3o<.n#9K~JUI8Kv]N.nAuVr^6' );
define( 'LOGGED_IN_SALT',   'Qg#giXs@W@VeJk5%k~t^T0{?j| ;Mx3ZiS]GR]IpA2gitQcz@cnp+IzgyHxaD1`I' );
define( 'NONCE_SALT',       'L+m`Q(Tp1P:`7!o`W:y/<v!X,eVRKn9l(dwH!5Kqwd#T*<d/*!zlj%?{yc);%b6Z' );

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
