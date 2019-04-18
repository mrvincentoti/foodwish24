<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FoodWish - Admin</title>
  <!-- plugins:css -->
  <!--link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css"-->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!--link rel="stylesheet" href="../../css/style.css"-->
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <?=
    $this->Html->css([
        'materialdesignicons.min','vendor.bundle.base','styleb','customb'
      ])
  ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>

</head>

<body>

<?= $this->fetch('content') ?>

<!-- plugins:js -->
<!--script src="../../vendors/js/vendor.bundle.base.js"></script>
<script src="../../vendors/js/vendor.bundle.addons.js"></script-->
<!-- endinject -->
<!-- inject:js -->
<!--script src="../../js/off-canvas.js"></script>
<script src="../../js/misc.js"></script-->
<!-- endinject -->
<?=
    $this->Html->script(['vendor.bundle.base', 'vendor.bundle.addons', 'off-canvas.js', 'misc'])
?>
<?= $this->fetch('script') ?>
</body>

</html>