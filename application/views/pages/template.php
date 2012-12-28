<html>
<head>
	<title><?php echo $judul ?></title>
	<style type="text/css">
		body {
			background: black;
		}
		#wrapper {
			width: 900px;
			background: pink;
			margin: 10px auto 0 auto;
		}
		#banner {
			background: blue;
			height: 200px;
			margin:0;
		}
		#navi {
			background: green;
			width: 250px;
			float: left;
		}
			#navi a {
				color: white;
				text-decoration: none;
				font-size: 18pt;
			}
		#main {
			background: #eeeeee;
			height: 640px;
			margin: 0 10px 10px 260px;
		}
		#footer {
			background: yellow;
		}
	</style>
</head>
<body>
	<div id="wrapper"><!-- wrapper -->
		<div id="banner"><!-- banner -->
			header
		</div>
		<div id="navi"><!-- navigasi -->
			<a href="<?php echo base_url(); ?>">home</a>
		</div>
		<div id="main"><!-- main -->
			<?php $this->load->view('pages/'.$hal); ?>
		</div>
		<div id="footer"><!-- footer -->
			footer
		</div>
	</div>
</body>
</html>