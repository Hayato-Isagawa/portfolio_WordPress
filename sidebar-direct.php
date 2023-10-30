<!-- side -->
  <aside class="column__side">
    <!-- side-intro -->
    <div class="side__contents side-intro">
      <h4 class="side__head">このサイトの主</h4>
      <figure class="side-intro__figure">
        <img class="side-intro__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/noimg.png" alt="">
      </figure>
      <h5 class="side-intro__name">haya.</h5>
      <p class="side-intro__desc">
        沖縄県生まれ、沖縄県育ち。<br>
        小学校教員として11年間勤務。<br>
        2022年に小学校教員を退職し、ウェブ制作のフリーランスとなる。<br>
        JavaScriptが好きで、いつかJavaScriptで『STAR WARS』に出てくるBB-8を作りたいと思っている。
      </p>
      <!-- <a class="side-intro__link" href="<?php echo esc_url(home_url('#thisis')); ?>">このウェブサイトについて</a> -->
    </div>
    <!-- /side-intro -->
    <!-- side-blog -->
    <div class="side__contents side-latest">
      <h4 class="side__head">新着記事</h4>

      <?php
      $post_type = get_post_type();
      $side_post = new WP_Query(
        array(
        'post_type'       => $post_type,
        'posts_per_page'   =>  5,
        'orderby'         => 'date',
        'post__not_in' => array($post->ID),
        )
        );
      ?>

      <?php
      if ($side_post->have_posts()):
        while ($side_post->have_posts()):
          $side_post->the_post();
            get_template_part('template-parts/contents-sidebar');
        endwhile;
      endif;
      ?>

      <?php wp_reset_postdata(); ?>
    </div>
    <!-- /side-blog -->
    <!-- side-category -->
    <div class="side__contents side-category">
      <h4 class="side__head">カテゴリー</h4>
      <div class="p-side-category__link-container">
        <?php my_side_category();?>
      </div>
    </div>
    <!-- /side-category -->
  </aside>
  <!-- /side -->