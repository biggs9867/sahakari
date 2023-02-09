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
define( 'DB_NAME', 'Sahakari' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f2tKvmtq:ewC$E,l>Mwyo]JgR,/m=39|, ~XgKrAc^F->&GK0Umu0+{npj!Y[uia' );
define( 'SECURE_AUTH_KEY',  'p2SrT~aQ_K6~yz>E-Uv8P6TOU3.599~;m#Xu4Q{9/SwKX>#$DHUTGKks$pX@31F.' );
define( 'LOGGED_IN_KEY',    'RHK,,OZEs.j(HQh&=thk$]KwKpng#c>6so<Uh:JZ:h_,0_b@6&a|<x<.2#3<%5zp' );
define( 'NONCE_KEY',        '1U57s1J(1XTe=}=iFBc4D[7TUKDCp LZ)6vgi3P dFsVUDW}s}=%NSH+ 9cY7.wz' );
define( 'AUTH_SALT',        ')[o}nU^7z=OB E:c,ap;N^g.&c.3y^@Y`:AG^?Fw$Pqow,a7=GE@u&`_8bkPx/n`' );
define( 'SECURE_AUTH_SALT', 't&,[HF$&=yWv6T9Nq3|5yks(lY[>/+z#Kd`{&6DTj$S?Q^HXkqTd+TcRGkiA%{Nl' );
define( 'LOGGED_IN_SALT',   '`jLrZNlq=FXt#N}Ek$S|@Q5H+F,D62XKf;%?K$uB;Bx^$))LgZT8^SWHo3Q<B,@s' );
define( 'NONCE_SALT',       '!g_qylMxSK0)%cc#7XmF<%*jD4tJ%FHmG7;$49nZ,yd%.F<s!8F2vBQ+5:C1OM<_' );

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
