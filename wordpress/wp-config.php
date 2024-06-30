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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Cp FwtNzD%j=`5jUnB;<TV,R `?xG8E4~1<Cz&6e[S}=k=OEdvHPJ5Sd5hK-!(MY' );
define( 'SECURE_AUTH_KEY',  ']P-_HHY<!Iq49U0G!6F0bjO)[PW6Q_GD!2=j];Hb6b+^xidfmyogIi&JbpfMJ?>j' );
define( 'LOGGED_IN_KEY',    'H,@>L!=_Xr|B|6y-[LuxS<JOzuz@AP&s4/:z?PlS|JVEhO]$B*jV?gfX=qg%Ifw ' );
define( 'NONCE_KEY',        'oy0/U;(,R}y[~Cf^}y$*5/+K(C(xiH{$!U}a*bq`lvqt*2vzDp7VG-%!!WHQ3o(C' );
define( 'AUTH_SALT',        '$}9O &np(@::(a92,![Q/b?k519lUR6GlVqU_)9#Hp#Xm^A_/.yQf B28lthXT!n' );
define( 'SECURE_AUTH_SALT', 's<`^chK||1hF-6!@ONp=[7za`I}_G_HIe^V;VuM@T3i=QY41SeC,&fnv+8l93:8O' );
define( 'LOGGED_IN_SALT',   'Dk_[JC$#nSI/&@S[ko9w_Og=wA^WdsO+JS{Uugqh,^Vk:|1XO&aJ&H2j<VV$|!VY' );
define( 'NONCE_SALT',       'waugz>i?C~pBb^{_-J?>JLJfnVrI{L^nxH/w=s lTk{-|{#KbO;!pU{AYedP[wSe' );

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
