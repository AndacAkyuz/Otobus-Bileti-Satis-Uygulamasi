<?php
    include 'config.php';
    $session = session();
    $isLoggedIn = $session->get('isLoggedIn');

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Umuttepe Turizm</title>
    <link rel="shortcut icon" href="assets/images/redbus.png" type="">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Eklenen CSS Dosyaları -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/templatemo-woox-travel.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-datepicker/1.13.2/jquery-ui.min.css">
  

  </head>
  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
  
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
                          <li><a href="index" class="active">Ana Sayfa</a></li>
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
                        <?php if ($isLoggedIn): ?>
                <li><a class="dropdown-item" href="<?= site_url('kullanici') ?>">Hesabım</a></li>
            <?php else: ?>
                <li><a class="dropdown-item" href="<?= site_url('login') ?>">Giriş Yap</a></li>
            <?php endif; ?>
                     
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  


  <!-- ***** Main Banner Area Start ***** -->
<br><br>
  <img src="assets/images/indirim2.png" style="position: absolute; top: 0; left: 0;">

<fieldset style="background-color: #ffffff; position: relative; margin-top: 8.5%;margin-left: 4%;  width: 92.5%; height: 50%;justify-content: center; border-radius: 20px; font-size: 15px;padding:30px; border:4px solid black;">
  <br>
  <legend style="color: black; margin-left: 1%;margin-top: -1%; ">
    <input type="radio" id="oneWay" name="tripType" value="oneWay" checked > Gidiş
    <input type="radio" id="roundTrip" name="tripType" value="roundTrip"> Gidiş-Dönüş
  </legend>
<label for="from" style="margin-left: 1%; color: black; font-size: 20px;">Başlangıç:</label>
<select id="from">
  <option value="Kocaeli" style="color: black;" >Kocaeli</option>
  <option value="Ankara">Ankara</option>
  <option value="İstanbul">İstanbul</option>
  <option value="İzmir">İzmir</option>
  <option value="Eskişehir">Eskişehir</option>
</select>
<label for="to" style="color: black;font-size: 20px;">Varış:</label>
<select id="to">
  <option value="">Seçiniz</option>
</select>
<button onclick="showRoute()" id="showHideRouteButton" style="font-size: 16px;">Rotayı Göster</button>
<p style="display: inline-block; color: black; font-size: 20px;" >Gidiş Tarihi Seçin: <input type="date" id="departureDate"></p>
<p id="roundTripDate" style="display: inline-block; color: black; font-size: 20px;" >Dönüş Tarihi Seçin: <input type="date" id="returnDate"></p>
<p style="display: inline-block;">
  <a href="biletara">
    <button type="button" id="biletara" style="font-size: 18px;">Bilet Ara</button>
  </a>
</p>

</fieldset>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="map"></div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

 <!-- ***** Main Banner Area End ***** -->


 <div class="page-break hidden-sm hidden-xs"></div>
 <div class="menu23-container"style="background-color: #232223;">
   <div class="container" >
     <div class="row" >
       <div class="col-md-3 col-sm-3 col-xs-12 pdl0" >
         <a href="#" class="menu23" >
           <div class="menu23-content" >
             <img class="lazy widthyuz" src="assets/images/biletsorgula_icon1.png"   style="float: left;width: 27% !important;display: block;height: 27%;object-fit: contain;" alt="">
             <h4>Bilet İşlemleri</h4>
             <p>Bilet işlemlerinizi online olarak hızlı ve kolay şekilde gerçekleştirebilir; biletinizi değiştirebilir, açığa alabilir ve iptal edebilirsiniz.</p>
           </div>
         </a>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-12">
         <a href="#" class="menu23 delayuc">
           <div class="menu23-content" >
             <img class="" src="assets/images/yanmazbilet_icon3.png" style="float: left;width: 27% !important;display: block;height: 27%;margin-top: -3.5%;object-fit: contain;" alt="">
             <h4>Yanmaz Bilet</h4>
             <p>Biletinizi, ek ücret ödeyerek Yanmaz Bilet'e dönüştürebilirsiniz. Avantajlar ve koşullar hakkında detaylı bilgi için tıklayınız.</p>
           </div>
         </a>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-12">
         <a href="#" target=_blank class="menu23 delayuc">
           <div class="menu23-content">
             <img class="" src="assets/images/pamukkalekargo_logo.png" style="float: left;width: 27% !important;display: block;height: 27%;object-fit: contain;" alt="">
             <h4>Umuttepe Kargo</h4>
             <p>Kargonuz, saatler içinde olması gereken yerde olacak. Umuttepe Turizm tecrübesi ve kalitesiyle kargonuzu hızlı bir şekilde zamanında ulaştırıyoruz.</p>

           </div>
           </a>
       </div>
       <div class="col-md-3 col-sm-3 col-xs-12">
         <a href="#" class="menu23 delayuc">
           <div class="menu23-content">
             <img class="" src="assets/images/acikbilet_icon3.png"  style="float: left;width: 27% !important;display: block;height: 27%;object-fit: contain;" alt="">
             <h4>Açık Bilet</h4>
             <p>Açık Bilet sayesinde satın aldığınız biletinizi değişen fiyatlardan etkilenmeden dilediğiniz tarihte dilediğiniz sefere kullanabilirsiniz.</p>
           </div>
           </a>
       </div>
     </div>
   </div>
 </div>
 <div class="page-break"></div>
 <div class="bus-features hidden-sm hidden-xs">
   <div class="container">
     <div class="row">
      <hr>
       <div class="col-md-12 pd0 text-center">
         <div class="bus-features-main">
           <div class="bus-features-box delayalti">
             <img src="assets/images/icon/ikram_icon2.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;margin-top: 2.5%;">Tüm seferlerimizde açık büfe ikram servisimiz bulunmaktadır.</div>
           </div>
           <div class="bus-features-box delaysifir">
             <img src="assets/images/icon/buyukekran.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;">10" HD Ekran ile film, canlı TV izleyebilme ve internete erişim sağlayabilme imkanı.</div>
           </div>
           <div class="bus-features-box delayiki">
             <img src="assets/images/icon/internet.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;">Tüm otobüslerimizde bulunan Wifi hizmeti ile yolculuk boyunca internet imkanı</div>
           </div>
           <div class="bus-features-box delayalti">
             <img src="assets/images/icon/priz.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;margin-top: -2%;">Tüm otobüslerimizde bulunan 220 Volt priz ile yolculuk boyunca cihazlarınızı şarjı bitmeden kullanabilirsiniz</div>
           </div>
           <div class="bus-features-box delaysekiz">
             <img src="assets/images/icon/android.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;margin-top: -2%;">Android ekranlar ile internete bağlanarak ve kişisel arşivlerinize ulaşarak yolculuğunuzun keyfini sürebilirsiniz.</div>
           </div>
           <div class="bus-features-box delaybin">
             <img src="assets/images/icon/usb.png" alt="">
             <div class="animated fadeIn featuredtext" style="font-size: 13px;margin-top: -2%;">Otobüslerimizde bulunan USB girişleri ile kişisel verilerinize ulaşabilir ve telefonlarınızı şarj edebilirsiniz.</div>
           </div>
         </div>
         <hr>
       </div>
     </div>
   </div>
 </div>
 
 <div class="page-break hidden-xs hidden-sm"></div>
<div class="phone-container overhidden hidden-xs hidden-sm">
  <div class="container">
    <div class="col-md-4">
      <div class="phone-fade">
        <img src="assets/images/mobilsube2.png" alt="" class="lazy floatright widthyuz">
      </div>
    </div>
 

<div class="col-md-8">
      <div class="phone-fade2">
        <h1 style=" display:inline-block;"><img src="assets/images/724_biletal1.png" alt="">
        <h1 style=" display:inline-block;"><p style=" display:inline-block;">Otobüs Bileti Almanın<br>En Kolay Yolu</p></h1>

        <h2 style="color: #ffffff;">Umuttepe Turizm Mobil'de</h2>

        <p>Umuttepe Turizm mobil uygulaması ile istediğiniz yerden anında biletinizi alabilirsiniz.</p>
        <p>
          <a href="https://play.google.com/store" target=_blank><img data-original="assets/images/googleplay.png" src="assets/images/googleplay.png" alt="" class="lazy mt10"></a>
          <a href="https://www.apple.com/tr/app-store/" target=_blank><img data-original="assets/images/applestore.png" src="assets/images/applestore.png" alt="" class="lazy mt10"></a>
          <a href="https://consumer.huawei.com/tr/mobileservices/appgallery/" target=_blank><img data-original="assets/images/huawei1.png" src="assets/images/huawei1.png" alt="" style="max-height: 40px;" class="lazy mt10 imgsize2"></a>

        </p>
      </div>
    </div>
  </div>
</div>
<div class="page-break"></div>

   




 
 

 
  <!-- JavaScript -->
<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/isotope.min.js') ?>"></script>
<script src="<?= base_url('assets/js/owl-carousel.js') ?>"></script>
<script src="<?= base_url('assets/js/tabs.js') ?>"></script>
<script src="<?= base_url('assets/js/popup.js') ?>"></script>
<script src="<?= base_url('assets/js/custom.js') ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4mDWGu_NvFgAcY6c3p8OoHHpkOEs_NcE&callback=console.debug&libraries=maps,marker&v=beta"></script>
  </body>

  <!-- footer section stars -->
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