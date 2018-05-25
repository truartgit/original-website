<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'truartsi_wordpress807');

/** MySQL database username */
define('DB_USER', 'truartsi_word807');

/** MySQL database password */
define('DB_PASSWORD', 'xBxhOG1JpW73');

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
define('AUTH_KEY', '_PSwh={jp?cM%@{>Dtl}-oEgyx]inpq|@iQBREWs]@;HiJay*guX$eR=JGy;e%O(}yk(J<RW$nT[ALUsyRHmOH$Thp_oggtb*|}+</gntwYyg-n-tMbgfMMz+H?)jUWu');
define('SECURE_AUTH_KEY', 'yr%RN%J$j^KMmudCXF^?r{EprJ}{lY|sEWQfp<rj<[g|h-CwT@lT-FTF$sMtJIeyIYyBqJkZcQJ%IP|Daw>_UZ?_ZEwE<@aPtYPvJ(@;wx!_BTOGVH>?n?E(p&GeNf+Y');
define('LOGGED_IN_KEY', 'AUasor$r*|fWGNd}O-vnqRV%}kZJ*z-A*SpB{^G;ylcg%uu{FIzTm)Wl(Jl/g^eU!XqqE[vS>OEe?<{f/e)?B/TbDttU&MaO!L;i!XB+gk%$UqqE[&aHMvHtbC=AY[Nx');
define('NONCE_KEY', '-Ic]{bFACPl=Z%AIDCBIFEOuobT/ztUQ-Obq]/vB=lX;GRUSux+rc;Ny]rgZ=xO+G]E!fd$q[jze+dN%KQ/%sJzqE>>;MENA$iKx;=Y}!/CCBpsxEmoer&OF)==@@dRp');
define('AUTH_SALT', 'a%vIB$byIf])is<dz+lF$nWJuZL?KTR(_rTmbqiS%UR!;JuyvEAA]mzsiIKRFVdGrPR@s}<-TGP-Y<m^AoTsuTiXD-dpCpoSoo[b?oOENacqO_hvE=-r$hRS;Ozuz%?)');
define('SECURE_AUTH_SALT', '^o{IK-qf<nHUEN=LRcoV?!S?&SdgaicMUCFDuMTF[(]D?hfqLDPSy|ovXae^zDVwO$caPX$hK_jbPB|m^)Xvnwl[W=kkUj%wM;gV$Qsewb]Bj*mEVKI@KA>!]ME{|>?+');
define('LOGGED_IN_SALT', 'VWWpmDgCULyOHLHnTiurb%cPNL*dK[WaxFN_c$Wo}-+fgYMAk|y}Guof^};sSOiyWH!g;ffpLkZ|&@l-L{QpE)nT<sebGU+TGsQjS{=fylK}dO}ZUFW$)I)aVt@tukff');
define('NONCE_SALT', 'iHkyn=Vzq[kdU_ZD^q)W/IMqA)l!JMcR*n?|!G]mdfws-Ow/Zb!=&rSSj)Sgl+!LhmYXg)Xc;RLW*avTvvT@B|e*=H>aE)JOXN^bNf;X*BSTx{+VI$RT{i|TpW)BSh-i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_rkoy_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
