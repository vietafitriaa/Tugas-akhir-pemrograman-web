function cari() { //fungsi pencarian
var kata = document.formcari.keyword.value; //variabel
var hasil = "http://www.google.com/search?q=" + kata ; //hasil
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') //Fungsi ini merupakan fungsi untuk menampilkan dialog
}
function jumlah() { //fungsi penjumlahan
			var bil1 = parseFloat(document.vieta.bilangan1.value) //variabel satu
			var bil2 = parseFloat(document.vieta.bilangan2.value) //variabel dua
			var hasil = bil1+bil2; //hasil
			alert("hasil penjumlahan => "+hasil); //Fungsi ini merupakan fungsi untuk menampilkan dialog
		}
		function kurang() { //fungsi pengurangan
			var bil1 = parseFloat(document.vieta.bilangan1.value)//variabel satu
			var bil2 = parseFloat(document.vieta.bilangan2.value)//variabel dua
			var hasil = bil1-bil2; //hasil
			alert("hasil pengurangan => "+hasil); //Fungsi ini merupakan fungsi untuk menampilkan dialog
		}
		function kali() { //fungsi perkalian
			var bil1 = parseFloat(document.vieta.bilangan1.value)//variabel satu
			var bil2 = parseFloat(document.vieta.bilangan2.value)//variabel dua
			var hasil = bil1*bil2; //hasil
			alert("hasil perkalian => "+hasil); //Fungsi ini merupakan fungsi untuk menampilkan dialog
		}
		function bagi() { //fungsi pembagian
			var bil1 = parseFloat(document.vieta.bilangan1.value)//variabel satu
			var bil2 = parseFloat(document.vieta.bilangan2.value)//variabel dua
			var hasil = bil1/bil2; //hasil
			alert("hasil pembagian => "+hasil); //Fungsi ini merupakan fungsi untuk menampilkan dialog
		}
		function pangkat() { //fungsi perpangkatan
			var bil1 = parseFloat(document.vieta.bilangan1.value)//variabel satu
			var bil2 = parseFloat(document.vieta.bilangan2.value)//variabel dua
			var hasil = bil1**bil2; //hasil
			alert("hasil pemangkatan => "+hasil); //Fungsi ini merupakan fungsi untuk menampilkan dialog
		}
function myFunction() { //fungsi menyembunyikan dan menampilkan data
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function warna(pilihan)
{
alert("Anda Memilih Warna " + pilihan);
document.bgColor=pilihan;
}
function hitungtotal()
{
	var nama = (document.fform.inama.value);
	var tujuan = (document.fform.itujuan.value);
	var jumlahpaket = parseFloat(document.fform.ijumlah.value);
	var ht = 0.0;
	var sub = 0.0;
	var diskon =0.0;
	var total =0.0;
	
	if (tujuan=="Jakarta"){
		ht =10000;
	}
	else if (tujuan=="Yogyakarta"){
		ht =5000;
	}
	else{
		ht =20000;
	}

	sub = jumlahpaket*ht;
	if (document.fform.imember.checked==true){
		diskon =0.10*sub;
	}
	else{
		diskon=0.0;
	}

	total = sub-diskon;
	document.fform.otiket.value=eval(ht);
	document.fform.osub.value=eval(sub);
	document.fform.odiskon.value=eval(diskon);
	document.fform.ototal.value=eval(total);
}