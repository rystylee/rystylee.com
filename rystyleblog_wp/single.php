<?php get_header() ?>

	<main>
		<!-- ▼表示する記事がある場合、ループ開始▼ -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="article">
				<div class="info">
					<h1 class="title"><?php the_title(); ?></h1>
					<p class="date"><?php the_time('Y/m/j') ?></p>
					<p class="category"><?php
						$str = '';
						foreach((get_the_category()) as $cat){
							$str .= $cat->cat_name . ', ';
						}
						echo rtrim($str, ", ");
					?></p>
				</div>

				<div class="section">
					<p>
						<?php the_content('続きを読む &rarr;'); ?>
					</p>
				</div>
			 
				<?php endwhile; ?>
				 
				<?php endif; ?>

				<ul class="share_btn">
					<li>
						<a class="facebook_btn" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
						<span class="fa fa-facebook"></span>    like</a>
					</li>
					<li>
						<a class="twitter_btn" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
						<span class="fa fa-twitter"></span>    tweet</a>
					</li>
					<li>
						<a class="hatebu_btn" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
						<span class="hatebu_icon">B!</span><span class="hatebu_chara">はてブ<span></a>
					</li>
					<li><a class="google_btn" href="https://plus.google.com/share?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" onclick="window.open(this.href, 'Gwindow', 'width=600, height=300, menubar=no, toolbar=no, scrollbars=yes'); return false;">
					<span class="fa fa-google-plus"></span>    Google+</a></li>
				</ul>

				<!-- ▼前か次のページが存在する場合のみ表示する▼ -->
				<?php if( get_previous_post() || get_next_post() ){ ?>

				<!-- ページャー -->
				<div class="pager">
				 
					<?php if( get_previous_post() ): ?>
					    <div style="float:left">
					    <?php previous_post_link('%link', '« %title'); ?>
					    </div>
					 
					<?php endif;
					if( get_next_post() ): ?>
					    <div style="float:right">
					    <?php next_post_link('%link', '%title »'); ?>
					    </div>
					<?php endif; ?>
			 
				</div>
				<!-- /ページャー -->
				<?php } ?>
				<!-- ▲前か次のページが存在する場合のみ表示する▲ -->

		</div>

    </main>
	
<?php get_footer() ?>