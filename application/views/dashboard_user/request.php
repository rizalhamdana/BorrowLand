<?php $this->load->view('header'); ?>
<div style="margin-left:50px">

<div class="w3-container w3-teal">
</div>
  <h1>Permintaan anda</h1>
  <table class="table table-striped" style="text-align: center;">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Peminjam</th>
        <th>Harga Sewa/hari</th>
        <th>Jaminan</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($data as $row ): ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?=$row->nama_barang?></td>
        <td><?= $row->username;?></td>
        <td><?=$row->harga_sewa_barang?></td>
        <td></td>
        <?php if (strlen($row->deskripsi_barang)>'25') { ?>
                    <td><?php echo substr($row->deskripsi_barang, 0,50)."..."; ?></td>
             <?php } else{ ?>
                      <td><?php echo $row->deskripsi_barang; ?></td>
              <?php } ?>  
        <td><a href="#" class="btn btn-success">Terima</a>&nbsp<a href="<?='Permintaan/tolakPermintaan/'.$row->id_transaksi.'?id_barang='.$row->id_barang;?>" class="btn btn-danger">Tolak</a></td>
       </tr>
      <?php $i++;endforeach?>
      
    </tbody>
  </table>
  
</div>
      
</body>
</html>
