<!-- article-pagination -->
<div class="article__pagination-wrapper">
  <?php
// if文での条件分岐はいらない、仕様でif文を書くと重複する
  wp_link_pages(
    array(
      'before' => '<div class="article__pagination">',
      'after' => '</div>',
      'link_before' => '',
      'link_after' => '',
      'next_or_number' => 'number',
      'separator' => '',
      )
    );
    ?>
</div>
<!-- /pagination -->
<!-- /paginate-post-link -->
<div class="article__link article__paginate-post-link">
  <?php
  $next_post = get_next_post();
  $prev_post = get_previous_post();
  if ($next_post):
  ?>
  <a class="article__next next_post_link" href="<?php echo get_permalink($next_post->ID) ?>">次の記事へ</a>
  <?php
  endif;
  ?>
  <a class="article__list post-list" href="<?php if (get_post_type() === 'post'): echo esc_url(home_url('blog')); elseif (get_post_type() === 'blog'): echo esc_url(home_url('blog')); elseif (get_post_type() === 'news'): echo esc_url(home_url('news'));endif;?>">記事一覧へ</a>
  <?php if ($prev_post): ?>
    <a class="article__prev previous_post_link" href="<?php echo get_permalink($prev_post->ID) ?>">前の記事へ</a>
  <?php endif; ?>
</div>
<!-- /paginate-post-link -->
