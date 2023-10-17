<?php get_header(); ?>

			<section id="works-desc">
				<div class="container works-desc__container">
					<h2 class="section__ttl">Works</h2>
					<h3 class="section__sub-ttl">- 実績一覧</h3>
					<ul class="works-desc__list">
							<?php
							$args = array(
									'post_type' => 'post', // 投稿タイプを指定
									'posts_per_page' => -1, // 表示する投稿の数（-1はすべての投稿を表示）
							);

							$query = new WP_Query($args);

							if ($query->have_posts()):
									while ($query->have_posts()):
											$query->the_post();
														?>
							<li class="works-desc__contents">
								<a href="<?php the_permalink(); ?>" class="works__link" aria-label="<?php the_title(); ?>を見る">
									<figure class="works-desc__figure">
									<?php if (has_post_thumbnail()): ?>
											<?php the_post_thumbnail(); ?>
									<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="アイキャッチ画像がありません">
									<?php endif; ?>
									</figure>
									<div class="works-desc__info">
										<h3 class="works-desc__ttl"><?php the_title(); ?><br class="is-sp"><?php the_content(); ?></h3>
										<?php
										$works_categories = get_the_terms(get_the_ID(), 'category');
											if($works_categories):
												foreach ($works_categories as $works_category):
										?>
											<p class="works__tag works-desc__tag"><?php echo esc_html($works_category->name); ?></p>
										<?php
											endforeach;
										endif; ?>
									</div>
								</a>
							</li>
						<?php
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</ul>
					<!-- <div class="section__more">
						<a href="" type="button" class="more__button">ブログ一覧を見る</a>
					</div> -->
				</div>
			</section>
			<!-- /#blog -->

		</main>
		<!-- /.main -->

	</div>
	<!-- /.wrapper -->

	<?php get_footer(); ?>

<?php get_footer(); ?>