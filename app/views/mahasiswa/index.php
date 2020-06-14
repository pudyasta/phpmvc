<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
        <h1>Selamat Datang</h1>
        <?php Flasher::flash()?>
        <button type="button" class="btn btn-primary mb-3 tambahdata" data-toggle="modal" data-target="#formmodal">
            Tambah Data Siswa
        </button>

        <form action="<?=BASEURL?>/mahasiswa/search" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control keyword" placeholder="Cari siswa" name="keyword" autocomplete="off">
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
            </div>
          </div>
        </form>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs):?>
                <li class="list-group-item ">
                <?= $mhs['nama'] ?>
                <a href="<?=BASEURL?>/mahasiswa/hapus/<?=$mhs['id']?>" class="badge badge-danger ml-1 float-right" onclick="return confirm('Yakin?')">Hapus</a>
                <a href="<?=BASEURL?>/mahasiswa/" class="badge badge-success ml-1 float-right ubahdataform"  data-toggle="modal" data-target="#formmodal" data-id="<?=$mhs['id']?>">Update</a>
                <a href="<?=BASEURL?>/mahasiswa/detail/<?=$mhs['id']?>" class="badge badge-primary float-right">Detail</a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulmodal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL?>/mahasiswa/tambahsiswa" method="POST" id="form-modal">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama Siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="number" class="form-control" id="nis" name="nis" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Teknik Gambar Bangunan">Teknik Gambar Bangunan</option>
            <option value="Kimia Analis">Kimia Analis</option>
            <option value="Kimia Industri">Kimia Industri</option>
            <option value="Geologi Tambang">Geologi Tambang</option>
            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary kirimdata">Tambah Data</button>
        </form> 
      </div>
    </div>
  </div>
</div>