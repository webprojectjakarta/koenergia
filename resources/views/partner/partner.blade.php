<section class="section-home" id="about_page">
    <div class="container">
        <div class="row">
            <center>
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="{{'asset/images/icon.png'}}" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title">Partnership</h5>
                    </div>
                    @foreach($datas as $data)
                    <img src="{{url('images/user', $data->image)}}" alt="" class="img">
                    @endforeach
            </center>
        </div>
    </div>
</section>