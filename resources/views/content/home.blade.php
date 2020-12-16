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
                    <p class="p">Koenergia helps residential houses, large business in commercial and Industrial
                        building
                        to reduce the energy cost and carbon footprint with providing clean
                        energy from renewable energy power solutions</p>
                </div>
                <div class="space-20"></div>
                <h5>Download Our Company Profile</h5>
                <a href="{{'asset/images/KoenergiA.pdf'}}" download class="bttn-white wow fadeInUp"
                    data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Download Here</a>
            </div>
            <div class="space-30"> </div>
        </div>
    </div>
    </div>
</header>
<section id="questions_page" class="questions-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <img src="{{'asset/images/icon.png'}}" alt="About Logo">
                    <div class="space-10"></div>
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
                    <p>Pohon</p>
                    <p>Tertanam</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i class="fa fa-database"></i>
                    </div>
                    <h4>{{$datas->kg}}</h4>
                    <p>Kg</p>
                    <p>Co<sub>2</sub>Terhindar</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i class="fa fa-wrench"></i>
                    </div>
                    <h4>{{$datas->kwh}}</h4>
                    <p>kWh</p>
                    <p>Energi Hijau</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>{{$datas->rumah}}</h4>
                    <p>Rumah</p>
                    <p>Diterangi</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>{{$datas->ltr}}</h4>
                    <p>ltr</p>
                    <p>BBM</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h4>{{$datas->ltr}}</h4>
                    <p>ltr</p>
                    <p>BBM</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section-home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <div class="page-title text-center">
                    <h2 class="blue-color" data-wow-delay="0.4s">Save Up to 60% of Monthly Electricity Bills with Solar
                    </h2>
                    <div class="space-10"></div>
                    <p>When the tariff electricity price is unpredictable,
                        while you have to pay more bills due to increasing
                        energy consumption, solar is perfect solution for your
                        building.With 20 years product lifetime and flat energy
                        price, do you think solar is still expensive investment?</p>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="page-title text-center">
            <h5 class="title">Our Solutions</h5>
        </div>
        <div class="space-30"></div>
        <div class="row">
            <div class="col-sm-6">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i><img src="asset/images/on-grid.png" alt=""></i>
                    </div>
                    <h4>On-Grid PV System</h4>
                    <p>No batteries needed, connected directly to the utility grid, reduce monthly bills</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="box-icon">
                        <i><img src="asset/images/off-grid.png" alt=""></i>
                    </div>
                    <h4>Off-Grid PV System</h4>
                    <p>No more darkness, 24/7 energy provided, zero CO2 emissions</p>
                </div>
                <div class="space-60"></div>
            </div>
            <div class="col-sm-6">
                <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box-icon">
                        <i><img src="asset/images/hybrid.png" alt=""></i>
                    </div>
                    <h4>Hybrid PV System</h4>
                    <p>Combination of solar with other energy source, 24/7 energy provided</p>
                </div>
                <div class="space-60"></div>
                <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box-icon">
                        <i><img src="asset/images/pump.png" alt=""></i>
                    </div>
                    <h4>Solar Water Pump</h4>
                    <p>No more drought, pump the water from the source and deliver to the peoples</p>
                </div>
            </div>
        </div>
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
