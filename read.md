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

# TMDB API Bağlantısı
Bu projede, TMDB (The Movie Database) API'si kullanılarak popüler film ve dizi bilgileri çekilmektedir. Laravel'in HTTP istemcisini kullanarak API'den JSON formatında veri alınmakta ve bu veriler Eloquent ORM aracılığıyla veritabanımıza işlenmektedir.

# Çalışma Prensibi
FilmController ve SeriesController sınıflarında, Http::get() metodunu kullanarak TMDB API üzerinden sorgulamalar gerçekleştiriyoruz. Bu sorgulamalar sayesinde, API'den gelen verilere ulaşıyoruz.
Gelen yanıtlar JSON formatında işlenir ve içerikler results anahtarına aktarılır.
Bu veriler, bir dizi içinde döngüye sokularak tek tek Film ve Series modellerimize işlenir ve böylece veritabanında saklanır.
Bu API bağlantısı sayesinde,  projede film ve dizi bilgilerini zengin bir içerik kütüphanesi olarak sunuyor ve kullanıcı deneyimini artırıyoruz.
