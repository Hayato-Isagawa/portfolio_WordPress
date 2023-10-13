<?php get_header(); ?>

  <div id="wrapper">
    <main>
      <section id="works-desc">
        <div class="container works-desc__container">
          <h2 class="section__ttl">Works</h2>
          <h3 class="section__sub-ttl">- 実績</h3>
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              get_template_part('template-parts/contents-single');
            endwhile;
          endif;
          ?>
        </div>
      </section>
      <!-- /#works -->

    </main>
    <!-- /.main -->

  </div>
  <!-- /.wrapper -->

<?php get_footer(); ?>