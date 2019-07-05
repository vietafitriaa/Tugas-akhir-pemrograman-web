<!DOCTYPE html>
<html>
<head>
	<title>Formulir Tambah Data</title>
	<!-- Menyisipkan kode css eksternal -->
	<link rel="stylesheet" type="text/css" href="style2.css">
	<!-- Menyisipkan kode js eksternal --> <!--Maka, apapun yang ada di dalam file kode-program.js akan dapat dibaca dari file index.html-->
	<script language="javascript" src="java/javascript.js"></script> <!--ini adalah penulisan kode javascript di dalam tag head--> 
</head>
<body>
	<div class="header"> <!--Class dapat digunakan untuk mengatur tampilan atau atribut dari suatu kelompok data HTML-->
	<br><br><br>
	<center>
	<font color="teal" style="font-family: monospace; font-size: 50px"><marquee>WELCOME TO MY WEBSITE ^_^</marquee></font></center>
</div>
	<div class="menubar">
		<ul>
			<li><a href="vieta fitria.html"><b>BIODATA</b></a></li>
			<li><a href="materi.html"><b>MATERI KULIAH</a></b></li>
			<li><a href="pencarian.html"><b>PENCARIAN</b></a></li>
			<li><a href="kalkulator.html"><b>KALKULATOR</b></a></li>
			<li><a href="paket.html"><b>PAKET</b></a></li>
			<li><a href="form.html"><b>FORM</b></a></li>

		</ul>
</div>	
<h3 align="center">Pilih warna background favorit anda </h3>
<CENTER>
<FORM> <!--Element FORM berfungsi untuk mendefinisikan form interaktif-->
<INPUT TYPE="button" VALUE="Biru" onClick="warna('lightblue')">
<INPUT TYPE="button" VALUE="Pink" onClick="warna('pink')">
<INPUT TYPE="button" VALUE="Coklat" onClick="warna('burlywood')">
<INPUT TYPE="button" VALUE="Kelabu" onClick="warna('darkgray')"> 
<INPUT TYPE="button" VALUE="Oranye" onClick="warna('peachpuff')">
<INPUT TYPE="button" VALUE="Putih" onClick="warna('white')">
<!--Elemen Input berfungsi untuk mendefinisikan input yang akan dimasukkan
pengguna. Type pada elemen input mendefinisikan bentuk-bentuk input kontrol,
value mendefinisikan nilai awal/reset/submit, checked mendefinisikan pilihan
terpilih pada type radio/checkbox-->
<br><br>
</FORM>
<FORM>
<IMG NAME="coolfan" SRC="img/toy.jpg" width=50 height=72><BR><BR>
<INPUT TYPE=BUTTON VALUE=" Off " onClick="coolfan.src =
' 99.jpg '"><br><br>
<INPUT TYPE=BUTTON VALUE=" On " onClick="coolfan.src =
' img/toy3.jpg'">
</FORM>
</CENTER>
	<h2>Aplikasi penyimpanan data pada file TXT</h2>  
 	<hr>  
	 <form action="simpan.php" method="post">  
		 <table width="100%" border="0">  
		 <tr>  
		      <td width="150">Nama File</td>  
		      <td><input type="text" name="nama" required></td>  
		 </tr>  
		 <tr>  
		      <td width="150" valign="top">Isi Tulisan</td>  
		      <td><textarea name="isi" cols="50" rows="10" required></textarea></td>  
		 </tr>  
		 <tr>  
		      <td width="150"></td>  
		      <td><input type="submit" value="simpan"></td>  
		 </tr>  
		 </table>  
	 </form>  
<div class="footer">
	<br>
		<font color="blue"><b>&copy</b></font>&nbsp Vieta Fitria - Universitas Ahmad Dahlan - Yogyakarta - <font color="blue"><b>2019</b></font>
</div>
</body>
</html>