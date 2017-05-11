
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="article">
			<a href="<?php the_permalink(); ?>">
				<!-- アイキャッチ画像を表示するテンプレートタグ -->
				<?php the_post_thumbnail('full'); ?>
				<h3 class="title"><?php the_title(); ?></h3>
				<p class="date"><?php the_time('Y/m/j') ?></p>
			</a>
		</div>

		<?php endwhile; ?>

		<?php endif; ?>

		<p class="pagenate">
			<?php
			    $big = 9999999999;
			    $arg = array(
			        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			        'current' => max( 1, get_query_var('paged') ),
			        'total'   => $wp_query->max_num_pages,
			        'prev_next'          => True,
			        'prev_text'          => __('&laquo; Previous'),
					'next_text'          => __('Next &raquo;'),
			    );
			    echo paginate_links($arg);
		?>
		</p>

		<!-- <span class="page-numbers current">1</span>
		<a class="page-numbers" href="http://hogehoge.com/?paged=2">2</a>
		<a class="next page-numbers" href="http://hogehoge.com/?paged=2">next »</a></div> -->

