<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF=8">
	<title><?php echo $data['title']; ?></title>
	<link href="<?php echo APP_PATH; ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">">

	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">

	<link rel="stylesheet" href="<?= APP_PATH;?>/css/style.css">

</head>

<body>
	<nav class="navbar">
		<div class="navbar-logo">
			<a href="#">Melrick</a>
		</div>
		<ul class="navbar-menu">
			<li><a href="<?= APP_PATH;?>/Home/staff">Staff</a></li>
			<li><a href="<?= APP_PATH;?>/Home/obat">Obat</a></li>
			<li><a href="<?= APP_PATH;?>/Home/add">Add</a></li>
		</ul>
		<div class="navbar-toggle">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>

	<script>
		// Script for toggling the navbar menu on smaller screens
		const toggleButton = document.querySelector('.navbar-toggle');
		const menu = document.querySelector('.navbar-menu');

		toggleButton.addEventListener('click', () => {
			menu.classList.toggle('active');
		});
	</script>
