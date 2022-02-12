<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'effy_trigma_us' );

/** Database username */
define( 'DB_USER', 'effy_trigma_us' );

/** Database password */
define( 'DB_PASSWORD', 'E#@g45v#@d12T
' );

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
define( 'AUTH_KEY',         'xzSUCx&mug3MMKCXsw]ra``lf3=eiq![@>eO}{lEGr (&K^igk!m1gjE&|ZRmhM0' );
define( 'SECURE_AUTH_KEY',  '=EG+}SY!6/Q(]z1z<32Na4/JQ_X~eo<TE3gP!W8!-S@Po--VdW#Q<oHLOb6NbC:|' );
define( 'LOGGED_IN_KEY',    'cC^c^HPP]9=RfqP/~KMNVoC*K+7ab2Xq;En6y0-!h--op!-T_c7,K[]dqm>+~M2q' );
define( 'NONCE_KEY',        '?.3.<_E:N+Pd,.;LAL6Q27qr-!z*Hrv@c.O5{3pVfqhXX S(Zf?!5qkZ>age&0Q4' );
define( 'AUTH_SALT',        'ygg%/Mbn5]%!c]lZaEMl$@p64#$I.l-33g;rsEZJf0@DHl6,K~c#nzlh^B!p^H|z' );
define( 'SECURE_AUTH_SALT', 'j0{l:z3LkB@L$oMPLN2<];~PJy|CU<Io0;`--L]5cVf|>O{[$o:wM~dNzH}KW*4w' );
define( 'LOGGED_IN_SALT',   'so2RMvk$PTu0fb=K+od@q)j%le,*;RjqC?UHH6X<_H6F0.]p7,2liEev%`.;Qdg-' );
define( 'NONCE_SALT',       '2G-hV8:MFA;somGs},vl)WU@_h]1ZP}f$e&/4h}>|oSu+E0}.6r2t.z*~<{Q.-_X' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
