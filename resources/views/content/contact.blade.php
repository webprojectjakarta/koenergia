<style>
    .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:7px;
            left:20px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://web.whatsapp.com/send?phone=6282389123898&text=Hello Koenergia" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
<footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="footer-box">
                        <a href="https://goo.gl/maps/ZwzjJQV68pHeX7kFA" target="_blank">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                        </a>
                            <p>Jalan Letjen Soepeno, Permata Hijau, Jakarta</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="footer-box">
                        <a href="tel:+62 813 1120 0711">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                        </a>
                            <p>+62 813 1120 0711</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="footer-box">
                        <a href="mailto:info@koenergia.com" target="_blank">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                        </a>
                            <p>info@koenergia.com</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="footer-box">
                        <a href="https://web.whatsapp.com/send?phone=6282389123898&text=Hello Koenergia" target="_blank">
                            <div class="box-icon">
                            <span class="fa fa-whatsapp"></span>
                            </div>
                        </a>
                        <p>+6282389123898</p>
                        </div>
                    </div>
                    <div class="space-30"></div>
                    <div class="col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.284100823312!2d106.782111!3d-6.221331999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x177e810eec32a7f4!2sInfiniti%20Office%20%7C%20Bellezza%20BSA%20%7C%20Virtual%20Office%20%26%20Event%20Space!5e0!3m2!1sid!2sid!4v1603186007377!5m2!1sid!2sid"
                                    width="500" height="300"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </p>
                    </div>

                    <div class="col-md-6">
                        <div class="comment-respond">
                            <form action="{{ url('/email') }}" class="comment-form">
                            @csrf
                                        <input type="text" name="nama" class="form-control" placeholder="Name">
                                        <div class = "space-30"></div>
                                        <input type="email" name="penerima" class="form-control" placeholder="Email">
                                        <div class="space-30"></div>
                                        <textarea name="pesan" id="comment" rows="5" class="form-control" placeholder="Type Your Mesage..."></textarea>
                                        <div class="space-30"></div>  
                            <button type="submit" value="Kirim" class="bttn-default">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
            Copyright © {{date('Y')}} Koenergia</span>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom-End -->
    </footer>