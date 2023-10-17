<?php get_header(); ?>

<section class="archive-blog">
  <div class="single-blog__ttl-wrapper">
    <h2 class="section__ttl">Blog</h2>
    <h3 class="section__sub-ttl">- ブログ一覧</h3>
  </div>
  <div class="column">
    <main class="column__main">
      <div class="container single-blog__container">
    <ul class="blog__list">
    <?php
    if (have_posts()):
      while(have_posts()):
        the_post();
    ?>
      <li class="blog__contents">
        <a href="<?php echo the_permalink()?>" class="blog__link" aria-label="">
          <figure class="blog__figure">
          <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.png" alt="アイキャッチ画像がありません">
          <?php endif; ?>
          </figure>
          <div class="blog__info">
            <time class="blog__date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            <h3 class="blog__ttl"><?php echo the_title() ?></h3>
            <div class="blog__tags">
            <?php
              $blog_categories = get_the_terms(get_the_ID(), 'blog_cat');
                if($blog_categories):
                  foreach ($blog_categories as $blog_category):
              ?>
              <p class="works__tag blog__tag"><?php echo esc_html($blog_category->name); ?></p>
              <?php
                endforeach;
              endif;
              ?>
            </div>
          </div>
        </a>
      </li>
    <?php
      endwhile;
    endif;
    ?>
    </ul>
    </div>
  </main>
  <!-- /.column__main -->

  <?php get_sidebar('direct'); ?>
  <!-- /.column__side -->

  </div>
  <!-- column -->
</section>

<?php get_footer(); ?>