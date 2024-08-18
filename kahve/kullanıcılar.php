<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>kah& | Yönetim Paneli</title>
        <!--CSS LINK-->
        <link rel="stylesheet" href="kullanıcılar.css">
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
                <img src="icons/urunlericon.png" id="urunlericon">
                <a id="urunlertxt">Kullanıcılar</a>
            </div>

            <div id="listdiv1">
                <table>
                  <tr>
                    <th class="column1">#</th>
                    <th class="column2">Kullanıcı Adı</th>
                    <th class="column3">E-mail</th>
                    <th class="column4">Şifre</th>
                    <th class="column5">Sil</th>
                  </tr>

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


$sql = "SELECT * FROM kullanıcılar";
$result = $conn->query($sql);

// Kullanıcı doğrulama
if ($result->num_rows > 0) {
  $sira=1;
    while ($row = $result->fetch_assoc()) {
                    
                    print "<tr>";
                    print "<td class='column1'>".$sira."</td>";
                    print "<td class='column2'>".$row['kullanici_adi']."</td>";
                    print "<td class='column3'></td>";
                    print "<td class='column4'>".$row['kullanici_sifre']."</td>";
                    print "<td class='column5'></td>";
                    print "<button class='silbutton'>";
                    print "<a class='silbtntxt'>Sil</a>";
                    print "</button>";
                    print "</td>";
                    print "</tr>";
                    $sira++;
    }
  }
?>
 
                  </table>
            </div>
            <img src="photo/kullanıcıphoto.png" id="adminpagei">
            <img src="photo/kullanıcıphoto2.png" id="adminpagei2">
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