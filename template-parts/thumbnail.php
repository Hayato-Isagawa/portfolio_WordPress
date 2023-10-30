<?php if (has_post_thumbnail()): ?>
  <?php the_post_thumbnail(); ?>
<?php else: ?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/noimg.png" alt="アイキャッチ画像がありません">
<?php endif; ?>