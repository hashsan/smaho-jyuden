<?php

//style.cssを読み込む
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


// ウィジェットエリアの登録
function register_custom_sidebars() {
	////////////////////////////////////////////
	$add_header = <<<HTML
  <div class="box">
    <div class="info flex">
      <h1>スマホ充電.com</h1>
	  <nav class="flex">
	   <a class="sys" href="#" title="ポリシー">ポリシー</a>
	   <a class="sys" title="広告">広告</a><a class="sys" title="連絡">連絡</a>
	   </nav>
    </div>
    <p>このサイトはスマートフォンと充電器の相性を調べるためのサイトです</p>
  </div>		
HTML;
	/////////////////////////////////////////////
	$add_footer = <<<HTML
<div class="box">
   <p>使い方は調べたいスマホの<mark>「＃タグ」</mark>を押すだけ↓</p>
   <p>困ったらここに戻ってきてｂ</p>
   <nav class="tags">
	  <a>#AQUOS Wish3</a>
	  <a>#iPhone SE</a>
	  <a>#Galaxy</a>
	  <a>#Xiaomi </a>
	  <a>#Motolora</a>
	  <a>#iPhone Tablet</a>
	  <a>#Sony Ericson</a>
	  <a>#OPPO</a>
	  <a>#充電器の相性って？</a>
	  <a>#海外充電事情</a>
	  <a>©スマホ充電.com</a>
   </nav>
</div>

<a id="goto" href="#">
<img src="https://hashsan.github.io/paul_smith_line/concent.png" width="48px" height="48px" alt="スマホ充電.comのサイトアイコン"/></a>	
		
HTML;
	/////////////////////////////////////////////
	
	
    // Header Widget Area
    register_sidebar(array(
        'name'          => 'Header Widget Area',
        'id'            => 'wi_header',
        'before_widget' => '<div class="widget">'.$add_header,
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));

    // Footer Widget Area
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'wi_footer',
        'before_widget' => '<div class="widget">'.$add_footer,
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'register_custom_sidebars');
