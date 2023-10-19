<!-- pagination -->
<div class="pagination-wrapper">
  <div class="pagination">
    <?php if (paginate_links()): ?>
      <?php
      echo paginate_links(
        array(
          "end_size" => 1,
          "mid_size" => 1,
          "prev_next" => true,
          "prev_text" => '前へ',
          "next_text" => '次へ',
          )
        ); ?>
  <?php endif; ?>
  </div>
</div>
<!-- /pagination -->