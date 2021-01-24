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

        <form method="post" action="{{ route('adminContribusi.update', $data->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
        <div class="row">
                    <div class="col-md-12 d-flex align-items-stretch grid-margin">
                      <div class="row flex-grow">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Update Careers</h4>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Title</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment1</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement1" value="{{ $data->requirement1 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment2</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement2" value="{{ $data->requirement2 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment3</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement3" value="{{ $data->requirement3 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment4</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement4" value="{{ $data->requirement4 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment5</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement5" value="{{ $data->requirement5 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment6</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement6" value="{{ $data->requirement6}}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment7</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement7" value="{{ $data->requirement7 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment8</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement8" value="{{ $data->requirement8 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment9</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement9" value="{{ $data->requirement9 }}">
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Requirtment10</label>
                                    <div class="col-md-12">
                                        <input id="title" type="text" class="form-control" name="requirement10" value="{{ $data->requirement10 }}">
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary" id="submit">
                                        Update
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                                Reset
                                    </button>
                                    <a href="{{route('adminContribusi.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
        </form>
        @endsection