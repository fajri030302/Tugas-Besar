<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card" style="width: 18rem;">
  <img src="<?= base_url()?>/public/img/index.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kerja Option</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $user['username']; ?></li>
    <li class="list-group-item"><?= $user['world_name'];?> </li>
    <li class="list-group-item"><?=$user['gaji'];?> </li>
  </ul>
  <div class="card-body">
    <a href="<?= base_url();?>/job" class="card-link">kembali</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
        </div>
    </div>
</div>