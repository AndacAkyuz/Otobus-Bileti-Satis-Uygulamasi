<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Umuttepe Turizm</title>
    <link rel="shortcut icon" href="../assets/images/redbus.png" type="">
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('../assets/css/guzergah.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/ebilet/style270f.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/guzergahdetay.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>
<style>

.myButton {
  /* Basic styles for all buttons */
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;

  /* Set fixed width and height */
  width: 200px;  /* Adjust this value to your desired width */
  height: 50px;  /* Adjust this value to your desired height */
}
.popup2 {
      position: fixed;
      top: 25%;
      left: 35%;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5) !important;;
      color: white !important;
      z-index: 100;
      text-align: center;
    }
   
  #total-discount {
  color: red;
}

#total-price {
  color: green;
}  
  .seat-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
  }

  .seat {
    width: 50px;
    height: 50px;
    background-color: lightgrey;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #ccc;
  }

  .selected-erkek {
    background-color: blue !important;
    color: white;
  }

  .selected-kadın {
    background-color: red !important;
    color: white;
  }
  #total-price,
  #total-discount {
    margin-top: 200px;
    font-weight: bold;
  }
  CSS

/* Let's elevate the ticket container with some flair! */

#ticket-container {
  margin-top: 20px;
  padding: 20px; /* Increase padding for more breathing room */
  background-color: #fdfdfd; /* Subtle off-white background */
  border: none; /* Remove the basic border for a cleaner look */
  border-radius: 10px; /* Increase curve for a softer appearance */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Add subtle depth with a light shadow */
}

  .ticket-select {
    width: 100%;
    margin-bottom: 10px;
  }

  #sidebar {
    width: 300px;
    padding: 20px;
    background-color: #f0f0f0;
    border-left: 1px solid #ccc;
  }
</style>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../index" class="logo">
                            <img src="../assets/images/logo.png" alt="">
                        </a>

                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="../index">Ana Sayfa</a></li>
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

    <!--- selectroom ---->
    <div class="selectroom">
        <div class="container">

            <div class="selectroom_top">

                <div class="col-md-12 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                    <ul>
                        <li>
                            <h6>Kalkış</h6>
                            <h4><?php echo $sefer["KalkisSehri"] ?></h4>
                            <h6><?php echo $sefer["KalkisSaat"] ?></h6>
                            <?php $kalkis=$sefer["KalkisSehri"] ?>
                        </li>
                        <li>
                            <h6>Varış</h6>
                            <h4><?php echo $sefer["VarisSehri"] ?></h4>
                            <h6><?php echo $sefer["VarisSaat"] ?></h6>
                            <?php $varis=$sefer["VarisSehri"] ?>
                        </li>
                        <li>
                            <h6>Otobüs Modeli</h6>
                            <h4><?php echo $sefer["OtobusIsim"] ?></h4>
                        </li>
                        <li>
                            <h6>Yolculuk Süresi</h6>
                            <?php 
                            
                            $varisSaat = strtotime($sefer["VarisSaat"]);
                            $kalkisSaat = strtotime($sefer["KalkisSaat"]);
                            $saatFarki = ($varisSaat - $kalkisSaat) / 3600;
                            $saatFarki = round($saatFarki);
                            ?>
                            <h4><?php echo $saatFarki ?> Saat</h4>
                        </li>
                    </ul>


                    <div class="clearfix"></div>
                    <div class="grand">
                        <p>Bilet Fiyat</p>
                        <h3><?php echo $sefer["Fiyat"] ?> TL</h3>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <button class="btn" id="showRouteButton" style="font-size: 18px;">Rotayı Göster</button>
            <div class="selectroom_top">
                <div id="map" style="height: 300px; width: 100%"></div>
            </div>

            <div class="bus">
                
            <div id="seats-container">
    
    </div>
    
    <div id="selected-seats-info"></div>
    <div id="selected-seats-list"></div>
    <div id="ticket-container"></div>

    <div id="total-price">Toplam Fiyat: 0 TL</div> <!-- Toplam fiyatı gösterecek alan -->
    <div id="total-discount">Toplam İndirim : 0TL</div>
    <div id="discount-price"></div>
    
    <button class="btn" id="buyButton" onclick="openPopup()" style="margin-top: 190px;">Satın Al</button>
    <button class="btn" id="showPNRButton" style="margin-top: 190px;" onclick="showPNR()" disabled>PNR Kodunu Göster</button>
    <p> Tüm Yolcularımızın Dikkatine! <br> Yanlış seçilen biletlerden firmamız sorumlu değildir. <br>Tüm yolcularımız otobüse binerken kimliklerini ve istenildiği takdirde görev evraklarını beyan etmek zorundadır.<br> Kontrol aşamasında sahte bilet beyanının fark edildiği takdirde cezai işlem ve bilet iptali gerçekleştirilir.<br>Umuttepe Turizm gerekli koşullarda bilet iptal hakkını saklı tutar. </p>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      const selectedSeats = new Set(); // Seçilen koltukları takip etmek için set
    
      const seatsContainer = document.getElementById("seats-container");
      const totalSeats = 10; // Toplam koltuk sayısı
      const rows = 4; // Satır sayısı
    
      generateSeats(seatsContainer, totalSeats, rows);
    
      function generateSeats(container, totalSeats, rows) {
        for (let i = 0; i < rows; i++) {
          const seatRow = document.createElement("div");
          seatRow.classList.add("seat-row");
    
          for (let j = 1; j <= totalSeats; j++) {
            const seat = document.createElement("div");
            seat.classList.add("seat");
            const seatNumber = j + i * totalSeats;
            seat.textContent = seatNumber;
            seat.dataset.seatNumber = seatNumber; // Koltuk numarasını dataset'e ekle
            seat.addEventListener("click", function() {
              const seatNumber = parseInt(seat.textContent);
    
              if (selectedSeats.size >= 5 && !selectedSeats.has(seatNumber)) {
                alert("5'ten fazla koltuk seçemezsiniz.");
                return;
              }
    
              showGenderInput(function(gender) {
                if (!gender || (gender !== "erkek" && gender !== "kadın")) {
                  alert("Geçersiz cinsiyet girişi. Lütfen tekrar deneyin.");
                  return;
                }
    
                seat.classList.toggle("selected");
    
                // Cinsiyete göre koltuk rengini güncelle
                if (gender === "kadın") {
                  seat.classList.toggle("selected-kadın");
                } else {
                  seat.classList.toggle("selected-erkek");
                }
    
                // Seçilen koltuk bilgisini sakla
                selectedSeats.add({ seatNumber, gender });
    
                // Seçilen koltuk sayısına göre listbox oluştur
                createTicketListBox(selectedSeats.size);
    
                updateSelectedSeatsInfo();
              });
            });
            seatRow.appendChild(seat);
          }
    
          container.appendChild(seatRow);
        }
      }
    
      function showGenderInput(callback) {
        const gender = prompt("Kadın mı erkek mi? (kadın/erkek)");
        callback(gender);
      }
    
      function updateTotalPrice() {
        const selectedSeatsCount = selectedSeats.size;
        let totalPrice = selectedSeatsCount * 100; // Her bir biletin fiyatı 100 TL
        let totalDiscount = 0;
        
    
        const ticketContainers = document.querySelectorAll(".ticket-select");
        ticketContainers.forEach(ticketSelect => {
          const selectedOption = ticketSelect.value;
          if (selectedOption === "Öğrenci" || selectedOption === "65 yaş üstü" || selectedOption === "Memur") { // Sadece indirimli seçeneklerde indirim yap
            const discountPrice = 100 * 0.15; // İndirim miktarı hesapla
            totalDiscount += discountPrice; // Toplam indirim fiyatını güncelle
        } else if (selectedOption === "Güvenlik Gücü Mensubu" || selectedOption === "7 yaş altı") {
            const discountPrice = 100 * 1;
            totalDiscount += discountPrice;
          }
        });
    
        totalPrice -= totalDiscount; // Toplam fiyattan indirim miktarını düş
        const totalPriceElement = document.getElementById("total-price");
        const totalPriceElemente = document.getElementById("total-pricee");
        totalPriceElement.textContent = `Toplam Fiyat: ${totalPrice.toFixed(2)} TL`;
        totalPriceElemente.textContent = `Kartınızdan Çekilecek Toplam Tutar: ${totalPrice.toFixed(2)} TL`;
    
        const totalDiscountElement = document.getElementById("total-discount");
        totalDiscountElement.textContent = `Toplam İndirim: ${totalDiscount.toFixed(2)} TL`;
      }
    
      function createTicketListBox(count) {
        const ticketContainer = document.getElementById("ticket-container");
        ticketContainer.innerHTML = ""; // Önceki listeyi temizle
    
        for (let i = 1; i <= count; i++) {
          const ticketLabel = document.createElement("label");
          ticketLabel.textContent = `${i}.Bilet: `;
          ticketContainer.appendChild(ticketLabel);
    
          const ticketSelect = document.createElement("select");
          ticketSelect.classList.add("ticket-select");
          ticketSelect.id = `ticket-${i}`;
          const option6 = document.createElement("option");
          option6.text = "Güvenlik Gücü Mensubu";
          ticketSelect.add(option6);
          const option1 = document.createElement("option");
          option1.text = "Normal";
          ticketSelect.add(option1);
          const option2 = document.createElement("option");
          option2.text = "65 yaş üstü";
          ticketSelect.add(option2);
          const option3 = document.createElement("option");
          option3.text = "7 yaş altı";
          ticketSelect.add(option3);
          const option4 = document.createElement("option");
          option4.text = "Öğrenci";
          ticketSelect.add(option4);
          const option5 = document.createElement("option");
          option5.text = "Memur";
          ticketSelect.add(option5);
    
          ticketSelect.addEventListener("change", updateTotalPrice); // Her bir liste kutusu değiştiğinde toplam fiyatı güncelle
          ticketContainer.appendChild(ticketSelect);
          ticketContainer.appendChild(document.createElement("br"));
        }
      }
    
      function updateSelectedSeatsInfo() {
        const selectedSeatsCount = selectedSeats.size;
        const selectedSeatsInfo = document.getElementById("selected-seats-info");
        selectedSeatsInfo.textContent = `Seçilen koltuk sayısı: ${selectedSeatsCount}`;
    
        const selectedSeatsList = document.getElementById("selected-seats-list");
        selectedSeatsList.innerHTML = ""; // Önceki listeyi temizle
    
        // Seçilen koltuklar için bir liste oluştur
        selectedSeats.forEach(seat => {
          const listItem = document.createElement("li");
          listItem.textContent = `Koltuk Numarası: ${seat.seatNumber}, Cinsiyet: ${seat.gender}`;
          selectedSeatsList.appendChild(listItem);
        });
      }
    });
    </script>

</div>


            <div class="clearfix"></div>
            <div style="margin-left: 70%; margin-top: 2%;">
                <div class="popup" id="popup">
                    <div class="popup-content">
                        <div class="wrapper" id="app">
                            <div class="card-form">
                                <div class="card-list">
                                    <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                                        <div class="card-item__side -front">
                                            <div class="card-item__focus"
                                                v-bind:class="{'-active' : focusElementStyle }"
                                                v-bind:style="focusElementStyle" ref="focusElement"></div>
                                            <div class="card-item__cover">
                                                <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                                    class="card-item__bg">
                                            </div>

                                            <div class="card-item__wrapper">
                                                <div class="card-item__top">
                                                    <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png"
                                                        class="card-item__chip">
                                                    <div class="card-item__type">
                                                        <transition name="slide-fade-up">
                                                            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                                                v-if="getCardType" v-bind:key="getCardType" alt=""
                                                                class="card-item__typeImg">
                                                        </transition>
                                                    </div>
                                                </div>
                                                <label for="cardNumber" class="card-item__number" ref="cardNumber">
                                                    <template v-if="getCardType === 'amex'">
                                                        <span v-for="(n, $index) in amexCardMask" :key="$index">
                                                            <transition name="slide-fade-up">
                                                                <div class="card-item__numberItem"
                                                                    v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">
                                                                    *</div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }"
                                                                    :key="$index"
                                                                    v-else-if="cardNumber.length > $index">
                                                                    {{cardNumber[$index]}}
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }" v-else
                                                                    :key="$index + 1">{{n}}</div>
                                                            </transition>
                                                        </span>
                                                    </template>

                                                    <template v-else>
                                                        <span v-for="(n, $index) in otherCardMask" :key="$index">
                                                            <transition name="slide-fade-up">
                                                                <div class="card-item__numberItem"
                                                                    v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">
                                                                    *</div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }"
                                                                    :key="$index"
                                                                    v-else-if="cardNumber.length > $index">
                                                                    {{cardNumber[$index]}}
                                                                </div>
                                                                <div class="card-item__numberItem"
                                                                    :class="{ '-active' : n.trim() === '' }" v-else
                                                                    :key="$index + 1">{{n}}</div>
                                                            </transition>
                                                        </span>
                                                    </template>
                                                </label>
                                                <div class="card-item__content">
                                                    <label for="cardName" class="card-item__info" ref="cardName">
                                                        <div class="card-item__holder">Kart Sahibi</div>
                                                        <transition name="slide-fade-up">
                                                            <div class="card-item__name" v-if="cardName.length" key="1">
                                                                <transition-group name="slide-fade-right">
                                                                    <span class="card-item__nameItem"
                                                                        v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')"
                                                                        v-if="$index === $index"
                                                                        v-bind:key="$index + 1">{{n}}</span>
                                                                </transition-group>
                                                            </div>
                                                            <div class="card-item__name" v-else key="2">AD SOYAD</div>
                                                        </transition>
                                                    </label>
                                                    <div class="card-item__date" ref="cardDate">
                                                        <label for="cardMonth"
                                                            class="card-item__dateTitle">Geçerlilik</label>
                                                        <label for="cardMonth" class="card-item__dateItem">
                                                            <transition name="slide-fade-up">
                                                                <span v-if="cardMonth"
                                                                    v-bind:key="cardMonth">{{cardMonth}}</span>
                                                                <span v-else key="2">AY</span>
                                                            </transition>
                                                        </label>
                                                        /
                                                        <label for="cardYear" class="card-item__dateItem">
                                                            <transition name="slide-fade-up">
                                                                <span v-if="cardYear"
                                                                    v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                                                                <span v-else key="2">YIL</span>
                                                            </transition>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-item__side -back">
                                            <div class="card-item__cover">
                                                <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                                    class="card-item__bg">
                                            </div>
                                            <div class="card-item__band"></div>
                                            <div class="card-item__cvv">
                                                <div class="card-item__cvvTitle">CVV</div>
                                                <div class="card-item__cvvBand">
                                                    <span v-for="(n, $index) in cardCvv" :key="$index">
                                                        *
                                                    </span>

                                                </div>
                                                <div class="card-item__type">
                                                    <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                                        v-if="getCardType" class="card-item__typeImg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-form__inner">
                                    <div class="card-input">
                                        <label for="cardNumber" class="card-input__label">Kart Numarası</label>
                                        <input type="text" id="cardNumber" class="card-input__input"
                                            v-mask="generateCardNumberMask" v-model="cardNumber" v-on:focus="focusInput"
                                            v-on:blur="blurInput" data-ref="cardNumber" autocomplete="off">
                                    </div>
                                    <br><br>
                                    <div class="card-input">
                                        <label for="cardName" class="card-input__label">Kart Sahibinin Adı
                                            Soyadı</label>
                                        <input type="text" id="cardName" class="card-input__input" v-model="cardName"
                                            v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName"
                                            autocomplete="off">
                                    </div>
                                    <br><br><br>
                                    <div class="card-form__row">
                                        <div class="card-form__col">
                                            <div class="card-form__group">
                                                <label for="cardMonth" class="card-input__label">Geçerlilik
                                                    Tarihi</label>
                                                <select class="card-input__input -select" id="cardMonth"
                                                    v-model="cardMonth" v-on:focus="focusInput" v-on:blur="blurInput"
                                                    data-ref="cardDate">
                                                    <option value="" disabled selected>AY</option>
                                                    <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12"
                                                        v-bind:disabled="n < minCardMonth" v-bind:key="n">
                                                        {{n < 10 ? '0' + n : n}}
                                                    </option>
                                                </select>
                                                <select class="card-input__input -select" id="cardYear"
                                                    v-model="cardYear" v-on:focus="focusInput" v-on:blur="blurInput"
                                                    data-ref="cardDate">
                                                    <option value="" disabled selected>YIL</option>
                                                    <option v-bind:value="$index + minCardYear"
                                                        v-for="(n, $index) in 12" v-bind:key="n">
                                                        {{$index + minCardYear}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-form__col -cvv">
                                            <div class="card-input">
                                                <label for="cardCvv" class="card-input__label">CVV</label>
                                                <input type="text" class="card-input__input" id="cardCvv"
                                                    v-mask="'####'" maxlength="4" v-model="cardCvv"
                                                    v-on:focus="flipCard(true)" v-on:blur="flipCard(false)"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="total-pricee">Toplam Fiyat: 0 TL</div>
                                    <div>
                                        
                                    </div>
                                    <!-- Kartınızdan Çekilecek Toplam fiyatı gösterecek alan -->
                                    
                                    <button type="submit" class="card-form__button" onclick="return onayla();">Onayla</button>
                                    <button class="card-form__button" onclick="closePopup()">Kapat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    </div>
<script>
    function onayla() {
    var cardNumber = document.getElementById("cardNumber").value;
    var cardName = document.getElementById("cardName").value;
    var cardMonth = document.getElementById("cardMonth").value;
    var cardYear = document.getElementById("cardYear").value;
    var cardCvv = document.getElementById("cardCvv").value;

    if (cardNumber === "" || cardName === "" || cardMonth === "" || cardYear === "" || cardCvv === "") {
        alert("Lütfen tüm alanları doldurunuz.");
        return false;
    }

    // Tüm alanlar dolu ise işlem devam eder
    closePopup();
    
    // Satın Al butonunu gizle
    document.getElementById("buyButton").style.display = "none";
    
    // PNR Kodunu Göster butonunu aktifleştir
    document.getElementById("showPNRButton").disabled = false;

    return true;
}

var ilPlakaKodu = 34; // Biletin kalış yaptığı ilin plaka kodu
var peronNumarasi = "D"; // Otobüs firmasının o ildeki otogardaki peron numarası
var otobusPlaka = "41UMT41"; // Seferi yapan otobüsün plakası

// O anki saat bilgisini alma
var tarih = new Date();
var gun = tarih.getDate().toString().padStart(2, "0");
var ay = (tarih.getMonth() + 1).toString().padStart(2, "0");
var yil = tarih.getFullYear().toString();
var saat = tarih.getHours().toString().padStart(2, "0");
var dakika = tarih.getMinutes().toString().padStart(2, "0");
var saniye = tarih.getSeconds().toString().padStart(2, "0");

// PNR kodunun oluşturulması
var pnrKodu = ilPlakaKodu +
  (saat < 12 ? "ÖÖ" : "ÖS") +
  gun + ay + yil + saat + dakika + saniye +
  peronNumarasi + otobusPlaka;

// QR kodunun oluşturulması için fonksiyon
function qrCode(s, w = 250, h = 250) {
  return 'https://chart.googleapis.com/chart?chs=' + w + 'x' + h + '&cht=qr&chl=' + s;
}

// QR kodu oluşturma fonksiyonu
function createQRCode() {
  var qrImage = document.createElement("img");
  qrImage.src = qrCode(pnrKodu, 200, 200); // QR kodu resmi
  var qrContainer = document.getElementById("qrContainer");
  qrContainer.innerHTML = ""; // Önceki QR kodunu temizle
  qrContainer.appendChild(qrImage);
}

// Pop-up penceresinin oluşturulması
function showPNR() {
  var popup2 = document.createElement("div");
  popup2.classList.add("popup2");
  popup2.style.width = "500px";
  popup2.style.height = "400px";

  var popupContent = document.createElement("div");
  popupContent.classList.add("popup-content");

  var pnrText = document.createElement("p");
  pnrText.textContent = "PNR Kodunuz: " + pnrKodu;

  var qrContainer = document.createElement("div");
  qrContainer.id = "qrContainer"; // QR kodu görüntülenecek alan

  var createQRButton = document.createElement("button");
  createQRButton.classList.add("myButton");
  createQRButton.textContent = "QR Kodu Oluştur";
  createQRButton.addEventListener("click", createQRCode);

  var closeButton = document.createElement("button");
  closeButton.textContent = "Kapat";
  closeButton.classList.add("myButton");
  closeButton.addEventListener("click", function() {
    document.body.removeChild(popup2);
  });

  popupContent.appendChild(pnrText);
  popupContent.appendChild(qrContainer);
  popupContent.appendChild(createQRButton);
  popupContent.appendChild(closeButton);

  popup2.appendChild(popupContent);
  document.body.appendChild(popup2);

  // PNR kodunun kopyalanması
  var copyButton = document.createElement("button");
  copyButton.classList.add("myButton");
  copyButton.textContent = "Kopyala";
  copyButton.addEventListener("click", function() {
    navigator.clipboard.writeText(pnrKodu);
    alert("PNR kodunuz kopyalanmıştır!");
  });

  popupContent.appendChild(copyButton);
}

// Pop-up penceresini açmak için bir butona tıklama olayı ekleyin
document.getElementById("btn").addEventListener("click", showPNR);
</script>
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
    <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl-carousel.js') ?>"></script>
    <script src="<?= base_url('assets/js/tabs.js') ?>"></script>
    <script src="<?= base_url('assets/js/popup.js') ?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4mDWGu_NvFgAcY6c3p8OoHHpkOEs_NcE&callback=initMap"
        async defer></script>
    <script>
    $(function() {
        var map;

        var defaultLatLng = {
            lat: 39.925533,
            lng: 32.866287
        };

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: defaultLatLng
        });

        function showRoute() {
            var kalkisSehri = '<?php echo $sefer["KalkisSehri"]; ?>';
            var varisSehri = '<?php echo $sefer["VarisSehri"]; ?>';

            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'address': kalkisSehri
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var kalkisKoordinat = results[0].geometry.location;

                    geocoder.geocode({
                        'address': varisSehri
                    }, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            var varisKoordinat = results[0].geometry.location;

                            var directionsService = new google.maps.DirectionsService();
                            var directionsDisplay = new google.maps.DirectionsRenderer();

                            directionsService.route({
                                origin: kalkisKoordinat,
                                destination: varisKoordinat,
                                travelMode: 'DRIVING'
                            }, function(response, status) {
                                if (status === 'OK') {
                                    directionsDisplay.setDirections(response);
                                    directionsDisplay.setMap(map);
                                } else {
                                    window.alert('Rota çizilemedi: ' + status);
                                }
                            });
                        } else {
                            window.alert('Varış noktası koordinatları alınamadı: ' + status);
                        }
                    });
                } else {
                    window.alert('Kalkış noktası koordinatları alınamadı: ' + status);
                }
            });
        }

        $('#showRouteButton').click(function() {
            showRoute();
        });
    });
    </script>
    <script>
    function openPopup() {
        document.getElementById("popup").style.display = "flex";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
    </script>

    <script>
    // Tüm Değişkenlerin Seçilip Seçilmediğini Test Eden Kod
    document.querySelector('.card-form__button').addEventListener('click', function() {
        var cardNumber = document.getElementById('cardNumber').value;
        var cardName = document.getElementById('cardName').value;
        var cardMonth = document.getElementById('cardMonth').value;
        var cardYear = document.getElementById('cardYear').value;
        var cardCvv = document.getElementById('cardCvv').value;

        if (cardNumber === '' || cardName === '' || cardMonth === '' || cardYear === '' || cardCvv === '') {
            alert('Lütfen tüm alanları doldurunuz.');
        } else {
            // Burada onay işlemini gerçekleştir
            // Örneğin formu gönder
        }
    });
    </script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
    <script src='https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js'></script>
    <script src="./script.js"></script>


    <script>
    new Vue({
        el: "#app",
        data() {
            return {
                currentCardBackground: Math.floor(Math.random() * 25 + 1), // just for fun :D
                cardName: "",
                cardNumber: "",
                cardMonth: "",
                cardYear: "",
                cardCvv: "",
                minCardYear: new Date().getFullYear(),
                amexCardMask: "#### ###### #####",
                otherCardMask: "#### #### #### ####",
                cardNumberTemp: "",
                isCardFlipped: false,
                focusElementStyle: null,
                isInputFocused: false
            };
        },
        mounted() {
            this.cardNumberTemp = this.otherCardMask;
            document.getElementById("cardNumber").focus();
        },
        computed: {
            getCardType() {
                let number = this.cardNumber;
                let re = new RegExp("^4");
                if (number.match(re) != null) return "visa";

                re = new RegExp("^(34|37)");
                if (number.match(re) != null) return "amex";

                re = new RegExp("^5[1-5]");
                if (number.match(re) != null) return "mastercard";

                re = new RegExp("^6011");
                if (number.match(re) != null) return "discover";

                re = new RegExp('^9792')
                if (number.match(re) != null) return 'troy'

                return "visa"; // default type
            },
            generateCardNumberMask() {
                return this.getCardType === "amex" ? this.amexCardMask : this.otherCardMask;
            },
            minCardMonth() {
                if (this.cardYear === this.minCardYear) return new Date().getMonth() + 1;
                return 1;
            }
        },
        watch: {
            cardYear() {
                if (this.cardMonth < this.minCardMonth) {
                    this.cardMonth = "";
                }
            }
        },
        methods: {
            flipCard(status) {
                this.isCardFlipped = status;
            },
            focusInput(e) {
                this.isInputFocused = true;
                let targetRef = e.target.dataset.ref;
                let target = this.$refs[targetRef];
                this.focusElementStyle = {
                    width: `${target.offsetWidth}px`,
                    height: `${target.offsetHeight}px`,
                    transform: `translateX(${target.offsetLeft}px) translateY(${target.offsetTop}px)`
                }
            },
            blurInput() {
                let vm = this;
                setTimeout(() => {
                    if (!vm.isInputFocused) {
                        vm.focusElementStyle = null;
                    }
                }, 300);
                vm.isInputFocused = false;
            }
        }
    });
    </script>

</body>

</html>