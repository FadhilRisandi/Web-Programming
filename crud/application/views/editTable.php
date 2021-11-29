<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto:wght@300&display=swap');

		*{
			font-family: 'Quicksand';
			
		}

		h1{
			color: white;
			font-weight: bold;
			text-shadow: 4px 4px 3px rgb(165, 161, 182);
		}

		.headerMain3{
			font-size: 20px;
			padding: 40px;
			background-color: transparent;
			text-align: center;
			color: white;

		}

		body{
			background-image: url(https://cdn3.f-cdn.com/contestentries/1489974/18545046/5cba2aba229c4_thumb900.jpg);
		}

		footer {
			padding: 20px;
			color: white;
			background-color: transparent;
			text-align: center;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="headerMain3">
		<h1>Tugas CRUD menggunakan framework CI</h1>
		<p>H071201082 Andi Fadhil Risandi Kresna</p>
	</div>
	
<div class="card border-info">
    <div class="card-header">CRUD Table</div>
		<div class="card-body">
			<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
			<table class="table table-bordered table-striped">
				<tr>
					<td>NIM</td>
				
					<td><input type="text" name="nim" class="form-control" value="<?php echo $queryMhsDetail->nim ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
				
					<td><input type="text" name="nama" class="form-control" value="<?php echo $queryMhsDetail->nama ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					
					<td><input type="text" name="alamat" class="form-control" value="<?php echo $queryMhsDetail->alamat ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>

					<td><input type="text" name="jurusan" class="form-control" value="<?php echo $queryMhsDetail->jurusan ?>"></td>
				</tr>
				<tr>
					<td colspan="3"><button class="btn btn-success" type="submit">Update Mahasiswa</button></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>

<footer>
        <p>Available at your Favorite Store</p>
        <p>Thank You :)</p>
</footer>
</body>
</html>