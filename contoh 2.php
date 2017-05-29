<html>
<head><title>Pernyataan SWITCH</title></head>
<body>
<?PHP
$m=date("m", time()); // mencari nilai bulan dalamformat m
switch ($m)
    {
	case "1" :$namabulan="Januari";break;	
	case "2" :$namabulan="Februari";break;	
	case "3" :$namabulan="Maret";break;	
	case "4" :$namabulan="April";break;	
	case "5" :$namabulan="Mei";break;
	case "6" :$namabulan="Juni";break;
	case "7" :$namabulan="Juli";break;
	case "8" :$namabulan="Agustus";break;	
	case "9" :$namabulan="September";break;	
	case "10" :$namabulan="Oktober";break;
	case "11" :$namabulan="November";break;	
	case "12" :$namabulan="Desember";break;	
	}
echo"<h2>Sekarang adalah bulan : $namabulan</h2> ";
?>
</body>
</html>