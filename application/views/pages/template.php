<html>
<head>
	<title><?php echo $judul ?></title>
</head>
<body>
	<p><a href="<?php echo base_url(); ?>">home</a></p>
	<?php $this->load->view('pages/'.$hal); ?>
</body>
</html>