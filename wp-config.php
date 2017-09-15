<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'traduversa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'qwe123');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost:306');

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
define('AUTH_KEY',         'Dy4Lk^fT~X;2_FaGL.5-n8NnE65?:5N!*#rTC$&UP)n/lMGx@g2E9$-4~Gs]>c^u');
define('SECURE_AUTH_KEY',  'y!FnQL.nAkv^@q8=eOcGxPq<6?/>JX-e9Z[.x$0N9Hk}BP0(e] 3)1Je3:sXJ>I(');
define('LOGGED_IN_KEY',    'm0epGgtvS`C7u5fEr+=-/e%nqf@D5Q5u]K<TXc^80:Ym0_S65M?c;[tBtTnR>%dz');
define('NONCE_KEY',        '.<cifU/$:+]UL3CE1.U{]Vf? 0sOCD<`X#d/^|oSn8i7jj`T<3;N?SA*2}8X%1SC');
define('AUTH_SALT',        'V+03}{ly V?):P2,r^?@nKkeI|npD33)u/>;yjlIw)*:Rx>6^qeEZRfQ:-z8+{D6');
define('SECURE_AUTH_SALT', 'xQ9CUPZCf@sc^+S[nk]I-)kgWY:9&9C!<k^X0E)<nfQ9PBQy]<IqI/o5^3bol]Q.');
define('LOGGED_IN_SALT',   'fn7Jgo>Z-q!bu8w^!:v([GsNJL-%|+6_O-I6|~@Km[7MWHiafNw b=`g_c{<vK,E');
define('NONCE_SALT',       '8v5ZhNfF-c|0; jRT9mGy|sKpsJo=E7Z URNw,bd8a,IPldMznIw{+_|mu~b+c3<');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'td_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

define ('WPCF7_AUTOP', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
