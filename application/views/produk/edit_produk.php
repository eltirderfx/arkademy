<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Produk</title>
</head>
<body>
	<h1>Edit Produk</h1>
	<hr>
	<a href="<?= base_url() ?>">Kembali</a>

	<br>
	<br>

	<?= form_open(''); ?>

	<p>Nama Produk</p>
	<input type="text" name="name" value="<?= $produk->nama_produk; ?>"/>
	<?php echo form_error('name'); ?>

	<p>Keterangan</p>
	<textarea name="ket" cols="30" rows="5"><?= $produk->keterangan; ?></textarea>
	<?php echo form_error('ket'); ?>

	<p>Harga</p>
	<input type="text" name="harga" value="<?= $produk->harga; ?>"/>
	<?php echo form_error('harga'); ?>

	<p>Jumlah</p>
	<input type="text" name="jumlah" value="<?= $produk->jumlah; ?>"/>
	<?php echo form_error('jumlah'); ?>

	<br><br>
	<button type="submit">Ubah</button>

	</form>
</body>
</html>
