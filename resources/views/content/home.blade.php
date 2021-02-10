<!-- Home-Area -->
<header class="home-area overlay" id="home_page">
    <div class="container">
        <div class="row">
             <div class="col-xs-12 col-md-5">
                <div class="space-30"></div>
                <div class="subscribe-form text-center">
                    <!-- My Calculator -->
                    <img src="{{'asset/images/logo-calcu.png'}}" alt="Logo">
                    <form name="form" onSubmit="validasi()">
                        <div class="form-double">
                            
                            <select class="form-control" name="angka1" required="">
                                <option class="form-control">Daya Listrik PLN Terpasang (VA)</option>
                            <?php
                                $kwh = ["1300","2200","3500","4400","5500","6600","10600",
                                "11000","13200","16500","23000","33000","41500","53000",
                                "66000","82500","105000","131000","147000","164000","187000","197000"];
                            ?>
                            @foreach ($kwh as $kwh)
                                <option class="form-control" id="num1" value="{{$kwh}}">{{$kwh}}</option>
                            @endforeach
                            </select>
                            <div class="space-10"></div>
                            <input type=text name="angka2" class="form-control uang" id="rupiah"
                                placeholder="Rata-rata Tagihan Listrik Perbulan (Rp)" required>
                        </div>
                        <div class="space-10"></div>
                        <div class="kolom3">
                            <button type=button name=submit onclick="tambah()" class="button button2" id="myBtn" style="margin-top: 0">COUNT</button>
                        </div>
                        <h6 style="color: black; font-size: 11px; margin: 5px 0 10px 0">Dapat Menghemat tagihan perbulan Sebesar</h6>
                        <div class="kolom2">
                            <input type="text" value=""  name="total" class="form-control" readonly placeholder="Rp." id='total'>
                            <input type="text" value="" name="hasil" class="form-control" readonly placeholder="%" id='hasil'>
                        </div>
                        <div class="space-10"></div>
                        <div class="kolom2" style="line-height: 20px">
                            <p style="font-size: 11px; text-align: left; margin-left: 10px;">4 jam efektif matahari, anda dapat menghidupkan:</p>
                            <p style="font-size: 11px; text-align: right; margin-right: 10px">Menggunakan Solar Panel, anda berperan menyelamatkan bumi:</p>
                        </div>
                        <div class="row kolom">
                                <img src="{{'asset/images/ac.png'}}" alt="" width="35px" height="35px">
                                <p style="font-size: 11px; text-align: left; line-height: 20px" id="ac"></p>
                                <p style="font-size: 11px; text-align: left"> </p>
                                <p style="font-size: 11px; text-align: left"> </p>
                                <img src="{{'asset/images/carbon.png'}}" alt="" width="35px" height="35px" style="justify-self: right">
                                <p style="font-size: 11px; text-align: right; line-height: 20px" id="karbon"></p>
                        </div>
                        <div class="space-10"></div>
                        <div class="row kolom">
                                <img src="{{'asset/images/kulkas.png'}}" alt="" width="35px" height="35px">
                                <p style="font-size: 11px; text-align: left; line-height: 20px" id="kulkas"></p>
                                <p style="font-size: 11px; text-align: left"> </p>
                                <p style="font-size: 11px; text-align: left"> </p>
                                <img src="{{'asset/images/tree.png'}}" alt="" width="35px" height="35px" style="justify-self: right">
                                <p style="font-size: 11px; text-align: right; line-height: 20px" id="pohon"></p>
                        </div>
                        <div class="space-10"></div>
                        <div class="row kolom5">
                                <img src="{{'asset/images/led.png'}}" alt="" width="35px" height="35px" style="margin: 0 -10px 0 10px">
                                <p style="font-size: 11px; text-align: left; line-height: 20px; margin: 0 0 -20px 0" id="led"></p>
                                <img src="{{'asset/images/polos1.png'}}" alt="" width="140px" height="35px" style="margin-left: 40px">
                                <!-- <img src="{{'asset/images/polos1.png'}}" alt="" width="140px" height="35px" style="justify-self: right; margin-left: 35px"> -->
                        </div>
                        <div class="space-10"></div>
                        <div class="tombol">
                            <a href="{{url('/')}}" class="button button2">RESET</a>
                            <a href="#contact_page" class="button button2">QUOTATION</a>
                        </div> 
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-md-7">
                <div class="space-80 hidden-xs"></div>
                <h1 class="wow fadeInUp" data-wow-delay="0.4s" style="margin: 25px 0 10px 0">Enlightening Indonesia with Renewable Energy</h1>
                <div class="space-20"></div>
                <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                    <p class="p">Koenergia membantu rumah-rumah residensial, bisnis skala besar pada gedung komersial dan industrial untuk menghemat biaya energi dan jejak karbon yang dikeluarkan dengan menyediakan energi bersih dari sistem pembangkit listrik dari energi terbarukan</p>
                </div>
                <div class="space-20"></div>
                <h5 class="wow fadeInUp" data-wow-delay="0.8s">Download Our Company Profile</h5>
                <a href="{{'asset/images/Company Profile Koenergia.pdf'}}" download class="bttn-white wow fadeInUp"
                data-wow-delay="0.9s"><i class="lnr lnr-download"></i>Download Here</a>
            </div>
            <div class="space-30"> </div>
        </div>
    </div>
    </div>
</header>

<section id="questions_page" class="questions-area section-padding-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <div class="space-10"></div>
                    <h6 style="font-size: 14px;" class="title">Our Contribution</h6>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div>
            <div class="row">
                @foreach ($data as $datas)
                    <ul class="hs full no-scrollbar">
                        <div class="col" style="width: 215px">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.1s">
                                <div class="box-icon">
                                    <i><img src="asset/images/sprout.png" width="35px" height="35px"></i>
                                </div>
                                <h4 style="color: #000">@currency($datas->pohon)</h4>
                                <p style="font-size: 12px; margin-bottom: -10px"><b>Pohon</b></p>
                                <p style="font-size: 15px">Tertanam</p>
                            </div>
                        </div>
                        <div class="col" style="width: 215px">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.3s">
                                <div class="box-icon">
                                    <i><img src="asset/images/no.png" width="35px" height="35px"></i>
                                </div>
                                <h4 style="color: #000">@currency($datas->kg)</h4>
                                <p style="font-size: 12px; margin-bottom: -10px"><b>Kg</b></p>
                                <p style="font-size: 15px">CO<sub>2</sub> Terhindar</p>
                            </div>
                        </div>
                        <div class="col" style="width: 215px">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.5s">
                                <div class="box-icon">
                                    <i><img src="asset/images/eco-battery.png" width="35px" height="35px"></i>
                                </div>
                                <h4 style="color: #000">@currency($datas->kwh)</h4>
                                <p style="font-size: 12px; margin-bottom: -10px"><b>kWh</b></p>
                                <p style="font-size: 15px">Energi Hijau</p>
                            </div>
                        </div>
                        <div class="col" style="width: 215px">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.7s">
                                <div class="box-icon">
                                    <i><img src="asset/images/solar-house.png" width="35px" height="35px"></i>
                                </div>
                                <h4 style="color: #000">@currency($datas->rumah)</h4>
                                <p style="font-size: 12px; margin-bottom: -10px"><b>Rumah</b></p>
                                <p style="font-size: 15px">Diterangi</p>
                            </div>
                        </div>
                        <div class="col" style="width: 215px">
                            <div class="service-box wow fadeInUp" data-wow-delay="0.9s">
                                <div class="box-icon">
                                    <i><img src="asset/images/gas-station.png" width="35px" height="35px"></i>
                                </div>
                                <h4 style="color: #000">@currency($datas->ltr)</h4>
                                <p style="font-size: 12px; margin-bottom: -10px"><b>ltr</b></p>
                                <p style="font-size: 15px">BBM</p>
                            </div>
                        </div>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <h2 class="blue-color" data-wow-delay="0.4s">Save Up to 60% of Monthly Electricity Bills With Solar
                    </h2>
                    <div class="space-10"></div>
                    <p>Ketika tarif dari harga listrik tidak dapat diprediksi, sementara itu Anda harus bayar lebih banyak tagihan listrik seiring dengan meningkatnya konsumsi energi, tenaga surya adalah solusi tepat untuk bangungan Anda. Dengan 20 tahun umur produk dan tarif energi listrik yang rata, apakah kamu masih berpikir tenaga surya masih termasuk investasi yang mahal?</p>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <h5 class="title">Our Solutions</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="space-60"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconsol">
                        <i><img src="asset/images/on-grid.png" width="150px" height="150px"></i>
                    </div>
                    <h4 class="dark-color">On-Grid PV System</h4>
                    <p>Tidak ada baterai yang diperlukan, terhubung langsung dengan jaringan listrik PLN, hemat tagihan listrik tiap bulannya</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="space-60"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="iconsol">
                        <i><img src="asset/images/off-grid.png" width="150px" height="150px"></i>
                    </div>
                    <h4 class="dark-color">Off-Grid PV System</h4>
                    <p>Tidak ada lagi kegelapan, 24/7 energi listrik tersedia, tidak ada emisi CO2</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="space-60"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="iconsol">
                        <i><img src="asset/images/hybrid.png" width="150px" height="150px"></i>
                    </div>
                    <h4 class="dark-color">Hybrid PV System</h4>
                    <p>Kombinasi tenaga surya dengan sumber lainnya, 24/7 energi listrik tersedia</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="space-60"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.8s">
                    <div class="iconsol">
                        <i><img src="asset/images/pump.png" width="150px" height="150px"></i>
                    </div>
                    <h4 class="dark-color">Solar Water Pump</h4>
                    <p>Tidak ada lagi kekeringan, menghisap air dari sumbernya dan salurkan kepada masyarakat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="questions_page" class="questions-area section-padding">

    <a href="{{url('project')}}">
<div class="page-title text-center">
    <img src="{{'asset/images/icon.png'}}" alt="About Logo">
    <div class="space-20"></div>
    <h5 class="title">Our Project</h5>
</div>
<div class="w3-content w3-section">
    <img class="mySlides w3-animate-fading" src="asset/images/header-bg.jpeg" style="width:1000px; height:450px;">
    <img class="mySlides w3-animate-fading" src="asset/images/blog-3.jpg" style="width:1000px; height:450px;">
    <img class="mySlides w3-animate-fading" src="asset/images/blog-2.jpg" style="width:1000px; height:450px;">
    <img class="mySlides w3-animate-fading" src="asset/images/blog-1.jpg" style="width:1000px; height:450px;">
</div>
</a>
</section> -->
<script>
    function tambah() {
        var res = form.angka2.value.substring(4, form.angka2.value.length);
        var punctuationless = res.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");
        var finalString = punctuationless.replace(/\s{2,}/g," ");

        console.log("form 1 "+ form.angka1.value);
        console.log("form 2 "+ finalString);
        if ((finalString == "") || form.angka1.value == "Daya Listrik PLN Terpasang (VA)") {
            console.log("Masuk Ke if");
            alert("Anda harus mengisi data dengan lengkap !");
            throw("Anda harus mengisi data dengan lengkap !");
        }
        
        var psh=4;
        var eff=0.8;
        var listrik=1444.7;
        var ac=3.36;
        var led=0.06;
        var kulkas=6.72;
        var toco2=0.68;
        var pohon=0.0009;
        var pday=14.08;

        console.log("final string "+ finalString);

        console.log("res "+res);

        a=eval(form.angka1.value);
        b=eval(finalString); 
        console.log("b "+b);
        var c=(((a*psh*eff/1000)*30)*listrik);
        // c=a+b;
        rupiah=(Math.round(c/1000)*1000+1000);
        form.total.value = 'Rp. '+formatRupiah(rupiah+"");
        form.hasil.value = Math.round((rupiah/b)*100) +'%';
        var ac = '<b>'+Math.ceil(pday/ac*0.3)+'</b>'+' Unit'+'<br>'+'AC 1 PK';
        document.getElementById("ac").innerHTML=ac;
        var kulkas = '<b>'+Math.ceil(pday/kulkas*0.65)+'</b>'+' Unit'+'<br>'+'Kulkas';
        document.getElementById("kulkas").innerHTML=kulkas;
        var led = '<b>'+Math.ceil(pday/led*0.05)+'</b>'+' Unit'+'<br>'+'LED 10 W';
        document.getElementById("led").innerHTML=led;
        var karbon= 'Penurunan Emisi Karbon'+'<br>'+'<b>'+Math.round(rupiah/listrik*toco2*12)+'</b>'+' Co2 pertahun';
        document.getElementById("karbon").innerHTML=karbon;
        var pohon = 'Pohon yang terselamatkan'+'<br>'+'<b>'+Math.round(rupiah/listrik*pohon*12)+'</b>'+' pohon pertahun';
        document.getElementById("pohon").innerHTML=pohon;

 }

 var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
    rupiah.value = formatRupiah(this.value, "Rp. ");
});
 
 function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}
</script>

<script>
    var input = document.getElementById("rupiah");
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
       event.preventDefault();
       document.getElementById("myBtn").click();
      }
    });
    </script>
<!-- Home-Area-End -->
