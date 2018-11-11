<?php $this->load->view('header'); ?>
<div style="margin-left:50px">

<div class="w3-container w3-teal">
</div>
  <h1>Sejarah Peminjaman</h1>
  <table class="table table-striped" style="text-align: center;">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Pemilik</th>
        <th>Harga Sewa/hari</th>
        <th>Jaminan</th>
        <th>Deskripsi</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($peminjaman as $row ): ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?=$row->nama_barang?></td>
        <td><?=$row->username?></td>
        <td><?=$row->harga_sewa_barang?></td>
        <td></td>
        <?php if (strlen($row->deskripsi_barang)>'25') { ?>
                    <td><?php echo substr($row->deskripsi_barang, 0,50)."..."; ?></td>
             <?php } else{ ?>
                      <td><?php echo $row->deskripsi_barang; ?></td>
              <?php } ?> 
        <?php if($row->status_peminjaman=='1'){
              echo "<td>Dalam Proses Persetujuan Pemilik</td>";
        } else if ($row->status_peminjaman=='3'){
            echo "<td>Ditolak Pemilik</td>";
        } else if($row->status_peminjaman=='2'){
          echo "<td>Barang pinjaman diterima anda</td>";
        } else if($row->status_peminjaman=='4'){
          echo "<td>Anda Membatalkannya </td>";
      }?> 
       </tr>
      <?php $i++;endforeach?>
      
    </tbody>
  </table>
  
</div>
      
</body>
</html>
