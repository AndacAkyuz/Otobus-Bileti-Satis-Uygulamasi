# Umuttepe Turizm Projesi

Bu proje, CodeIgniter PHP çerçevesi ve Bootstrap CSS kütüphanesi kullanılarak geliştirilen bir bilet uygulaması web sitesini detaylı bir şekilde sunmaktadır. Uygulama, kullanıcı dostu bir arayüz ile çeşitli etkinlikler ve seyahatler için bilet satın alma imkanı sunmaktadır.

## Grup Üyeleri

- Andaç Akyüz - 211307035 - akyuzandac@gmail.com
- Furkan Esad Uzun - 211307059 - f.esad.uzun@gmail.com
- Oktan Efe Çakar - 211307021 - Oktanefecakar@gmail.com

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



# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
