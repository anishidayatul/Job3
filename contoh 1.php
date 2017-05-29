<html><head><title>Statement if</title></head>
<body>
<?php 
echo"<form action=\"$php_selt\" method=\"post\">";
$nilail=$_POST['nilail'];
echo"Beberapa Nilai PHPmu? :
<input name=\"nilail\" value=\"$nilail\" size=\"3\" type=\"text\" value=\"$nilail\">;
<input name=\"cek\" type=\"submit\" value=\"cek\"> </form>";
if($_post['cek']) //perintah untuk menguji penekanan tombol cek 
{ echo"<br><hl>";
    if($nilail=="")
	     { echo "Anda Belum menentukan Nilai ..!"; }
	elseif(!is_numeric($nilail)) // Jika nilai tidak bertype numeric
	     { echo" Ini Bukan Nilai Angka";}
	else
	     {
			 if($nilai<=30)   // statement pertama
			     { echo "Anda mendapat nilai huruf <b> E </b>";}
			 elseif($nilai<=50)// statement kedua 
			     { echo"Anda mendapat nilai huruf <b> D </b>";}
			 elseif($nilail<=70)// statment ketiga 
			     { echo"Anda mendapat nilai huruf (b> C </b>";}
			 elseif($nilail<=85)// statment keempat 
			     { echo"Anda mendapat nilai huruf (b> AB </b>";}
			 else
			      { echo"Anda mendapat nilai huruf (b> A </b>";}
		 }
	 echo"</hl>";
}
?>
</body>
</html>

