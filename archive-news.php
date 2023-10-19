<?php get_header(); ?>

<section id="archive-news">
  <div class="archive-news__ttl-wrapper">
    <h2 class="section__ttl">News</h2>
    <h3 class="section__sub-ttl">- ブログ一覧</h3>
  </div>
  <div class="column">
    <main class="column__main">
      <ul class="archive-news__list">
      <?php
      if (have_posts()):
        while(have_posts()):
          the_post();
      ?>
        <li class="archive-news__contents">
          <a href="<?php echo the_permalink()?>" class="archive-news__link" aria-label="">
            <figure class="archive-news__figure">
              <?php get_template_part('/template-parts/thumbnail'); ?>
            </figure>
            <div class="archive-news__info">
              <time class="archive-news__date" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
              <h3 class="archive-news__ttl"><?php echo the_title() ?></h3>
              <div class="archive-news__tags">
                <?php get_template_part('/template-parts/tag'); ?>
              </div>
            </div>
          </a>
        </li>
      <?php
        endwhile;
      endif;
      ?>
      </ul>
        <?php get_template_part('/template-parts/pagination'); ?>
    </main>
    <!-- /.column__main -->

    <?php get_sidebar('direct'); ?>
    <!-- /.column__side -->

  </div>
  <!-- column -->
</section>

<?php get_footer(); ?>