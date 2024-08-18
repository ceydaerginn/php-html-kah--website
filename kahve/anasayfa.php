<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>kah& | Yönetim Paneli</title>
        <!--CSS LINK-->
        <link rel="stylesheet" href="anasayfa.css">
        <!--ANIMASION LINK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
        <!--FONT LINK-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Unica+One&display=swap" rel="stylesheet">

    </head>
    <body >

        <div id="section">
            <img src="photo/homepagei.png" id="homepagei">
            <a id="sectiontxt">Merhaba, Admin</a>
            <a id="logotext1">kah&</a>
            <img src="icons/coffeeicon.png" id="coffeeicon1">
            <img src="icons/kah&icon.png" id="kahveicon1">

            <button id="girisbutton">
                <a id="girisbtntxt">Çıkış Yap</a>
            </button>
        </div>

        <div id="menuback"></div>
        <div id="menu">
        
            <a id="logotext">kah&</a>
            <img src="icons/coffeeicon.png" id="coffeeicon">
            <img src="icons/kah&icon.png" id="kahveicon">
            <img src="icons/adminicon.png" id="adminicon">
            <a id="admintxt">Merhaba, Admin</a>

            <nav class="nav-bar">
                <ul>
                    <li>
                        <a href="anasayfa.php" class="active">Ana Sayfa</a>
                        <img id="icon1" src="icons/homepageicon.png">
                    </li>
        
                    <li>
                        <a a href="urunler.php">Ürünler</a>
                        <img id="icon2" src="icons/urunlericon.png">
                    </li>
        
                    <li>
                        <a href="kullanıcılar.php">Kullanıcılar</a>
                        <img id="icon3" src="icons/kullanicilaricon.png">

                    </li>
                    
                </ul>
                </nav>
        </div>

        
            
        </div>

<?php
session_start();
//$post_kullanici= $_SESSION["giris"];
?>

    </body>
    </html>