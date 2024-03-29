<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-datepicker/1.13.2/jquery-ui.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/redbus.png" type="">
    <style>
       
.ticket {
    width: 100%;
    max-width: 800px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.route {
    flex: 2;
}

.times {
    flex: 1;
}

.bus-details {
    flex: 1;
}

.select-button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
}

.select-button:hover {
    background-color: #0056b3;
}


.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px; /* Önerilen maksimum genişlik */
    max-height: 80vh; /* Önerilen maksimum yükseklik */
    border-radius: 5px;
    position: relative;
}


.close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 10px;
    cursor: pointer;
}

 .bus {
	 border: 1px solid #ddd;
	 width: 20%;
	 padding: 0.5rem;
	 border-radius: 4px;
}
 .bus.seat2-3 .seats .seat:nth-child(2), .bus.seat2-2 .seats .seat:nth-child(2) {
	 margin-right: 14.2857142857%;
}
 .bus.seat3-2 .seats .seat:nth-child(3) {
	 margin-right: 14.2857142857%;
}
 .seats {
	 display: flex;
	 flex-direction: row;
	 flex-wrap: nowrap;
	 -ms-flex-pack: center !important;
	 justify-content: center !important;
	 padding: 0;
	 margin-bottom: 2px;
}
 .seats .seat {
	 display: flex;
	 flex: 0 0 14.2857142857%;
	 padding: 3px;
	 position: relative;
}
 .seats .seat label {
	 border-radius: 4px;
	 background: #3783b5;
	 padding: 0;
	 width: 25px;
	 height: 25px;
	 margin-bottom: 0.1rem;
	 display: inline-block;
	 font-size: 0.7rem;
}
 .seats .seat input[type="radio"] {
	 display: none !important;
}
 .seats .seat input[type="radio"] + label {
	 border-radius: 4px;
	 background: #3783b5;
	 text-align: center;
	 cursor: pointer;
	 display: inline-block;
	 padding: 4px;
	 color: #fff;
}
 .seats .seat input[type="radio"]:checked + label {
	 background: #46be8a;
}
 .seats .seat input[type="radio"]:checked + label:after {
	 background: none;
}
 .seats .seat input[type="radio"]:disabled + label {
	 cursor: not-allowed;
	 background: #f73737;
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
						<a href="index" class="logo">
						  <img src="assets/images/logo.png" alt="" >
					  </a>
					  
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="index" >Ana Sayfa</a></li>
							<li><a href="ebilet">Bilet İşlemleri</a></li>
							<li><a href="seyehat">Seyehat Kılavuzu</a></li>
							
							<li class="dropdown">
							  <a href="#" class="dropbtn">Kurumsal</a>
							  <div class="dropdown-content">
								  <a href="tarihce">Tarihce</a>
								  <a href="filomuz">Filomuz</a>
								  <a href="servisler" class="active">Şehir İçi Servisler</a>
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
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="ticket">
        <div class="route">
            <p>Kocaeli - İstanbul</p>
        </div>
        <div class="times">
            <p>Departure: 09:00</p>
            <p>Arrival: 13:00</p>
        </div>
        <div class="bus-details">
            <p>Bus Plate: 34 ABC 123</p>
            <p>Capacity: 50 seats</p>
        </div>
        <button class="select-button" onclick="showSeatSelection('1')">Select Ticket</button>
    </div>

    <!-- Add more tickets for other routes -->

</div>

<div id="seatSelection" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hideSeatSelection()">&times;</span>
        <h2>Seat Selection</h2>
        <label>Choose Seat</label>
<div class="bus seat2-2 border-0 p-0">
  <div class="seat-row-1">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-1" value="1" required="" type="radio">
        <label for="seat-radio-1-1">
                                                                            1                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-2" value="2" required="" type="radio">
        <label for="seat-radio-1-2">
                                                                            2                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-3" value="3" required="" type="radio">
        <label for="seat-radio-1-3">
                                                                            3                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-4" value="4" required="" type="radio">
        <label for="seat-radio-1-4">
                                                                            4                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-2">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-5" value="5" required="" type="radio">
        <label for="seat-radio-1-5">
                                                                            5                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-6" value="6" required="" type="radio">
        <label for="seat-radio-1-6">
                                                                            6                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-7" value="7" required="" type="radio">
        <label for="seat-radio-1-7">
                                                                            7                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-8" value="8" required="" type="radio">
        <label for="seat-radio-1-8">
                                                                            8                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-3">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-9" value="9" required="" type="radio">
        <label for="seat-radio-1-9">
                                                                            9                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-10" value="10" required="" type="radio">
        <label for="seat-radio-1-10">
                                                                            10                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-11" value="11" required="" type="radio">
        <label for="seat-radio-1-11">
                                                                            11                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-12" value="12" required="" type="radio">
        <label for="seat-radio-1-12">
                                                                            12                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-4">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-13" value="13" required="" type="radio" disabled>
        <label for="seat-radio-1-13">
                                                                            13                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-14" value="14" required="" type="radio">
        <label for="seat-radio-1-14">
                                                                            14                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-15" value="15" required="" type="radio">
        <label for="seat-radio-1-15">
                                                                            15                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-16" value="16" required="" type="radio">
        <label for="seat-radio-1-16">
                                                                            16                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-5">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-17" value="17" required="" type="radio">
        <label for="seat-radio-1-17">
                                                                            17                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-18" value="18" required="" type="radio">
        <label for="seat-radio-1-18">
                                                                            18                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-19" value="19" required="" type="radio">
        <label for="seat-radio-1-19">
                                                                            19                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-20" value="20" required="" type="radio">
        <label for="seat-radio-1-20">
                                                                            20                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-6">
    <ol class="seats">
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-21" value="21" required="" type="radio">
        <label for="seat-radio-1-21">
                                                                            21                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-22" value="22" required="" type="radio">
        <label for="seat-radio-1-22">
                                                                            22                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-23" value="23" required="" type="radio">
        <label for="seat-radio-1-23">
                                                                            23                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-24" value="24" required="" type="radio">
        <label for="seat-radio-1-24">
                                                                            24                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-7">
    <ol class="seats">
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-25" value="25" required="" type="radio">
        <label for="seat-radio-1-25">
                                                                            25                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-26" value="26" required="" type="radio">
        <label for="seat-radio-1-26">
                                                                            26                                                                        </label>
      </li>
    </ol>
  </div>
  <div class="seat-row-8">
    <ol class="seats">
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <label for="seat-radio-1-BLANK" style="background: none;"></label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-27" value="27" required="" type="radio">
        <label for="seat-radio-1-27">
                                                                            27                                                                        </label>
      </li>
      <li class="seat">
        <input role="input-passenger-seat" name="passengers[1][seat]" id="seat-radio-1-28" value="28" required="" type="radio" disabled>
        <label for="seat-radio-1-28">
                                                                            28                                                                        </label>
      </li>
    </ol>
  </div>
</div>

<div class="text-left mt-2">
  <button class="btn btn-primary btn-xs mb-2">Available</button>
  <button class="btn btn-success btn-xs mb-2">Choosen</button>
  <button class="btn btn-danger btn-xs mb-2">Booked</button>
</div>
        <!-- Seat selection options will go here -->
    </div>
</div>
<script>
    function showSeatSelection(id, departure, destination, departureTime, arrivalTime, busPlate) {
    var modal = document.getElementById('seatSelection');
    modal.style.display = 'block';
    
    // Bu kısımda koltuk seçim ekranını doldurabilirsiniz
}

function hideSeatSelection() {
    var modal = document.getElementById('seatSelection');
    modal.style.display = 'none';
}
</script>
<script src="assets/js/ebilet/jquery.min.js"></script>
<script src="assets/js/ebilet/bootstrap.min.js"></script>
<script src="assets/js/ebilet/lightbox.min.js"></script>
<script src="assets/js/ebilet/select.min270f.js?v=721"></script>
<script src="assets/js/ebilet/datepicker.min.js"></script>
<script src="assets/js/ebilet/datepicker.tr.min.js"></script>
<script src="assets/js/ebilet/slider.min.js"></script>
<script src="assets/js/ebilet/viewport.min.js"></script>
<script src="assets/js/ebilet/jquery.dataTables.min.js"></script>
<script src="assets/js/ebilet/dataTables.bootstrap.min.js"></script>
<script src="assets/js/ebilet/jquery.lazyload.js"></script>
<script src="assets/js/ebilet/jquery.mask.js"></script>

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
