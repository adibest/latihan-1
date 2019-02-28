<!DOCTYPE html>
<html>
<head>
	<title>Form Dinamis - Adib</title>
	<link rel="stylesheet" type="text/css" href="jq-form.css">
</head>
<body>
	<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="n_p1" class="form-control depox" placeholder="Nama Penumpang">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="t_p1" class="form-control depox" placeholder="Nomor HP">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="l_p1" class="form-control depox" placeholder="Alamat Penjemputan">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-12">
			<input type="text" name="l_t1" class="form-control depox" placeholder="Alamat Tujuan">
		</div>
	</div>

	<span rel="tooltip" title="klik untuk menambah penumpang" class="addPassenger pull-right fa fa-plus fa-3x hover-depox">add</span>
	<a class="text-warning pull-right removePassenger"><span class="fa fa-times">rem</span></a>

	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/jq_form.js"></script>
</body>
</html>