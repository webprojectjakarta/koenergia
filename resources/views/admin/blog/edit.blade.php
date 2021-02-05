@section('js')
            <script type="text/javascript">
                function readURL() {
                    var input = this;
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $(input).prev().attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(function () {
                    $(".uploads").change(readURL)
                    $("#f").submit(function(){
                        // do ajax submit or just classic form submit
                      //  alert("fake subminting")
                        return false
                    })
                })
            </script>
        
        @stop

        @extends('admin.layout.app')

        @section('content')

        <form method="post" action="{{ route('adminBlog.update', $data->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
        <div class="row">
                    <div class="col-md-12 d-flex align-items-stretch grid-margin">
                      <div class="row flex-grow">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Update Content</h4>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Title</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Image</label>
                                    <div class="col-md-6">
                                        <img class="product" width="200" height="200" @if($data->image) src="{{ asset('images/user/'.$data->image) }}" @endif />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="image">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">content</label>
                                    <div class="col-md-12">
                                        <textarea style="font-size: 13pt; padding:3px;" type="text" class="form-control" name="content" value="{{ $data->content }}" data-bv-notEmpty="true" rows="40">{{ $data->content }}</textarea> 
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary" id="submit">
                                        Update
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                                Reset
                                    </button>
                                    <a href="{{route('adminBlog.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
        </form>
        @endsection