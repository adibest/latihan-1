<!DOCTYPE html>
<html>
<head>
	<title>JQuery Stop</title>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/script12.js"></script>
	<style type="text/css">
		#efek1, #efek2, #efek3 {
			width: 150px;
			height: 150px;
			border: 1px solid #333;
			background-color: #abcdef;
			margin: 20px;
			position: absolute;
		}
		#efek1 {
			top: 50px;
			left: 20px;
		}
		#efek2 {
			top: 250px;
			left: 20px;
		}
		#efek3 {
			top: 450px;
			left: 20px;
		}
	</style>
</head>
<body>
	<button id="mulai">Mulai</button>
	<button id="henti1">Berhenti</button>
	<button id="henti2">Berhenti Semua</button>
	<button id="henti3">Berhenti Langsung Akhir</button>
	<br><br>
	<div id="efek1">Efek 1</div>
	<div id="efek2">Efek 2</div>
	<div id="efek3">Efek 3</div>
</body>
</html>