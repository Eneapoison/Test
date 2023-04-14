<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nyi,I&H1KkVIH?_qc/+ZIp!cr-UGYR;PlJRn%SZV&7H_tb?-H.U-7<dJ:S&!|~1I' );
define( 'SECURE_AUTH_KEY',  '}%AgloOG]h3OAIyw4%Jd|+KR=.sP(BTZdf`}}!]MeQlmB#72-KOJE+p$li^q8^XG' );
define( 'LOGGED_IN_KEY',    'Bfl0GPdH#6`]p#plx!$MW|~R=-4&Q$N`eNK%4[ZB;>3gHZP95:mZq*6lAf+Lru81' );
define( 'NONCE_KEY',        'RTDN3YU9qy,BD6m+F86Z7X!WbB}4~|JCcQ}M:_HX*6wRnlI 2Lz`CA,g?8Ffi^4B' );
define( 'AUTH_SALT',        'X nh8s$$i`x{@#6Ek+XEz|bWKTXd PH(H|Qr0=Jv(![1l}G;XPC;A3*+tBZ31//7' );
define( 'SECURE_AUTH_SALT', 'TW(ZVSW~^6P()eQ~HX3%2uP/c|1j*$t9{b7{*&5<T6;T{2a*PZQZIa<=%)fx.l-p' );
define( 'LOGGED_IN_SALT',   '!}gi-rlufuLTu-lGwOrx~^BrXU;G*o^!nll}j;X#2EGe@6;*MHyMbj[K.[xB{W`S' );
define( 'NONCE_SALT',       'J0iN;O8}dQ0M2ML+`9b`DO&5vkWB~#gvD%wy1.gAACN?WIGNd^$ZoLMMrlbtq%M`' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
