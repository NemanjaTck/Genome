<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'genomic_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hUA?pUU&P`r8mUfcG1jYIp_-|]?K?b 9|p:oD7N>R>G7,<-7}_zh2i$t%H2M)P9V');
define('SECURE_AUTH_KEY',  'sY]&RyG7@~JMq5zw@Mtr*H!Yk|9PxI>+?<(MqZa,9E~4L9)$-GCPvJdf7U`X /pN');
define('LOGGED_IN_KEY',    'LUf1z<Wk_4T)W5-X<4-7v9_@v`6%RX:(}t8jS|V dc*`=/zc_>`hCK5)|V{X3We8');
define('NONCE_KEY',        ';_y}5T?(1R-Vl:$fc[}C/_1SS<Wd;u+W3s|HUo>lyNE?GNYUK%th=%PDdhNuv$/%');
define('AUTH_SALT',        ':ahX&!`dz>Z@7)D]:SAF]XIw!`|Mz^hQ?.|<K]5.%>]!^ugC$o/)o-q+a9m?Q@w!');
define('SECURE_AUTH_SALT', 'f8VtJt:brO+KkJIPvP*+%i14N26bN:(EO16}%yM`!Qu_|#%Ta^7|3iAXGg7?k<+/');
define('LOGGED_IN_SALT',   'Y[o0j=Z((V:ZR2Hz.+.(4#OPqHC:[8:Ie:N)vl ZxY3>sWvG57uL,v-FihDU]X[u');
define('NONCE_SALT',       '1-6pIa:JTf))?>[e[YDGb%wYv(lE(=d{HedYxRk,EvAn@Qz>kM1L^6.oK3DV3-)#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
