<?php $this->load->library('session') ?>
<?php $this->load->helper('form') ?>
<?php //$this->load->view('dashboard_user/sidebar') ?>
<!-- Sidebar -->
<?php $this->load->view('header'); ?>
<div style="margin-left:">
 <style>
   th{
    text-align: center;
   }
 </style>
<div class="container">
  <h2><?=$heading?></h2>           
  <table class="table table-striped" style="text-align: center;">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Harga Sewa/hari</th>
        <th>Kategori</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($barang as $row ): ?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><?=$row->nama_barang?></td>
        <?php if ($row->status=='1'){ ?>
            <td>Tersedia</td>
        <?php }else{?>
                  <td>Sedang dipinjam</td>
        <?php } ?>
        
        <td><?=$row->harga_sewa_barang?></td>
        <td><?php echo $row->nama_kategori ?></td>
        <td>
          <a href="<?='Products/update/'.$row->id_barang;?>" class="btn btn-primary">Edit</a>
          <a href="<?='Products/delete/'.$row->id_barang;?>" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php $i++;endforeach?>
    </tbody>
  </table>
  <a href="<?='Products/create'?>" type ="button" class="btn btn-success">Tambah Barang</a>
</div>
      
</body>
</html>
