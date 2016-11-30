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

	<title>Formulir Pembayaran</title>

</head>
<body>
	<div class="container col-lg-12 text-center">
		<h3>Formulir Konfirmasi Pembayaran</h3>
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
				<label for="inputRekening" class="control-label col-xs-4">Rekening</label>
				<div class="col-xs-4">
					<input type="text" class="form-control" id="inputRekening" placeholder="Nomor Rekening">
				</div>
			</div>
			<div class="form-group">
				<label for="inputBukti" class="control-label col-xs-4">Bukti Pembayaran</label>
				<div class="col-xs-4">
					<input type="file" id="inputBukti" placeholder="Bukti Pembayaran">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-4 col-xs-9">
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
</body>
</html>