<?php

/**
 * As configurações básicas do WordPress
 * Dica: lAY#mkF!Oo4%2qL8E^1^&OKS
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 * Software restaurar backup All-in-One WP Migration
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// Solução do WordPress ficar pedidindo usuario FTP 
define('FS_METHOD','direct');

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'dbwordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wordpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', '127.0.0.1:3307');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?[nDX,m6JR_`=Lpsu(vpI(R!W~F*m*7n)/E*$9#rl+wIm}00+YO=tCNwn/VZ.}o@');
define('SECURE_AUTH_KEY',  'Krn;I+ZI40/[E,sFk@*.v[lgM;,?)V0nmH>M@KN[dJSJZOqC g/+w=qP0pQ>q:RC');
define('LOGGED_IN_KEY',    'Upwj]MNn,C)Eh20oBlldTZH[*XPh1t*g3hR7&XjHLM <-:L>XJA80(5Qk>.AZ}L*');
define('NONCE_KEY',        'X]b98UmssobAi. #C|].?RO}Bb*PjLl}TfK1K}SpdZ@u&vNi9^}y@~D&o?F+t!?u');
define('AUTH_SALT',        '{jY]3kGz(Sy_[NAesfw_71K2&ugY0~kn{Z3E#DOr+vTaPrRIOf6$r5cf*HDyMw)>');
define('SECURE_AUTH_SALT', '^^F>Zh< },c%m^[P+CS8a@95].1#!!-B6] |&0;+^X!pkC|53+p=kQ4QK!BYwjxw');
define('LOGGED_IN_SALT',   'f&.*ZT*&vX#o1k=.{Mt2Gq~G!)@^ZR[3Z.bZ?Q_/q?QN:<D<_E(35a@tEUbp?M[_');
define('NONCE_SALT',       '$LrVAANl*[`T9?d4-J(NL*RG}1a/ea-`*6~S0`u;sAW:bzCbcPxb}!8-j0:.sag6');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
