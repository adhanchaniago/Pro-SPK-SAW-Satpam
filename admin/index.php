<?php
include 'assets/model/Db.php';
$db = new Db();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>PT. Kyara Multi Baraka</title>
  <?php include 'components/head.php'; ?>
</head>

<body>

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php //include 'components/side-bar.php'; 
    ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <?php include 'components/top-bar.php'; ?>
      <?php include 'content.php'; ?>


    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php include 'components/scripts.php'; ?>


</body>

</html>