<!-- side -->
  <aside class="column__side">
    <!-- side-intro -->
    <!-- <div class="l-side">
      <div class="p-side-intro">
        <h4 class="p-side-intro__ttl c-side-ttl">クリニックの紹介</h4>
        <div class="p-side-inter__img-wrapper">
          <img class="p-side-intro__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sidebar-img_1.png" alt="みなみ歯科クリニックの院内の様子">
        </div>
        <h5 class="p-side-intro__name">みなみ歯科クリニック</h5>
        <p class="p-side-intro__desc">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
        <a class="p-side-intro__link c-side-link" href="<?php echo esc_url(home_url()); ?>">当院について</a>
      </div>
    </div> -->
    <!-- /side-intro -->
    <!-- side-blog -->
    <!-- <div class="l-side">
      <div class="p-side-staff-blog">
        <h4 class="p-side-staff-blog__ttl c-side-ttl">新着記事</h4>

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
              get_template_part('template-parts/content-sidebar');
          endwhile;
        endif;
        ?>

        <?php wp_reset_postdata(); ?>
      </div>
    </div> -->
    <!-- /side-blog -->
    <!-- side-category -->
    <!-- <div class="l-side">
      <div class="p-side-category">
        <h4 class="p-side-category__ttl c-side-ttl">カテゴリー</h4>
        <div class="p-side-category__link-container">
          <?php my_side_category();?>
        </div>
      </div>
    </div> -->
    <!-- /side-category -->
  </aside>
  <!-- /side -->