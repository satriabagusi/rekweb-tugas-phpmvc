<div class="container mt-3">

<div class="row">
<div class="col-lg-6">
<?php Flasher::flash();?>
</div>
</div> 

    <div class="row mb-3">
        <div class="col-lg-6">            
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">            
            <form action="<?= BASEURL;?>mahasiswa/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>

                <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item "><?= $mhs['nama']?>
                    <a href="<?= BASEURL;?>mahasiswa/hapus/<?= $mhs['id']?>" class="badge badge-pill badge-danger float-right ml-1 p-2" onclick="return confirm('Ingin hapus data mahasiswa?')">Hapus</a>
                    <a href="<?= BASEURL;?>mahasiswa/ubah/<?= $mhs['id']?>" class="badge badge-pill badge-success float-right ml-1 p-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id'];?>">Ubah</a>
                    <a href="<?= BASEURL;?>mahasiswa/detail/<?= $mhs['id']?>" class="badge badge-pill badge-info float-right ml-1 p-2">Detail</a>
                    </li>
                <?php endforeach;?>
                </ul>

            </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Industri">301 - Teknik Industri</option>
            <option value="Teknologi Pangan">302 - Teknologi Pangan</option>
            <option value="Teknik Mesin">303 - Teknik Mesin</option>
            <option value="Teknik Informatika">304 - Teknik Informatika</option>
            <option value="Teknik Lingkungan">305 - Teknik Lingkungan</option>
            <option value="Teknik Perencanaan & Wilayah Kota">306 - Teknik Perencanaan & Wilayah Kota</option>
        </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>