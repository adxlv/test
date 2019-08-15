@extends('templates.layout')

@section('content')
<!-- Page Content -->
<div class="container">

<!-- Page Heading -->
<h1 class="my-4">Page Heading
<small>Secondary Text</small>
</h1>

<div class="row">

        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                <a href="#">{{$post->title}}</a>
                </h4>
            <p class="card-text">{{$post->body}}</p>
            </div>
            </div>
        </div>

</div>
  <!-- /.row -->
@endsection
