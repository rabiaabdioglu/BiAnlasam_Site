
create table kullanici(
kullanici_id int IDENTITY(1,1) PRIMARY KEY,
sifre varchar(16) not null,
adi varchar(50) not null,
soyadi varchar(50) not null,
cinsiyet char(1) not null,
dogum_tarihi date not null,
email varchar(50) not null,
telefon_numarasi nvarchar(11),
aciklama varchar(500),
kayit_tarihi DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
okul_id int,
bolum_id int,
sehir_id int,
puan int,
size  tinyint DEFAULT 1
)
create table ilan(
ilan_id  int IDENTITY(1,1) PRIMARY KEY,
kullanici_id int not null,
ilan_tarihi DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
alan_id int NOT NULL,
ders_id int NOT NULL,
baslik varchar(30),
aciklama varchar(500),
ilan_durum tinyint DEFAULT 1
);
create table teklif(
teklif_id int IDENTITY(1,1) PRIMARY KEY,
ilan_id int not null,
teklif_veren_kullanici_id int,
fiyat varchar(3),
teklif_durum tinyint DEFAULT 1
)
create table bulusma(
bulusma_id int IDENTITY(1,1) PRIMARY KEY,
ders_alan_kullanici_id int,
ders_veren_kullanici_id int,
ders_alan_kullanici_puan int,
onaylanmis_teklif_id int,
ders_alan_kullanici_yorum varchar(200),
bulusma_tarih DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
)

