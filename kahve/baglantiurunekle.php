<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kahve";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


$uploaddir="uploads/";
$uploadfile=$uploaddir.basename($_FILES['myfile']['name']);
$filename=$_FILES['myfile']['name'];

//echo $uploadfile;
//ECHO $filename;

if(move_uploaded_file($_FILES['myfile']['tmp_name'],$uploadfile))
{
    // Kullanıcıdan alınan ürün bilgileri
    $urun_adı = $_POST['urunadi'];
    $urun_fiyati = $_POST['fiyat'];
    $kategori = $_POST['kategori'];
    $urun_resim = $filename;

    // SQL sorgusu
    $sql = "INSERT INTO ürünler (ürün_adi, ürün_fiyati,kategori,ürün_resim) VALUES ('$urun_adı', '$urun_fiyati', '$kategori','$urun_resim')";

    // Sorguyu çalıştırma
    if ($conn->query($sql) === TRUE) {
        echo "Ürün başarıyla eklendi!";
        header("Location: urunler.php");
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo "Resim yükleme başarısız oldu...!";
}
// Veritabanı bağlantısını kapat
$conn->close();
?>
