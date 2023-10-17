<?php get_header(); ?>

<section id="single-blog">
  <div class="single-blog__ttl-wrapper">
    <h2 class="section__ttl">Blog</h2>
    <h3 class="section__sub-ttl">- ブログ</h3>
  </div>
  <div class="column">
    <main class="column__main">
      <div class="container single-blog__container">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();?>
      <article class="news-article">
        <h1 class="news-article__ttl"><?php the_title(); ?></h1>
        <div class="news-article__meta">
          <time class="news-article__date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.m.d'); ?></time>
        </div>
        <div class="news-article__body">
          <?php the_content(); ?>
        </div>
        <!-- pagination -->
        <article class="news-article__pagination-wrapper">
          <?php
      // if文での条件分岐はいらない、仕様でif文を書くと重複する
          wp_link_pages(
            array(
              'before' => '<div class="news-article__pagination">',
              'after' => '</div>',
              'link_before' => '',
              'link_after' => '',
              'next_or_number' => 'number',
              'separator' => '',
              )
            );
            ?>
        </article>
        <!-- /pagination -->
        <!-- /paginate-post-link -->
        <div class="news-article__link news-article__paginate-post-link">
          <?php
          $next_post = get_next_post();
          $prev_post = get_previous_post();
          if ($next_post):
          ?>
          <a class="news-article__next next_post_link" href="<?php echo get_permalink($next_post->ID) ?>">次の記事へ</a>
          <?php
          endif;
          ?>
          <a class="news-article__list post-list" href="<?php if (get_post_type() === 'post'): echo esc_url(home_url('news')); elseif (get_post_type() === 'blog'): echo esc_url(home_url('blog'));endif;?>">記事一覧へ</a>
          <?php if ($prev_post): ?>
            <a class="news-article__prev previous_post_link" href="<?php echo get_permalink($prev_post->ID) ?>">前の記事へ</a>
          <?php endif; ?>
          </div>
          <!-- /paginate-post-link -->
        </div>
      <?php
        endwhile;
      endif;
      ?>
    </main>
  <!-- /.column__main -->

  <?php get_sidebar('direct'); ?>
  <!-- /.column__side -->

  </div>
  <!-- column -->
</section>

<?php get_footer(); ?>