<?php
include("baglantidosyasi.php");
$post_kullanici=$_POST['kullanici'];
$post_sifre=$_POST['sifre'];
if ($post_kullanici=="" || $post_sifre=="") {
echo "Lütfen Geri Dönüp Boş Bıraktığınız Yerleri Doldurunuz.";
}else{
$sorgu=mysql_query("INSERT INTO uyeler (kullanici_adi, sifre) values ('$post_kullanici', '$post_sifre')");
if ($sorgu) {
echo "Üyeliginiz Tamamlandi";
}else{
echo "Üyeliğiniz Tamamlanamadı";
}
}
?>