<?php
  $post_type = get_post_type();
  if ($post_type === 'post') {
    $categories = get_the_category();
  } elseif ($post_type === 'blog') {
    $categories = get_the_terms(get_the_ID(), 'blog_cat');
  } else {
    $categories = get_the_terms(get_the_ID(), 'news_cat');
  }

  if($categories):
      foreach ($categories as $category):
  ?>
  <p class="tag"><?php echo esc_html($category->name); ?></p>
  <?php
    endforeach;
  endif;
?>