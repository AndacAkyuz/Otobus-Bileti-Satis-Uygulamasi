<?php
$from = $_POST['from'];
$to = $_POST['to'];
$departureDate = $_POST['departureDate'];
$returnDate = $_POST['returnDate'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Umuttepe Turizm</title>
  <link rel="shortcut icon" href="assets/images/redbus.png" type="">
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/css/ebilet/style270f.css'); ?>" rel="stylesheet" type="text/css">

    <style>/* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: white;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

a {
    text-decoration: none;
    color: #333;
}

h4,
h5 {
    margin: 0;
    padding: 0;
}

p {
    margin: 5px 0;
    font-size: 14px;
}

.clearfix {
    clear: both;
}

/* Header Styles */
.header-area {
    background-color: #333;
    padding: 15px 0;
}

.main-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    font-weight: bold;
}

.main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.main-nav ul li {
    display: inline-block;
    margin-right: 20px;
}

.main-nav ul li a {
    color: white;
}

.menu-trigger {
    display: none;
}

/* Bus Bottom Styles */
.bus-btm {
    background-color: white;
    padding: 15px 0;
}

.bus-btm-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    font-weight: bold;
    color: #000;
    border-bottom: 1px solid #ddd;
}

/* Bus Listing Styles */
.bus-midd {
    background-color: #fff;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.bus-midd ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.bus-midd ul:first-child {
    margin-top: 0;
}

.bus-midd ul:last-child {
    margin-bottom: 0;
}

.bus-midd li {
    float: left;
    width: 20%;
    padding: 10px;
    border-right: 1px solid #ddd;
}

.bus-midd li:last-child {
    border-right: none;
}

.bus-ic,
.bus-ic1,
.bus-ic2,
.bus-ic3 {
    float: left;
    margin-right: 10px;
}

.bus-txt,
.bus-txt1,
.bus-txt2,
.bus-txt3,
.bus-txt4 {
    overflow: hidden;
}

.view {
    background-color: #740303;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
}

.view:hover {
    background-color: #333;
    color: #fff;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .main-nav ul li {
        display: none;
    }

    .menu-trigger {
        display: block;
        cursor: pointer;
        color: white;
        font-size: 20px;
    }

    .main-nav.active ul li {
        display: block;
        margin-right: 0;
    }

    .bus-midd li {
        width: 25%;
    }
}

@media (max-width: 480px) {
    .bus-midd li {
        width: 50%;
    }

    .bus-txt,
    .bus-txt1,
    .bus-txt2,
    .bus-txt3,
    .bus-txt4 {
        text-align: center;
    }

    .bus-midd li {
        width: 100%;
        float: none;
        border-right: none;
        margin-bottom: 10px;
    }
}

    </style>

</head>

<body>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                  
                  
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="../index" >Ana Sayfa</a></li>
                        <li><a href="../ebilet" class="active">Bilet İşlemleri</a></li>
                        <li><a href="../seyehat">Seyehat Kılavuzu</a></li>
                        
                        <li class="dropdown">
                          <a href="#" class="dropbtn">Kurumsal</a>
                          <div class="dropdown-content">
                              <a href="../tarihce">Tarihce</a>
                              <a href="../filomuz">Filomuz</a>
                              <a href="../servisler">Şehir İçi Servisler</a>
                              <a href="../kvkk-yasal-sozlesmeleri">KVKK Metni</a>
                              <a href="../yolcu-haklari">Yolcu Hakları</a>
                              <a href="../iletisim">İletişim</a>
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
<br><br><br>

    <br>
    <div style="display: flex; 
        justify-content: center;
        align-items: center;
        ">
        <h2>Seçilen Tarih : <?php echo $departureDate ?></h2>
    </div>
<div class="bus-btm">
    <div class="container">
        <div class="bus-btm-header">
            <div class="trav"><a href="#"><b>Güzergah</b></a></div>
            <div class="dept"><a href="#"><b>Kalkış Saati</b></a></div>
            <div class="arriv"><a href="#"><b>Varış Saati</b></a></div>
            <div class="seat"><a href="#"><b>Koltuklar</b></a></div>
            <div class="fare"><a href="#"><b>Bilet Fiyatı</b></a></div>
        </div>
    </div>
</div>
<!--- güzergah  ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
    <div class="container">
    <?php
            // Sadece from ve to değişkenlerinden gelen illerle ilgili seferleri listele
            foreach ($seferler as $sefer) {
                if ($sefer['KalkisSehri'] == $from && $sefer['VarisSehri'] == $to) {
            ?>
            <ul class="first">
                <li class="trav">
                    <div class="bus-ic">
                        <img src="images/bus.png" class="img-responsive" alt="">
                    </div>
                    <div class="bus-txt">
                        <h4><?php echo $sefer['KalkisSehri'] ?> - <?php echo $sefer['VarisSehri'] ?></h4>
                        <p><?php echo $sefer['OtobusIsim'] ?></p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="dept">
                    <div class="bus-ic1">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="bus-txt1">
                        <h4><a href="#"><?php echo $sefer['KalkisSaat'] ?></a></h4>
                        <p>Kalkış Saat</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="arriv">
                    <div class="bus-txt2">
                        <h4><a href="#"><?php echo $sefer['VarisSaat'] ?></a></h4>
                        <p>Varış Saat</p>
                    </div>
                </li>
                <li class="seat">
                    <div class="bus-ic3">
                        <img src="images/seat.png" class="img-responsive" alt="">
                    </div>
                    <div class="bus-txt3">
                        <h4><?php echo $sefer['KoltukSayisi'] ?></h4>
                        <p>2+2</p>
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li class="fare">
                    <div class="bus-txt4">
                        <h5>TL <?php echo $sefer['Fiyat'] ?></h5>
                        <a href="<?php echo site_url('guzergahdetay/' . $sefer['SeferID']); ?>"
                            class="view">SEFER DETAY</a>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
            <?php
                }
            }
            ?>
        </div>
    </div>
    </div>
    </body>
</html>
		<!--- /güzergah  ---->

		<br><br><br><br><br><br><br><br><br><br>
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
    