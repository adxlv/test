@extends('templates.layout')

@section('content')
<!-- Page Content -->
<div class="container">

<!-- Page Heading -->
<h1 class="my-4">Page Heading
<small>Secondary Text</small>
</h1>

<div class="row">
    @foreach($posts as $post)
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card h-100">

                    <img class="card-img-top" src="{{$post->img}}" alt="">


                <div class="card-body">
                    <h4 class="card-title">
                    <a href="#">{{$post->title}}</a>
                    </h4>
                    <p class="card-text">{{$post->body}}</p>
                </div>

                <a href="/blog/{{$post->id}}" class="btn btn-primary">Open</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
