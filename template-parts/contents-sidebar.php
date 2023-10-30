<a class="side-latest__card" href="<?php the_permalink() ; ?>">
  <figure class="side-latest__figure">
    <?php get_template_part('/template-parts/thumbnail'); ?>
  </figure>
  <div class="side-latest__info">
    <time class="side-latest__date" datetime="<?php the_time('c') ; ?>"><?php the_time('Y.m.d') ; ?></time>
    <h5 class="side-latest__ttl"><?php the_title(); ?></h5>
    <div class="side-latest__tags">
      <?php get_template_part('/template-parts/tag'); ?>
    </div>
  </div>
</a>