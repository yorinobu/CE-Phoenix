<div class="table-responsive">
  <?php
  if ('' !== $form_start) {
    echo $form_start;
  }
  ?>
  <table class="table table-striped table-hover">
    <thead class="thead-light">
      <tr>
        <th><?php echo $heading ?></th>
      </tr>
    </thead>
    <tbody>
      <?php echo $contents ?>
    </tbody>
  </table>
  <?php
  if ('' !== $form_close) {
    echo $form_close;
  }
  ?>
</div>

<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/
?>