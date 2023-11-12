var keyword = document.getElementById('keyword');
var hasil = document.getElementById('hasil');

//tambahkan event ketika keyword di ketik
keyword.addEventListener('keyup', function() {

    //buat oject ajax
    var xhr =new XMLHttpRequest();
    
    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200)  {
            //tampilkan data dari file.php
            hasil.innerHTML = xhr.responseText;
        }
    }

     //ekseskusi ajax metode GET & ambil isi dari file.php sambil mengirim value dari inputan field keyword
     xhr.open('GET', 'isi.php?keyword=' + keyword.value, true);
     xhr.send();


});