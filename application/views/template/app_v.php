<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crud | IFramework</title>
  <link rel="stylesheet" href="<?= BASE_PATH; ?>/bootstrap/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">  
      <a class="navbar-brand" href="<?= BASE_PATH; ?>/welcome">IFramework</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <?php
  //Menampilkan konten halaman
    $view = new View($viewName);
    $view->bind('data', $data);
    $view->render();
  ?>
  <script src="<?= BASE_PATH ?>/jquery/jquery.js"></script>
  <script src="<?= BASE_PATH ?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>