<?php
include 'config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umuttepe Turizm</title>
    <link href="<?php echo base_url('assets/css/ebilet/animate.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/bootstrap.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/card270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/checkbox.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/dataTables.bootstrap.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/datepicker.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/font-awesome.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/lightbox.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/select-bootstrap.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/select.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/slider.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/slider.theme.min270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/style270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/redbus.png" type="">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-datepicker/1.13.2/jquery-ui.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                        <li><a href="index" >Ana Sayfa</a></li>
                        <li><a href="ebilet" class="active">Bilet İşlemleri</a></li>
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

   <!-- Buraya header eklenicek -->
   <br><br><br><br><br><br><br><br><br>
  <div class="container mt10 pagebord mb20">
      <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="col-md-7 col-xs-12 col-sm-12">
                  <h1 class="h1pmk">Bilet İşlemleri</h1>
                  <form id="bilet-sorgulama" method="post" class="form-group"  action="#">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                          <label class="control-label">PNR Numaranız</label>
                                  <input id="biletrefno" name="biletrefno" type="text" class="form-control" type="text" required>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label class="control-label">Bilet Alırken Belirttiğiniz T.C. Kimlik Numaranız (veya Pasaport No)</label>
                                  <input id="tckimlik" name="tckimlik" type="text" class="form-control" required>
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input style="margin-top: 20px; padding: 20px;" type="button" id="formgonder" class="btn btn-pam widthyuz" value="Sorgula">
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="col-md-5 hidden-xs hidden-sm">
               <img src="assets/images/bilet.jpg" style='min-height:300px; width:100%;'>
              </div>
          </div>
      </div>               
  </div>
  <div class="container mt10 pagebord mb20" style="display:none;" id="sonBiletler">
      <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
              <div class="col-md-12 col-xs-12 col-sm-12" id="sonBiletlerTable">
                  
              </div>
          </div>
      </div>
  </div>
 
  <!-- Buraya footer eklenicek -->

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
    