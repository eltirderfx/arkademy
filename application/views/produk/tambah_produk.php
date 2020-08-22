<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Barang</title>
</head>
<body>
	<h1>Tambah Barang</h1>
	<hr>
	<a href="<?= base_url() ?>">Kembali</a>

	<br>
	<br>

	<?= form_open(''); ?>

	<p>Nama Produk</p>
	<input type="text" name="name" value="<?= set_value('name'); ?>"/>
	<?php echo form_error('name'); ?>

	<p>Keterangan</p>
	<textarea name="ket" cols="30" rows="5"><?= set_value('ket') ?></textarea>
	<?php echo form_error('ket'); ?>

	<p>Harga</p>
	<input type="text" name="harga" value="<?= set_value('harga'); ?>"/>
	<?php echo form_error('harga'); ?>

	<p>Jumlah</p>
	<input type="text" name="jumlah" value="<?= set_value('jumlah'); ?>"/>
	<?php echo form_error('jumlah'); ?>

	<br><br>
	<button type="submit">Tambah</button>

	</form>
</body>
</html>
