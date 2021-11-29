<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="CSS/CRUD.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="headerMain">
		<h1>Tugas CRUD menggunakan framework CI</h1>
		<p>H071201082 Andi Fadhil Risandi Kresna</p>
	</div>
	
<div class="card border-info">
    <div class="card-header">CRUD Table</div>
         <div class="card-body">
	<!-- <a href="<?php echo base_url('/home/createTable') ?>">Tambah Mahasiswa</a> -->
	
	<br>
	<br>
	<table class="table table-bordered table-striped">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAllMhs as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nim ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->alamat ?></td>
			<td><?php echo $row->jurusan ?></td>
			<!-- <td><a class="container-edit" href="<?php echo base_url('/home/editTable') ?>/<?php echo $row->nim ?>">Edit</a> | <a class="container-delete" href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a></td> -->
			<td>
				<a href="<?php echo base_url('/home/editTable') ?>/<?php echo $row->nim ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?php echo base_url('/home/createTable') ?>" class="btn btn-success ">Tambahkan</a>
	</div>
</div>

<footer>
        <p>Available at your Favorite Store</p>
        <p>Thank You :)</p>
</footer>

</body>
</html>