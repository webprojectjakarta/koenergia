<!-- Home-Area -->
<header class="home-area overlay" id="home_page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 hidden-sm col-md-5">
                <div class="subscribe-form text-center">
                    <!-- My Calculator -->
                    <img src="{{'asset/images/logo.png'}}" alt="Logo">
                    <div class="space-40"></div>
                    <form action="{{ url('/store') }}" method="post" target="_blank">
                        @csrf
                        <div class="form-double">
                            <input name="number1" type="number" class="form-control" id='num1'
                                placeholder="Tagihan Listrik (Rp)" required
                                oninvalid="this.setCustomValidity('Silahkan isi bos')">
                            <div class="space-30"></div>
                            <input name="number2" type="number" class="form-control" id='num2'
                                placeholder="Daya Listrik (Watt)" required
                                oninvalid="this.setCustomValidity('Silahkan isi bos')">
                            <div class="space-30"></div>
                        </div>
                        <input type="number" class="form-control" readonly placeholder="Result" id='result'>
                        <div class="space-30"></div>

                        <button type="submit" class="bttn-default">COUNT</button>
                        <button type="reset" class="bttn-default">RESET</button>
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
                <h5>Download Our Company Profile</h5>
                <a href="{{'asset/images/KoenergiA.pdf'}}" download class="bttn-white wow fadeInUp"
                    data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Download Here</a>
            </div>
            <div class="space-40"> </div>
        </div>
    </div>
    </div>
</header>

<section class="section-home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <h2 class="blue-color" data-wow-delay="0.4s">Hemat Tagihan Listrik Sampai dengan 60% Setiap Bulannya dengan Tenaga Surya
                    </h2>
                    <div class="space-10"></div>
                    <p>Ketika tarif dari harga listrik tidak dapat diprediksi, sementara itu Anda harus bayar lebih banyak tagihan listrik seiring dengan meningkatnya konsumsi energi, tenaga surya adalah solusi tepat untuk bangungan Anda. Dengan 20 tahun umur produk dan tarif energi listrik yang rata, apakah kamu masih berpikir tenaga surya masih termasuk investasi yang mahal?</p>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
        <div class="page-title text-center">
            <h5 class="title">Solusi Kami</h5>
        </div>
        <div class="space-40"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i><img src="asset/images/on-grid.png" alt=""></i>
                    </div>
                    <h4>On-Grid PV System</h4>
                    <p>Tidak ada baterai yang diperlukan, terhubung langsung dengan jaringan listrik PLN, hemat tagihan listrik tiap bulannya</p>
                </div>
                <div class="space-50"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i><img src="asset/images/off-grid.png" alt=""></i>
                    </div>
                    <h4>Off-Grid PV System</h4>
                    <p>Tidak ada lagi kegelapan, 24/7 energi listrik tersedia, tidak ada emisi CO2</p>
                </div>
                <div class="space-60"></div>
            </div>
            <div class="col-sm-6">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i><img src="asset/images/hybrid.png" alt=""></i>
                    </div>
                    <h4>Hybrid PV System</h4>
                    <p>Kombinasi tenaga surya dengan sumber lainnya, 24/7 energi listrik tersedia</p>
                </div>
                <div class="space-80"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i><img src="asset/images/pump.png" alt=""></i>
                    </div>
                    <h4>Solar Water Pump</h4>
                    <p>Tidak ada lagi kekeringan, menghisap air dari sumbernya dan salurkan kepada masyarakat</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section id="questions_page" class="questions-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <div class="space-10    "></div>
                    <h5 class="title">Our Contribution</h5>
                </div>

            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
            @foreach ($data as $datas)
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <span class="fa fa-cogs"></span>
                    </div>
                    <h4>{{$datas->pohon}}</h4>
                    <p><b>Pohon</b></p>
                    <p>Tertanam</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <h4>{{$datas->kg}}</h4>
                    <p><b>Kg</b></p>
                    <p>Co<sub>2</sub> Terhindar</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i class="fa fa-wrench"></i>
                    </div>
                    <h4>{{$datas->kwh}}</h4>
                    <p><b>kWh</b></p>
                    <p>Energi Hijau</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>{{$datas->rumah}}</h4>
                    <p><b>Rumah</b></p>
                    <p>Diterangi</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>{{$datas->ltr}}</h4>
                    <p><b>ltr</b></p>
                    <p>BBM</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- <section id="questions_page" class="questions-area section-padding">

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
</section> --}}
<!-- Home-Area-End -->
