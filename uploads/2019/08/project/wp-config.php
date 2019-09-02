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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'taichiexchangec_s4kd_dnilbdknuxq' );

/** MySQL database username */
define( 'DB_USER', 'vfgoddmjgdykvkdv' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zvnpcZZEZriDf7f' );

/** MySQL hostname */
define( 'DB_HOST', 'taichiexchangecom.netfirmsmysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Mu&nBRa_*0B 8hoSzj6,THpOg;#n3`{!Ogc||9QsM*pZ2dxM`^sk+fu:DS1ANYxP');
define('SECURE_AUTH_KEY',  ' v@FMmc}Za]LZIVh/|p((t-5Gq;vWInd{J@S{Zrm[B@cI2m>~(w{fsdszm=)|y3(');
define('LOGGED_IN_KEY',    '|;ZgNK>Q@*%dwwi4LFrJ<=_e|.s5,:bJ#J}bU,.?+idJeP0S5[Rli#K-DO`->60B');
define('NONCE_KEY',        'ez:XG8B=-@zC+-HR!5xVDP>Imko/.qfnZ+Fa)kLJb`DI!Om$0FCk]&Bs TaitwQO');
define('AUTH_SALT',        'iA6??RlYIpO=4S{k7AC/z0d7Q~J6Z ,vuv4hf>w2f!2I2]dKVG-sUt|B[rn3,Ku+');
define('SECURE_AUTH_SALT', 'zg]&4:9cr8EBj8G<`#}B?/k]K#@^+D-quH4dJg-l3rZ FV]*ukt@QQ=aKNu&2k?y');
define('LOGGED_IN_SALT',   '@mQg)n+B</x07}Y8o8u80+DQ(W+xG>hm#&<OGVHV3KPT:(yRVvjk3G3R>vEPE,c_');
define('NONCE_SALT',       'GM]=s[v_Hq)GWSl-+1xZ-iE~. ZryJ@6(G|U&ExQ:4h7$D;suvlN1+CQ<}!I~xR`');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's4kd_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD', 'direct');
