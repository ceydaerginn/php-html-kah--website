<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>kah& | Yönetim Paneli</title>
        <!--CSS LINK-->
        <link rel="stylesheet" href="urunekle.css">
        <!--ANIMASION LINK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
        <!--FONT LINK-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Unica+One&display=swap" rel="stylesheet">

    </head>
    <body >
        <div id="section">
            <div id="tag">
                <form  method="POST" id="urunekle" enctype="multipart/form-data">
                    <label for="urunadi" class="uruntxt">Ürün Adı:</label><br>
                    <input type="text" id="fname" name="urunadi"><br>
                    <label for="kategori" class="uruntxt">Kategori:</label><br>
                    <input type="text" id="fname" name="kategori"><br>
                    <label for="fiyat" class="uruntxt">Fiyat:</label><br>
                    <input type="number" id="fname" min="1" step="any" name="fiyat" />
                    <div id="search">
                        <img src="icons/photoicon.png" id="searchicon">
                        <label id="uruntxt1" for="myfile">Resim</label><br>
                        <input type="file" id="myfile" name="myfile">
                    </div>
                    <input type="submit" value="Ürün Ekle" formaction="baglantiurunekle.php" id="eklebtn">
                   <button id="iptalbtn">
                        <a href="urunler.php" id="iptalbtntxt">İptal</a>
                    </button>
                  </form>
            </div>
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
    </body>
</html>