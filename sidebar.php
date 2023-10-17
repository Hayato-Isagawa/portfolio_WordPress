<!-- side -->
  <aside class="l-2column-side">

    <?php
    if (is_active_sidebar('sidebar')):
      dynamic_sidebar('sidebar');
    endif;
    ?>

  </aside>
  <!-- /side -->