@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#table').DataTable({
            "iDisplayLength": 10
        });

    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#table2').DataTable({
            "iDisplayLength": 10
        });

    });

</script>
@stop
@extends('admin.layout.app')

@section('content')

@endsection
