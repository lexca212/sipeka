# Setup Fitur CRUD Client, Pengacara, dan Perkara

## 1) Install dependency
```bash
composer install
```

## 2) Siapkan environment
```bash
cp .env.example .env
php artisan key:generate
```

Lalu sesuaikan database di `.env`:
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

## 3) Jalankan migrasi + seeder
```bash
php artisan migrate --seed
```

## 4) Aktifkan storage link untuk upload file perkara
```bash
php artisan storage:link
```

## Seeder yang dipakai
- `DataPengacaraSeeder`
- `JenisPerkaraSeeder`

## Seed ulang tanpa reset tabel
```bash
php artisan db:seed --class=DataPengacaraSeeder
php artisan db:seed --class=JenisPerkaraSeeder
```

## Reset total lalu seed ulang
```bash
php artisan migrate:fresh --seed
```
