<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kahve";

$baglanti=mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($baglanti,"UTF8");


// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Kullanıcıdan alınan giriş bilgileri
$kullanici_adi = $_POST['fname'];                                                                   
$sifre = $_POST['lname'];

// SQL sorgusu
$sql = "SELECT * FROM kullanıcılar WHERE kullanici_adi='$kullanici_adi' AND kullanici_sifre='$sifre'";
$result = $conn->query($sql);

// Kullanıcı doğrulama
if ($result->num_rows > 0) {
    header("Location: anasayfa.php");
    echo "Giriş başarılı!";
    // Giriş başarılıysa, kullanıcıyı ana sayfaya yönlendirebilirsiniz.
} else {
    header("Location: index.php");
    print 'echo "<script>alert("Hatalı kullanıcı adı veya şifre.")</script>"; ';
    //echo "Hatalı kullanıcı adı veya şifre.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
