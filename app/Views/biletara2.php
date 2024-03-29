<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Umuttepe Turizm</title>
  <link rel="shortcut icon" href="assets/images/redbus.png" type="">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Eklenen CSS Dosyaları -->
  <link rel="stylesheet" href="<?php echo base_url('assets/guzergahdetay/animate.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/guzergahdetay/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/guzergahdetay/font-awesome.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/guzergahdetay/jquery-ui.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/guzergahdetay/style.css'); ?>">




<!--- banner ---->
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; ; animation-delay: 0.5s; animation-name: zoomIn;"><b> UMUTTEPE  TURİZM</b> </h1>
	</div>
</div>
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa-solid fa-bus"></i>
		<h3>Unutulmaz anılar için <span style="color:#e2ab4f"> güvenilir yol</span> arkadaşınız.</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Online Bilet Rezervasyonu</h2>
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">Nereden</label>
				<input class="city" type="text" value="Şehir Giriniz" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Şehir Giriniz';}" required=>
			</div>
			<div class="bnr-left">
				<label class="inputLabel">Nereye</label>
				<input class="city" type="text" value="Şehir Giriniz" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Şehir Giriniz';}" required=>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">Gidiş Tarihi</label>
				<input class="date" id="datepicker" type="text" value="gün/ay/yıl" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'gün/ay/yıl';}" required=>
			</div>
			<div class="bnr-right">
				<label class="inputLabel">Dönüş Tarihi<span class="opt">&nbsp;(Opsiyonel)</span></label>
				<input class="date" id="datepicker1" type="text" value="gün/ay/yıl" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'gün/ay/yıl';}" required=>
			</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
		</div>
		<div class="sear">

		<form action="<?php echo Base_url('assets/guzergah/'); ?>" method="post">
           <button class="seabtn">Buton Metni</button>
        </form>
			<!-- <form action="bus.html">
				<button class="seabtn">Otobüs Ara</button>
			</form> -->
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--- /banner ---->