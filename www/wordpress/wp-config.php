<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '3{w&U{BeOb|F,t7~=u.}dswSgRJg1-|T{,Pc(B@G=Wg^$X3=|I-4@Q/m|rZtNMd0');
define('SECURE_AUTH_KEY',  'Mz<2i:vKsJ_ArqAJr[k|KHok6`Fkg5-oY{ps!PV+c?46/){~|2cKyOi2*;Y:O7Cf');
define('LOGGED_IN_KEY',    '){vE9Z=|s%KFL#eu!n[>T~lxYIMAV<yVpqJ|S-+-dM@6`PS)XIBDtJ:8vA87amF9');
define('NONCE_KEY',        'v>y=-f~s WRL:i|<#NH,6q4ho;``xSlOyKxdn>y3Z:8)O)+!Yh}&I;g`*I{wHv|_');
define('AUTH_SALT',        '6xmC#Y hpm9:)VGiH2 UjAZ4S+Lz@dGa{:?LKD}|y>lM&+e?*J}J^0mS||wy!CpV');
define('SECURE_AUTH_SALT', 'Ae`DNg{|q-t-+bX]F#+%2Q?$Xg7H|VcBP+%&.3A(:8kbx<fth+C`OL_MM[g7gi:3');
define('LOGGED_IN_SALT',   '`rzn9|jzCV*YC~j=F%|QUXk{}r/[(j_7Tdi0H<Vh$L;Q>5K3}MV[?=hh1>4ta(Q{');
define('NONCE_SALT',       'sc3z%n/|jQH(U0vh])v4Vd+6iHTdKeJrn~|{>XoR+GJO.QEEi%=C!k2B;-RFBAz1');


$table_prefix = 'wp_';


define( 'WP_HOME', 'http://vccw.dev' );
define( 'WP_SITEURL', 'http://vccw.dev' );
define( 'JETPACK_DEV_DEBUG', true );
define( 'WP_DEBUG', true );
define( 'FORCE_SSL_ADMIN', false );
define( 'SAVEQUERIES', false );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
