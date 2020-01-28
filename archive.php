<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<title>カテゴリー名</title>
	<meta name="description" content="">

	<meta property="og:title" content="カテゴリー名">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com/category/a/">
	<meta property="og:image" content="https://example.com/category/a/img/ogp.png">
	<meta property="og:site_name" content="カテゴリー名">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
	<link rel="stylesheet" href="./css/style.css">

	<link rel="icon" href="./img/icon-home.png">
	<?php wp_head(); ?>
</head>

<body>

<!-- header -->
<header id="header">
<div class="inner">
<?php if(is_home()||is_front_page()): ?>
<h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1><!-- /header-logo -->
<?php endif; ?>
<div class="header-sub"><?php bloginfo('description'); ?></div><!-- /header-sub -->

<!-- drawer -->
<div class="drawer">
<div class="drawer-icon">
<span class="drawer-open"><i class="fas fa-bars"></i></span><!-- /drawer-open -->
<span class="drawer-close"><i class="fas fa-times"></i></span><!-- drawer-close -->
</div><!-- /drawer-icon -->

<!-- drawer-content -->
<div class="drawer-content">
<?php wp_nav_menu(
array(
'depth'=>1,
'theme_location'=>'drawer',
'container'=>'nav',
'container_class'=>'drawer-nav',
'menu_class'=>'drawer-list',
)
);
?>
</div><!-- /drawer-content -->
</div><!-- /drawer -->

</div><!-- /inner -->
</header><!-- /header -->

<!-- header-nav -->
<nav class="header-nav">
<div class="inner">
<?php wp_nav_menu(
array(
'depth'=> 1,
'theme_location'=>'global',
'container'=>'false',
'menu_class'=>'header-list',
)
);
?>
</div><!-- /inner -->
</nav><!-- header-nav -->


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- breadcrumb -->
				<div class="breadcrumb">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" href="<?php echo esc_url(home_url('/')); ?>" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span>
					<i class="fas fa-angle-right"></i>
					<span class="current-item"><?php the_archive_title(); ?></span>
				</div><!-- /breadcrumb -->


				<div class="archive-head m_description">
					<div class="archive-lead">ARCHIVE</div>
					<h1 class="archive-title m_category">カテゴリー名</h1><!-- /archive-title -->
					<div class="archive-description">
						<p>
							カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明カテゴリーの説明
						</p>
					</div><!-- /archive-description -->
				</div><!-- /archive-head -->

<?php if( have_posts()): ?>
<!-- entries -->
<div class="entries m_horizontal">
<?php while( have_posts()): the_post(); ?>

<!-- entry-item -->
<a href="<?php the_permalink(); ?>" class="entry-item">
<!-- entry-item-img -->
<div class="entry-item-img">
<?php if( has_post_thumbnail()){
the_post_thumbnail('large');
} else {
echo '<img src="'.esc_url( get_template_directory_uri()).'img/noimg.png" alt="">';  
}
?>
</div><!-- /entry-item-img -->

<!-- entry-item-body -->
<div class="entry-item-body">
<div class="entry-item-meta">
<?php $category = get_the_category();
if( $category[0]) {
echo '<div class="entry-item-tag">'.$category[0]->cat_name.'</div><!-- /entry-item-tag -->';
}
?>

<time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
  </div><!-- /entry-item-meta -->

<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
<div class="entry-item-excerpt">
<?php the_excerpt(); ?>
</div><!-- /entry-item-excerpt -->
</div><!-- /entry-item-body -->
</a><!-- /entry-item -->
<?php endwhile; ?>
</div><!-- /entries -->
<?php endif; ?>

<?php if(paginate_links()): ?>
<!-- pagenation -->
<div class="pagenation">
<?php echo paginate_links(
array(
'end_size' => 0,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class"fas fa-angle-left"></i>',
'next_text' => '<i class"fas fa-angle-right"></i>',
)
);
?>
</div><!-- /pagenation -->
<?php endif; ?>

</main><!-- /primary -->

			<!-- secondary -->
			<aside id="secondary">

				<!-- widget -->
				<div class="widget widget_text widget_custom_html">
					<div class="widget-title">プロフィール</div>

					<div class="wprofile">
						<div class="wprofile-img"><img src="img/profile.png" alt=""></div>
						<div class="wprofile-content">
							<p>
								テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>
						<!-- /wprofile-content -->
						<nav class="wprofile-sns">
							<div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-twitter"></i></a></div>
							<div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-facebook-f"></i></a></div>
							<div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-instagram"></i></a></div>
						</nav>
					</div><!-- /wprofile -->
				</div><!-- /widget -->


				<!-- widget -->
				<div class="widget widget_search">
					<div class="widget-title">検索</div>
					<!-- search-form -->
					<form method="get" class="search-form" action="#">
						<input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
						<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
					</form><!-- /search-form -->
				</div><!-- /widget -->


				<!-- widget -->
				<div class="widget widget_popular">
					<div class="widget-title">人気記事</div>

					<div class="wpost-items m_ranking">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry2.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

				<!-- widget -->
				<div class="widget widget_recent">
					<div class="widget-title">新着記事</div>

					<div class="wpost-items">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry7.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

					</div><!-- /wpost-items -->
				</div><!-- /widget -->

				<div class="widget widget_archive">
					<div class="widget-title">アーカイブ</div>
					<ul>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
					</ul>
				</div><!-- /widget -->

			</aside><!-- secondary -->


		</div><!-- /inner -->
	</div><!-- /content -->

	<!-- footer-menu -->
	<div id="footer-menu">
		<div class="inner">
			<div class="footer-logo"><a href="/">TF-30</a></div><!-- /footer-logo -->
			<div class="footer-sub">サブタイトルが入りますサブタイトルが入ります</div><!-- /footer-sub -->

			<nav class="footer-nav">
				<ul class="footer-list">
					<li class="menu-item"><a href="#">メニュー1</a></li>
					<li class="menu-item"><a href="#">メニュー2</a></li>
					<li class="menu-item"><a href="#">メニュー3</a></li>
					<li class="menu-item"><a href="#">メニュー4</a></li>
					<li class="menu-item"><a href="#">メニュー5</a></li>
				</ul>
			</nav>

		</div><!-- /inner -->
	</div><!-- /footer-menu -->



	<!-- footer -->
	<footer id="footer">
		<div class="inner">
			<div class="copy">&copy; daily-trial WordPress theme All rights reserved.</div><!-- /copy -->
			<div class="by">Presented by <a href="https://tokyofreelance.jp/" rel="noopener" target="_blank">東京フリーランス</a>
			</div><!-- /by -->

		</div><!-- /inner -->
	</footer><!-- /footer -->



	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=https://example.com/category/a/&text=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/category/a/&title=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/category/a/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->


	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>

<?php wp_footer(); ?>
</body>

</html>
