<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'modx-landing' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'modx-landing' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sW(:xj_c1}8MkQIGWN-=Kg;r1?mSuLqJce2A~tQ!)edW5&8*]N1&ZlU!-SO0=`L)' );
define( 'SECURE_AUTH_KEY',  '3 #T8vhIRrdBSO;f5|zvb6!~pilS6j+xqFpgcF&0L9+.#l9haPy>1}n>b&3.U:`8' );
define( 'LOGGED_IN_KEY',    'b2|I*6s&8%;=o1gc@uUZ;qg?Tf%PuS|0(<I&yD|7L>)c#z+19F>=@h]F{d8Q1V 7' );
define( 'NONCE_KEY',        '}3_/:@kv}t,,4{6:Oew<d`RiPKFXaTD=Y|.l$ Z`0`RVtGht!`d)Ej!qu5GsgJO>' );
define( 'AUTH_SALT',        ']syO8=*U5+HMm)GNK2vOP8:3@kIh-(N;:qBm?jYu W#H8x$,paIpzvpw^LWq2]~j' );
define( 'SECURE_AUTH_SALT', 'kUR&xb]%g-IiBu<(O]%S{H8x-u*LoT5mb[m#>@&X3eQ*w&@].eI|v_JfnGck=CSj' );
define( 'LOGGED_IN_SALT',   '.:YFktQ?OS&hCl`}RP{|2XODP,,]1Jm>:=X*7Qr$`YARX]}Qc7DL/j(`g*X;LpUJ' );
define( 'NONCE_SALT',       'p8lDI6]dJ_$_GSFCvB@:*6S(Bc[/vaWMTb6KA}:vss-FNEZT<ARQ{xY:]@FEojPW' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
