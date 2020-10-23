@section('js')
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });

  } );
  </script>

<div class="section-padding" id="table">
    <div class="container">
        <div class="row">
         @foreach($datas as $data)
            <div class="col-xs-12">
                <article class="post-single sticky">
                    <figure class="post-media">
                            <img src="{{asset('asset/images/sticky-image.jpg')}}" alt="">
                    </figure>
                    <div class="post-body">
                        <div class="post-meta">
                            <div class="post-tags"><a href="#">People</a></div>
                            <div class="post-date">{{$data->created_at}}</div>
                        </div>
                            <h4 class="dark-color"><a href="single.html">{{$data->title}}</a></h4>
                            <p>{{$data->content}}</p>
                            <a href="single.html" class="read-more">View Article</a>
                    </div>
                </article>
                </div> 
                @endforeach
            </div>
            {{-- {!! $datas->links() !!} --}}
    </div>
</div>
