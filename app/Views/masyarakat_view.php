<?= $this->extend('layouts/admin')?>
<?= $this->section('title')?>
Data Masyarakat
<?= $this->endSection()?>
<?= $this->section('content')?>

        <div class="col">
    <div class="card border-primary">
        <div class="card-header bg-primary">
            <a href="#" data-masyarakat="" class="btn btn-outline-light" data-target="#modalMasyarakat" data-toggle="modal">Tambah Masyarakat</a>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-striped" id="masyarakat">
        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Telp</th>
                <th>Aksi</th>
            </tr>
            <tbody>
            <?php
                $no=0;
                foreach($masyarakat as $row){
                    $no++;
                    $data = $row['nik'].",". $row['nama'].",".$row['username'].",".$row['password'].",".$row['telp'].",".base_url('masyarakat/edit/'.$row['id_masyarakat']);
                    
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$row['nik']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['username']?></td>
                        <td><?=$row['password']?></td>
                        <td><?=$row['telp']?></td>
                        <td>
                            <a href="" data-masyarakat="<?=$data?>" data-target="#modalMasyarakat" data-toggle="modal" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <a href="<?=base_url('masyarakat/delete/'.$row['id_masyarakat'])?>" onclick="return confirm('yakin mau hapus')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                         </td>
                    </tr>
                 <?php
                }
            ?>
            </tbody>
            </div>
        </table>
        <?php if (!empty(session()->getFlashdata("message"))) : ?>
    <div class="alert alert-success">
    <?= session()->getFlashdata("message") ?>
    </div>
    <?php endif ?>
    </div>
    </div>
</div>


</div>

<div class="modal fade" id="modalMasyarakat" tabindex="-1" aria-labelledby="modalMasyarakatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 clas="modal-title" id="exampleModalLabel">Input data Masyarakat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="fMasyarakat" action="" method="post">
            <div class="modal-body">
                <div class="form-group">               
                    <label for="nik">Nik</label>
                    <input type="text" name="nik" class="form-control" id="nik">
                </div>
                <div class="form-group">               
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="telp" name="telp" class="form-control" id="telp">
                </div>
                <div class="form.group" id="ubahpassword">
                    <label for="ubahpassword">Ubah Password</label>
                    <input type="checkbox" name="ubahpassword" aria-label="Mau Ubah Password" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection()?>
<?=$this->section("script")?>
    <script>
    $(document).ready(function(){
        $("#modalMasyarakat").on('show.bs.modal',function(event){
            var button = $(event.relatedTarget);
            var data = button.data('masyarakat');
            alert(data);
            if(data != ""){
                const barisdata = data.split(",");
                $('#nik').val(barisdata[0]);
                $('#nama').val(barisdata[1]);
                $('#username').val(barisdata[2]);
                $('#password').val(barisdata[3]);
                $('#telp').val(barisdata[4]);
                $('#fMasyarakat').attr('action',barisdata[5]);
                $('#ubahpassword').show();
            }else{
                $('#nik').val('');
                $('#nama').val('');
                $('#username').val('');
                $('#password').val('');
                $('#telp').val('');
                $('#fMasyarakat').attr('action','/smasyarakat');
                $('#ubahpassword').hide();
            }

        });

        $('#masyarakat').DataTable();
    })
    </script>
<?=$this->endSection()?>