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
define('DB_NAME', 'truartsi_ss_dbnamee90');

/** MySQL database username */
define('DB_USER', 'truartsi_ss_de90');

/** MySQL database password */
define('DB_PASSWORD', 'ZTF7wGnzSnOG');

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
define('AUTH_KEY', '*_[b<p[IWk]TzZ/G-/;q(PbWQ]!lKYuXpAhwBB_XtDobH/?=}yXrhhSCOza>NU=x_U}mj+-U)Hqvx&>;P|*m>W}aZmwbOm{YpH^oM_br>/JpxbY-&UtSn[cygy!Ux%{>');
define('SECURE_AUTH_KEY', 'EL%jFJz!UnU+;Q=vJ?C]Vw@?x^!*k;G$pm/t-tu!Vfcq<nXB<NY-Z{q(Rz|RNcd]<uSe(>nfcKV!(=jfnGbl^Gd|t?hBEE{fkABHKI{yXCm^]!M=ixjo_WW[V-y{bK^<');
define('LOGGED_IN_KEY', 'c&</x>]f/M?}s@gkhf-+@W=hHFh>{PKt}x;f}visHd[=OpM^Sq@h*w]*+JUep@DN)y^UoxI;n{<^efWQ-Zf+nW|LVCl|i!K[uGX^K!nDW$!EY+kS%m%kb(ghjI!km|]N');
define('NONCE_KEY', '^a(Rp]ZJ[DbaSIxB&{pq+T>^ROGobxsYj-(gQu(WC|YM{JpDprYHn@gEPu}@m=yKfS?!D%aeA)(CdkDSE}Q&&fjCRT!B@fO[(W_@DG=CfPIrnmKNTWqgaE!Xd/ejRpEw');
define('AUTH_SALT', '*c*%jDg}-vTe+_(&*JWXZYADk_o*z@C[pKv/I<>-@+[>yqa@=/[g)&d*uW;}erF%}if+cQCU>{A-c<p&{w[_=WFWi}_R(=uan$Brm;pj!H$-s(BywLDqS[;Miz>U+YOa');
define('SECURE_AUTH_SALT', '?T%%tadNyB}PhvQVFYP*uVsrumN[FQV(PQMQcE_^El$rg;Vhb<yf|pe;BMhnk]|scy*|gWO@EwarWosGdJYy/;@eArH>r[wfsI[=*p_F(v(t*+k&/?-)MrKDYl/qkP&q');
define('LOGGED_IN_SALT', '&[Rfiew=+^l*PvuAD(oV$=tcSk<eJ|iPu%rmyPW(hvVC?Kt;YxdZM@V{wd&@D%mlUNh_SPFIezYXw{Uj$IhQEh|WKJR^)tL]QPjMACi_[!(nSdN]DFPS/=YDhvASIg{U');
define('NONCE_SALT', 'dtBv|eN)R[LsIcd$I/lZenh|DinT(GQ]QPG<txztjH&!HvHLR|!fmW;/AW?yQLa@bE<mES[v(]CGo}GM@q]^{psSV>hUFKD]XuUq$o^J??[eW%USR?v@?EsBiK@+<Uf_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_uotr_';

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
