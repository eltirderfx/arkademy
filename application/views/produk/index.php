<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
	<h1>Produk</h1>
	<hr>
	<a href="<?= base_url('produk/tambah_produk') ?>">Tambah Produk</a>
	<br><br>
	<table border="1" cellpadding="0px" cellspasing="10px">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($allProduk as $produk) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $produk->nama_produk; ?></td>
			<td><?= $produk->keterangan; ?></td>
			<td><?= $produk->harga; ?></td>
			<td><?= $produk->jumlah; ?></td>
			<td><a href="<?= base_url('produk/edit_produk/' . $produk->id) ?>">Edit</a> | <a href="<?= base_url('produk/hapus_produk/' . $produk->id) ?>">Hapus</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
