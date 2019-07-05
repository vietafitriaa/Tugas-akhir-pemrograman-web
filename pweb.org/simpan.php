  <?php   
 $nama       = trim($_POST['nama']);  // menangkap data nama dengan method nama //$_POST utk menangkap data dari form post
 $namafile = "$nama.txt";  
 $isi      = trim($_POST['isi']);  // menangkap data isi dengan method isi //$_POST utk menangkap data dari form post
 $file = fopen($namafile,"w");  //parameter 'w' untuk Membuka file untuk ditulis saja, Menghapus konten dari file atau membuat file baru jika tidak ada di server
 fwrite($file,$isi);  //Fungsi fwrite()digunakan untuk menulis data ke file
 fclose($file);  //Fungsi fclose()digunakan untuk menutup file yang telah dibuka menggunakan fopen()
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($namafile));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($namafile)); //filesize utk Mengembalikan ukuran file
    readfile($namafile); //readfile utk membaca file
 ?>  