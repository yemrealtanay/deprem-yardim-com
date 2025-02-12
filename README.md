## Projeye destek olmak için

[For English](README_ENG.md)

İletişim kanalları:

-   [Discord Kanalı](https://discord.com/invite/itdepremyardim)

---

Katkıda bulunmak için:

-   [Contributing](CONTRIBUTING.md)

---

## Kullanılan Teknoloji ve Sistemler

-   [Laravel 9](https://laravel.com/)
-   [MySQL 10](https://www.mysql.com/)
-   [aws Amazon](https://aws.amazon.com/)
-   [Docker](https://www.docker.com/)

---

## Başlangıç

#### 1. Gerekli ortamı kurun: Laravel, PHP ve veritabanı (örneğin MySQL) gibi gerekli araçları kurmanız gerekir.

#### 2. Projeyi klonlayın: GitHub'daki Laravel projesi depolarını klonlamanız gerekir.

```bash
git clone https://github.com/acikkaynak/deprem-yardim-com.git
```

#### 3. Bağımlılıkları kurun: Projenin kurulumu için gerekli olan bağımlılıkları yüklemek için aşağıdaki komutu kullanın:

```bash
composer install
```

#### 4. Konfigürasyon ayarlarını yapın: Laravel projesi için gerekli olan konfigürasyon ayarlarını .env dosyası üzerinden yapabilirsiniz. Veritabanı, e-posta ve API anahtarları gibi önemli bilgileri burada tanımlayın.

#### 5. Anahtar oluşturun: Laravel projesi için güvenlik anahtarını oluşturmak için aşağıdaki komutu kullanın:

```bash
php artisan key:generate
```

#### 6. Veritabanını yapılandırın: Laravel projesi için veritabanı yapılandırmasını yapmak için aşağıdaki komutu kullanın:

```bash
php artisan migrate
```

#### 7. Sunucuyu başlatın: Laravel projesini çalıştırmak için aşağıdaki komutu kullanın:

```bash
php artisan serve
```

[http://127.0.0.1:8000](http://127.0.0.1:8000) adresini tarayıcınızda açıp sonucu görebilirsiniz..

# Docker ile çalıştırmak için

`.env` dosyasını düzenleyin:

```bash
DB_HOST=mysql
DB_CONNECTION=mysql
DB_USERNAME=sail
DB_PASSWORD=password

REDIS_HOST=redis
```

Docker ile çalıştırmak için aşağıdaki komutu kullanın:

```bash
./vendor/bin/sail up -d
```

Database oluşturmak ve örnek verileri eklemek için aşağıdaki komutu kullanın:

```bash
./vendor/bin/sail artisan migrate --seed
```

[http://localhost](http://localhost) adresini tarayıcınızda açıp sonucu görebilirsiniz..

---

### API Kullanımı:

Data giren takımların ihtiyacı olan key'ler, team lead'lere tarafımızca gönderilir.
