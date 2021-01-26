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
        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea",
                plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
                ],
 
                toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
                toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
 
                menubar: false,
                toolbar_items_size: 'small',
 
                style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
 
                templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                ]
            });
        </script>
        @stop

        @extends('admin.layout.app')

        @section('content')

        <form method="post" action="{{ route('adminProject.update', $data->id) }}" enctype="multipart/form-data">
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

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Capacity</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="subtitle" value="{{ $data->subtitle }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">COD</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="content" value="{{ $data->content }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Image</label>
                                    <div class="col-md-6">
                                        <img class="product" width="200" height="200" @if($data->image) src="{{ asset('images/user/'.$data->image) }}" @endif />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="image">
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary" id="submit">
                                                Update
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                                Reset
                                    </button>
                                    <a href="{{route('adminProject.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
        </form>
        @endsection