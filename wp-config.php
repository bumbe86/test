<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('REVISR_GIT_PATH', 'https://umberto@bitbucket.org/umberto/testgitwordpress.git'); // Added by Revisr
define('DB_NAME', 'c0test');

/** Nome utente del database MySQL */
define('DB_USER', 'c0test');

/** Password del database MySQL */
define('DB_PASSWORD', 'mvkviIQ!U12NI');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B;-e+/r:;mRL.x6R-as|(+~M*HR?]Pq@Ha$9C},=t~Nvw(t&2Zb.2L<(@OT9]PZ1');
define('SECURE_AUTH_KEY',  '!`[a5Uz1#z,8zqzo/,-npn^*VDuh*U#LE*)><!eU@bp1y%UOIQT1.e2sJ5c IBnS');
define('LOGGED_IN_KEY',    '&~Ru|6[R[1)RUUD8E|z?ab%1[{-vIfs&f]97rum}Gt+N5Z~)4M_LQ&@,4WH&+6H#');
define('NONCE_KEY',        '}>^L;PEr.d}&?i?:.0i||/tfj&VS26<(67 YCn#R-A+R~b=1ZT~Z -;~=h/!s=2C');
define('AUTH_SALT',        '.+U:UW#L+v)AvqAfcOp*(>/,=WvjqG9cIjw<_DD.2ctoG=3%13J^EY&d?-uC({,3');
define('SECURE_AUTH_SALT', '^AcA;++9N3Vjk[qt)r q|-QE(Q?DFWR?za^bv6>l5;,FW~KWUo5}-`xuX!n3~**K');
define('LOGGED_IN_SALT',   'Z~9+*Skl,X2^g?D|OO}KY9}{q/8+Kl7=:r#.>]A90*WQ4FcFP(MGHOdO&nV&Hjr%');
define('NONCE_SALT',       ':M2p:)p,gA`Si<WD:@|=h&mfG:@a-#Ia!XLl$-=Qo`!GVyKU|JBAn)pw6k%1K,(v');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');