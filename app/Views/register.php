<?php
    include 'config.php';

    if(isset($_POST['submit'])){
        $AdiSoyadi = mysqli_real_escape_string($conn, $_POST['AdSoyad']);
        $Eposta = mysqli_real_escape_string($conn, $_POST['Eposta']);
        $TelefonNo = mysqli_real_escape_string($conn, $_POST['TelefonNo']);
        $Sifre = mysqli_real_escape_string($conn, $_POST['Sifre']);
        $TCNo = mysqli_real_escape_string($conn, $_POST['TCNo']);       
        $DogumTarihi = mysqli_real_escape_string($conn, $_POST['DogumTarihi']); 
        $Cinsiyet = mysqli_real_escape_string($conn, $_POST['Cinsiyet']);

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM kullanici WHERE Eposta ='{$Eposta}'")) > 0){
            $msg = "<div class = 'alert alert-danger'>{$Eposta} - Bu eposta adresi kullanılmış.</div>";
            
        } else {
            
                $sql = "INSERT INTO kullanici (AdSoyad, Eposta, TelefonNo, Sifre, TCNo, DogumTarihi, Cinsiyet) VALUES ('{$AdiSoyadi}','{$Eposta}', '{$TelefonNo}','{$Sifre}','{$TCNo}' ,'{$DogumTarihi}' , '{$Cinsiyet}')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    $successMsg = "Kayıt başarılı.";
                    
                } else{
                    $errorMsg = "Kayıt başarısız. Girdiğiniz bilgileri kontrol edin.";
                }
            } 
                
        }
    
?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <link rel="stylesheet" type="text/css" href="scss/_variables.scss" />
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

</head>
<body>
    
    <section class="py-3 mt-3" >
        <div class="container">
            <div class="text-uppercase">
                <h2>Üye Ol</h2>
            </div>
        </div>
    </section>
    <?php
            if(isset($successMsg)){
                echo "<div class='alert alert-success'>$successMsg</div>";
            } elseif(isset($errorMsg)){
                echo "<div class='alert alert-danger'>$errorMsg</div>";
            } elseif(isset($errorMsg2)){
                echo "<div class='alert alert-danger'>$errorMsg2</div>";
            }
    ?>
    <section class="pt-30 pb-80 bg-border">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form action="" method="POST">
                        <div class="row" >
                            <div class="col-md-6">
                                <label style="margin-top: 0;">Ad Soyad: </label>
                                <input type="text" class="form-control" id="AdSoyad" name="AdSoyad" value="" size="30" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label style="margin-top: 0;">E-Mail Adresi: </label>
                                <input type="text" class="form-control" id="Eposta" name="Eposta" value="" size="30" autocomplete="off">
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-12">
                                <label>TC Kimlik Numaranız: </label>
                                <input type="text" class="form-control" id="TCNo" name="TCNo" maxlength="11" value="" autocomplete="off">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="margin-top:20px;">
                                <label>Cep Telefonu Numaranız: </label>
                                <input type="text" class="form-control" id="TelefonNo" maxlength="10" name="TelefonNo" onkeyup="CepGirisKontrol()" value="" autocomplete="off">
                                <small class=" pull-right">(Cep telefonu numaranızın başında sıfır olmadan 10 haneli olarak yazınız. Örn.5XXXXXXXXX)</small>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-12">
                            <label>Doğum Tarihi: </label>
                            <input type="text" name="DogumTarihi" placeholder="Doğum Tarihi (Yıl-Ay-Gün)" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-6">
                            <label>Şifre: </label>
                                <input type="password" id="Sifre" class="form-control" name="Sifre" value="" size="30" autocomplete="off">
                            </div>
    
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-12">
                            <label>Cinsiyet: </label>
                                <select id="Cinsiyet" name="Cinsiyet" class="form-control">
                                <option value="" selected=""> -Seçiniz- </option>
                                <option value="E"> Erkek </option>
                                <option value="B"> Bayan </option>
                                </select>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12" style="padding-top: 20px;">
                                <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script src="js/script.js"></script>
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>