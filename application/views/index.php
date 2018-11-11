<?php $this->load->view('header'); ?>
<div class="container" style="background-color: #f5f5f5;margin-top: 50px;">
	<div class="row">
		<?php foreach ($barang as $row) :?>
        <?php if($row->id_user!=$this->session->userdata('id')){ ?>
		  <div class="col-md-3 col-sm-6 thumbnail">
			 <img src="<?='assets/upload_image/'.$row->gambar_barang?>" class="img-responsive">
			 <div class="caption">
			 	     <?php if (strlen($row->nama_barang)>'25') { ?>
                    <td><h4><?php echo substr($row->nama_barang, 0,25)."..."; ?></h4></td>
             <?php } else{ ?>
                      <td><h4><?php echo $row->nama_barang; ?></h4></td>
              <?php } ?>  
				    <p>Harga: <?=$row->harga_sewa_barang;?>/hari</p>
            <a href="<?= 'Peminjaman/pinjam?id_barang='.$row->id_barang;?>" class="btn btn-success">Sewa/Pinjam</a>
			 </div>
		  </div>
        <?php } ?>
		<?php endforeach ?>
	</div>
</div>
<footer>
    <div class="container" style="padding: 50px 50px 50px">
        <div class="row">
            <div class="col-md-4">
                <img src="<?='assets/logoBL.png'?>" style="max-height: 55px;">
                <h3></h3>                
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>Fakultas Teknologi Industri, Universitas Islam Indonesia, Jalan Kaliurang KM. 14,5 Sleman, DI Yogyakarta</p>                
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="template/js/bootstrap.min.js"></script>

</body>
</html>