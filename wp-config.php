<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_8a07561db3949c9');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'q.X9DVKJ');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hHW0Ywp}-NYqN?]F%zH?|?}(F6+Vvk]!z[+z15tC%)mo~pj7>JSJ-jUH)uT+DUqt');
define('SECURE_AUTH_KEY',  'B+-/v2Y2~3F_taTCn,Hmr4CH&bVY%u@+|wB(-XsxFcG-97W_yoa6N?6tYA0ftSWB');
define('LOGGED_IN_KEY',    'X/aULV=P7/oh30lgTj($7hd6,Og.KJEl>)@pCP+Eq`Oh{w<KE[iM1GCCFXKW.MJ>');
define('NONCE_KEY',        'p*Pb20wm5mpDGOCI$Pb%8X{z@|eMo-#Pp7DI!qySS7hU@A3{/mnZs+X|8=lo@X0z');
define('AUTH_SALT',        '-eg-wW~f{Gt1fv VY^TZw,X>Mf`c7}Q9 2Y(+T)HE._E3$YwGVE)=~uI%by&tLm-');
define('SECURE_AUTH_SALT', '#FYZup/gj:M7t.[j.qg.U(T2@#SeP|Qxi5EvNQQuTNr5+)UpPwYrRNfn4]an-}E-');
define('LOGGED_IN_SALT',   'oB?LpnH2M:o mYcUEqC|Jhe}HJ9AY4g(IAu}jM3jJw9(.}uxCcP_|`a84qco:j-)');
define('NONCE_SALT',       '@w}H:4B+/`HJK(s*+EinqTFWj$r9zS5LTnj`vK}*$|LvZ[>o+5:d@_<A&l6:<w>p');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
