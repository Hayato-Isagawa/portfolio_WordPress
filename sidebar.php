<!-- side -->
  <aside class="column__side">

    <?php
    if (is_active_sidebar('sidebar')):
      dynamic_sidebar('sidebar');
    endif;
    ?>

  </aside>
  <!-- /side -->