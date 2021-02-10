<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 7px;
        left: 10px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=6281282528654&text=Hi! Got any questions? i'm happy to help " class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<footer class="footer-area" id="contact_page">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Contacts</h5>
                        {{-- <h3 class="dark-color">Find Us By Bellow Details</h3> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-xs-12 col-sm-4">
                    <div class="footer-box">

                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div> --}}
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-box">
                        <a href="tel:+62 813 1120 0711">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                        </a>
                        <p>+62 812-8252-8654</p>
                    </div>
                    <div class="space-30 hidden visible-xs"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="footer-box">
                        <a href="mailto:info@koenergia.com" target="_blank">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                        </a>
                        <p>info@koenergia.com</p>
                    </div>
                </div>
                <div class="space-60"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.284100823312!2d106.782111!3d-6.221331999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x177e810eec32a7f4!2sInfiniti%20Office%20%7C%20Bellezza%20BSA%20%7C%20Virtual%20Office%20%26%20Event%20Space!5e0!3m2!1sid!2sid!4v1603186007377!5m2!1sid!2sid"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="comment-respond">
                        <form action="{{ url('/email') }}" class="comment-form">
                            @csrf
                                <h6 style="color: #8790af; float: left; margin: 5px 0 7px 0">Name :</h6>
                                <input type="text" name="nama" class="form-control" placeholder="">
                                <h6 style="color: #8790af; float: left; margin: 7px 0 7px 0">E-mail :</h6>
                                <input type="email" name="penerima" class="form-control" placeholder="">
                                <h6 style="color: #8790af; float: left; margin: 7px 0 7px 0">Messages :</h6>
                                <textarea name="pesan" id="comment" rows="5" class="form-control"
                                placeholder=""></textarea>
                                <div class="space-30"></div>
                            <button type="submit" value="Kirim" class="bttn-default">Send</button>
                        </form>
                    </div>
                </div>
</footer>
{{-- <section id="questions_page" class="questions-area section-padding-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <div class="space-100"></div>
                        <h3 style="color: black">Sosial Media</h3>
                        
                            <a href="https://www.linkedin.com/company/koenergia" target="_blank"><i
                                    class="fa fa-linkedin-square fa-2x"></i></a>
                            
                            <a href="https://www.facebook.com/koenergiacom" target="_blank"><span
                                    class="fa fa-facebook-square fa-2x"></span></a>
                            
                            <a href="https://instagram.com/koenergiacom?igshid=dge5aux1yz6t" target="_blank"><span
                                    class="fab fa-instagram fa-2x"></span></a>
                            
                            <a href="https://www.youtube.com/" target="_blank"><span
                                    class="fab fa-youtube fa-2x"></span></a>
            </div>
        </div>
    </div>
</section>  --}}
{{-- <footer class="footer-area" id="contact_page">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="sosmed">
                    <a href="https://www.linkedin.com/company/koenergia" target="_blank"><i
                            class="fa fa-linkedin-square fa-2x"></i></a>
                    <a href="https://www.facebook.com/koenergiacom" target="_blank"><span
                            class="fa fa-facebook-square fa-2x"></span></a>
                    <a href="https://instagram.com/koenergiacom?igshid=dge5aux1yz6t" target="_blank"><span
                            class="fab fa-instagram fa-2x"></span></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer-Bootom -->
    <!-- Footer-Bootom-End -->
</footer> --}}

@include('blog.footer')
