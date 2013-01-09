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
define('DB_NAME', 'cms_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'cms_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'w0rdpress');

/** nome do host do MySQL */
define('DB_HOST', 'ec2-54-242-149-62.compute-1.amazonaws.com');

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
define('AUTH_KEY',         'D-m03_(s[6Mi=|g>6Mg*EnIe{eB:CoDTO_AQVwTfkbY-!0YqLTyTDHy<f1bL.v!d');
define('SECURE_AUTH_KEY',  'h}tikU}Q6(+9.0JrCiE8D-r-Mafa<B?$+;(U._Iz &m%zw:/BWsHzWn,6&Be:#I]');
define('LOGGED_IN_KEY',    '$b| 3$^lPp1YN48|yy;U);)I3)qt()ZC/P#u&tk&v@*JNqxcm|/VqA`K>s[D U/P');
define('NONCE_KEY',        'lZA|u?RN[5c:.vZ3nb@L-2/-Bg=m<%$`n8%^FX7gJFWxu^?Y!K?nNef(ww$/j+66');
define('AUTH_SALT',        'S02:( v?fYq32egjA~voHC.g<i@RC7i+?RSt~T=VH]|,82ODAZsRa@M~Jz#8r).Y');
define('SECURE_AUTH_SALT', 'Ekn[#):,mf=2 T40FRi/R:-$b*C31 3w!?/5R;Q4}*gAc JLh.mx-sLDE-dnBA$~');
define('LOGGED_IN_SALT',   'C5jv;}6Hhw1c,D[E>@?eYa_r+>qD|S6EHXkZ:O]{LF2SH&+|te/AnATU2=b:Y/^=');
define('NONCE_SALT',       'M5bzhI1uJfLg/UZill|:|xczuw v~sVUuN]<+W]0mow]CjRb8W:*,y4Fs11+m38J');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_cms_eco_';

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
