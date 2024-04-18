## WordPress管理画面のダッシュボードを1カラムにカスタマイズする方法
以下のコードをfunctions.phpにコピペするだけで完了です！

```php
function so_screen_layout_columns( $columns ) {
$columns['dashboard'] = 1;
return $columns;
}
add_filter( 'screen_layout_columns', 'so_screen_layout_columns' );
function so_screen_layout_dashboard() {
return 1;
}
add_filter( 'get_user_option_screen_layout_dashboard', 'so_screen_layout_dashboard' );
```
