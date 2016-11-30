<?php
$assets_location = base_url()."assets/bootstrap/";

?>

<!DOCTYPE html>
<html>
<head>

    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="<?php echo $assets_location;?>dist/css/bootstrap.css" rel="stylesheet" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $assets_location;?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Formulir Pemesanan</title>

</head>
<body>
	<div class="container col-lg-12 text-center">
		<h3>Formulir Pemesanan Buku</h3>
    </div>
    <br>
		<form class="form-horizontal">
            <div class="form-group">
				<label for="inputKTP" class="control-label col-xs-4">KTP</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputNama" placeholder="Nomor KTP">
				</div>
			</div>
			<div class="form-group">
				<label for="inputNama" class="control-label col-xs-4">Nama</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputNama" placeholder="Nama">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAlamat" class="control-label col-xs-4">Alamat</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputAlamat" placeholder="Alamat">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="control-label col-xs-4">Email</label>
				<div class="col-xs-4">
					<input type="email" class="form-control" id="inputEmail" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputNomor" class="control-label col-xs-4">No HP</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputNomor" placeholder="No HP">
				</div>
			</div>
			<div class="form-group">
				<label for="inputRekening" class="control-label col-xs-4">Rekening</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputRekening" placeholder="Nomor Rekening">
				</div>
			</div>
			<div class="form-group">
				<label for="inputJudul" class="control-label col-xs-4">Judul Buku</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputJudul" placeholder="Julul Buku">
				</div>
			</div>
			<div class="form-group">
				<label for="inputJumlah" class="control-label col-xs-4">Jumlah Buku</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputJumlah" placeholder="Jumlah Buku">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-4 col-xs-9">
					<button type="submit" class="btn btn-primary">Pesan</button>
				</div>
			</div>
		</form>
</body>
</html>