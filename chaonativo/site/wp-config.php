<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'allanjun_chanativo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'allanjun_chao');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'voras@');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U0QOk<_c`<T{)_><f_Sx!wYR(9E@@Tmz&wG`@as9IhX(j&q,;v!rOvkh#B-{b+d]');
define('SECURE_AUTH_KEY',  '~REz(fLKa]Sul+|GlB#]tT[~%$V^Z+;Xy`)T$3$vqHGrYil%lWJ]a|05?im$B._U');
define('LOGGED_IN_KEY',    'Lu`*B~|xqj:C.]yJ2CDJyZZ!5 /vaH[[,zdUrPU6ZW46SjSXvKqauw0|BKtt1#&X');
define('NONCE_KEY',        'H:0k&=r:~2tc/@ihx1mXEmtM>:>m1[Wx+00XSYvn-J2/~5{v_}07;OEx*Y-eMt25');
define('AUTH_SALT',        '~`-1NS 9XC$iBSJaa.>f-3oU )SwhaA`w{/?d+qIE9IJ~zf~z, mCj]a#S4Wi7ae');
define('SECURE_AUTH_SALT', '$>RU.}q*jtV(+b`-_Mx]f8{ Q{j0:YPe|Fl2~*^!/zI0Wf?M|I2E_;U Cjp[5 -O');
define('LOGGED_IN_SALT',   'N6`P1*_8g]yQ3ANIOdzvjv-4l-sf1(Rqp/9CI2fOP0Y-)PU7>GLVE|+# `g sX D');
define('NONCE_SALT',       'ljX1,W0&G;q>.|7Q(T enOziJo0rMSlsq|&=-fz3BTmZ!t~`}{M-7NvnwMH||;X}');

define('WP_MEMORY_LIMIT', '64M');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');