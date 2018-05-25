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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'truartsi_ss_dbname758');

/** MySQL database username */
define('DB_USER', 'truartsi_ss_d758');

/** MySQL database password */
define('DB_PASSWORD', '6Rs7NL0qDGta');

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
define('AUTH_KEY', 'myHp+l&d<qOOVXaikX$sCX?X)@noEyR=-!vUR!KgceLv[sSnk)p?LlqIY*yMZRFNvEsdp[]p;TManFKvqHPzp-lI(jucvjLPNUf&Tv&pC[^<z&WF/Sh!}-ugSwJsEsSL');
define('SECURE_AUTH_KEY', '<zJVQPqrnsK&Nf?VMMeL_wW]NNbzBb[J-deGrQmb/z@$mp;Hr;ic[p=-%i^RoK?wVUWdBY$h|rw[d%CaOtSm|Vi+qdv}NEezoy]_v>+KY;ozvoQVPdI(huCvxJ_qU>Zj');
define('LOGGED_IN_KEY', 'JrqJEHVvB]EhBJwP@&[(&fk!Spn&SJAaZi@]G[CB/I?}-JYx;S*cRnl];qX)Ku@ynYK@qaLf?MdAr;Bs)}L>NOoP+OMjb;u(XE+XY(j&;TCDjbVaqRPJYVGHIAE}GKsZ');
define('NONCE_KEY', '!vgt_eVJtcY{]DC^Nh&jfa!c(PdRTdhND>sZA_]]WzqM)fe|d^|&odU^/Z[MFpi|WQhq?Fne-?>y@&fSebE;xjI&P)D])UBybHzX>w^OcT<)dKtVdTl|RXyQpz@}_qV$');
define('AUTH_SALT', 'n-guxMht!/@T})&NRX?j!e_RU-U{plQ?/fJ_d*+fv?smxrO;]@(B(}a>cLCq?uwwnQBklqm+-gLCt?K/f=oX!Ijp*CGxg^kiMCMFycZ]&w)M^??r@f+^wMytG_ED*a^<');
define('SECURE_AUTH_SALT', 'o|xl}T<j};>t(&QWZHYq$AnKX>sXe!eW%/YOSkSA/uLAXT?{o?pAhH??s/nAA]t@m}>/zEi>tMr?t&QXEjI-QVBooL}VySQ);}g-bnSJ_Gr<+cp@RSqc]&O-LL%%poIc');
define('LOGGED_IN_SALT', '+qrnF!&]X$^!GMya|GCGeXTm[@YC;|PzmQ[;ys$CqKDe{H+$KKx!TbX_h)cd)^kd]MgfpW!y-Wn;g@Juv-)A$wTWeQh[/[pZm-WFPV-JVSRCiwFX_dv$MZbr%C@VKyTG');
define('NONCE_SALT', '+GByCGCOZ!x{@][aqLh]lCq^$QzI=YbUGqiys)@;A[W)VHpzif*$aXWySlBz;i){)Cuy@/LpW/YXJFjewevLrD]Qs^+KalSq?+kxGF}uxkv=ac|Re&zr{ic-s&OJmv@h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qoid_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
