<div class="container">


<div class="row mt-3">




    <div class="col-sm-6">
        <form action="" method="post">
<input type="hidden" name="id" value="<?= $user['user_id']?>">
        <div class="mb-3">
    <label for="username" class="form-label text-light">Username</label>
    <input type="text" value="<?= $user['username'];?> " name="username" class="form-control" placeholder="Username" id="username" >
    <div id="emailHelp" class="form-text text-danger"><?= form_error("username"); ?></div>
  </div>

  <div class="mb-3">
    <label for="WorldName" class="form-label text-light">World Name</label>
    <input id=WorldName type="text" class="form-control" value="<?= $user['world_name'];?>" name="worldName" placeholder="WorldName" >
    
  </div>

  <select class="mb-3 form-select" name="gaji" id="gaji" >
  <?php foreach($gaji as $u):?>
    <?php if($u == $user['gaji']):?>
  <option value="<?= $u;?>" selected ><?= $u?></option>
  <?php else: ?>
  <option value="<?= $u;?>" > <?= $u?></option>
  <?php endif;?>
  <?php endforeach;?>
</select>
<div id="emailHelp" class="form-text text-danger"><?= form_error("gaji"); ?></div>
  <button type="submit" class="btn btn-primary">ubah</button>
        </form>
    </div>
    <div class="col-sm-6">
      <h1> </h1>
    </div>
</div>
</div>