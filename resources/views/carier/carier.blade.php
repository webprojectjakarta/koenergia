<section id="questions_page" class="questions-area section-padding-3" style="background-color: white">
    <div class="container">
        <div class="col-xs-12 col-sm-12">
                @if(!$datas->isEmpty())
                <div class="row">
                    <div class="page-title text-center">
                        <h3 class="dark-color"><b>FULFILLING CAREERS WITH KOENERGIA</b></h3>
                        <div class="space-30"></div>
                        <p>If you’re looking to work with a company that has a genuine commitment to helping create clean renewable energy and improving sustainability, then look no further. You’ll be joining a team of experienced and dedicated staff that are focused on getting the job done to a high standard and supporting each other every step of the way. We invest in our people, so you will be fully trained in whatever role you take on and there will be plenty of opportunities for CPD and career progression.
                        Take a look to see our current available positions.</p>
                    </div>
                </div>
                @endif
            <div class="space-100"></div>
            <div class="row">
              @if(!$datas->isEmpty())
              <div class="page-title text-center">
                <h3 class="dark-color"><b>CURRENT OPENINGS</b></h3>
              </div>
              @else
              <div class="page-title text-center">
                <h3 class="dark-color"><b>THERE ARE NO JOB VACANCIES</b></h3>
              </div>
              @endif
                        
                    <style>
                    .accordion {
                      background-color: #eee;
                      color: #444;
                      cursor: pointer;
                      padding: 18px;
                      width: 100%;
                      border: none;
                      text-align: left;
                      outline: none;
                      font-size: 15px;
                      transition: 0.4s;
                    }

                    .active1, .accordion:hover {
                      background-color: #ccc;
                    }

                    .accordion:after {
                      content: '\002B';
                      color: #777;
                      font-weight: bold;
                      float: right;
                      margin-left: 5px;
                    }

                    .active1:after {
                      content: "\2212";
                    }

                    .panel {
                      padding: 0 18px;
                      margin-bottom: -2px;
                      border: 0 solid transparent;
                      background-color: white;
                      max-height: 0;
                      overflow: hidden;
                      transition: max-height 0.2s ease-out;
                    }
                    .li{
                        text-indent: 1.8em;
                        color: #000;
                    }
                    </style>
                    @foreach($datas as $data)
                    <button class="accordion">{{$data->title}}</button>
                    <div class="panel">
                      <p>
                          <b>
                            Requirements:
                          </b>
                      </p>
                      <p>
                        @if (!$data->requirement1 == NULL || !$data->requirement1 == '')
                        <li class="li">{{$data->requirement1}}</li>
                        @endif
                      </p>
                      <p>
                        @if (!$data->requirement2 == NULL || !$data->requirement2 == '')
                        <li class="li">{{$data->requirement2}}</li>
                        @endif
                      </p>
                      <p>
                        @if (!$data->requirement3 == NULL || !$data->requirement3 == '')
                        <li class="li">{{$data->requirement3}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement4 == NULL || !$data->requirement4 == '')
                        <li class="li">{{$data->requirement4}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement5 == NULL || !$data->requirement5 == '')
                        <li class="li">{{$data->requirement5}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement6 == NULL || !$data->requirement6 == '')
                        <li class="li">{{$data->requirement6}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement7 == NULL || !$data->requirement7 == '')
                        <li class="li">{{$data->requirement7}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement8 == NULL || !$data->requirement8 == '')
                        <li class="li">{{$data->requirement8}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement9 == NULL || !$data->requirement9 == '')
                        <li class="li">{{$data->requirement9}}</li>
                        @endif
                    </p>
                    <p>
                        @if (!$data->requirement10 == NULL || !$data->requirement10 == '')
                        <li class="li">{{$data->requirement10}}</li>
                        @endif
                    </p>
                    </div>
                    @endforeach

                    <script>
                    var acc = document.getElementsByClassName("accordion");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                      acc[i].addEventListener("click", function() {
                        this.classList.toggle("active1");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                          panel.style.maxHeight = null;
                        } else {
                          panel.style.maxHeight = panel.scrollHeight + "px";
                        } 
                      });
                    }
                    </script>
            </div>
        </div>
              @if(!$datas->isEmpty())
              <div class="kolom4">
                <div class="space-30"></div>
                <a href="mailto:info@koenergia.com" class="buttonBtn button2">APPLY FOR INTERNSHIP</a>
              </div>
              @endif
        
    </div>
</section>
