<div class="container">


<div class="row mt-3">




    <div class="col-sm-6">
        <form action="" method="post">

        <div class="mb-3">
    <label for="username" class="form-label text-light">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Username" id="username" >
    <div id="emailHelp" class="form-text text-danger"><?= form_error("username"); ?></div>
  </div>

  <div class="mb-3">
    <label for="WorldName" class="form-label text-light">World Name</label>
    <input id=WorldName type="text" class="form-control" name="worldName" placeholder="WorldName" >
    
  </div>

  <select class="mb-3 form-select" name="gaji" id="gaji" >
  <option selected>GAJI WORLD</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="6">6</option>
</select>
<div id="emailHelp" class="form-text text-danger"><?= form_error("gaji"); ?></div>
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-sm-6">
      <h1> </h1>
    </div>
</div>
</div>