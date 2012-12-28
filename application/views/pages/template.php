<html>
<head>
	<?php $this->load->view('templates/header'); ?>
</head>
<body>
	<div id="wrapper"><!-- wrapper -->
		<div id="banner"><!-- banner -->
			<?php $this->load->view('templates/banner'); ?>
		</div>
		<div id="navi"><!-- navigasi -->
			<?php $this->load->view('templates/navi'); ?>
		</div>
		<div id="main"><!-- main -->
			<?php $this->load->view('pages/'.$hal); ?>
		</div>
		<div id="footer"><!-- footer -->
			<?php $this->load->view('templates/footer') ?>
		</div>
	</div>
</body>
</html>