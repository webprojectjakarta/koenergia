<!-- Home-Area -->
<header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                <div class="subscribe-form text-center">
                        <!-- My Calculator -->
                        <img src="{{'asset/images/logo.png'}}" alt="Logo">
                        <div class="space-40"></div>
                        <form>
                                <div class="form-double">
                                    <input name="number1" type="number" class="form-control" id='num1' placeholder="Tagihan Listrik (Rp)">
                                        <div class="space-30"></div>
                                    <input name="number2" type="number" class="form-control" id='num2' placeholder="Daya Listrik (Watt)">
                                        <div class="space-30"></div>
                                </div>
                                    <input type="number" class="form-control" readonly placeholder="Result" id='result'>
                                        <div class="space-30"></div>
                        
                                <button type="button" class="bttn-default" onclick="showresult('1')">COUNT</button>
                                <button type="reset" class="bttn-default">RESET</button>
                        </form>
                        </div>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Save Up to 60% of Monthly Electricity Bills With Solar</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>When the tariff electricity price is unpredictable, while you have to pay more bills due to increasing energy consumption, solar is perfect solution for your building.
                            With 20 years product lifetime and flat energy price, do you think solar is still expensive investment?</p>
                    </div>
                   
                </div>
                <div class = "space-30"> </div>

            </div>
        </div>
</header>
<script>
function showresult(hitung){
        var n1=parseFloat(document.getElementById('num1').value);
        var n2=parseFloat(document.getElementById('num2').value);
        var hitung=hitung;
        switch(hitung)
            {
            case '1':
                r=n1+n2;
                break;
            default:
                break;
                    
            }
        document.getElementById('result').value=r;
}

</script>
    <!-- Home-Area-End -->