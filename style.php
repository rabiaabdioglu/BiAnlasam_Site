
/*TÜM SAYFALAR İÇİN ORTAK KISIMLAR -BANNER-FOOTER-UL-Lİ*/

  
body{
	width: 100%;
	min-height: 100%;
	text-align: center;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	margin: 0 auto;
		font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;

	
} 
.banner-bg{
	z-index: 1;
	top: 0;
	right: 0;
	left: 0;
	position:fixed;
	background-color:white;
	width:100%;
	height:60px;
	box-shadow: 0 5px 10px -6px gray;
		}
ul{	float: right;}li{float:left;list-style:none;position:relative;	}ul li a{display:block;text-decoration:none;float: right;}
/*Sayfanın iç kısmı*/
.container{
	font-size: 1rem;
	width: 100%;
	min-height: 100%;
	padding: auto;
	margin:0 auto;
	vertical-align: middle;
}

.banner{
	z-index: 2;
	top: 0;
	position:fixed;
	width:100%;
	height:60px;
	margin: 0;
	
}
.logo{
	float:left;	
	width: 150px;
	margin:9px 20px;
}
/*Kayit ol giriş yap butonu olarak değişebilir /isim değiş*/
.kayitolgirisyap {
	width:30%;
	padding:0;
	text-align: right;
	margin:15px 4% auto auto;
	
	
}
.kayitolgirisyap  span a{
	padding:1px;	border-style:none;
}
	.kayitolgirisyap  a{
		text-decoration: none;
		margin:0.4%;
		padding: 1% 5%;
		border: 2px #212551 solid; 
		color:#212551;
		font-style:italic;
		font:Verdana, Geneva, sans-serif;
		border-radius:20px;
	
			}
				
	.kayitolgirisyap  a:hover{
		 background-color:#212551;
		 color:white;
			}	
.kayitolgirisyap  span a:hover{
	color:#212551;
	background-color: white;
	text-decoration:underline;
}

.footer-bg{
	margin-top:200px;
	height:50px;
	background-color:#000000;
	width:100%;
	left:0;
	position:absolute;
	z-index:0;
	margin-bottom:0;
	
	
}
.footer{
	position:absolute;
	z-index:1;
	height:50px;
	width:100%;
	margin-top:200px;
	margin-bottom:0;
}
.footer img{
	margin:5px 10px;
	width:100px;
	float:left;
	
}.footer ul{float:right;
	margin-top:10px;}
.footer li a{
	margin-right:10px;
	color:whitesmoke;
	font-size:0.6rem;
	padding-top:10px;
	}
.footer li a:hover{
	text-decoration:underline;
}
/*TÜM SAYFALAR İÇİN ORTAK KISIMLAR -BANNER-FOOTER-UL-Lİ----------SON*/

/*ANASAYFA*/

	#header-bg{
	background-image: url("image/header.png");
	background-position:2% 2%;
	background-repeat: no-repeat;
	position: absolute;		
	width:100%;
	height:600px;
		z-index:-1;
	}
header{
	width:100%;
	height:600px;
}
header span{
	float:right;
	width:500px;
	line-height:2;
	font-family:Sitka Display;
	font-size:3em;
	margin-right:5%;
	margin-bottom:5rem; 
	margin-top:10%;
	
}
.dersal-ver{
	margin-left:20%;
	margin-right:4%;
}

.dersal-ver ul{
	display:flex;}
.dersal-ver ul li a, .dersal-ver .button {
	margin-right:20px;
	background-color:#8FCACD;
	color:#212551;
	font-size:20px;
	padding-top:10px;
	border-radius:20px;
	width:200px;
	height:40px;
}
.dersal-ver ul li a:hover{
	transition:0.5s;
	box-shadow:1px 1px 10px 3px #5D6B92;}

#orta_yazi{ font-size:2rem;
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif"; margin: 200px auto 100px auto; text-align: center;}
.arama input{
	font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
	font-size:20px;
	border:none;
	color:#B9B9B9;
	padding-left:5px;
	margin:5px;
	box-shadow:1px 1px 20px -2px #C4BFBF;
	width:300px;
	height:50px;
}
.arama button{
	border:none;
	background:#B1DCEC;
	border-radius:15px;
	margin:auto;	
	box-shadow:1px 1px 10px 0px #C4BFBF;
	
}
#bolumlerin-iconlari{padding:0px auto; margin:10% auto; width: 60%;}
#bolumlerin-iconlari img{width:50%;
}
#bolumlerin-iconlari ul{
	padding:0;
	width:100%;
	display:block;
	margin:3% auto;
}
#bolumlerin-iconlari ul li{	margin:2% 1%;	width: 12%;	}
	
#bolumlerin-iconlari ul li p {	margin-top:0;
	font-size:70%;
	}
	
#bolumlerin-iconlari ul li p:hover {
	text-decoration:underline;
	}

#calisan-ogrenciler img{
	width: 60%;
	margin:15% auto;
}
#pembe_kutu{margin-bottom: 20%;}
#pembe_kutu p{margin-top: 5%;	color: #F191A4; text-align: center; font-size:50px; text-shadow: 1px 1px 2px #F191A4;}
#pembe_kutu img{
	width:60%;
	border-radius:50px;
	box-shadow: 1px 1px 30px 1px #F8C1CC;
}
/*ANASAYFA----SON*/


/*KAYIT GİRİŞ SAYFALARI*/


.kayit-giris-headeri{
	background-image:url("image/kayitgiris_bg.png");
	background-repeat: no-repeat;
	padding:60px 0px;
	height:530px;
}
.kayit-giris-headeri span{
	font-family: Segoe Print;
	color:#09477C;
	margin-left:50px;
	float: left;
	font-size:4.5rem;
}
.kayit-giris{width:350px;
	display: flex;
	flex-direction: column;
	margin: 10% 5% auto auto;}
.kayit-giris img{width:290px;
	height: 40px;
	margin:10px 30px;}
.kayit-giris hr{margin-top:12px; width: 120px; height:0px;}
.kayit-giris input{width:300px; height: 30px; color: #9A9A9A; background-color: #F6F6F6;border-color:#9A9A9A; border-style: solid; border-width:0.5px;margin:10px; padding-left:10px;}
.kayit-giris input:focus{color:black; }
.kayit-giris button{ width: 310px; color:white; background: #E19F49; border: none; border-radius:20px; height: 40px; margin:10px;}
/*KAYIT GİRİŞ SAYFALARI SON*/

/*İLAN SAYFASİ*/

/* haftanın öğrencileri profil resimlerinin üzerine gelince verdiği dersler ve yıldız puan görülecek */
#haftanin-ogrencileri{
	vertical-align: middle;
	width:80%;
	height: 400px;
	background-color:white;
	margin-top:70px;
	padding:2%;}
#haftanin-ogrencileri span{
	font-size:2rem;
	margin-bottom:5px;
	font-family:"Segoe UI Emoji";}

#haftanin-ogrencileri-profilleri img{ width:30%;}

#haftanin-ogrencileri-profilleri ul{
	padding:0;
	width:100%;
	display:flex;
	flex-direction:row;
	margin:3% auto;
}
.ilan-title{width: 100%; background-color:#98C2CF; height: 40px;}
.ilan-title a{float:left; margin:10px 110px; font-size:18px; font-family:'Segoe UI';}
#ilanlar{
	width: 100%;
	height:auto;
	background-color:#F7F7F7;
padding-top:80px;}
#ilanlar .arama input{width:30%;margin: 0; }
#ilanlar .filtre{float: left; margin-top:30px; background-color: white; min-height: 100%; width: 20%;}
#ilanlar .filtre a{margin-top:-25px; font-size:20px; float: left;}
.filtre #filtre-uygula-temizle button{ width:98%; font-size:12px; margin-top:20px; height:30px;  background-color:#EFBAAF; border-width:1px; border-radius: 5px;}
.filtre nav{margin-top:5%; text-align: left;}

/*sıralama divi*/
#siralama-divi{width: 100%;}
#siralama-divi select {
background:url("icons/double_down.png") no-repeat 95% center;
background-size:5%;
background-color:#EFBAAF;color:#444444;
border-radius: 20px;border:none;
float:right;
width:20%;height:20px;
font-size:70%;
padding:2px 5px ;margin:auto 5px 20px auto;
outline:none;
 
-webkit-appearance:none;-moz-appearance:none;appearance:none;cursor:pointer;}

#siralama-divi select option{background-color: #F1D3CD; margin-top:12px;}

option:hover  select option{background:#F1D3CD;}

#siralama-divi:enabled select {/*döndürme dene !olmadı*/
	transform: rotateX(-180deg);}



	
/*ilanların geleceği büyük bölüm altalta gelsin diye flex column*/
#ilanlar-kapsayici{display: flex; flex-direction: column; float: right; background-color:#F7F7F7; height:auto; width:75% !important; }
/*tek bir ilanın kapsayıcısı yanyana gelsin*/
#ilanlar-kapsayici .ilan-icerik{ margin-bottom:1%;display: flex; flex-direction: row;  background-color:white; height:100px;
		border-color:#C7C7C7; border-width:1px; border-style: solid; width:100% !important;  float:right;}

/*div kapsayıcıları*/
.ilan-bilgileri{ width:85% !important; height: 100%;}
.ilan-icerik .konum{ font-size:8px;display: flex; height:25%; width:100%; flex-direction: row; float:right;  }
/*div içerikleri*/
.ilan{width:100%; margin-left:5px; height:50%; display: flex;  padding-top:30px !important; flex-direction:row;  text-align: left; }
.ilan-icerik .ilan  span{float:left;  font-size:18.5px;}

/*teklif ver butonları her sayfadaki  */
.benzer-ilan button, #ana-ilan-satir-2 .button x , #ana-ilan-satir-2 .button a{font-size:13px; line-height:2.5;}
#teklif #satir-1-sutun-3 button {margin-top:40px !important;}
.benzer-ilan button x,#ana-ilan-satir-2 .button x , #teklif #satir-1-sutun-3 button x , .ilan button  x{ display:none;}
.benzer-ilan button:hover x, #ana-ilan-satir-2 .button:hover x , #teklif #satir-1-sutun-3 button:hover x , .ilan button:hover x{display:block; }
.benzer-ilan button:hover a, #ana-ilan-satir-2 .button:hover a  ,#teklif #satir-1-sutun-3 button:hover a , .ilan button:hover a{display:none; }
.benzer-ilan button ,#ana-ilan-satir-2 .button , #teklif #satir-1-sutun-3 button , .ilan button{  text-align:center; margin:10px 10px auto 20px ; background:#E19F49 !important; color:white !important;  height:30px; width:120px; font-size:14px;  line-height:2; border-radius: 20px; border-style: solid; border-width: 1px;}

#ana-ilan-satir-2 p input {width:70px; float:left; font-size:12px;}
#ana-ilan-satir-2 p button{ font-size:15px;
height:50px !important; width:50%; margin-left:20%;

}
/*tüm sayfalardaki profil resimleri ayarlamaları  */
.benzer-ilan .profil-pp-arkaplan{width:55px; height:57px; margin:2% 5%;}
#p-ilan .profil-pp-arkaplan  {width:55px; height:57px; margin:2% 5%;}
#kb-satir-1  .profil-pp-arkaplan  {width:100px; height:100px; margin:2% 5%;}
#ana-ilan .profil-pp-arkaplan {width:50%; height:90%; margin:2% 5%;}
.ilan-icerik  .profil-pp-arkaplan{width:9%; height: 90%; margin-right:2%}
#teklif   .profil-pp-arkaplan{width:90px; height:90px; margin:5%}
.benzer-ilan .profil-pp , #p-ilan .profil-pp , #kb-satir-1  .profil-pp  , #teklif   .profil-pp ,#ana-ilan .profil-pp , .ilan-icerik .profil-pp{background-position: 50% 15%  !important; 
  background-repeat: no-repeat !important; /* Do not repeat the image */
  background-size : cover  !important;float:left;
   border-radius:500px;  width:100%; height:100%; margin:5% 8%; }
#ilanlar-kapsayici .konum img{float: left; width:15px; height:17px !important; margin-right:5px;}


/*İLAN SAYFASİ SON*/


/*SEÇİLEN İLANIN SAYFASI*/
#hemen-ilan-ver img{
	width:80%; height:300px; margin-top:100px;}

#hemen-ilan-ver a{float:right; margin:3% 10%;
}
#hemen-ilan-ver a .popup-container .button{
text-decoration:none;
font-size:1.5rem;
color:white;
background-color: #6EA8BB;
border-radius: 20px;
border: none;
height:30px;
width:200px;
}
#hemen-ilan-ver a .popup-container label:hover{
	transition:0.5s;
	box-shadow:1px 1px 10px 3px #ACD8CE;
}
#secilen-ilan{
	width: 100%;
}
#ana-ilan{
/*#FFF9F5;*/

	display:flex; flex-direction:column;	
	width:78%;
	height:200px;
	position: relative;
    margin: auto;
	background-color: white;
	border:5px solid #FFF9F5;
	margin-top:200px;
	padding:2px;}
#teklifler{
	
	position: relative;
    margin: auto;
	margin-bottom:10%;
	background-color: #FFF9F5;
	width: 79%;
	padding-top: 50px;
	height: auto;
	padding-bottom:100px;
	display:flex;
	flex-direction:column;
}
#teklif {font-size:0.7rem;}
#teklif{
	width: 70%;
	height:150px;
	background-color: white;
	border-bottom:1px solid #ABABAB;text-align: left;  display:flex; flex-direction: row;
}
#ilan inner{width:20% !important; padding:2%;}
#ana-ilan-satir-1{ display:flex; flex-direction: row;	width: 100%; height: 70%;}
#ana-ilan-satir-2{width:80%; height:30%; padding-left:12%; padding-top:2px;}
#ana-ilan-satir-1 #satir-1-sutun-1{width:25%; }
#ana-ilan-satir-1 #satir-1-sutun-2{width:20%; text-align: left; padding-left:20px;  padding-top:40px;}
#ana-ilan a{ font-size: 1rem;	}
#ana-ilan-satir-1 #satir-1-sutun-3{width:55%; text-align: left; padding-top:40px; padding-right:80px;}

#ana-ilan-satir-2 button, #teklif #satir-1-sutun-3 input,#p-ilan button
{ background:#E19F49; color:white; width:15%; height:50%; margin-right:6%; 
	 border-radius: 15px; border-style: solid; float: right; border-width: 1px;}

	 #teklif #satir-1-sutun-1{  width: 20%;}
	  #teklif #satir-1-sutun-2{width:60%;padding-top:40px; padding-left:5%; line-height:30px;}
	 #teklif #satir-1-sutun-3{ width:20%;padding-top:20px;}
	 
#buna-benzer-ilan{ margin-bottom:15%; margin-top:10px;  padding:4%;  display:flex; flex-direction: row; background-color:  #FFF9F5;; width:70%; height:200px;}
.benzer-ilan{ margin:1% 2%; width:200px; height: 90%; background-color:white; border:1px solid #CCCCCC; border-radius:20px;}
#ana-ilan i img {width:4%;}
#ana-ilan i  {font-size:9px;}

.benzer-ilan button, .benzer-ilan button x,.benzer-ilan a { font-size:14px !important; }
#benzer-ilanlar a{float: left; margin-left:20%; font-size:1.6rem; font-family:Verdana, Geneva, Tahoma, sans-serif;}
/*SEÇİLEN İLANIN SAYFASI SON*/

/*KULLANICI PROFİL SAYFASI*/
.inputFile {
padding: 3px;
background-color: #FFFFFF;
}

#profil{width:70%; min-height: 100%; background-color: white; margin-bottom: 20%;}

#kullanici-bilgileri{
		height: 17%;
		border-bottom:1px solid #ABABAB;
		background-color: white;
		padding:70px 2%;}
#kb-satir-1{ display:flex; flex-direction: row;	width: 100%; height: 70%;}

#kullanici-bilgileri #satir-1-sutun-1{width:20%; }
#kullanici-bilgileri #satir-1-sutun-2{width:70%; text-align: left;padding-top:40px; padding-left:3%;} 

#kullanici-bilgileri #satir-1-sutun-3{width:10%; text-align: right;padding-right: 5%; padding: top 5% ; }

#profil-alt{ display:flex; flex-direction:row;	}
#yan-bilgi{ 
	min-height:700px;
	line-height: 1.5;
	text-align: left;
	border-right:1px solid #ABABAB; width:25%; padding:5%;}

#profil-ilanlari{width:75%; 
	min-height:700px; padding-top:7%;  }
	#p-ilan button{font-size:12px; width:100px; height:20px;}
#p-ilan span{ font-size:13px; text-align:left;}
#p-ilan {background-color:#EFFEFC; height:auto; width: 90%; padding-top:1%;  border-bottom:4px solid white; font-size: 1rem; display:flex; flex-direction:row;}
#p-ilan #satir-1-sutun-2{width:80%; text-align:left; padding-top:3%;}
#p-ilan #satir-1-sutun-1{width:20%;}

#p-degerlendirme{ 
border-top:1px solid #ABABAB;	text-align: left;  width: 90%; height:auto; padding:5% 0 10% 5%; }
#p-yorumlar{display: flex; flex-direction:column; }
#p-yorumlar nav{ height:50px; padding-top:3%; background-color: #FCFAF6; width: 80%;}
#p-yorumlar img{width:10%; height:20px; float:right; margin:0 5%;}
.profil-pp-arkaplan img{display:block;
.}
.profilduzenleme input{font-size:15px !important; margin:1%;}
.profilduzenleme{padding:4% auto;}

#kullanici-bilgileri  .popup-container .popup .inner{max-height:500px;}
#kullanici-bilgileri .profilduzenleme button{width:100px; margin-right:10%; height:30px;}
/*KULLANICI PROFİL SAYFASI SON*/













/*KURUMSAL BİLGİLENDİRME SAYFALARI */
#kurumsal{ 
	text-align: left;
	display: flex;
	flex-direction: row;
	width: 80%;
	 padding: 0px; margin: 0px; 
	margin-top:150px !important;
}
.sol-menu{
	text-decoration: none;
	margin-right:8%;
	display: flex;
	flex-direction: column;
	width:30%;
	float: left;
	}
.sol-menu-icerik {
	width: 100%;
	float: left;
	display: flex;
	 flex-direction: column;}
.sol-menu-icerik ul{padding: 0px;}
	.sol-menu-icerik li{
   border: 1px solid #dedede ;
   width: 70%;
   font-size: 16px;
   padding: 20px 30px;
   background: #fcfcfc;
   border-bottom: 1px solid #e2e2e2;
}
.sol-menu-icerik a {
    color: #424242;
}
.sol-menu-icerik li.aktif{
    font-weight: 700;
	background: #f5f6f6;}
	.sol-menu-icerik a.aktif{color: #4183c4;}
	.sol-menu-icerik a:hover{color:#89aad8;}
		.sol-menu-footer img{
		width:40%;
		margin-right:8%;
	}
	.sol-menu-footer{font-size:12px;}
.sag-yazi{
    font-family: Arial,Helvetica,sans-serif;
    font-size:12px;
    font-weight: normal;
    line-height: 18px;
	width:70%;
	height:auto
	}
	.sag-yazi-icerik{
		padding:10% 5%;
		border-bottom: 1px solid #e4e4e4;
   		line-height: 1.4;
	height:100%;
}
.cont{
		max-height:500px;
		overflow-y: scroll;
		padding-right: 10px;
		font-weight: 100;
	
}
#topluluk{ line-height:2.5; 
	font-size: 14px;
	font-family: 'PT Sans','Open Sans',Helvetica,Arial,sans-serif;}
#topluluk ul li{list-style: disc;
	
}







	
/*KURUMSAL BİLGİLENDİRME SAYFALARI SON*/


/*MESAJ SAYFALARI*/
* {
    padding: 0;
    margin: 0;
    border: none;
    text-decoration: none;
    list-style: none;
}
*:focus {
    outline: 0;
}


.chat {
	margin-top:60px;
	min-height:590px;    display: flex;
}

.chat .sidebar {
    width: 20%;
    min-width:25%;
    background: #f5f5f5;
    display: flex;
    flex-direction: column;
}

.chat .sidebar .search {
    height: 5%;
    min-height:8%;
    border-bottom: 1px solid #ddd;
    position: relative;
    padding: 0px 3%;
    display: flex;
    align-items: center;
}

.chat .sidebar .search input {
    width: 100%;
    height:70%;
    background: #fff;
    border-radius: 30px;
    font-size: 14px;
    padding: 0 6% 0 4%;
}

.chat .sidebar .search i {
    position: absolute;
    top: 0;
    right: 0;
    width:12%;
    height:100%;
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #999;
}

.chat .sidebar .contacts {
    overflow: auto;
}

.chat .sidebar .contacts ul li {
	width: 100%;
}
.chat .sidebar .contacts ul li a {
	display: flex;
	width: 90%;
    height:60px;/**/
    align-items: center;
    padding: 0 1%;
}

.chat .sidebar .contacts ul li.active 
{background: #fff;
	border-left:5px solid #FCA135;
	width: 98%;
}

.chat .sidebar .contacts ul li:hover {
	background: #fff;
}

.chat .sidebar .contacts ul li a img {
    width:15%;
    height:70%;
    border-radius: 40px;
    margin-right: 10px;
}

.chat .sidebar .contacts ul li a .contact .name {
    font-size: 15px;
    color: #333;
    font-weight: 500;
    margin-bottom: 3px;
}

.chat .sidebar .contacts ul li a .contact .message {
    font-size: 13px;
    color: #999;
}

.chat .sidebar .contacts ul li a .notification {
	width:6%;
	height:30%;
	
    border-radius: 50%;
    background: red;
    font-size: 11px;
    color: #fff;
    text-align: center;
    line-height: 17px;
	float:right;
	margin-right:2%;
	
}

.chat .sidebar .contacts ul li a .notification:empty {
    display: none;
}

.chat .content {
    flex: 1;
    border-left: 1px solid #ddd;
    display: flex;
    flex-direction: column;
}

.chat .content .message-header {
    height: 50px;
	min-height: 50px;
	background-color: #F1F9F9;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 5px 0 15px;
}

.chat .content .message-header .user-info {
    display: flex;
    align-items: center;
}

.chat .content .message-header .user-info img {
    width:7%;
    height:5%;
    border-radius: 50%;
    margin-right: 10px;
}

.chat .content .message-header .user-info .user .name {
    font-size: 15px;
    font-weight: 500;
    color: #222;
}

.chat .content .message-header .user-info .user .time {
    font-size: 13px;
    color: #999;
}

.chat .content .message-header .actions ul {
    display: flex;
}
.chat .content .message-header .actions ul li a {
    font-size: 19px;
    color: #999;
    width: 30px;
    display: block;
    text-align: center;
}
.chat .content .message-header .actions ul li a:hover {
    color: #222;
}

.chat .content .message-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    padding: 15px;
    overflow: auto;
}

.chat .content .message-content::before {
    content: '';
    margin-bottom: auto;
}

.chat .content .message-content .message {
    align-self: flex-start;
    margin-bottom: 20px;
}

.chat .content .message-content .message .bubble {
    padding: 6px 12px;
    background: #f7f7f7;
    border-radius: 20px;
    font-size: 15px;
    margin-bottom: 5px;
}

.chat .content .message-content .message .time {
    font-size: 12px;
	color: #999;
	text-align: left;
}

.chat .content .message-content .message.me {
    align-self: flex-end;
}

.chat .content .message-content .message.me .bubble {
    background: #2196f3;
    color: #fff;
}

.chat .content .message-content .message.me .time {
    text-align: right;
}

.chat .content .message-form {
    border-top: 1px solid #ddd;
    background: #eee;
    padding: 10px;
}
.chat .content .message-form ul {
	display: flex;
	width: 90%;
}
.chat .content .message-form ul li {
    margin: 0 5px;
}
.chat .content .message-form ul li.input {
    flex: 1;
}
.chat .content .message-form ul li.input input {
    width: 90%;
    box-sizing: border-box;
    height:90%;
    border: 1px solid #ddd;
    border-radius: 36px;
    font-size: 14px;
    padding: 0 15px;
}
.chat .content .message-form ul li a {
    width: 36px;
	height: 36px;
	margin-right:30%;
    display: block;
    border-radius: 50%;
    background: #333;
    color: #fff;
    text-align: center;
    line-height: 36px;
}

.chat .content .message-form ul li.image-gonder a {
	background:#4183c4;
	
	margin-right:60%;
}
.chat .content .message-form ul li.image-gorsel a {
    background: #4caf50;
}

/*MESAJ SAYFALARI SON*/


/*İLAN OLUŞTUR POPUP*/
.form-control {
	color: #4e4e4e;
font-size:12px;
}
.popup-container {
	display: inline-flex;
  }
  .popup-container .button {
	
	cursor: pointer;
  }
  .popup-container .popup {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.5);
	z-index: 2;
	opacity: 0;
	visibility: hidden;
	transition: 400ms all;
  }
  .popup-container .popup > label {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	cursor: pointer;
  }
  .popup-container .popup .inner {
	position: absolute;
	top: 100%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: #fff;
	min-width:20%;
	box-sizing: border-box;
	transition: 400ms all;
	z-index: 2;
	overflow: auto;
  }
  .popup-container .popup .inner .title {
	height: 40px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 0 2%;
	position: sticky;
	top: 0;
	background: #fff;
  }
  .popup-container .popup .inner .title h6 {
	font-size: 15px;
	font-weight: 500;
  }
  .popup-container .popup .inner .title label {
	font-size: 14px;
	color: #4e4e4e;
	cursor: pointer;
  }
  .popup-container .popup .inner .title label:hover {
	color: #222;
  }
  
  .popup-container .popup .inner .content{height: auto;}
  .popup-container .popup .inner .content ul{
 
	display: flex !important; 
	float:none;flex-direction: row !important; }
  .popup-container .popup .inner .content ul li {
	  margin:5% 4% !important;
	list-style: none;
  }
  .popup-container .popup .inner .content ul li:last-child {
	margin-bottom: 0;
  }
  .popup-container .popup .inner .content ul li input, .form-control  {
	width: 100%;
	box-sizing: border-box;
	border: none;
	border-bottom: 1px solid #ddd !important;
	padding-bottom: 10px;
	font-size: 12px;
  }
  .popup-container .popup .inner .content  input:focus ,.form-control {
	outline: 0;/**/
	border-color: #86AED2;
  }

  
  .popup-container .popup .inner .content p{
	margin:3% 5%;
	display: flex; flex-direction: row;
  }
  .popup-container .popup .inner .content p input{

	box-sizing: border-box;
	border: none;
	border-bottom: 1px solid #ddd;
	padding-bottom: 10px;
	font-size: 12px;
	  width:10%;}
	  
  .popup-container .popup .inner .content section{
	margin:3% 5%;
  }
  .popup-container .popup .inner .content section textarea{
	resize: none;
	box-sizing: border-box;
	border: none;
	border: 1px solid #ddd;
	padding-bottom: 10px;
	font-size: 12px;
	width:100%; height:100px;}
	  
  .popup-container .popup .inner .content ul li button {
	width:150%;
	height:120%;
	border-radius: 3px;
	border: none;
	background: #E19F49;
	color: #fff;
	font-size: 13px;
	cursor: pointer;
  }
  .popup-container > input {
	position: absolute;
	left: -9999px;
	opacity: 0;
  }
  .popup-container > input:checked + .popup {
	opacity: 1;
	visibility: visible;
  }
  .popup-container > input:checked + .popup .inner {
	top: 50%;
  }
  .inner p{font-size:11px; color:gray; line-height:2;}
  .inner #okul_response2, .inner #okul_response, .inner #response, .inner #response2{width:95%;  z-index:10;  position:absolute; text-align:left;}
  .inner #okul_response2 ul , .inner #okul_response ul, .inner #response ul,  .inner #response2 ul {
                float: left;
                list-style: none;
                text-decoration:none;
                padding: 0px;
                background:white;
                border: 0.5px solid gray;
                margin: 0px;
                width:100%;
				
                display:flex !important;
				flex-direction:column !important;            }

				.inner #okul_response2 li , .inner #okul_response li,  .inner #response  li, .inner #response2  li  {
        margin:0px !important;
		font-size:12px !important;
      	width:90%;
      	padding:2% 5%;
        color: #4e4e4e;
            }
			.inner #okul_response2 li:hover , .inner #okul_response li:hover,	.inner #response  li:hover , .inner #response2  li:hover  {
 			background:gray;
 			color:white;
 		}
/*İLAN OLUŞTURMA LABELI SON*/

/*Responsive için kodlar*/

 /*telefonlar için*/
 


@media only screen and (max-width:500px) {
	.logo{width:130px; margin-top:15px;}
	header span { font-size:20px !important; margin-bottom:200px !important;}
	/* ders al ver ve arama butonu küçülünce alt alta olsun*/
	.dersal-ver{width:20%;margin-left:70%; }
	.dersal-ver ul li { margin: 5px; width:100%; }
	.dersal-ver ul{display:flex; flex-direction:column; }
	/*arama yerini flex ile alt alta yapıyoruz. flex column içindekiler satır olarak düzenler*/
	.arama {display:flex; flex-direction:column; padding: 0;margin-left:20% !important; }
	.arama input{width: 100%!important; font-size:1rem;}
	.arama button{width: 100% !important; margin-left:3px;}
	#filtre-ilan .filtre nav{margin-right:5%;}
	#filtre-ilan .filtre{display:flex;flex-wrap:wrap;}
	#orta_yazi{font-size:1.5rem;}
	
	
	.kayit-giris-headeri span{display: none;}
	.kayit-giris-headeri{background-image: none; height:500px !important; }
	.kayit-giris { margin:10% 2% !important; padding: 0 !important;}
	.kayit-giris-headeri img,.kayit-giris-headeri a,.kayit-giris-headeri input{width:80% !important;}
	

	/*kurumsal*/
	 .sag-yazi , .sol-menu-icerik, #topluluk, .sag-yazi-icerik i{
		font-size:11.5px !important; line-height: 1.5;
	}
	 .sol-menu-icerik b, .sol-menu-footer {	font-size:10px !important; }
	.sol-menu{ width:22%; margin-right: 5%;}
	.sol-menu-icerik li{padding:10% 20%; font-size:8px !important;}
	.sag-yazi{width:70%;}
	.sol-menu-footer img{width: 80%;}


	/* yazıları sağa, indirme iconlarını sola alıp yüksekliği büyütüyoruz*/
	.footer {font-size:0.9rem !important;height:60px;}
	.footer-bg{height: 60px;}
	.footer ul{float: left;}
	.footer img{float:right; }

	/*ilann */
	.ilan-bilgileri{width:90%; margin-top:5%;}
	.ilan {padding-left:0 !important;}
	.ilan span{width:200px !important;}
	.ilan-icerik .profil-pp{ width:60px !important; height:60px; }
	.ilan .popup-container button{ width:70px; font-size:11px;  height:25px; line-height:2;}
	.ilan button{width:60px !important;}
	/*secilen ilan*/
	#ana-ilan .profil-pp{height:80px !important; width:80px !important;}
	#teklif   .profil-pp-arkaplan,#teklif   .profil-pp{width:100%;}
	#ana-ilan .profil-pp-arkaplan {height:75px !important;}
	#ana-ilan a{font-size:1.1rem !important;}

}

/* hamburger menu için */
.banner b{
	left: 0px;
	margin-top:5px;
	display:none;}


.banner label,.banner input{display:none;}/* hamburger menunun işareti ve checkboxı gizliyoruz*/
@media only screen and (max-width:750px) {/*tabletler vb için */
	
	/*hamburger menu için gerekli kodlar*/
	.kayitolgirisyap a{float:left; font-size:0.8rem; display: none;width:100%;background-color:beige;padding:8px 5px;border-style:none; border-radius: 5px;}
	.banner label{display:block;right:30px;top:20px;position:inherit;}
	.banner #hamburger:checked + .kayitolgirisyap a{display:block;}/*checkbox işaretliyken menuyu görünür yapıyoruz*/
	.banner #hamburger:checked + .banner label {display:none;}/*işaret false ise tekrar görünmez yapıyoruz*/
	.kayitolgirisyap{width:70%;margin:55px 5px auto auto;  padding:0;}
	.kayitolgirisyap a:hover{ text-decoration:underline; background-color: white;color:#212551; }
	/*diğer uyumluluk  için gereken kodlar*/
	header span{font-size:2rem; margin-top:120px !important; width:80% !important;}
	#bolumlerin-iconlari {width: 80%;}
	#bolumlerin-iconlari ul li p{ font-size:40%;}
	#calisan-ogrenciler img{width:80%;}
	#pembe_kutu p{ font-size:100% !important;}
/*küçük ekran için diğer değişiklikler*/
	.footer img{width:14%; margin:1% 0px;}
	.footer ul li a { font-size: 50%;}
	.footer  ul{width:70%; padding: 0;}
	/*ilan sayfası*/
	.arama input{width:40%;}
	#haftanin-ogrencileri{height:210px;}
	#haftanin-ogrencileri p, .filtre a{font-size: 12px !important;}
	#haftanin-ogrencileri span{font-size:15px;}
	.ilan-title a{font-size:13px; margin-left: 10%;}
	.ilan-title{height:30px;}
	#ilanlar{padding-top:10%; height: auto;}
	#ilanlar .arama input , #ilanlar .arama button{ height:30px !important;}
	#filtre-ilan{margin-top: 50px;}
	/*filtreler*/
	#filtre-ilan{ display: flex; flex-direction: column;}
	.filtre{width: 100% !important; height:auto !important; margin:10% auto;}
	.filtre nav,  .filtre select, .filtre nav input{font-size:8px;}
	.filtre-fiyat , .filtre-konum, .filtre-alan , .filtre-ders{padding: 20px;}
	.filtre nav input{width:40px !important; height: 15px !important;}
	.filtre nav button { 	margin-top: 5px !important;	width:80px !important; height:10px !important; font-size: 7px;}
	
	#ilanlar-kapsayici{width:100% !important;}
	#siralama-divi{ float: left;}
	#siralama-divi select {width:30% !important; float: left; }
	.ilan-icerik{height:15% !important;}
.ilan-icerik .profil-pp{
  background-size : cover  !important;float:left;
   border-radius:500px;   height:75%; margin:20% 10%; }

	.arama input,.arama button{width:60% !important; margin-top:2% !important;}
	.konum img{display:none;}
	.konum {visibility: hidden;}
	.ilan-bilgileri{margin-left:15%;}
	.ilan nav{margin-top:2%; width:100%;}
	.ilan .inner{padding:20px; width:60% !important;}
	.ilan .content button{margin:10px !important; width:40%; height:30px; font-size: 10px; float: right;}
	.ilan{padding-top:1% !important; padding-left:10%;  width:100%;
		display: flex;  padding-top:5px !important; flex-direction:column; }
		.ilan span{font-size:10px !important; margin-right:20px;  }

/*secilenilan*/
 #hemen-ilan-ver img{ height:30%;}
 
 #hemen-ilan-ver a .popup-container .button{
	  height:10%; font-size:13px; height:10px; width:150px; line-height:0;}
  #ana-ilan{ width: 90%;
	  padding-left:4% !important;
	  height:450px;
	  margin-top: 20%;
	  
  }
  #ana-ilan #satir-1-sutun-1	img,  #teklifler #satir-1-sutun-1	img{width:60% !important;  margin-top:10%;}
  #ana-ilan #satir-1-sutun-1{float:left;}
  #ana-ilan #satir-1-sutun-2{float: left; padding-top:10%; width:40% !important;}
  #ana-ilan #satir-1-sutun-3{margin-top:30%; width:80% !important;}
#ana-ilan-satir-1{display:block;}
#ana-ilan-satir-2 , #ana-ilan-satir-2  a {padding-left:2% !important; font-size: 12px !important;}
#ana-ilan-satir-2 i{ float: left; width:50%; text-align: left;}
#ana-ilan-satir-2 input{ width: 20%; height: 20% ;font-size: 10px;}
#teklifler , #teklifler a{font-size: 12x !important;}
#teklifler #satir-1-sutun-2{padding-top:6%; width: 80%;}
#teklifler #satir-1-sutun-2 i{ font-size: 8px !important;}
#teklif{height:auto !important;}
#teklifler #satir-1-sutun-3 input{ font-size:7px !important; width:90% !important; height:20% !important;}
#benzer-ilan a{ font-size:16px !important; margin-bottom:10%;}
#buna-benzer-ilan{
	padding: 0;
	height: auto;
	width: 100%;
    flex-direction: column; }
.benzer-ilan{
	margin-left:20%; width:60%  !important; height:35%; text-align: left; font-size:12px;}
.benzer-ilan img{width:20% !important; float: left; margin:5% !important;}
.benzer-ilan input{width: 30% !important; float: right; margin:5% !important; font-size: 10px;}
/*profil*/
#profil{ width: 80%;
padding: 2% 8%;}
#kullanici-bilgileri{padding-bottom: 10%;}
#kb-satir-1 #satir-1-sutun-1 img{ width:80% !important;}
#kb-satir-1 #satir-1-sutun-2 {padding-left:8%;padding-top:8%;}
#kb-satir-1 #satir-1-sutun-2 a {font-size:14px;}
#kb-satir-1 #satir-1-sutun-2 i{font-size:8px !important;}
#kb-satir-1 #satir-1-sutun-2 i img{width:15% !important;}
#kb-satir-1 #satir-1-sutun-2 a img{width:6% !important;}
#kb-satir-1 #satir-1-sutun-3 i { margin:40% !important; font-size: 10px !important; width:100px !important;}
#kb-satir-1 #satir-1-sutun-3  i img{width:8% !important;}

#profil-alt{height: auto; font-size: 10px !important; flex-direction: column;}
#yan-bilgi{border-right: none; border-bottom: 1px solid #ABABAB; width:90%; text-align: left; line-height:1.3; padding:10%;}
#profil-ilanlari{width: 100%; padding-bottom: 20%;}
#p-ilan{font-size: 10px;}

#p-ilan #satir-1-sutun-2 span{ font-size: 12px; text-align: left; }
#p-ilan #satir-1-sutun-2 input{margin-left:60% !important; width:30% !important; height: 20px;  font-size: 8px;}
#p-ilan #satir-1-sutun-2{ display:flex; flex-direction:column; }
#p-ilan #satir-1-sutun-1 img{width: 70% !important; margin:10% !important;}
#p-degerlendirme span{font-size: 18px !important;}
#p-degerlendirme a{font-size: 10px;}

#p-yorumlar img{width:15% !important; margin-left:5px !important;}
#p-yorumlar a{float: right;}
#p-yorumlar{font-size: 12px;}
#p-yorumlar nav{ width:80%;}
 #teklif button{ align-self:flex-start;}
#teklif .profil-pp-arkaplan{width:70px !important; height:70px !important;}
#teklif #satir-1-sutun-2 {font-size:0.65rem !important;}
#teklif #satir-1-sutun-2{padding-top:20px; width:70%;}



#ana-ilan ,#teklif{width:100%;}



}

/*İpad e tablet*/
@media only screen  and (max-width:1200px)  {
	
	header span{
	width:40rem;
	margin-top:5rem;
	margin-bottom:12rem; }
	#header-bg{
		background-size:cover;
		opacity:0.8;
		transition:2s;
		background-position:10% 0%;}
	.kayitolgirisyap {width:40%;}
	.kayitolgirisyap span{font-size:10px;}
	.kayitolgirisyap a{padding:2% 4%; font-size: 10px;}

	.kayit-giris-headeri{height: 1100px; background-position:-5% 100%; background-size:auto;margin:10% 3%;}
	.kayit-giris{ float:left; margin:10% 20%;}
	.kayit-giris-headeri span { margin-left: 10%; font-size: 4rem; }
	
	/*ilan*/	
	.ilan-icerik .profil-pp-arkaplan{ margin:2% 2% ;}
.ilan  button{font-size:12px; width:80px; height:20px; line-height:1.2;}

#ana-ilan .profil-pp-arkaplan {width:80%;height:100%;}
#ana-ilan .profil-pp{height:140px; width:140px;}
#ana-ilan #satir-1-sutun-2{margin-right:2%;}
.ilan-icerik .profil-pp{width:60px ; height:60px; 
}
#teklif .profil-pp-arkaplan{width:90px; height:90px;}
#teklif #satir-1-sutun-2 {font-size:0.8rem;}
#teklif #satir-1-sutun-2{padding-top:20px; width:40%;}
	#haftanin-ogrencileri span{font-size:20x;}
	#haftanin-ogrencileri-profilleri ul{ margin-top:7%;}

	/*profil*/
	#profil{ width: 80%;
	padding: 2% 8%;}
		.ilan-bilgileri{margin-left:2%;}

}

/*ekran büyüdüğü  zaman içerik ortada kalırken banner ve footer uzun kalmaması*/
@media screen  and (min-width:1350px) { /*1350 ve üzeri için*/
	.banner,.footer,.container{width:1349px;}
	/*footer container ve bannerı 1349 da sabitliyoruz ki sayfanın ortasında ve bütün halde dursun,
		body, footer ve banner background 100% olduğu için sayfanın tümünü kaplar.
	*/
	#header-bg{width: 1349px;}
	.kayitolgirisyap{width:50%}
	.dersal-ver{margin-left: 550px;}
}
