<p>ini halaman kuliner</p>
<?php foreach($konten as $k): ?>
	<h2><?php echo $k->nama_masakan ?></h2>
	<img src="<?php echo base_url().'images/'.$k->gambar; ?>">
	<p><?php echo $k->isi ?></p>
	<p><?php echo $k->tanggal ?></p>
<?php endforeach; ?>