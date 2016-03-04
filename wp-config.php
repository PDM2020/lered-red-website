<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'red-bread');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'j[iLFZDFHoyz-HdHF%SlHO^H#DZh`CW&&FGUq>TW-U*S$[re}-kwA6FQmZkx_=(U');
define('SECURE_AUTH_KEY',  'FNJY*Gm%mr51xH]OZg{yi{h-Jr;|$VbZegsza-$)p6nBsRwr#[RxBCM|>DXqw*lt');
define('LOGGED_IN_KEY',    'OetopwwlNB!HX]r{5b*/m+fg?i|+ulKCU4$^G_CDI~LfaJ9|Z4r31LN|:gHR+f+?');
define('NONCE_KEY',        'by&,zXa,Av/QI)w5UJ3v*Di$^Gsvy-1,e]m*j^b,b}V+n4nmX|,D2#$JU_-}8GYV');
define('AUTH_SALT',        'aS)*b?`Uy4m}E3H2}stup[.j-$Vmz`N?FI@A~p:MXZ!E=L^FnM+~~oFJ%QyBc[X9');
define('SECURE_AUTH_SALT', 'oOZM<pI=K#tk{3,$DB_XM}kmu{UT6cDr3g%0%O6|yD-.O]1}#{{e>5 }3<Igb4})');
define('LOGGED_IN_SALT',   '~d3G>):<if7D^@* s1pqdU/}K5G&._-+UKD7e~Kb440;L3a>b,[1M?bX|[G&K/KW');
define('NONCE_SALT',       '0oa~!r%^b.HqIm)7|eLd1-miK^t#WFa$Fa4+Teb&6m]eFcY^FObottGD-&[Yef:C');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
