<?php

	$nama= $_POST['vnama'];
	$jumlah=$_POST['vjml'];
	$pilih=$_POST['vpilih'];
	$code=$_POST['vcode'];
	$tanggal=$_POST['vtanggal'];
	$via=$_POST['via'];
	$harga=$_POST['vharga'];
	$alamat=$_POST['valamat'];
	

	echo "<head><title>PESANAN</head></title>";
	$fp = fopen("cetak.txt","a+");
	fputs($fp,"$nama|$jumlah|$pilih|$code|$tanggal|$via|$harga|$alamat\n");
	fclose($fp);
	echo "Terima kasih telah mengisi data barang akan kami kirimkan ke alamat pesanan<br>";
	echo "<a href=contact.html> hubungi kami </a><br>";
	echo "<a href=pertama.html> kembali ke Beranda </a><br>";

echo "<head><title>PESANAN</title></head>";
$fp = fopen("cetak.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,80)) {
	$pisah = explode("|",$isi);
	if (isset($pisah[0])) {
		echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
	}
	if (isset($pisah[1])) {
		echo "<tr><td>Jumlah Pesanan</td><td>: $pisah[1]</td></tr>";
	}
	if (isset($pisah[2])) {
		echo "<tr><td>Pilih Jenis</td><td>: $pisah[2]</td></tr>";
	}
	if (isset($pisah[3])) {
		echo "<tr><td>Code </td><td>: $pisah[3]</td></tr>";
	}
	if (isset($pisah[4])) {
		echo "<tr><td>Tanggal </td><td>: $pisah[4]</td></tr>";
	}
	if (isset($pisah[5])) {
		echo "<tr><td>Via Pembayaran </td><td>: $pisah[5]</td></tr>";
	}
	if (isset($pisah[6])) {
		echo "<tr><td>Harga </td><td>: $pisah[6]</td></tr>";
	}
	if (isset($pisah[7])) {
		echo "<tr><td>Alamat </td><td>: $pisah[7]</td></tr>";
	}
	echo "<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a href=pesan.php> Klik Disini</a> mulai memesan";
fclose($fp);
?>

<body>
	<p>total harga pesanan anda:</p>
	<p id="hasil1"></p>
 <form action="pesan.php" name="vcode">
<script>
	if (code = '1') {
		total = 50000;
	} else if (code = '2') {
		total = 50000;
	}else if (code = '3') {
		total = 200000;
	}else if (code = '4') {
		total = 100000;
	}else if (code = '5') {
		total = 50000;
	}else if (code = '6') {
		total = 60000;
	} else{
		return 0;
	}

	document.getElementById("hasil1").innerHTML = total;
</script>
</form>
</body>