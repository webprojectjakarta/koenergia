<!-- Home-Area -->
<header class="home-area overlay" id="home_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 hidden-sm col-md-5">
                <div class="subscribe-form text-center">
                    <!-- My Calculator -->
                    <img src="{{'asset/images/logo.png'}}" alt="Logo">
                    <div class="space-40"></div>
                    <form name="form" >
                        <div class="form-double">
                            
                            <select class="form-control" name="angka1" required="">
                                <option class="form-control">Daya Listrik PLN Terpasang (VA)</option>
                            <?php
                                $kwh = ["1300","2200","3500","4400","5500","6600","1600",
                                "11000","13200","16500","23000","33000","41500","53000",
                                "66000","82500","105000","131000","147000","164000","187000","197000"];
                            ?>
                            @foreach ($kwh as $kwh)
                                <option class="form-control" id="num1" value="{{$kwh}}">{{$kwh}}</option>
                            @endforeach
                            </select>
                            <div class="space-30"></div>
                            <input type=number name="angka2" class="form-control uang" id='num2'
                                placeholder="Daya Listrik (Watt)" required
                                oninvalid="this.setCustomValidity('Silahkan isi bos')">
                            <div class="space-30"></div>
                        </div>
                        <input type="text" value=""  name="total" class="form-control uang" readonly placeholder="Result" id='demo'>
                        <input type="text" value="" name="hasil" class="form-control" readonly placeholder="Hasil" id='demo'>
                        <div class="row">
                            <div class="col-md-3 text-left">
                                <img src="{{'asset/images/ac.png'}}" alt="" width="40px" height="30px">
                                <img src="{{'asset/images/kulkas.png'}}" alt="" width="50px" height="30px">
                                <img src="{{'asset/images/led.png'}}" alt="" width="40px" height="25px">
                            </div>
                            <div class="col-md-3 text-left">
                                <p style="font-size: 11px;" id="ac">:</p>
                                <p style="font-size: 11px;" id="kulkas">:</p>
                                <p style="font-size: 11px;" id="led">:</p>
                            </div>
                            <div class="col-md-3 text-left">
                                <img src="{{'asset/images/sprout.png'}}" alt="" width="40px" height="25px">
                                <img src="{{'asset/images/no.png'}}" alt="" width="40px" height="25px">
                            </div>
                            <div class="col-md-3 text-left">
                                <p style="font-size: 11px;" id="karbon">:</p>
                                <p style="font-size: 11px;" id="pohon">:</p>
                            </div>
                        </div>
                        <div class="space-30"></div>
                        <button type=button name=submit onclick="tambah()" class="bttn-default">COUNT</button>
                        <a href="{{url('/')}}" class="bttn-default">RESET</a>
                        <div class="space-20"></div>
                        <a href="#contact_page" class="bttn-default">Quotation</a>
                
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-md-7">
                <div class="space-80 hidden-xs"></div>
                <h1 class="wow fadeInUp" data-wow-delay="0.4s">Enlightening Indonesia with Renewable Energy</h1>
                <div class="space-20"></div>
                <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                    <p class="p">Koenergia membantu rumah-rumah residensial, bisnis skala besar pada gedung komersial dan industrial untuk menghemat biaya energi dan jejak karbon yang dikeluarkan dengan menyediakan energi bersih dari sistem pembangkit listrik dari energi terbarukan</p>
                </div>
                <div class="space-20"></div>
                <h5 class="wow fadeInUp" data-wow-delay="0.8s">Download Our Company Profile</h5>
                <a href="{{'asset/images/KoenergiA.pdf'}}" download class="bttn-white wow fadeInUp"
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
                    <h5 class="title">Our Contribution</h5>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div>
            <div class="row" style="margin-left: 150px">
                @foreach ($data as $datas)
                <div class="col-md-2">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="box-icon">
                            <i><img src="asset/images/sprout.png" width="35px" height="35px"></i>
                        </div>
                        <h4 style="color: #000">{{$datas->pohon}}</h4>
                        <p><b>Pohon</b></p>
                        <p>Tertanam</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.3s">
                        <div class="box-icon">
                            <i><img src="asset/images/no.png" width="35px" height="35px"></i>
                        </div>
                        <h4 style="color: #000">{{$datas->kg}}</h4>
                        <p><b>Kg</b></p>
                        <p>Co<sub>2</sub> Terhindar</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="box-icon">
                            <i><img src="asset/images/eco-battery.png" width="35px" height="35px"></i>
                        </div>
                        <h4 style="color: #000">{{$datas->kwh}}</h4>
                        <p><b>kWh</b></p>
                        <p>Energi Hijau</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.7s">
                        <div class="box-icon">
                            <i><img src="asset/images/solar-house.png" width="35px" height="35px"></i>
                        </div>
                        <h4 style="color: #000">{{$datas->rumah}}</h4>
                        <p><b>Rumah</b></p>
                        <p>Diterangi</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.9s">
                        <div class="box-icon">
                            <i><img src="asset/images/gas-station.png" width="35px" height="35px"></i>
                        </div>
                        <h4 style="color: #000">{{$datas->ltr}}</h4>
                        <p><b>ltr</b></p>
                        <p>BBM</p>
                    </div>
                </div>
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
        <div class="page-title text-center">
            <h5 class="title">Our Solutions</h5>
        </div>
        <div class="space-40"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.2s">
                        <i><img src="asset/images/on-grid.png" width="150px" height="150px" style="float:left"/></i>
                    <h4 class="dark-color">On-Grid PV System</h4>
                    <p>Tidak ada baterai yang diperlukan, terhubung langsung dengan jaringan listrik PLN, hemat tagihan listrik tiap bulannya</p>
                </div>
                <div class="space-80"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.6s">
                        <i><img src="asset/images/off-grid.png" width="150px" height="150px" style="float:left"/></i>
                    <h4 class="dark-color">Off-Grid PV System</h4>
                    <p>Tidak ada lagi kegelapan, 24/7 energi listrik tersedia, tidak ada emisi CO2</p>
                </div>
                <div class="space-80"></div>
            </div>
            <div class="col-sm-6">
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.4s">
                        <i><img src="asset/images/hybrid.png" width="150px" height="150px" style="float:left"/></i>
                    <h4 class="dark-color">Hybrid PV System</h4>
                    <p>Kombinasi tenaga surya dengan sumber lainnya, 24/7 energi listrik tersedia</p>
                </div>
                <div class="space-80"></div>
                <div class="solutions-box wow fadeInUp" data-wow-delay="0.8s">
                        <i><img src="asset/images/pump.png" width="150px" height="150px" style="float:left"/></i>
                    <h4 class="dark-color">Solar Water Pump</h4>
                    <p>Tidak ada lagi kekeringan, menghisap air dari sumbernya dan salurkan kepada masyarakat</p>
                </div>
            </div>
        </div>
    </div>
</section>

<<<<<<< HEAD
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
=======
<script>
    function tambah() {
        var psh=4;
        var eff=0.8;
        var listrik=1444.7;
        var ac=3.36;
        var led=0.06;
        var kulkas=6.72;
        var toco2=0.68;
        var pohon=0.0009;
        var pday=14.08;

        a=eval(form.angka1.value);
        b=eval(form.angka2.value); 
        var c=(((a*psh*eff/1000)*30)*listrik);
        // c=a+b;
        d=Math.round(c/1000)*1000+1000;
        form.total.value = d; 
        form.hasil.value = Math.round((d/b)*100) +'%';
        var ac = Math.ceil(pday/ac*0.3) +' Unit';
        document.getElementById("ac").innerHTML=ac;
        var kulkas = Math.ceil(pday/kulkas*0.65)+' Unit';
        document.getElementById("kulkas").innerHTML=kulkas;
        var led = Math.ceil(pday/led*0.05)+' Unit';
        document.getElementById("led").innerHTML=led;
        var karbon= Math.round(d/listrik*toco2*12)+' Co2 /thn';
        document.getElementById("karbon").innerHTML=karbon;
        var pohon = Math.round(d/listrik*pohon*12)+' Pohon /thn';
        document.getElementById("pohon").innerHTML=pohon;
 }
</script>

<script type="text/javascript">
    $(document).ready(function(){

        // Format mata uang.
        $( '.uang' ).mask('000.000.000', {reverse: true});

    })
</script>
>>>>>>> 1dfcdf3525e14abdb64dcb9cff4885bfddf11da4
<!-- Home-Area-End -->
