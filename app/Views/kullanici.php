<?php
include 'config.php';
?>

<html lang="en">
<head>
    <title>Umuttepe Turizm</title>
    <link href="assets/css/ebilet/animate.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/bootstrap.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/card270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/checkbox.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/dataTables.bootstrap.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/datepicker.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/font-awesome.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/lightbox.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/select-bootstrap.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/select.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/slider.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/slider.theme.min270f.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ebilet/style270f.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/redbus.png" type="">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-datepicker/1.13.2/jquery-ui.min.css">
   
    <!-- Eklenen CSS Dosyaları -->
    
    <link rel="stylesheet" href="assets/css/owl.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-datepicker/1.13.2/jquery-ui.min.css">
    <script src="assets/js/ebilet/jquery.dataTables.min.js"></script>
    <script src="assets/js/ebilet/jquery.lazyload.js"></script>
    <script src="assets/js/ebilet/jquery.lazyload270f.js"></script>
    <script src="assets/js/ebilet/jquery.mask.js"></script>
    <script src="assets/js/ebilet/jquery.min.js"></script>
    <script src="assets/js/ebilet/jquery.min270f.js"></script>
    <script src="assets/js/ebilet/jquery.resize.min270f.js"></script>
    
</head>
<body>
    <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index" class="logo">
                      <img src="assets/images/logo.png" alt="" >
                  </a>
                  
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index">Ana Sayfa</a></li>
                        <li><a href="ebilet">Bilet İşlemleri</a></li>
                        <li><a href="seyehat">Seyehat Kılavuzu</a></li>
                        
                        <li class="dropdown">
                          <a href="#" class="dropbtn">Kurumsal</a>
                          <div class="dropdown-content">
                              <a href="tarihce">Tarihce</a>
                              <a href="filomuz">Filomuz</a>
                              <a href="servisler">Şehir İçi Servisler</a>
                              <a href="kvkk-yasal-sozlesmeleri">KVKK Metni</a>
                              <a href="yolcu-haklari">Yolcu Hakları</a>
                              <a href="iletisim">İletişim</a>
                          </div>
                      </li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>   
<div class="container">
<div class="row " style="text-align: center; background-color:#242422; margin-top: 25px; padding:5px">
            <div class="col-md-12 text-center" style="color: white;">
                Üye Bilgilerini Güncelle
            </div>
        </div>
        
        <form action="<?= base_url('kullanici/update') ?>" method="post">
        <br>
            <div class="row custom-border">
                <div class="col-md-3">TC Kimlik no</div>
                <div class="col-md-9" style="text-align: center; " name="TCNo"
                    value="<?php echo $user['TCNo']; ?>">
                    <?php  echo $user['TCNo']; ?>
                </div>
                <input type="hidden" name="TCNo" value="<?php echo $user['TCNo']; ?>">

            </div>
            <br>
            <div class="row custom-border">
                <div class="col-md-3">Kayıtlı Cep Telefonu Numarası </div>
                <div class="col-md-9" style="text-align: center; ">
                    <?php echo $user['TelefonNo']; ?>
                </div>
            </div>
            <br>
            <div class="row custom-border">
                <div class="col-md-3">Ad Soyad</div>
                <div class="col-md-9"><input style="background-color:  lightgrey;" type="text" class="form-control"
                        id="AdSoyad" name="AdSoyad" value="<?php  echo $user['AdSoyad']; ?>" size="30"
                        autocomplete="off"></div>
            </div>
            <div class="row custom-border">
                <div class="col-md-3">Eposta</div>
                <div class="col-md-9"><input style="background-color:  lightgrey;" type="text" class="form-control"
                        id="Eposta" name="Eposta" value="<?php echo $user['Eposta']; ?>" size="30" autocomplete="off">
                </div>
            </div>
            <div class="row custom-border">
                <div class="col-md-3">Şifre</div>
                <div class="col-md-9"><input style="background-color:  lightgrey;" type="password" class="form-control"
                        id="Sifre" name="Sifre" autocomplete="off" value="<?php echo $user['Sifre']; ?>"></div>
            </div>
            
            <div class="row custom-border">
                <div class="col-md-3">Cinsiyet</div>
                <div class="col-md-9"><select style="background-color:  lightgrey;" id="Cinsiyet" name="Cinsiyet"
                        class="form-control">
                        <option value="<?php echo $user['Cinsiyet']; ?>" selected="">
                        <?php  echo $user['Cinsiyet']; ?>
                        </option>
                        <option value="E"> Erkek </option>
                        <option value="B"> Bayan </option>
                    </select></div>
            </div>
           
            <div class="row " style="margin-top: 15px;">
                <div class="col-md-3"></div>
                <div class="col-md-9" style="text-align: right;">
                <button type="submit" class="btn btn-primary pull-right" id="update" name="update">Güncelle</button>
            </div>
            </div>
    </div>
    </form>
    </div>
    </div>

    <div class="container">
        
        <div class="row" style="margin-bottom: 100px; padding-top: 25px;">
            <table width="100%" cellspacing="0" cellpadding="0">
               
                <tbody>
                    <tr>
                        <td>
                            <b>Aktif Biletleriniz : </b> <br/>
                            <b><b>Uygun Bilet Kaydı Bulunamadı.<br><br></b>

                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <table width="100%">
                                <tbody>
                                    <tr>
                                        <td colspan="2"> <strong>Açıklamalar</strong> </td>
                                    </tr>
                                    <tr>
                                        <td width="25"></td>
                                        <td>Satın aldığınız biletlerinizi, açık tarihli bilete çevirmek
                                            için <b> BİLETİMİ AÇIĞA AL</b> tıklayınız.</td>
                                    </tr>
                                    <tr>
                                        <td width="25"></td>
                                        <td>Açık biletinizi, istediğiniz tarih ve saate çevirmek için
                                            <b>AÇIK BİLETİMİ KULLAN</b>
                                            tıklayınız.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="25"><b> </b></td>
                                        <td>Değişiklik yapmak istediğiniz biletleriniz için sağ bölümde
                                            bulunan <b>DEĞİŞİKLİK </b> tıklayınız</td>
                                    </tr>
                                    <tr>
                                        <td width="25"><b> </b></td>
                                        <td>Aynı bilet üzerinde en fazla <b>3 defa</b> değişiklik
                                            yapabilirsiniz.</td>
                                    </tr>
                                    <tr>
                                        <td width="25"><b> </b></td>
                                        <td>Araç hareket saatine, <b>2 saat ve daha az süre kalan</b>
                                            biletler için değişiklik yapılamamaktadır.</td>
                                    </tr>
                                    <tr>
                                        <td width="25"><b> </b></td>
                                        <td>Şehir içi servis değişikliğini <b>BİLET DEĞİŞTİR</b> bölümünden
                                            yapabilirsiniz.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 </div>
</body>

<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Genel Merkez Adres</h4>
                            <span>Kabaoğlu, Kocaeli Ünv. Kampüsü<br> No:2, 41000 İzmit/Kocaeli</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Müşteri Hizmetleri</h4>
                            <span>0 850 333 35 35 </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail Adresimiz</h4>
                            <span>umuttepeturizm@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-text">
                          <div class="cta-text">
                            <h4>Sosyal Medya</h4>
                          </div>
                            <p>Şirketimizi sosyal medyada takip ederek güncel gelişmelerden haberdar olun!</p>
                        </div>
                        <div class="footer-social-icon">
                           
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                            <a href="#"><i class="fab fa-x x-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Menülerimiz</h3>
                        </div>
                        <ul>
                            <li><a href="index">Ana Sayfa</a></li>
                            <li><a href="ebilet">Bilet İşlemleri</a></li>
                            <li><a href="seyehat">Servis Kılavuzu</a></li>
                            <li><a href="tarihce">Tarihçe</a></li>
                            <li><a href="yolcu-haklari">Yolcu Hakları</a></li>
                            <li><a href="servisler">Servisler</a></li>
                            <li><a href="kvkk-yasal-sozlesmeleri">KVKK Metni</a></li>
                            <li><a href="filomuz">Filomuz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Abone Ol</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Bültenimize abone ol ve gelişmelerden anlık olarak haberdar ol</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Adresiniz">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024, All Right Reserved <a href="#">Umuttepe Turizm</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

  <!-- footer section end -->
</html>