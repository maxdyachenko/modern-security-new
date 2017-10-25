<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'modern-security');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G_mA7@k{pd/&jjz*4|;K9gv,-z0d ~m76;8EKTE&]+V:5A*Ggg0`ab5e$K<cHah1');
define('SECURE_AUTH_KEY',  '*Q59$E0]07)#*$&_TJJ,O[A.)>.y]=3I:X&=,kXt.n !o2bpn]WhFf;BuF*[}^P?');
define('LOGGED_IN_KEY',    'M<xd;&UCt-9U%^c}sg~Aw0WW<duZ{^_Y+{>>;RX.3vqo!J2ep)Dn#X0d5cu{3LTS');
define('NONCE_KEY',        'RUr}sr%;orl5j%`s]]!I|~V6:}ziMMe !NdZplrQqlvI2gXB)4DfO@toTfDxBi@>');
define('AUTH_SALT',        'BTi))h0q*.a)Yfe946tcOE7x0do5WxEJ=_qO@g3JmJ`m,^9]!Nz1>uQ_tc 4bYg{');
define('SECURE_AUTH_SALT', '`xj[6R3`RcvxBa,]o0O(zB^2hh)I{8Ms#vEE*FDc#|-f>$/gi*i)yu`q)uk[wh(^');
define('LOGGED_IN_SALT',   '@y#e|#u*mYTv!URnlDg.%6L5_M;l%#teB1T$]h~fXX8c{!zOf8s~M%;JNWQ-V$sO');
define('NONCE_SALT',       'i3;uWF_#La${2JfB=nAb[LbvZe>&(59<2fR.$y_smHG $S:5i}iD%iW3G]_l|fE!');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define( 'WP_DEBUG_LOG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
