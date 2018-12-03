<?php
// Connect to Database
$host = mysqli_connect("localhost", "root", "", "projek1");

  error_reporting();
  $bayardari = $_POST["bayardari"];
  $namarek = $_POST["namarek"];
  $jumlahbyr = $_POST["jumlahbyr"];
  $date = $_POST["date"];
  $image = $_POST['gambar'];

  echo $bayardari, $namarek, $jumlahbyr, $date, $image;

if(isset($_POST['simpan'])){
    if(!isset($_FILES['gambar'])){
        echo 'Pilih file gambar';
    }
    else
    {

 $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 $image_size = getimagesize($_FILES['image']['tmp_name']);
    if($image_size == false){
   echo 'File yang anda pilih Bukan gambar';
        }
        else
        {
          if(!$insert = mysqli_query($host, "INSERT INTO formkonfirmasi (bayardari,namarekening,jumlah,tanggal,bukti,idkonfirmasi) VALUES('$bayardari','$namarek','$jumlahbyr','$date','$image', '' ) "))
            {
                echo 'Gagal upload gambar';
     }

            else
            {
        // Informasi berhasil dan kembali ke inputan
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
     }

     }
    }
}

?>