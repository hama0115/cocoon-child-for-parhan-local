<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く


//ACF「パーキングメーター情報」をショートコードで出力できるようにする([acf_parking_info]で出力)
function parking_info_shortcode() {
  ob_start();
  include get_stylesheet_directory() . '/tmp/parking-info-table.php';
  return ob_get_clean();
}
add_shortcode('acf_parking_info','parking_info_shortcode');