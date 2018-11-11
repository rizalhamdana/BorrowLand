<?php $this->load->view('header'); ?>
<div style="margin-left:50px">

<div class="w3-container w3-teal">
</div>
  <h1>Keranjang anda</h1>
  <table class="table table-striped" style="text-align: center;">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Pemilik</th>
        <th>Harga Sewa/hari</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($peminjaman as $row ): ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?=$row->nama_barang?></td>
        <td><?=$row->username?></td>
        <td><?=$row->harga_sewa_barang?></td>
        <td><?= $row->deskripsi_barang ?></td>
        <td><a href="<?= 'Peminjaman/batalPinjam/'.$row->id_transaksi.'?id_barang='.$row->id_barang?>" class="btn btn-danger">Batalkan</a></td>
       </tr>
      <?php $i++;endforeach?>
      
    </tbody>
  </table>
  
</div>
      
</body>
</html>
