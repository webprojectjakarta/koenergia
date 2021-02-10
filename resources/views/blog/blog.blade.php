@section('js')
<div class="container">
    <div class="row">
        @foreach($datas as $data)
        <div class="col-xs-12">
            <article class="post-single sticky">
                <figure class="post-media">
                    <img src="{{url('images/user', $data->image)}}" alt="">
                </figure>
                <div class="post-body">
                    <div class="post-meta">
                        <div class="post-date">
                            <p>{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</p>
                        </div>
                    </div>
                    <h4 class="dark-color"><a href="{{ url('/detailBlog', $data->id) }}">{{$data->title}}</a></h4>
                    {{-- <p>{{ str_limit($data->content, $limit = 200, $end = '...') }}</p> --}}
                    {{-- <a href="{{ url('/detailBlog', $data->id) }}" class="read-more">
                    {{ strlen(strip_tags($data->content)) > 50 ? "View Article" : "" }}</a> --}}
                </div>
            </article>
        </div>
        @endforeach
    </div>
    {{ $datas->links() }}
</div>

<section id="questions_page" class="questions-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <h5 class="title">FAQ</h5>
                    <h3 class="dark-color">TENTANG SISTEM PLTS ATAP</h3>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel-group" id="accordion" style="background: #f5f6ff">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Apa itu Sistem PLTS Atap?</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">Adalah proses pembangkitan tenaga listrik menggunakan modul fotovoltaik yang dipasang dan diletakkan diatap, dinding atau bagian lain dari bangunan milik konsumen PT. PLN (Persero) serta menyalurkan energi listrik melalui sistem sambungan listrik konsumen PT. PLN (Permen ESDM No. 49, 2018)
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Bagaimana cara kerja Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">Modul fotovoltaik (PV Module) akan mengkonversi radiasi matahari menjadi listrik DC, kemudian output listrik DC tersebut akan masuk ke solar inverter yang menkonversinya menjadi 220/380 V 50Hz listrik AC, kemudian listrik AC tersebut dapat digunakan untuk menyalakan peralatan listrik. Jika ada kelebihan energi listrik AC yang dihasilkan, maka akan diekspor ke jaringan PLN.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Bagaimana cara kerja solar inverter?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">Solar inverter adalah komponen utama atau otak dalam Sistem PLTS Atap, terutama dalam Sistem On-grid. Saat solar inverter dinyalakan, maka membutuhkan waktu 60 detik untuk mengsinkronkan referensi parameter (tegangan, frekuensi, dll) dari grid PLN agar inverter dapat berfungsi. Solar Inverter tidak akan berfungsi jika tidak ada listrik DC dari Module Fotovoltaik dikarenakan bayangan atau terbenamnya matahari dan ketika tidak ada referensi dari grid PLN atau ketika listrik PLN padam.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Apa itu net metering atau kWh ekspor dan impor apa itu pembangkit untuk kepentingan sendiri atau Self Consumption?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">kWh ekspor adalah jumlah energi listrik yang disalurkan dari Sistem PLTS Atap ke sistem jaringan PLN, sedangkan kWh impor adalah jumlah energi listrik yang diterima dari jaringan PLN yang kemudian keduanya tercata pada kWh meter ekspor impor (Permen ESDM No. 49, 2018). Sedangkan pembangkit self consumption adalah pembangkit yang terhubung dengan jaringan PLN akan tetapi tidak ada kegiatan ekspor impor didalamnya, sistem akan dibatasi berdasarkan beban minimum dalam bangunan.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Bagaimana cara perhitungan ekspor impor energi listrik dari Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                - Energi listrik yang diekspor ke jaringan PLN yang tercatat di kWh meter ekspor impor akan dikalikan 65%.
                            </div>
                            <div class="panel-body">
                                - Perhitungan energi listrik pelanggan PLTS Atap akan dilakukan setiap bulan berdasarkan selisih antara kWh impor dengan nilah ekspor
                            </div>
                            <div class="panel-body">
                                - Apabila nilai kWh ekspor lebih besar dari impor, maka selisih akan diakumulasikan sebagai pengurangan sebelumnya.
                            </div>
                            <div class="panel-body">
                                - Selisih yang diperhitungkan akan diakumulasikan paling lama 3 bulan untuk periode tagihan listrik bulan Januari-Maret, April-Juni, Juli-September atau Oktober-Desember.
                            </div>
                            <div class="panel-body">
                                - Apabila akumulasi selisih tersisa dipengujung periode, selisih akan dinihilkan dan perhitungan selisih dimulai pada periode berikutnya.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Berapa area atap yang dibutuhkan untuk memasang Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">Untuk 1kWp (1000Wp) sistem, dibutuhkan 6m2 dengan berat 12kg/m2 tergantung ukuran modul fotovoltaik yang digunakan
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Berapa umur dari Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">Jika Sistem PLTS Atap dipasang dengan baik, sistem dapat beroperasi sampai dengan 20-25 tahun. Product Warranty dari Modul Fotovoltaik 10 tahun, Solar Inverter 5 tahun dengan warranty instalasi antara 1-2 tahun.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Berapa persenkah penghematan tagihan listrik yang didapat jika memasang Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">Penghematan yang akan didapatkan diantara 30-50 persen dari tagihan listrik anda setiap bulannya.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Siapa sajakah yang dapan melakukan pembangunan dan pemasangan Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">Adapun pemasangan Sistem PLTS Atap wajib dilakukan oleh Badan Usaha dan lembaga milik pemerintah pusat atau lembaga milik pemerintah daerah yang sudah terdaftar sebagai Badan Usaha Jasa Penunjang Tenaga Listrik yang telah dipublikasikan pada laman Direktoran Jenderal Energi Baru, Terbarukan dan Konservasi Energi (Dirjen EBTKE), Direktorat Jenderal Ketenagalistrikan dan PT PLN (Persero).
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Bagaimana cara konsultasi untuk mengetahui ukuran yang sesuai untuk bangunan, tahapan atau persyaratan dan harga dari Sistem PLTS Atap?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <div class="panel-body">Untuk konsultasi lebih lanjut bisa menghubungi team kita melalui messenger atau kirimkan pertanyaan ke massasurya.id@gmail.com. Team kita akan membantu anda untuk Check ukuran yang anda butuhkan, Select EPC Kontraktor yang sesuai untuk anda dan kemudian anda bisa Own sistem anda sendiri dengan mudah.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
