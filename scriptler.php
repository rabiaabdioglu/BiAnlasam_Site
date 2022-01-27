
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>




<script type="text/javascript">  
  $(document).ready(function () {
/*ALAN VE DERS ARAMA İNPUTLARI */               
                    

                /*klavyeden giriş olduğunda çalışacak*/
                $("#alan").keyup(function () {
                    var query = $("#alan").val(); /*alan inputuna girilen değeri query e atıyor*/
            
                  /*ALAN İNPUT*/
                    if (query.length > 0) {/*eğer query değişkeninde veri varsa*/
                        $.ajax(
                            {
                                url: 'alanders.php', /*phpye post olarak yollluyor*/
                                method: 'POST',
                                data: {
                                search: 1,  /* php ye yollanacak searc ve q değişkenleri*/
                                q: query
                                },
                                success: function (data) {
                                    $("#response").html(data);
                                    /*her alan seçiminde dersin value null olması için phpye  response2 yi yolluyor*/
                               },
                                dataType: 'text'
                            }
                        );
                    }
                });


                $("#response").on('click', 'li', function () {
                    var alan = $(this).text();
                    $("#alan").val(alan);
                    $("#response").html("");
                    /*her alan seçiminde dersin value null olması için phpye  response2 yi yolluyor*/
                  $("#ders").val(null);
                });


                $("#ders").keyup(function () {
                    var query2 = $("#ders").val(); 
                    var alansecim =$("#alan").val();

                    if (query2.length > 0) {/*eğer query değişkeninde veri varsa*/
                        $.ajax(
                            {
                                url: 'alanders.php', /*phpye post olarak yollluyor*/
                                method: 'POST',
                                data: {
                                search2: 1,  /* php ye yollanacak searcH ve q değişkenleri*/
                                q2: query2,
                                alansecim:alansecim
                                },
                                success: function (data) {
                                    $("#response2").html(data);
                                },
                                dataType: 'text'
                            }
                        );
                    } });

                $("#response2").on('click', 'li', function () {
                    var ders = $(this).text();
                    $("#ders").val(ders);
                    $("#response2").html("");
                });
         
         
         
         
         
         
         
         
         
/*ÜNİVERSİTE BOLUM ARAMAİNPUTLARI */               
                    

                /*klavyeden giriş olduğunda çalışacak*/
                $("#okul").keyup(function () {
                    var query = $("#okul").val(); 
            
                    if (query.length > 0) {/*eğer query değişkeninde veri varsa*/
                        $.ajax(
                            {
                                url: 'okulbolum.php', /*phpye post olarak yollluyor*/
                                method: 'POST',
                                data: {
                                search: 1,  /* php ye yollanacak searc ve q değişkenleri*/
                                q: query
                                },
                                success: function (data) {
                                    $("#okul_response").html(data);
                               },
                                dataType: 'text'
                            }
                        );
                    }
                });


                $("#okul_response").on('click', 'li', function () {
                    var okul = $(this).text();
                    $("#okul").val(okul);
                    $("#okul_response").html("");
                  $("#bolum").val(null);
                });
         

                $("#bolum").keyup(function () {
                    var query2 = $("#bolum").val(); 
                    var okulsecim =$("#okul").val();

                    if (query2.length > 0) {/*eğer query değişkeninde veri varsa*/
                        $.ajax(
                            {
                                url: 'okulbolum.php', /*phpye post olarak yollluyor*/
                                method: 'POST',
                                data: {
                                search2: 1,  /* php ye yollanacak searcH ve q değişkenleri*/
                                q2: query2,
                                okulsecim:okulsecim
                                },
                                success: function (data) {
                                    $("#okul_response2").html(data);
                                },
                                dataType: 'text'
                            }
                        );
                    } });

                $("#okul_response2").on('click', 'li', function () {
                    var bolum = $(this).text();
                    $("#bolum").val(bolum);
                    $("#okul_response2").html("");
                });
         
         
   /**      
<!--SECİLENN İLAN SAYFASI İÇİN hata mesajının bir süre sonra gitmesi için yukarıdaki scripti yazıyoruz-->
*/
setTimeout('divOpen()',5000);
});
function divOpen(){
$("#hatamesaji").hide(0);
}

           </script>



    <script>
    /*İL-İLÇE SCRİPTİ*/
    
    //bu kodda ilçe select list ilk önce kapalı olarak geliyor.
    $("#ilce").attr("disabled", "true");

    //il select değişikliğe uğrarsa işlemler yapılacak.
    $("#il").change(function()
    {
        var il = $(this).val();

        if(il > 0) {
            // il id sıfırdan büyükse, ilce select seçilebilir hale gelecek ve ilçe içindeki seçenekler silinecek.
            $("#ilce").removeAttr("disabled");
            $("#ilce option").remove();

            // bu işlemlerden sonra ajax ile ilçe seçimi yapacağız. hatta şöyle yapalım. il id sıfırdan büyük olduğunda ajax çalışsın.
            // adresleme.php sayfamızı yapalım.
            /*
                adresleme.php sayfasına il idsini post metoduyla gönderiyoruz. Json dökümü alıyoruz.
                işlem doğru olursa #ilce select list içerisine gelen ilçeleri yazdıracağız.
             */
            url = "adresleme.php";
            $.ajax({
                type    : "post",
                url     : url,
                dataType: "json",
                data    : {
                il : il
                },
                success : function (response) {
                    var ilceler = response;

                    for(var ilce_adi in ilceler) {
                        $(ilceler[ilce_adi]).each(function(index, deger) {
                            $("#ilce").append('<option value="' + deger.ilce_id + '">' + deger.ilce_adi + '</option>');
                        });
                    }
                },

                error: function (response) {
                    console.log("Hata: Adresleme ajax.");
                    console.log(response);
                }
            });

        } else if(il < 1) {
            // il id 1 den küçükse yani boşsa ilçe tekrar seçilemez hale gelecek, ilçe içindeki seçenekler tekrar temizlenecek, sadece ilçe seçiniz seçeneği gelecek.
            $("#ilce").attr("disabled", "true");
            $("#ilce option").remove();
            $("#ilce").append('<option value="">İlçe Seçiniz</option>');
        }


    });
</script>



            
 <script>
 /*profil fotografı çin önizleme scripti */
 var loadFile = function(event) {
 var onizleme = document.getElementById("onizleme");
 onizleme.src = URL.createObjectURL(event.target.files[0]);
 
 document.getElementById("onizleme").style.display = "block";
 };
 </script>
