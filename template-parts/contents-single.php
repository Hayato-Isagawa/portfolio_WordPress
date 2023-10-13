<div class="desc-swiper">
  <!-- Additional required wrapper -->
  <ul class="swiper-wrapper">
    <!-- Slides -->
    <?php if (get_field('img1')): ?>
    <li class="swiper-slide">
      <figure>
        <img src="<?php the_field('img1'); ?>" alt="<?php the_title(); ?>のイメージ">
      </figure>
    </li>
    <?php
    endif;
    if (get_field('img2')):
    ?>
    <li class="swiper-slide">
      <figure>
        <img src="<?php the_field('img2'); ?>" alt="<?php the_title(); ?>のイメージ">
      </figure>
    </li>
    <?php
    endif;
    if (get_field('img3')):
    ?>
    <li class="swiper-slide">
      <figure>
        <img src="<?php the_field('img3'); ?>" alt="<?php the_title(); ?>のイメージ">
      </figure>
    </li>
    <?php
    endif;
    if (get_field('img4')):
    ?>
    <li class="swiper-slide">
      <figure>
        <img src="<?php the_field('img4'); ?>" alt="<?php the_title(); ?>のイメージ">
      </figure>
    </li>
    <?php
    endif;
    if (get_field('img5')):
    ?>
    <li class="swiper-slide">
      <figure>
        <img src="<?php the_field('img5'); ?>" alt="<?php the_title(); ?>のイメージ">
      </figure>
    </li>
    <?php endif; ?>
  </ul>
</div>
<div class="swiper-button-prev" id="desc-swiper-prev">
  <span class="works__icon1"></span>
  <span class="works__icon2"></span>
  <span class="works__icon3">&leftarrow;</span>
</div>
<div class="swiper-button-next" id="desc-swiper-next">
  <span class="works__icon1"></span>
  <span class="works__icon2"></span>
  <span class="works__icon3">&rightarrow;</span>
</div>
<div class="works-desc__list">
  <dl class="works-desc__row">
    <dt class="works-desc__label">Name</dt>
    <dd class="works-desc__desc">
      <p class="works-desc__text"><?php the_title(); the_content(); ?></p>
    </dd>
  </dl>
  <?php if (get_field('client')): ?>
  <dl class="works-desc__row">
    <dt class="works-desc__label">Client</dt>
    <dd class="works-desc__desc">
      <p class="works-desc__text">
        <?php the_field('client'); ?> 様
      </p>
    </dd>
  </dl>
  <?php
  endif;
  if (get_field('term')):
  ?>
  <dl class="works-desc__row">
    <dt class="works-desc__label">Term</dt>
    <dd class="works-desc__desc">
      <p class="works-desc__text">
        <?php the_field('term'); ?>
      </p>
    </dd>
  </dl>
  <?php
  endif;
  if (get_field('scope')):
  ?>
  <dl class="works-desc__row">
    <dt class="works-desc__label">Scope</dt>
    <dd class="works-desc__desc">
      <p class="works-desc__text">
        <?php the_field('scope'); ?>
      </p>
    </dd>
  </dl>
  <?php
  endif;
  if (get_field('comment')):
  ?>
  <dl class="works-desc__row">
    <dt class="works-desc__label">Comment</dt>
    <dd class="works-desc__desc">
      <p class="works-desc__text">
        <?php the_field('comment'); ?>
      </p>
    </dd>
  </dl>
  <?php
  endif;
  if (get_field('url')):
  ?>
  <dl class="works-desc__row">
    <dt class="works-desc__label">URL</dt>
    <dd class="works-desc__desc">
      <a href="<?php echo the_field('url'); ?>" target="_blank">
        <p class="works-desc__text works-desc__text--link">
          <?php the_field('url'); ?>
            <i class="fa-solid fa-arrow-up-right-from-square"></i>
        </p>
      </a>
    </dd>
  </dl>
  <?php endif;?>
</div>