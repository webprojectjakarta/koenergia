<!-- @section('js')
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });

  } );
  </script> -->

<style>
    
    .flip-box {
      width: 100%;
      height: 200px;
      border: 1px solid;
      perspective: 1000px;
    }
    
    .flip-box-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }
    
    .flip-box:hover .flip-box-inner {
      transform: rotateY(180deg);
    }
    
    .flip-box-front, .flip-box-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }
    
    .flip-box-front {
      background-color: #fff;
      color: black;
    }
    
    .flip-box-back {
      background-color:transparent;
      color: black;
      transform: rotateY(180deg);
    }
</style>
    
    @if(!$datas->isEmpty())
    <div class="container">
        <div class="row">        
          @foreach($datas as $data)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="{{url('images/user', $data->image)}}" alt="Paris" style="width:300px;height:200px">
                          </div>
                          <div class="flip-box-back">
                              <div class="space-50"></div>
                            <h4><b>{{$data->title}}</b></h4>
                            <p>Capacity: {{$data->subtitle}} kWp</p>
                            <p>COD: {{$data->content}}</p>
                          </div>
                        </div>
                      </div>
                      <div class="space-20"></div>
                </article>
                
            </div>
          @endforeach
        </div>
         {{ $datas->links() }}
    </div>
    @endif
    <div class="space-20"></div>