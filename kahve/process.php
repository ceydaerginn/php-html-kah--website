<?php 
$username=$_POST['user'];
$password=$_POST['pass'];

/*$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
*/
mysql_connect("localhost","root","");
$result=mysql_query("select * from kullanıcılar where kullanici_adi='$username'and kullanici_sifre='$password'")
or die("veritabanında hata oluştu".mysql_error());

$row=mysql_fetch_array($result);
if($row['kullanici_adi']==$username && $row['kullanici_sifre']==$password){echo"başarılı giriş yapıldı";}
else{echo"giriş yapılamadı";}










?>