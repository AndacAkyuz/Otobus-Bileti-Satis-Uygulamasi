# Umuttepe Turizm Projesi

Bu proje, CodeIgniter PHP çerçevesi ve Bootstrap CSS kütüphanesi kullanılarak geliştirilen bir bilet uygulaması web sitesini detaylı bir şekilde sunmaktadır. Uygulama, kullanıcı dostu bir arayüz ile çeşitli etkinlikler ve seyahatler için bilet satın alma imkanı sunmaktadır.

![1](https://github.com/AndacAkyuz/Otobus-Bileti-Satis-Uygulamasi/assets/91327557/e0ec3872-367d-4f38-bc4b-118f6dd02cde)


![2](https://github.com/AndacAkyuz/Otobus-Bileti-Satis-Uygulamasi/assets/91327557/5bebf8d9-94ce-448b-a3b6-350295fd827e)


![3](https://github.com/AndacAkyuz/Otobus-Bileti-Satis-Uygulamasi/assets/91327557/783ea089-0e86-4ae9-a174-73aa145a4b31)



## Grup Üyeleri

- Andaç Akyüz - 211307035 - akyuzandac@gmail.com
- Furkan Esad Uzun - 211307059 - f.esad.uzun@gmail.com
- Oktan Efe Çakar - 211307021 - oktanefecakar@gmail.com

## Özellikler

- Kapsamlı Arama Seçenekleri: Kullanıcılar, etkinlikleri ve seyahatleri kategorilere, anahtar kelimelere, tarih aralıklarına ve fiyat aralıklarına göre geniş kapsamlı bir şekilde arayabilirler.
- Ayrıntılı Bilgi Sunumu: Uygulama, her bir etkinlik ve seyahat için detaylı bilgiler sunar. Bu bilgiler, tarihler, saatler, fiyatlar, koltuk durumu, mekan detayları, program içeriği ve iletişim bilgilerini içerir.
- Hızlı ve Güvenli Satın Alma İşlemi: Kullanıcılar, istedikleri biletleri hızlıca seçip güvenli bir şekilde satın alabilirler. Uygulama, kredi kartı gibi çeşitli ödeme yöntemlerini destekler.
- Kullanıcı Dostu Arayüz: Uygulamanın arayüzü basit ve kullanımı kolaydır. Kullanıcılar, istedikleri bilgilere kolaylıkla erişebilir ve bilet satın alma sürecini sorunsuz bir şekilde tamamlayabilirler.
- Güvenilir Ödeme Altyapısı: Uygulama, tüm ödeme işlemleri için güvenilir bir altyapı kullanır. Kullanıcıların kişisel bilgileri şifrelenir ve güvenli bir şekilde saklanır.
- Kişisel Kullanıcı Profili: Kullanıcılar, uygulama içinde bir profil oluşturabilir ve bilet geçmişlerini izleyebilirler. Bu özellik sayesinde kullanıcılar, daha önce satın aldıkları biletleri kolayca bulabilir ve yeniden satın alabilirler.

## Teknolojiler

- PHP
- CodeIgniter
- MySQL
- Bootstrap

## Kurulum

1. Projeyi klonlayın: `git clone https://github.com/your-username/umuttepe-turizm.git`
2. Proje dizinine gidin: `cd umuttepe-turizm`
3. Composer paketlerini yükleyin: `composer install`
4. Veritabanı yapılandırmasını oluşturun: `application/config/database.php` dosyasını düzenleyin ve veritabanı bilgilerinizi girin.
5. Veritabanı tablolarını oluşturmak için migration'ları çalıştırın: `php spark migrate`
6. Web sunucusunu başlatın: `php spark serve`

## Katkıda Bulunma

1. Bu depoyu (fork) edin.
2. Yeni bir dal (branch) oluşturun: `git checkout -b feature/your-feature`
3. Değişikliklerinizi yapın ve bunları taahhüt edin (commit): `git commit -am 'Add some feature'`
4. Dalınıza (branch) itme (push) yapın: `git push origin feature/your-feature`
5. Bir birleştirme isteği (pull request) gönderin.

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakın.






# CodeIgniter 4 Uygulama Başlangıç Noktası

## CodeIgniter Nedir?

CodeIgniter, hafif, hızlı, esnek ve güvenli bir PHP full-stack web çerçevesidir. Daha fazla bilgiyi [resmi site](https://codeigniter.com/)de bulabilirsiniz.

Bu depo, bir composer ile kurulabilir bir uygulama başlangıç noktasını içerir. Bu, geliştirme deposundan oluşturulmuştur.

Versiyon 4 için planlar hakkında daha fazla bilgiyi forumdaki CodeIgniter 4'de bulabilirsiniz.

Son çerçeve sürümüne uygun kullanıcı kılavuzunu okuyabilirsiniz.

## Kurulum ve Güncellemeler

Yeni bir sürüm çıktığında `composer update` komutunu kullanarak `composer create-project codeigniter4/appstarter` komutu ile uygulamayı oluşturun.

Güncelleme yaparken, `app` klasörünüze uygulamanız gereken herhangi bir değişikliği görmek için sürüm notlarını kontrol edin. Etkilenen dosyalar, `vendor/codeigniter4/framework/app` klasöründen kopyalanabilir veya birleştirilebilir.

## Kurulum

`env` dosyasını `.env` olarak kopyalayın ve uygulamanız için `baseURL` ve herhangi bir veritabanı ayarını düzenleyin.

## `index.php` ile Önemli Değişiklik

`index.php` artık projenin kök dizininde değil! Güvenlik ve bileşenlerin ayrılması için `public` klasörünün içine taşındı.

Bu, web sunucunuzun projenizin `public` klasörüne "işaret etmesi" gerektiği anlamına gelir ve
projenizin köküne değil. Daha iyi bir uygulama, oraya işaret etmek için bir sanal sunucu yapılandırmaktır. Kötü bir uygulama, web sunucunuzu projenin köküne işaret etmek ve `public/...` yazmayı beklemektir, çünkü geri kalan mantığınız ve çerçeveniz açığa çıkar.

CI4'ün nasıl çalıştığı hakkında daha iyi bir açıklama için lütfen kullanıcı kılavuzunu okuyun!

## Depo Yönetimi

HATALARI izlemek ve onaylanmış GELİŞTİRME iş paketlerini izlemek için GitHub sorunlarını, ana depomuzda kullanıyoruz.
DESTEK sağlamak ve ÖZELLİK TALEPLERİni tartışmak için forumumuzu kullanıyoruz.

Bu depo, dağıtım için hazırlık betiğimiz tarafından oluşturulmuş bir "dağıtım" deposudur. Sorunları forumumuzda veya ana depoda sorun olarak bildirebilirsiniz.

## Sunucu Gereksinimleri

PHP sürüm 7.4 veya daha yükseği gerektirir ve aşağıdaki uzantıların yüklü olması gerekir:

- intl
- mbstring

[!UYARI] PHP 7.4 için yaşam döngüsü son tarihi 28 Kasım 2022 idi. PHP 8.0 için yaşam döngüsü son tarihi 26 Kasım 2023 idi. Hala PHP 7.4 veya 8.0 kullanıyorsanız, hemen yükseltmelisiniz. PHP 8.1 için yaşam döngüsü son tarihi 25 Kasım 2024 olacaktır.

Ayrıca, PHP'nizde aşağıdaki uzantıların etkinleştirildiğinden emin olun:

- json (varsayılan olarak etkindir - kapatmayın)
- mysqlnd MySQL kullanmayı planlıyorsanız
- libcurl HTTP\CURLRequest kütüphanesini kullanmayı planlıyorsanız

