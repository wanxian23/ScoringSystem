
function keluar(){
	window.alert("Sedang Kembali Ke Halaman Log Masuk..");
	window.location = 'index.php';

}

function gagalLogMasuk(){
	window.alert("Log masuk gagal. Data Tidak Wujud Dalam Sistem.\nSila Masuk Sekali Lagi.");
	window.history.back()   // Remember this history.back() can't add ";"  
				//or it will not be function
}

function gagalLogMasukIdentiti(){
	window.alert("Log masuk gagal. Sila Pilih Identiti Betul-betul.");
	window.history.back()   // Remember this history.back() can't add ";"  
				//or it will not be function
}

function gagalSemakMaklumat(){
	window.alert("Semak gagal. Sila pilih identiti dan masukkan ID betul-betul !!");
	window.location = 'HalamanAdmin.php';
}

function btnTetapPertandingan(){
	window.alert("Sedang pindah Ke Halaman Maklumat Pertandingan..");
	window.location = 'tetapInfoPertandingan.php';
}

function btnTetapPemenang(){
	window.alert("Sedang pindah Ke Halaman Tetap Pemenang..");
	window.location = 'tetapPemenang.php';
}

function gagalTambahMaklumat(){
	window.alert("Semak gagal. Sila masukkan markah betul-betul !!");
	window.location = 'rekodKeputusan.php';
}

function gagalDaftarMaklumat(){
	window.alert("Daftar gagal. Sila masukkan pilih identiti betul-betul !!");
	window.location = 'daftarAKAUN.php';
}

function masukSekali(){
	window.location = 'rekodKeputusan.php';
}

function kembaliPengadil(){
	window.alert("Sedang Kembali Ke Halaman Pengadil.");
	window.location = 'HalamanPengadil.php';
}

function kembaliAdmin(){
	window.alert("Sedang Kembali Ke Halaman Admin.");
	window.location = 'HalamanAdmin.php';
}

function masukSekali2(){
	window.location = 'tetapPemenang.php';
}

function fullyResgistered(){
	window.alert("Maaf! Pengadil sudah cukup 2 orang. Sedang kembali ke Halaman Log Masuk.");
	window.location = 'index.php';
}

function tiadaData() {
	window.alert("Maaf! Data Ini Belum Wujud Dalam Pangkalan Data.");
	window.location = 'HalamanAdmin.php';	
}



function choosePic(){ // Random Show Picture
	 var picSHOW = new Array("gambar/ROBOTxinjie4.png","gambar/ROBOTzura4.png","gambar/ROBOTkaishuen4.png","gambar/ROBOTyinxin4.png","gambar/ROBOTpuiyi4.png","gambar/ROBOTgardinia4.png","gambar/ROBOTqianhua4.png","gambar/ROBOTamily4.png","gambar/ROBOTbrian4.png");
	 var randomNum = Math.floor(Math.random() * picSHOW.length);
     document.getElementById("picSHOW").src = picSHOW[randomNum];  
}

function PesertaimportBerjaya(){
	window.alert("Data Peserta Berjaya Diimport!");
	window.location = 'tetapInfoPertandingan.php';
}

function PesertaimportGagal(){
	window.alert("Data Peserta Gagal Diimport!");
	window.location = 'tetapInfoPertandingan.php';
}

function PesertaimportGagal2(){
	window.alert("Data Peserta Gagal Diimport!\nSebab Data Sudah Wujud Dalam Pangkalan Data.");
	window.location = 'tetapInfoPertandingan.php';
}

function PengadilimportBerjaya(){
	window.alert("Data Pengadil Berjaya Diimport!");
	window.location = 'tetapInfoPertandingan.php';
}

function PengadilimportGagal(){
	window.alert("Data Pengadil Gagal Diimport!");
	window.location = 'tetapInfoPertandingan.php';
}

function PengadilimportGagal2(){
	window.alert("Data Pengadil Gagal Diimport!\nSebab Data Sudah Wujud Dalam Pangkalan Data.");
	window.location = 'tetapInfoPertandingan.php';
}

function importGagal(){
	window.alert("Data Gagal Diimport!");
	window.location = 'tetapInfoPertandingan.php';
}

function importGagalIdentiti(){
	window.alert("Data Gagal Diimport!\nSila Pilih Identiti Betul-betul.");
	window.location = 'tetapInfoPertandingan.php';
}

function downloadPDF() {
        const element = document.getElementById("dPDF");

        var opt = {
            margin: 0.5,
            filename: 'HalamanPeserta.php',
            image: { type: 'jpeg', quality: 1 },
            html2canvas: { scale: 4, logging: true },
            jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save();
}

function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("kembali");
        var printButton2 = document.getElementById("keluar");
        var printButton3 = document.getElementById("cetak");
        var word = document.getElementById("word");
        var word2 = document.getElementById("word2");
        var word3 = document.getElementById("word3");

        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        printButton2.style.visibility = 'hidden';
        printButton3.style.visibility = 'hidden';
        word.style.visibility = 'hidden';
        word2.style.visibility = 'hidden';
        word3.style.visibility = 'hidden';

        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
        printButton2.style.visibility = 'visible';
        printButton3.style.visibility = 'visible';
        word.style.visibility = 'visible';
        word2.style.visibility = 'visible';
        word3.style.visibility = 'visible';
}


function colourBLACK(){
   const colourBG = document.getElementsByClassName('body')[0];
   colourBG.setAttribute('class', 'colorBLACK');
}

function colourDEFAULT(){
   const colourBG = document.getElementsByClassName('body')[0];
   colourBG.setAttribute('class', 'body');
}

function colourRED(){
   const colourBG = document.getElementsByClassName('body')[0];
   colourBG.setAttribute('class', 'colorRED');
}

function colourYELLOW(){
   const colourBG = document.getElementsByClassName('body')[0];
   colourBG.setAttribute('class', 'colorYELLOW');
}

function fontsize(){
	//Fungsi membesarkan dan mengecilkan fon dengan 5px 
    $(document).ready(function(){ 
      $(".increaseFont,.decreaseFont").click(function(){ 
        var type=  $(this).val(); 
        var curFontSize = $('.infohubungikami,.infocontactus').css('font-size'); 
        if(type=='increase'){ 
          $('.infohubungikami,.infocontactus').css('font-size', parseInt(curFontSize)+5); 
        }else { 
          $('.infohubungikami,.infocontactus').css('font-size', parseInt(curFontSize)-5); 
        } 
      }); 
    }); 
}


