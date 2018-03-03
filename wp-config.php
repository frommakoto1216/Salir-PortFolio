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
define('DB_NAME', 'LAA0421731-official');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0421731');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'Fvzi4288');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql125.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '57I# yeY@fSQwa$|+D!i&}|AM_vZZrbfx@WmewqF)dV(b]j,)1=sjw!@/=7y8V[Q');
define('SECURE_AUTH_KEY',  'k:}f+D8zv+p?ADHLj[@MJLx^bi|{Od`&ORr{p|~0g>KPRIT0Ev$hK!ymT06GGYma');
define('LOGGED_IN_KEY',    '(vDO&R7u,>AHD3Nc6L2u+,~os5hxYBX/9vOS1OO2<O!Rmgr-QqY>NI&e&(R8>F}<');
define('NONCE_KEY',        'h1D%Ll79JZsPo{B5znCt/d)v.j;OgF%/f[?m7WzmLd#oKk<?X}tY[3&LeS `5+AG');
define('AUTH_SALT',        '`rme`wu:D g)9fdSmZzO~^p X,0!S{~k;SG{ ugB-gTrcDc-1IlL8RwFtCzZ,Z?t');
define('SECURE_AUTH_SALT', 'sq*K0:U6g(9a>)j&nhB}.LvM(MpS*01$R3SxBBbyjt(Z07c?x9Ml=5`8pOndO_Ca');
define('LOGGED_IN_SALT',   '&MOqC2CJ[&mL)tJoDjPw:e@t`?!Xt}O+Oy9uI{wtJ5Zv}fOf$xn=~m{c6p:hX&H0');
define('NONCE_SALT',       'E]kC|_SO4nFM+ABny!-/^pDG1wzefVkFZ#=ZQYAsf.fWX3;e818/B#G$`v$)iCao');

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
