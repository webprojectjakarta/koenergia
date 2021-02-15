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
                            <div class="post-date"><p>{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</p></div>
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

<section id="questions_page" class="questions-area-2 section-padding">
    <div class="container">
        <div class="margin-faq">
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
                <div class="col-xs-12 col-sm-12">
                    <div class="toggole-boxs">
                        <h3>Apa itu Sistem PLTS Atap?</h3>
                        <div class="toggle-1">
                            <p>Adalah proses pembangkitan tenaga listrik menggunakan modul
                                fotovoltaik yang dipasang dan diletakkan diatap, dinding atau bagian lain dari bangunan
                                milik konsumen PT. PLN (Persero) serta menyalurkan energi listrik melalui sistem sambungan
                                listrik konsumen PT. PLN (Permen ESDM No. 49, 2018)
                            </p>
                        </div>
                        <h3>Bagaimana cara kerja Sistem PLTS Atap? </h3>
                        <div class="toggle-2">
                            <p>Modul fotovoltaik (PV Module) akan mengkonversi radiasi matahari
                                menjadi listrik DC, kemudian output listrik DC tersebut akan masuk ke solar inverter yang
                                menkonversinya menjadi 220/380 V 50Hz listrik AC, kemudian listrik AC tersebut dapat
                                digunakan untuk menyalakan peralatan listrik. Jika ada kelebihan energi listrik AC yang
                                dihasilkan, maka akan diekspor ke jaringan PLN.</p>
                        </div>
                        <h3>Bagaimana cara kerja solar inverter? </h3>
                        <div class="toggle-3">
                            <p>Solar inverter adalah komponen utama atau otak dalam Sistem PLTS
                                Atap, terutama dalam Sistem On-grid. Saat solar inverter dinyalakan, maka membutuhkan waktu
                                60 detik untuk mengsinkronkan referensi parameter (tegangan, frekuensi, dll) dari grid PLN
                                agar inverter dapat berfungsi. Solar Inverter tidak akan berfungsi jika tidak ada listrik DC
                                dari Module Fotovoltaik dikarenakan bayangan atau terbenamnya matahari dan ketika tidak ada
                                referensi dari grid PLN atau ketika listrik PLN padam.</p>
                        </div>
                        <h3>Apa itu net metering atau kWh ekspor dan impor apa itu pembangkit untuk kepentingan sendiri atau
                            Self Consumption? </h3>
                        <div class="toggle-4">
                            <p>kWh ekspor adalah jumlah energi listrik yang disalurkan dari
                                Sistem PLTS Atap ke sistem jaringan PLN, sedangkan kWh impor adalah jumlah energi listrik
                                yang diterima dari jaringan PLN yang kemudian keduanya tercata pada kWh meter ekspor impor
                                (Permen ESDM No. 49, 2018). Sedangkan pembangkit self consumption adalah pembangkit yang
                                terhubung dengan jaringan PLN akan tetapi tidak ada kegiatan ekspor impor didalamnya, sistem
                                akan dibatasi berdasarkan beban minimum dalam bangunan.</p>
                        </div>
                        <h3>Bagaimana cara perhitungan ekspor impor energi listrik dari Sistem PLTS Atap?</h3>
                        <div class="toggle-5">
                            <p>- Energi listrik yang diekspor ke jaringan PLN yang tercatat di kWh meter ekspor impor akan
                                dikalikan 65%.</p>
                            <p>- Perhitungan energi listrik pelanggan PLTS Atap akan dilakukan setiap bulan berdasarkan
                                selisih antara kWh impor dengan nilah ekspor</p>
                            <p>- Apabila nilai kWh ekspor lebih besar dari impor, maka selisih akan diakumulasikan sebagai
                                pengurangan sebelumnya.</p>
                            <p>- Selisih yang diperhitungkan akan diakumulasikan paling lama 3 bulan untuk periode tagihan
                                listrik bulan Januari-Maret, April-Juni, Juli-September atau Oktober-Desember.</p>
                            <p>- Apabila akumulasi selisih tersisa dipengujung periode, selisih akan dinihilkan dan
                                perhitungan selisih dimulai pada periode berikutnya.</p>
                        </div>
                        <h3>Berapa area atap yang dibutuhkan untuk memasang Sistem PLTS Atap? </h3>
                        <div class="toggle-6">
                            <p>Untuk 1kWp (1000Wp) sistem, dibutuhkan 6m2 dengan berat 12kg/m2
                                tergantung ukuran modul fotovoltaik yang digunakan</p>
                        </div>
                        <h3>Berapa umur dari Sistem PLTS Atap? </h3>
                        <div class="toggle-7">
                            <p>Jika Sistem PLTS Atap dipasang dengan baik, sistem dapat
                                beroperasi sampai dengan 20-25 tahun. Product Warranty dari Modul Fotovoltaik 10 tahun,
                                Solar Inverter 5 tahun dengan warranty instalasi antara 1-2 tahun.</p>
                        </div>
                        <h3>Berapa persenkah penghematan tagihan listrik yang didapat jika memasang Sistem PLTS Atap? </h3>
                        <div class="toggle-8">
                            <p>Penghematan yang akan didapatkan diantara 30-50 persen dari
                                tagihan listrik anda setiap bulannya.</p>
                        </div>
                        <h3>Siapa sajakah yang dapan melakukan pembangunan dan pemasangan Sistem PLTS Atap? </h3>
                        <div class="toggle-9">
                            <p>Adapun pemasangan Sistem PLTS Atap wajib dilakukan oleh Badan
                                Usaha dan lembaga milik pemerintah pusat atau lembaga milik pemerintah daerah yang sudah
                                terdaftar sebagai Badan Usaha Jasa Penunjang Tenaga Listrik yang telah dipublikasikan pada
                                laman Direktoran Jenderal Energi Baru, Terbarukan dan Konservasi Energi (Dirjen EBTKE),
                                Direktorat Jenderal Ketenagalistrikan dan PT PLN (Persero).</p>
                        </div>
                        <h3>Bagaimana cara konsultasi untuk mengetahui ukuran yang sesuai untuk bangunan, tahapan atau
                            persyaratan dan harga dari Sistem PLTS Atap?</h3>
                        <div class="toggle-10">
                            <p>Untuk konsultasi lebih lanjut bisa menghubungi team kita melalui
                                messenger atau kirimkan pertanyaan ke massasurya.id@gmail.com. Team kita akan membantu anda
                                untuk Check ukuran yang anda butuhkan, Select EPC Kontraktor yang sesuai untuk anda dan
                                kemudian anda bisa Own sistem anda sendiri dengan mudah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>