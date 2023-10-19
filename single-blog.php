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
      <article class="blog-article">
        <h1 class="blog-article__ttl"><?php the_title(); ?></h1>
        <div class="blog-article__meta">
          <time class="blog-article__date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.m.d'); ?></time>
          <?php get_template_part('/template-parts/tag'); ?>
        </div>
        <div class="blog-article__body">
          <?php the_content(); ?>
        </div>
        <?php get_template_part('/template-parts/article-pagination'); ?>
      </article>
        <?php
        endwhile;
      endif;
      ?>
    </main>
  <!-- /.column__main -->

  <?php get_sidebar(); ?>
  <!-- /.column__side -->

  </div>
  <!-- column -->
</section>

<?php get_footer(); ?>