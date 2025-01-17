<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'gr01-veille' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S~ubblud]7#7=.<o`Qbn@mA0.1E9O`o`^>GKTH_8QJnJ%kEUUTyVRMIFr6Y_tQPX' );
define( 'SECURE_AUTH_KEY',  '.x(#3x.?:60_qW<c^,htc*By`I$G!nD.g>d(s5lJ#9$i[$40XSpyH}_abEanbVYN' );
define( 'LOGGED_IN_KEY',    '4|%Hio/`Pyg9HeHh3;pjvmRU0s+Ay|[qjwiA^B05@*5Wriey@HAuDCr>sit,/j/F' );
define( 'NONCE_KEY',        'QBeIgJ)t~|R#Er^KJ&.5NqOT54h4zbTKu7/nY.(o4fa>VX*av=?qr#%}; >A,[aI' );
define( 'AUTH_SALT',        'I6(7^^e!KX>T[*Ra{.p[4~F(<kF:$wU+;I<h;Iq^u8P6ltpT1{iR{Q2PTeK[JZ~r' );
define( 'SECURE_AUTH_SALT', '2i>E90epbq2sw5vV_vm3ZQ8Om6KR1=,_[PD/z$t$| /<n7s<z<9^U_Pt]K~5 A=j' );
define( 'LOGGED_IN_SALT',   'kK<.S2B)o`c2Z,m+ }ix|z,D27h_$_w7}>%xD mMMj<FL.@]yZbBJS&Y|NfKmo33' );
define( 'NONCE_SALT',       '$-H!5P3+!OHi,y_ea?F83+drTF5YYohUus^.A3/$f2_Uo]R4odd0Riml1lOT?B[(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
