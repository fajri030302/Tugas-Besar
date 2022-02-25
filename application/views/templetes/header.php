<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="<?= base_url();?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/public/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body id="page-top"  >
<!--cara buat logo su biar nempel asuu-->

<nav class="navbar  navbar-expand-sm navbar-transparant bg-transparant " id="mainNav">
  <div class="container">
    
    <a class="navbar-brand" href="">
       <img src="<?= base_url();?>/public/img/logo.png " alt="" width="125" height="64"></a>
    <button class="navbar-toggler toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      
      <ul class="navbar-nav  ">
        <li class="nav-item  px-3">
          <a class="fz  nav-link active" aria-current="page" href="<?= base_url();?>">Home</a>
        </li>
        <li class="nav-item px3 ">
          <a class="fz  nav-link"  href="<?= base_url();?>job">Job</a>
        </li>
        <li class="nav-item px-3">
          <a class="fz  nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item px-3">
          <a class="fz  nav-link" href="<?= base_url()?>admin">Login</a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
    