<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/app.css">
</head>
<body>
    <!-- <div class="container"> -->
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">JUNIOR WEB DEVELOPER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active bar" aria-current="page" href="<?= BASEURL; ?>/bus">DAFTAR HARGA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bar" href="<?= BASEURL; ?>/tiket">PESAN TIKET</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/bus"></a>
        </li> -->
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
