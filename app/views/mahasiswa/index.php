<div class="container mt-3">

    <div class="row"></div>
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="tombolTambahData btn btn primary" id="tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa ..." name="keyword" id="keyword" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                        </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <divv class="col-lg-6">
            

            <h3> Daftar Mahasiswa </h3>
                <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs): ?>
                       <li class="list-group-item">
                           <?= $mhs['nama'] ?>
                                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>"class="badge badge-primary float-right ml-1">detail</a>
                                <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id'] ?>"class="tampilModalUbah badge badge-success float-right ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'] ?>">Ubah</a>
                                <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>"class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                            <?php endforeach ?>
                        </li>
                </ul>                
        </div>
    </div>

</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" arial-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" class="form-control" name="nrp" id="nrp">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Tekhnik Informatika">Tekhnik Informatika</option>
                            <option value="Tekhnik Arsitek">Tekhnik Arsitek</option>
                        </select>
                    </div>
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-scondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>