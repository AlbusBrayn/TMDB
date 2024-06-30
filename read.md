# Laravel TMDB API Connector

## Proje Açıklaması
Bu proje, TMDB API'den film ve dizi verilerini çekerek bir Laravel uygulamasına entegre eder. Projede Laravel 10 kullanılmıştır ve Eloquent ORM ile veritabanı işlemleri gerçekleştirilmektedir.

## Kurulum

### Önkoşullar
- PHP 8.0 veya üzeri
- Composer
- Laravel 10
- Bir TMDB API anahtarı

### Kurulum Adımları
1. Projeyi klonlayın:
   2.Proje uyumluluğuna göre composer install veya composer update komutu çalıştırın
   3.env example dosyasını env olarak değiştirin
   4..env dosyasını yapılandırın ve TMDB_API_KEY değişkenini ekleyin
   5.php artisan key:generate
6. Veritabanını ve gerekli tabloları oluşturun

# Özellikler
- TMDB'den popüler filmleri ve dizileri çeker.
- Filmler ve diziler için ayrı ayrı tablolar kullanılır.
- API'den çekilen veriler veritabanında saklanır.
