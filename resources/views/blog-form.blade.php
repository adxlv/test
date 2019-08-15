@extends('templates.layout')

@section('content')

<form method="POST" action="/blog/create">
    @csrf
    <div class="col-xs-12">
        <label for="">Title</label>
        <input type="text" name="title">
    </div>
    <br>
    <div class="col-xs-12">
        <label for="">Body</label>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="Save">
</form>

@endsection
