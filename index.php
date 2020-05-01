<?php
include 'admin/assets/model/Db.php';
$db = new Db();
// var_dump($db->getAllUser());
?>

<!doctype html>
<html class="" lang="en">

<head>
    <title>PT. Kyara Multi Baraka</title>
    <?php include 'components/head.php' ?>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->
    <?php include 'components/loading.php' ?>
    <!--End off Preloader -->


    <div class="culmn">
        <?php include 'components/menu.php' ?>

        <?php include 'components/banner.php' ?>

        <?php include 'content.php' ?>

        <?php include 'components/scrollup.php' ?>

        <?php include 'components/footer.php' ?>

    </div>

    <?php include 'components/scripts.php' ?>
</body>

</html>