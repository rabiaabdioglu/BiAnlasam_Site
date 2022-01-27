-- =============================================
-- Author:		Kaan HAS
-- Create date: 29.01.2018
-- Description:	MySQL için Türkiye il, ilçe ve mahalle veritabanı şemasıdır.
-- =============================================

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Oca 2018, 10:37:28
-- Sunucu sürümü: 5.7.20
-- PHP Sürümü: 5.6.31

/**********************ALANLAR***********************************************/

CREATE TABLE alanlar (
  alan_id  INT IDENTITY(1,1) PRIMARY KEY,
  alan_adi varchar(100) NOT NULL
  )
  
INSERT INTO alanlar (alan_id,alan_adi) VALUES
(1, 'Beslenme'),
(2, 'Bilgisayar'),
(3, 'Biyoloji'),
(4, 'Ekonomi-İkstisat'),
(5, 'Elektrik'),
(6, 'Finans ve Bankacılık'),
(7, 'Fizik'),
(8, 'Hukuk'),
(9, 'İnşaat'),
(10, 'İstatistik'),
(11, 'İşletme'),
(12, 'Kimya'),
(13, 'Makine'),
(14, 'Matematik'),
(15, 'Mimarlık'),
(16, 'Psikoloji'),
(17, 'Sanat'),
(18, 'Tarih'),
(19, 'Yabancı Dil'),
(20,'Yazılım')

/********************************BOLUMLER*************************************/


CREATE TABLE dersler (
  ders_id  INT IDENTITY(1,1) PRIMARY KEY,
  alan_id INT NOT NULL,
  ders_adi varchar(100)
  )
  
   
INSERT INTO dersler(alan_id,ders_adi) VALUES

(1,'Besin Kimyası Ve Teknolojisi'),(1,'Besin Mikrobiyolojisi'),(1,'Beslenme Biyokimyası'),(1,'Anne ve Çocuk Beslenmesi'),(1,'Tıbbi Beslenme'),(1,'Türk Ve Yabancı Mutfağı'),
(2,'Linear Cebir'),(2,'Ağ'),(2,'Diferansiyel Denklemler'),(2,'Veri Yapıları'),(2,'Elektronik'),(2,'Mikroİşlemciler'),(2,'Algoritma'),(2,'Yapay Zeka'),(2,'Grafik Tasarım'),(2,'Robotik'),
(3,'Ekoloji'),(3,'Organik Kimya'),(3,'Biyoistatistik'),(3,'Biyokimya'),(3,'Hayvan Anatomisi ve Marfolojisi'),(3,'Hücre Biyolojisi'),(3,'Bitki Anatomisi ve Morfolojisi'),(3,'Entomoloji'),(3,'Klinik Mikrobiyoloji'),(3,'Hayvan ve Bitki Embriyolojisi'),(3,'Genetik'),(3,'Parazitoloji'),(3,'İnsan Genetiği'),(3,'Enzimoloji'),(3,'İlaç Keşfi ve Geliştirme'),(3,'Toksikoloji'),
(4,'Mikro Ve Makro Ekonomi'),(4,'Kamu maliyesi'),(4,'Parasal iktisat'),(4,'Ekonometri'),(4,'Kalkınma Ve Büyüme'),(4,'Döviz Kuru'),(4,'Borsa '),(4,'Yabancı Piyasa '),(4,'Hisse'),(4,'İktisat'),
(5,'Programlama'),(5,'Elektronik'),(5,'Mikrodenetleyici'),(5,'Devreler'),(5,'Mikro işlemciler'),(5,'Mobil haberleşme'),(5,'Bulanık kontrol'),(5,'Enerji Dağıtımı ve İletimi'),(5,'Elektrik Tesisleri koruma ve topraklama'),(5,'Mühendislik Ekonomisi'),(5,'Yüksek gerilim'),(5,'Fiber optik'),(5,'Uydu iletişim'),(5,'Görüntü işleme'),(5,'Endüstriyel elektronik'),(5,'Robotik '),(5,'Yapay zeka giriş'),
(6,'Fiziksel varlık'),(6,'Kripto Varlık'),(6,'Ekonomi'),(6,'Bankacılık ve finans'),(6,'İşletme'),(6,'Finans Matematiği'),(6,'İstatistik'),(6,'Finansal veri analizi'),(6,'Mikro ve makro ekonomi'),(6,'Uluslararası bankacılık'),(6,'Kurumsal finansman'),(6,'Portföy yönetimi'),(6,'Finansal modelleme'),(6,'Risk yönetimi ve sigortacılık'),(6,'Kredi Ve Yatırımlar'),
(7,'Mekanik'),(7,'Matematik'),(7,'Elektrik ve Manyetizma'),(7,'Modern Ve İstatiksel Fizik'),(7,'Katı Hal Elektroniği SSD'),(7,'Mikro İşlemciler'),(7,'Madde'),(7,'X ışınları'),(7,'X-Ray '),(7,'Atomik Ve moleküler Fizik'),(7,'Nükleer Fizik'),
(8,'Medeni Hukuk'),(8,'Roma Hukuku'),(8,'Hukuk Felsefesi'),(8,'Anayasa Hukuku'),(8,'İktisat'),(8,'Ceza Hukuku'),(8,'Borçlar Hukuku'),(8,'Mailye'),(8,'Devletler Hukuku'),(8,'Kamu Hukuku'),(8,'Deniz Hukuku'),(8,'Kriminoloji'),(8,'İdare Hukuku'),(8,'Ticaret Hukuku'),(8,'Eşya Hukuku'),(8,'İcra Ve İflas Hukuku'),(8,'Miras Hukuku'),(8,'Sosyal Güvenlik Hukuku'),(8,'Ceza Muhakemesi Hukuku'),(8,'Deniz Ticaret Ve Sigorta Hukuku'),(8,'Vergi Hukuku'),(8,'Adli Tıp'),(8,'Sermaye Piyasası'),(8,'Rekabet Hukuku'),(8,'Banka Hukuku'),
(9,'Yapı Statiği'),(9,'Zemin Mekaniği'),(9,'Zemin Dinamiği'),(9,'Ulaştırma Mühendisliği'),(9,'Betonarme'),(9,'Çelik Yapılar'),(9,'Hidrolik'),(9,'Akışkanlar Mekaniği'),(9,'Dizayn'),(9,'İş sağlığı ve güvenliği'),(9,'Ahşap Yapılar'),(9,'Sulama '),(9,'Su Kaynakları'),(9,'Su Getirme Ve Kanalizasyon'),(9,'Yeraltı Suyu'),
(10,'Olasılık'),(10,'Matematik'),(10,'Lineer Cebir'),(10,'İstatistik'),(10,'Analiz'),(10,'Finans Matematiği'),(10,'Regresyon Analizi'),(10,'Veri Tabanı'),(10,'Veri Madenciliği'),(10,'Stokastik Süreçler'),(10,'Kombinatorik'),(10,'Risk Analizi'),
(11,'Temel Hukuk'),(11,'İktisat'),(11,'İşletme'),(11,'Finansal Muhasebe'),(11,'Borçlar Hukuku'),(11,'Matematik'),(11,'Mikro İktisat'),(11,'İşletme Yönetimi'),(11,'Ticaret Hukuku'),(11,'Örgütsel Tasarım'),(11,'Maliyet Muhasebesi'),(11,'Finansal Yönetim'),(11,'İnsan Kaynakları Yönetimi'),(11,'Üretim Yönetimi'),(11,'Finansal Tablo Analizi'),
(12,'Kuantum'),(12,'Genel Kimya'),(12,'Anorganik Kimya'),(12,'Analitik Kimya'),(12,'Fizikokimya'),(12,'Biyokimya'),(12,'Kimyasal kinetik'),(12,'Gıda kimyası'),(12,'İstatiksel Termodinamik'),(12,'Organik  Kimya'),(12,'İnorganik Kimya'),(12,'Kuantum Kimyası'),(12,'Kuantum Kimyası Uygulamalar'),
(13,'Teknik Resim'),(13,'Programlama'),(13,'Diferansiyel Denklemler'),(13,'İstatistik'),(13,'Statik'),(13,'Termodinamik'),(13,'Malzeme Bilimi'),(13,'Lineer Cebir'),(13,'Mukavemet'),(13,'Akışkanlar Mekaniği'),(13,'Isı Transferi'),(13,'Kontrol Sistemleri'),(13,'İçten Yanmalı Motorlar'),(13,'Soğutma Sistemleri'),
(14,'Matematik'),(14,'Analiz '),(14,'Analitik geometri '),(14,'Lineer cebir '),(14,'Fizik'),(14,'Diferansiyel denklemler'),(14,'Diferansiyel geometri'),(14,'Matris teorisi'),(14,'Nümerik analiz'),(14,'Türevli denklemler'),(14,'Bilgisayar'),(14,'Programlama'),(14,'Olasılık'),(14,'Matematik'),
(15,'Çelik Yapılar'),(15,'Yapı Malzemesi'),(15,'Betonarme Yapılar'),(15,'Eski Çay Mimarlığı'),(15,'Çağdaş Mimarlık'),(15,'Seramik'),(15,'İç Mekan Dizaynı'),(15,'Dış Mekan Dizaynı'),
(16,'Felsefe'),(16,'İstatistik'),(16,'Sosyoloji'),(16,'Kişilik'),(16,'Gelişim'),(16,'Öğrenme'),(16,'Sosyal'),(16,'Psikopatoloji'),(16,'Deneysel psikoloji'),(16,'Fizyolojik psikoloji'),(16,'Klinik psikoloji'),(16,'Sağlık Psikolojisi'),(16,'Yakın İlişkiler Psikolojisi'),(16,'Sosyal Duyarlılık'),(16,'Üstün Zekalılar'),(16,'Yaşlılık Psikolojisi'),(16,'Kişilik Psikolojisi'),(16,'Kaygı-beden İlişkisi'),(16,'Spor'),(16,'Çocuk'),(16,'İnsan Hakları'),(16,'Madde Bağımlılığı'),
(17,'Gitar'),(17,'Şan'),(17,'Bateri'),(17,'Keman'),(17,'Piyano'),(17,'Resim'),(17,'Fotoğrafçılık'),(17,'Tiyatro'),
(18,'Tarih'),(18,'Atatürk İlkeleri ve İnkılap Tarihi'),(18,'Osmanlı'),(18,'Genel Türk Tarihi'),(18,'Savaşlar'),(18,'İlk Türk Beylikleri'),(18,'Çağlar'),
(19,'İngilizce'),(19,'Fransızca'),(19,'Rusça'),(19,'Çince'),(19,'Almanca'),(19,'Arapça'),
(20,'Yazılım') , (20,'Algoritma') , (20,'Javascript') , (20,'Php') , (20,'Python') , (20,'Java') , (20,'Sql') , (20,'Swift') , (20,'Kotlin') , (20,'C#') , (20,'C++'), (20,'C') , (20,'Lineer cebir') , (20,'Veri Tabanı') , (20,'Veri Analizi') , (20,'Yapay Zeka')

