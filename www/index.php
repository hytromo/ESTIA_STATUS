<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta rel="author" content="Alex Solanos">
		<title><?php echo $var; ?></title>
	</head>
	<body>

		<center>
			<h3>
				Τελευταία ενημέρωση: <?php echo date("d F Y H:i", filemtime($_SERVER["DOCUMENT_ROOT"]."/status/thl.txt")); ?> (Τοπική ώρα)
			</h3>

			<canvas id="network"></canvas>
		</center>

		<script type="text/javascript">
<?php
				$thlefwneio=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/thl.txt"));
				$omadaDiktyou=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/om.txt"));
				$z=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/z.txt"));
				$h=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/h.txt"));
				$th=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/th.txt"));
				$a=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/a.txt"));
				$b=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/b.txt"));
				$c=str_replace(array("\r", "\n"), "", file_get_contents($_SERVER["DOCUMENT_ROOT"]."/status/c.txt"));
			?>
			var thlefwneio = '<?php echo $thlefwneio; ?>';
			var omadaDiktyou = '<?php echo $omadaDiktyou; ?>';
			var z = '<?php echo $z ?>';
			var h = '<?php echo $h ?>';
			var th = '<?php echo $th; ?>';
			var a = '<?php echo $a; ?>';
			var b = '<?php echo $b; ?>';
			var c = '<?php echo $c; ?>';
		</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="paint.js"></script>
	</body>
</html>