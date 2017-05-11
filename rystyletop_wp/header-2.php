<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<!-- スマホ用 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- 管理画面の「設定」→「一般」のキャッチフレーズを表示するために
	bloginfo('description');を使用する。
	 -->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!--
	WordPressの管理画面では、metaタグ内のkeywords入力欄が存在しない。
	そのため、ここはテンプレタグを使わずに直接記述する必要がある。
	また、もしページ毎にkeywordsを変更したいならば、if文とテンプレタグを駆使する。
	もしくはプラグインを利用する。
	-->
	<meta name="keywords" content="openFrameworks,glsl,shader,unity,python,mediaart,design" />

	<!--
	サイト名を出力するテンプレタグは bloginfo('name');
	■wp_title( '|', true, 'right' );の解説
	wp_title();は各ページのタイトル名を出力するテンプレタグ。
	もしタイトル名を出力しないといけないページの場合、
	タイトル名と一緒に「right」（右）に「|」を出力する。
	-->
	<title><?php wp_title('/', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
	<!--
	style.cssまでの絶対パスを出力するテンプレタグ
	bloginfo('stylesheet_url');
	-->

	<!-- about用のcss -->
	<?php if ( is_page() ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/about.css" type="text/css" />

	<!-- single用のcss -->
	<?php elseif ( is_single() ) : ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single.css" type="text/css" />

	<!-- 全体用のcss -->
	<?php else: ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<?php endif; ?>

	<!--
	wp_head();を忘れずに</head>の前に記述する。
	■wp_head();の解説
	プラグインを使用する際などに必要な記述
	-->
	<?php wp_head(); ?>

	<!-- Googleアナリティクス -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-93988827-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- Googleアナリティクス -->

</head>
<body>

	<!-- wrapper -->
	<div id="wrapper">

		<!-- header -->
		<header>
			<a href="http://rystylee.com/"><img src="<?php bloginfo('template_directory'); ?>/img/icon.jpg" width="50px" height="50px"></a>
			<nav>
				<ul style="list-style:none;">
					<!-- list -->
					<li><a href="http://rystylee.com/about" class="active">About</a></li>
					<li><a href="http://rystylee-artwork.tumblr.com/" class="not_active">Sketches</a></li>
					<li><a href="http://blog.rystylee.com/" class="not_active">Blog</a></li>
					<!-- list -->

					<!-- font awsome --> 
					<div class="sns_icons">
						<a href="https://www.facebook.com/pk634" target="_blank"><i class="fa fa-facebook-square fa-1x" aria-hidden="true" style="color:#315096"></i></a>
						<a href="https://twitter.com/rystylee" target="_blank"><i class="fa fa-twitter-square fa-1x" aria-hidden="true" style="color:#55acee";></i></a>
						<a href="https://rystylee-like.tumblr.com/" target="_blank"><i class="fa fa-tumblr-square fa-1x" aria-hidden="true" style="color:#35465c"></i></a>
						<a href="https://github.com/rystylee" target="_blank"><i class="fa fa-github-square fa-1x" aria-hidden="true" style="color:black"></i></a>
						<a href="https://www.youtube.com/channel/UCleA7jlyyFrWZfn206Iinag" target="_blank"><i class="fa fa-youtube-square fa-1x" aria-hidden="true" style="color:#cd201f"></i></a>
						<a href="https://vimeo.com/user55028168" target="_blank"><i class="fa fa-vimeo-square fa-1x" aria-hidden="true" style="color:#1ab7ea"></i></a>
					</div>
					<!-- font awsome -->
				</ul>
			</nav>
		</header>
		<!-- header -->