<?php
/**
 * AJAX request on clicking a name of a creditor.
 */
if (isset($_POST['creditor'])) {
  echo $_POST['creditor'];
  include "creditor_data.php";
}
