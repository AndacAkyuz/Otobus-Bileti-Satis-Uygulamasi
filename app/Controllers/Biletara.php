<?php

namespace App\Controllers;

class Biletara extends BaseController
{
    public function index()
    {
        return view('biletara'); // app/Views/index.php dosyasını yükle
    }
}

?>

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

    