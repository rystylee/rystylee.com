<?php get_header() ?>

	<main>
		<!-- ▼表示する記事がある場合、ループ開始▼ -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="article">

				<!-- 画像のみ表示 -->
				<?php
				/*
				<div class="section">
					<?php
					$args = array(
					    'post_type'   => 'attachment',
					    'numberposts' => -1,
					    'post_status' => null,
					    'post_parent' => $post->ID
					);

					$attachments = get_posts( $args );
					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
					    	echo wp_get_attachment_image( $attachment->ID, 'full' );
					    }
					}
					?>
				</div>
				*/
				?>

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