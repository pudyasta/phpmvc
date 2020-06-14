<?php foreach ($data['mhs'] as $mhs):?>
    <li class="list-group-item ">
    <?= $mhs['nama'] ?>
    <a href="<?=BASEURL?>/mahasiswa/hapus/<?=$mhs['id']?>" class="badge badge-danger ml-1 float-right" onclick="return confirm('Yakin?')">Hapus</a>
    <a href="<?=BASEURL?>/mahasiswa/" class="badge badge-success ml-1 float-right ubahdataform"  data-toggle="modal" data-target="#formmodal" data-id="<?=$mhs['id']?>">Update</a>
    <a href="<?=BASEURL?>/mahasiswa/detail/<?=$mhs['id']?>" class="badge badge-primary float-right">Detail</a>
    </li>
<?php endforeach;?>