<?php 
  $this->load->helper('form','url');
  $this->load->library('session');
 ?>

<!DOCTYPE html>
<html>
<title>Tambah Barang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<!-- Sidebar -->

<div style="margin-left:50px";>
  <?= form_open_multipart('Products/create');?>
  <div class="form-group"> 
  </div>
  <label for="nama"> Nama Barang </label> <br/>
  <input type="text" name="nama_barang" placeholder="Isikan Nama Barang" required class="form-control" style="width: 50%"> <br />
  <label for="harga"> Harga per hari </label> <br />
  Rp. <input type="number" name="harga_sewa_barang" class="form-control" style="width: 15%;display: inline-block;margin-bottom: 10px;" required> <br />
  <label for="deskripsi"> Deskripsi </label> <br />
  <textarea name="deskripsi_barang" required class="form-control" style="width: 50%"></textarea> <br />
  <label for="kategori">Kategori</label><br>
  <select name="kategori_barang" class="form-control" style="width: 20%;margin-bottom: 10px" required>
    <option value=" ">--Pilih Kategori--</option>
    <?php 
      foreach ($kategori as $baris): ?>
          <option value="<?= $baris->id_kategori;?>"><?= $baris->nama_kategori ?></option>
      <?php endforeach; ?>
  </select>
  <?= form_hidden('id_user',$this->session->userdata('id'))?>
  <label for="gambar">Gambar</label>
  <input type="file" name="userfile" style="margin-bottom: 25px; border-radius: 0.5" required>
  <input type="submit" value="Tambah" class="btn btn-default">
  <a href="<?=base_url().'Products'?>" class='btn btn-danger'>Batal</a>
  <?=form_close()?>
</div>
      
</body>
</html>
