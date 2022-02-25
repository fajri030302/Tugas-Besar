
<div class="container  my-5">
<?php if ($this->session->flashdata('flash') ):?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Berhasil <?= $this->session->flashdata('flash');?></h4>
  
</div>
<?php endif;?>
    <div class="row">
        <div class="col-10">
            <h1 class=" text-light " >kumpulan job yang tersedia!!!</h1>
        </div>
        <div class="col-2"><a href="<?= base_url();?>job/tambah"><ion-icon class=" text-light" style="font-size: 40px;"  name="person-add"></ion-icon></a></div>
       
 
        <div class="row my-5">
        <div class="col-2"> <span class=" "><a class="" href="#" ><ion-icon class=" text-light" style=" font-size: 40px;"  name="person-add"></ion-icon></a></span></div>
   <div class="col-2"><span style="width: 99px; height: 93px;" class=" "><a class="" href="#" ><ion-icon class=" text-light" style=" font-size: 40px;"  name="person-add"></ion-icon></a></span></div>
   <div class="col-2"><span class=" "><a class="" href="#" ><ion-icon class=" text-light" style=" font-size: 40px;"  name="person-add"></ion-icon></a></span></div>
   <div class="col-2"><span class=" "><a class="" href="#" ><ion-icon class=" text-light" style=" font-size: 40px;"  name="person-add"></ion-icon></a></span></div>
<div class="col-md-4"><form action="" method="POST" class="d-flex">


      <input class="form-control me-2" type="search" placeholder="Search" name="keyword" >
      <button class="btn btn-osutline-success" type="submit">Search</button>
      </form>
</div>  
</div>
    </div>
    <?php if( empty($user)):?>
        <!-- <div class="alert alert-danger" role="alert">
  YO NDA TAU KOK TANYA SAYA !
</div> -->
        <?php endif;?>
    <div class="row justify-content-center">
        
            <?php foreach ( $job as $user) : ?>
                <div class="col-lg-3 col-md-6 justify-content-center my-2 mx-2">
                    <div class="card my-2 " style="width: 260px;
height: 335px;">
                    <img src="<?= base_url();?>public/img/logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $user['username'];?> </p>
                       

                        <a href="<?= base_url();?>job/detail/<?= $user["user_id"];?>" class="btn btn-primary">CLICK ME</a>
                        <a href="<?= base_url();?>job/ubah/<?= $user["user_id"];?>" class="btn btn-success">edit world</a>
                        <a href="<?= base_url();?>job/hapus/<?= $user["user_id"];?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                    </div>
                    </div>
                    </div>
                <?php endforeach; ?>
        
    </div>
</div>
