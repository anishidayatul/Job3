<html>
<head>
<title>For Statement break</title>
</head>
<body>
    <?php
     for ($nilai=1; $nilai<=12; $nilai++)
	 {
	      print "<b>$nilai x 3 = ".($nilai*3)."</b><br>"; 
	      if($nilai == 4)
	      {print "<b>Berhenti disini, \$nilai=$nilai</b><br>";
		  break; }
	 }
     ?>
</body>
</html>