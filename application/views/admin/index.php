<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="<?=base_url('admin');?>" method="POST">
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Seacrh" autocomplete="off" name="keyword" aria-label="Recipient's username" >
  <input class="btn btn-outline-light btn-primary" type="submit" name="submit">
</div>
    </form></div>
</div>

    <div class="row">
        <div class="col-md-10">
            <h3>List User</h3>

            <table class="text-light table">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            World Name
                        </th>

                        <th>
                            Gaji
                        </th>
                        <th>
                            action
                        </th>
                    </tr>
                </thead>
                <!-- <?php $i =1?> -->
                    <?php foreach($user as $userr):?>
                <tbody>
                    <tr>
                        <th>
                            <?= ++$start ?>
                        </th>

                        <td>
                            <?= $userr['username']?>
                        </td>

                        <td>
                        <?= $userr['world_name']?>
                        </td>

                        <td>
                            Gaji
                        </td>
                        <td>
                            <a href="<?= base_url();?>admin/hapuss/<?= $userr["user_id"];?>" class="badge bg-danger">Hapus</a>
                            <a href="#" class="badge bg-success">Edit</a>
                            <a href="#" class="badge bg-primary">Detail</a>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach;?>
            </table>
<?= $this->pagination->create_links();?>
        </div>
    </div>
</div>