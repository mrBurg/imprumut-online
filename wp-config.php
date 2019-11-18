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
define( 'DB_NAME', 'imprumut-online_db' );
// define( 'DB_NAME', 'uakk02_fed' );

/** Имя пользователя MySQL */
// define( 'DB_USER', 'uakk02_fed' );
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
// define( 'DB_PASSWORD', 'E72u1*~Jli' );
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
// define( 'DB_HOST', 'uakk02.mysql.tools' );
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?Q/pCT-kj3>`qONv*#_;S{b=Qy)]tC8q#fdyzv+K|J=.<#]0mBdt|Z! k@B$F,uE' );
define( 'SECURE_AUTH_KEY',  'x^J>QZh%f.1Uy3i74eg?Q6}?T#]/A>F<W dD.IZT#lRnzDG5EMq*`c@-w~pF5VbL' );
define( 'LOGGED_IN_KEY',    ']O7,=5^~hEh$Q~c{7SO8Qp*O |eid3^a<Etc%: A>P3r3pb;:W0i4V]~h=CXj3NZ' );
define( 'NONCE_KEY',        'th%m;#Ok!q!cHeTFGq>(7qq?feD|HEbR   % ,[U P7ckv@vvM5-WvYGs%^FvmH,' );
define( 'AUTH_SALT',        '{$K*HlG=?ADDK^7PM-#/0&@( .7mL::=pMCu!@s1De8NIGy<:c?AUYZ$uPUT&USr' );
define( 'SECURE_AUTH_SALT', 'jHO<5&l:~oxygUo@>z&Qbp;?$vER7)-ZMT|H:~@J@H>3g/#93zUb#K)2-Eu!@%;s' );
define( 'LOGGED_IN_SALT',   't. -,B!VF9$yM_NV~M`.PPjo*y>)A%8,CO+22I+CUgN-)-Zs[6IG3#k8S!+Y; b1' );
define( 'NONCE_SALT',       'MKRd3U.KSb?)3]ua|i#+ZXk;k>CWA/jk@Y1>X{-c*O|2*B`K&[QyzXjwZ9(e]U|d' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
