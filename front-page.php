<?php get_header(); ?>

	<div id="wrapper">
		<main>
			<section id="top" class="js-bg">
				<div class="container top__container">
					<h2 class="top__ttl"><span class="top__rect"></span>Web Creator</h2>
					<div class="scrolldown">
						<span class="scrolldown__icon"></span>
						<span class="scrolldown__icon"></span>
					</div>
				</div>
			</section>
			<!-- /#top -->

			<section id="thisis">
				<div class="container thisis__container">
					<h2 class="section__ttl"><span class="section__rect"></span>This website is</h2>
					<h3 class="section__sub-ttl">- このウェブサイトについて</h3>
					<h4 class="section__text thisis__text">
						<p class="section__desc">
							このウェブサイトは、ウェブクリエイターhaya.のポートフォリオ兼アウトプットサイトです。<br>
							学んだことや、現在のトレンドの表現をアウトプットする場所も兼ねています。<br><br>
							自分ができるようになったことを表現するのはとても楽しいので、この場を設けています。<br>
							いつまでも「アソビゴコロ」を持ち続け、楽しみながら活動し続けたいです。
						</p>
					</h4>
				</div>
			</section>
			<!-- /#thisis -->

			<section id="concept">
				<div class="concept__bg"></div>
				<div class="container concept__container">
					<h2 class="section__ttl"><span class="section__rect"></span>Concept</h2>
					<h3 class="section__sub-ttl">- コンセプト</h3>
					<h4 class="section__text">
						<p class="section__desc">
							このポートフォリオサイトのコンセプトは「グラデーション」。<br>
							世の中、はっきり白黒区別できることもありますが、<br>
							ほとんどの場合、境界は曖昧。<br><br>
							考え方も表現も、生き方も。<br>
							だからこそ、多様な考え方や視点に触れながら、<br>
							自分で考え、グラデーションのように<br>
							思考を柔軟に変化させていくことを大切にしています。<br><br>
							ウェブに関しても同様。<br>
							ただ情報を伝えるだけのウェブサイトを作るだけでなく、<br>
							世の中の移り変わりに合わせながら、<br>
							自分の学んできたこと、経験を活かして<br>
							自分にしか作れないウェブサイトを制作します。
						</p>
					</h4>
				</div>
			</section>
			<!-- /#concept -->

			<section id="news">
				<div class="container news__container">
					<h2 class="section__ttl"><span class="section__rect"></span>News</h2>
					<h3 class="section__sub-ttl">- お知らせ</h3>
					<h4 class="section__text news__text">
						<p class="section__desc">
							ただいま準備中です。
						</p>
					</h4>
					<div class="news__area">
						<a href="#" class="news__link">
							<time class="news__date" datetime="">2023.10.01</time>
							<p class="news__ttl">
								タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。
							</p>
						</a>
						<a href="#" class="news__link">
							<time class="news__date" datetime="">2023.10.01</time>
							<p class="news__ttl">
								タイトルが入ります。
							</p>
						</a>
						<a href="#" class="news__link">
							<time class="news__date" datetime="">2023.10.01</time>
							<p class="news__ttl">
								タイトルが入ります。
							</p>
						</a>
					</div>
					<!-- <div class="section__more">
						<a href="" type="button" class="more__button">お知らせ一覧を見る</a>
					</div> -->
				</div>
			</section>

			<section id="service">
				<div class="container service__container">
					<h2 class="section__ttl"><span class="section__rect"></span>Service</h2>
					<h3 class="section__sub-ttl">- サービス</h3>
					<h4 class="section__text">
						<p class="section__desc">
							サービス内容について詳しく知りたい方は、お気軽に<a href="#contact" class="service__contact">お問い合わせ <i
									class="fa-solid fa-arrow-up-right-from-square"></i></a>ください。
						</p>
					</h4>
					<ul class="service__list js-move">
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="ウェブサイト制作について詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="1, 1, 1, 1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service1.jpg" alt="" class="service__img">
									</figure>
									<h3 class="service__head">ウェブサイト制作</h3>
								</div>
								<div class="link__back">
									<p class="service__desc">
										ブログのような投稿機能がついたWordPress(ワードプレス)を用いたサイト、商品を紹介するための縦長のサイト、結婚式の招待状代わりのサイト等、さまざまなタイプのウェブサイトを制作します。
									</p>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
							</button>
						</li>
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="コーディングについての詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="-1, 1, 1, 1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service2.jpg" alt="" class="service__img">
									</figure>
									<h3 class="service__head">コーディング</h3>
								</div>
								<div class="link__back">
									<p class="service__desc">
										すでにあるウェブサイトをWordPress化して投稿機能をつけたり、アニメーションを加えたりといった、部分的な作業も承っています。<br>
										コーダーとしての人手が足りない際のリソースとしても対応可能です。
									</p>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
							</button>
						</li>
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="運用・保守代行について詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="-1, -1, 1, 1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service3.jpg" alt="" class="service__img">
									</figure>
									<h3 class="service__head">運用・保守代行</h3>
								</div>
								<div class="link__back">
									<p class="service__desc">
										ウェブの世界は移り変わりが激しいです。ウェブやパソコンに不慣れな方に代わって、ウェブサイトの運用・保守を代行します。<br>
										その際、部分的なコーディング作業を承ることもできます。
									</p>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
							</button>
						</li>
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="ウェブ全般について詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="-1, -1, -1, 1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service4.jpg" alt="" class="service__img">
									</figure>
									<h3 class="service__head">ウェブ全般</h3>
								</div>
								<div class="link__back">
									<p class="service__desc">
										ウェブに関することならなんでもご相談に乗ります。<br>
										レンタルサーバーの選定やサーバー内のデータの管理、表示速度の改善など、ウェブに関することは広く対応可能です。
									</p>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
							</button>
						</li>
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="レスポンシブについて詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="-1, -1, -1, -1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service5.jpg" alt="" class="service__img">
									</figure>
									<h3 class="service__head">レスポンシブ</h3>
								</div>
								<div class="link__back">
									<p class="service__desc">
										サイトリニューアルにはほとんど効果がないと言われています。<br>
										すでにあるウェブサイトをレスポンシブ対応する(スマートフォン向けに見やすくする)ことで、多くのユーザーに対応させることができます。
									</p>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
							</button>
						</li>
						<li class="service__contents">
							<button class="service__link" type="button" aria-label="動画編集について詳細を見る">
								<div class="link__front">
									<figure class="service__figure js-move-item" data-acc="1, -1, -1, -1">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service6.jpg" jpg="" class="service__img">
									</figure>
									<h3 class="service__head">動画編集</h3>
								</div>
								<div class="service__open">
									<span class="service__icon"></span>
									<span class="service__icon"></span>
								</div>
								<div class="link__back">
									<p class="service__desc">
										簡易な動画編集をすることができます。<br>
										カット・テロップ入れ、効果音まで対応可能です。
									</p>
								</div>
							</button>
						</li>
					</ul>
				</div>
			</section>
			<!-- /#service -->

			<section id="works">
				<div class="container works__container">
					<h2 class="section__ttl"><span class="section__rect"></span>Works</h2>
					<h3 class="section__sub-ttl works__sub-ttl">- 実績</h3>
					<h4 class="section__text">
						<p class="section__desc">
							画面右側にある矢印を押していただくと、次の実績紹介に移ります。<br>
							それぞれの画像を押していただくと、より詳細な情報を知ることができます。<br><br>
							また、このポートフォリオサイトも自身でデザインからコーディングまでを行なっております。<br>
							そのため、こちらも実績の一部とお考えください。
						</p>
					</h4>
					<div class="works__swiper">
						<ul class="swiper-wrapper">
							<?php
							if (have_posts()):
								while (have_posts()):
									the_post();
							?>
							<li class="swiper-slide">
								<a href="<?php the_permalink(); ?>" class="works__link" aria-label="結婚式招待状の詳細を見る">
									<figure class="works__figure">
											<?php if (has_post_thumbnail()): ?>
												<?php if(isset($args)) {
													the_post_thumbnail($args);
												} else {
													the_post_thumbnail();
												}
												?>
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="アイキャッチ画像がありません">
											<?php endif; ?>
									</figure>
									<div class="works__info">
										<h3 class="works__ttl"><?php the_title(); ?><br class="is-sp"><?php the_content(); ?></h3>
										<?php
										$works_categories = get_the_terms(get_the_ID(), 'category');
											if($works_categories):
												foreach ($works_categories as $works_category):
										?>
											<p class="works__tag"><?php echo esc_html($works_category->name); ?></p>
										<?php
											endforeach;
										endif; ?>
									</div>
								</a>
							</li>
						<?php
							endwhile;
						endif;
						?>
						</ul>
					</div>
					<div class="swiper__buttons">
						<div class="swiper-button-prev">
							<span class="works__icon1"></span>
							<span class="works__icon2"></span>
							<span class="works__icon3">&leftarrow;</span>
						</div>
						<div class="swiper-button-next">
							<span class="works__icon1"></span>
							<span class="works__icon2"></span>
							<span class="works__icon3">&rightarrow;</span>
						</div>
					</div>
					<!-- <div class="section__more">
						<a href="" type="button" class="more__button">実績一覧を見る</a>
					</div> -->
				</div>
			</section>
			<!-- /#works-->

			<section id="blog">
				<div class="container blog__container">
					<h2 class="section__ttl"><span class="section__rect"></span>Blog</h2>
					<h3 class="section__sub-ttl">- ブログ</h3>
					<h4 class="section__text">
						<p class="section__desc">
							<!-- ブログも書いています。ぜひご覧ください。 -->
							ただいま準備中です。
						</p>
					</h4>
					<ul class="blog__list">
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
						<li class="blog__contents">
							<a class="blog__link" aria-label="">
								<figure class="blog__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" jpg="" class="blog__img">
								</figure>
								<div class="blog__info">
									<time class="blog__date" datetime="">2023.10.01</time>
									<h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
									<div class="blog__tags">
										<p class="works__tag blog__tag">HTML</p>
										<p class="works__tag blog__tag">CSS</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
					<!-- <div class="section__more">
						<a href="" type="button" class="more__button">ブログ一覧を見る</a>
					</div> -->
				</div>
			</section>
			<!-- /#service -->

			<section id="contact">
				<div class="contact__ttls js-bg">
					<h2 class="section__ttl">Contact</h2>
					<h3 class="section__sub-ttl">- お問い合わせ</h3>
				</div>
				<div class="container contact__container">
					<h4 class="section__text">
						<p class="section__desc">
							ウェブに関することならなんでもご相談に乗ります。<br>
							お気軽にお問い合わせください。可能な限り早く返信いたします。
						</p>
					</h4>
					<form class="contact__form" id="js-form"
						action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeZ9vGsNVXBqaX6et500z5LzjMCC_TJqWWrc_1wtvpBfov8mQ/formResponse"
						method="post">
						<div class="contact__list">
							<dl class="contact__row">
								<dt class="contact__label">
									<div>Name</div>
									<span class="contact__required">!</span>
								</dt>
								<dd class="contact__input name--error">
									<input type="text" name="entry.584176652" placeholder="山田　太郎" aria-label="名前を入力する"
										autocomplete="off">
								</dd>
							</dl>
							<dl class="contact__row">
								<dt class="contact__label">
									<div>Email</div>
									<span class="contact__required">!</span>
								</dt>
								<dd class="contact__input email--error">
									<input type="email" name="emailAddress" placeholder="sample@gmail.com"
										aria-label="メールアドレスを入力する" autocomplete="off">
								</dd>
							</dl>
							<dl class="contact__row">
								<dt class="contact__label">
									<div>Message</div>
									<span class="contact__required">!</span>
								</dt>
								<dd class="contact__input textarea--error">
									<textarea name="entry.1113212062" aria-label="メッセージを入力する"></textarea>
								</dd>
							</dl>
							<div class="contact__submit is-disabled" id="contact__submit">
								<input class="submit__btn" id="js-submit" type="submit" aria-label="入力内容を送信する"
									value="送信" disabled>
							</div>
						</div>
					</form>
					<div class="contact__message" id="js-success">
						<p class="contact__text">
							送信完了いたしました<br>
							内容を確認次第、返信いたします<br>
							しばらくお待ちください
						</p>
					</div>
					<div class="contact__message" id="js-error">
						<p class="contact__text">
							送信失敗しました<br>
							ページを更新後、再度送信してください
						</p>
					</div>
				</div>
			</section>
			<!-- /#contact -->

		</main>
		<!-- /.main -->


	</div>
	<!-- /.wrapper -->

	<?php get_footer(); ?>