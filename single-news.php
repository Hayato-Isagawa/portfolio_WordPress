<?php get_header(); ?>

<section id="single-news">
  <div class="single-news__ttl-wrapper">
    <h2 class="section__ttl">News</h2>
    <h3 class="section__sub-ttl">- お知らせ</h3>
  </div>
  <div class="column">
    <main class="column__main">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();?>
      <article class="news-article">
        <h1 class="news-article__ttl"><?php the_title(); ?></h1>
        <div class="news-article__meta">
          <time class="news-article__date" datetime="<?php the_time('c') ;?>"><i class="fa-solid fa-pen" style="color: #d2d2d2;"></i> <?php the_time('Y.m.d'); ?></time>
          <?php get_template_part('/template-parts/tag'); ?>
        </div>
        <div class="news-article__body">
          <?php the_content(); ?>
        </div>
        <?php get_template_part('/template-parts/article-pagination'); ?>
      </article>
        <!-- /paginate-post-link -->
      <?php
          endwhile;
      endif;
      ?>
    </main>
    <!-- /.column__main -->

    <?php get_sidebar('direct'); ?>
    <!-- /.column__side -->

  </div>
</section>
<!-- column -->

<?php get_footer(); ?>