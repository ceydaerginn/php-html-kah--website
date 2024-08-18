



<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>kah& | Yönetim Paneli</title>
        <!--CSS LINK-->
        <link rel="stylesheet" href="index.css">
        <!--ANIMASION LINK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
        <!--FONT LINK-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Unica+One&display=swap" rel="stylesheet">

    </head>
    <body >


        <div id="kullanıcıdiv">
            <a id="logotext">kah&</a>
            <a id="girislogo">Giriş Yap</a>
            <img src="icons/coffeeicon.png" id="coffeeicon">
            <img src="icons/kah&icon.png" id="kahveicon">
            
            <form action="baglantigiris.php" method="post" id="kullanıcıgiris">
                <label for="fname" class="kullanıcıtext"  >Kullanıcı Adı / E-mail:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname" class="kullanıcıtext" >Şifre:</label><br>
                <input type="password" id="lname" name="lname" >
                <input type="submit" value="Giriş Yap"  id="girisbutton" name="giris">
              </form>

            

        </div>

    </body>
</html>

