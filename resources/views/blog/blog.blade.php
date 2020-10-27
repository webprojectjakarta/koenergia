@section('js')
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 10
      });

  } );
  </script>
<div class="section-padding">
    <div class="container">
        <div class="row">        
            @foreach($datas as $data)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <article class="post-single">
                    <figure class="post-media">
                        <img src="{{url('images/user', $data->image)}}" alt=""
                         style="haight : 500px; width : 500px;">
                    </figure>
                    <div class="post-body">
                        <div class="post-meta">
                            <div class="post-tags"><a href="#"></a></div>
                                <div class="post-date">{{$data->created_at}}</div>
                            </div>
                        <h4 class="dark-color"><a href="{{ url('/detailBlog', $data->id) }}">{{$data->title}}</a></h4>
                        <a href="{{ url('/detailBlog', $data->id) }}" class="read-more">View Article</a>
                    </div>
                </article>
            </div>
        @endforeach
        </div>
         {{ $datas->links() }}
    </div>
</div>
