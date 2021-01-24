<div class="section-home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="carier">
                    <p>Terima Kasih telah berminat bergabung dengan PT. Kolega Energi Abadi, untuk diperhatikan kepada semua
                        pelamar untuk mengirimkan detail CV ke alamat email info@koenergia.com dengan subject posisi
                        yang akan Sdr/i lamar. Pemberitahuan selanjutnya akan dilakukan melalui telepon langsung atau
                        email.</p>
                    <p>Regards,</p>
                    <p>HR. PT. Kolega Energi Abadi</p>
                </div>
            </div>
        </div>
        <div class="space-30"></div>
        <div class="row">
            <div class="col-xs-12">
                
            @foreach($datas as $data)
                <div class="col-md-4 lineVertical">
                    <h5 class="h5">Needed Urgently</h5>
                    <h3 class="h3">{{$data->title}}</h3>
                    <div class="space-20"></div>
                    <li class="justify">{{$data->requirement1}}</li>
                    <li class="justify">{{$data->requirement2}}</li>
                    <li class="justify">{{$data->requirement3}}</li>
                    <li class="justify">{{$data->requirement4}}</li>
                    <li class="justify">{{$data->requirement5}}</li>
                    @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="justify">{{$data->requirement5}}</li>
                    @endif
                    @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="justify">{{$data->requirement7}}</li>
                    @endif
                    @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="justify">{{$data->requirement8}}</li>
                    @endif
                    @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="justify">{{$data->requirement9}}</li>
                    @endif
                    @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="justify">{{$data->requirement10}}</li>
                    @endif

                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
