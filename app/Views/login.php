<?php


include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umuttepe Turizm Giriş Ekranı</title>
  <link rel="shortcut icon" href="assets/images/redbus.png" type="">
  <link rel="stylesheet" href="assets/css/login.css">
  <script src="assets/js/login.js"></script>
</head>
<body>

  <h2>Umuttepe Turizm Giriş Ekranı</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form method="post"> <h1>Hesap Oluştur</h1>
        <input type="text" name="AdSoyad" placeholder="İsim Soyisim" required>
        <input type="email" name="Eposta" placeholder="Email" required>
		    <input type="text" name="TelefonNo" placeholder="Telefon No (5xxxxxxxxx)" required>
		    <input type="text" name="DogumTarihi" placeholder="Doğum Tarihi (Yıl-Ay-Gün)" required>
        <input type="password" name="Sifre" placeholder="Şifre" required>
        <input type="text" name="Cinsiyet" placeholder="Cinsiyet (E/K Şeklinde Giriniz)" required>
        <input type="text" name="TCNo" placeholder="11 Haneli TC Kimlik Numaranızı Giriniz" required>
        <button type="submit">Kayıt Ol</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
     <form method="post" action="<?= site_url('authcode/login') ?>">
        <input type="email" name="Eposta" placeholder="Eposta" required>
        <input type="password" name="Sifre" placeholder="Şifre" required>
        <a href="#">Şifreni mi unuttun ?</a>
        <button type="submit" name="login">Giriş Yap</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Hesabın Var Mı ?</h1>
          <p>Eğer kayıtlıysan bilgilerinle giriş yap</p>
          <button class="ghost" id="signIn">Giriş Yap</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hesabın Yok Mu ?</h1>
          <p>Hemen kayıt ol ve seyehat etmeye başla</p>
          <button class="ghost" id="signUp">Kayıt Ol</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
    });
  </script>
</body>
</html>