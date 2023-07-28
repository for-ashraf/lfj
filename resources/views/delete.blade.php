@extends('/layout/admin_master') <!-- Specify the parent view to extend -->

@section('content')
{{Form::Open(array('url'=>'app-blog-post'))}}
<p>This is my form</p>
{{Form::close()}}

@endsection