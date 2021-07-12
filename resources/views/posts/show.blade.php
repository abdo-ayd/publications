@extends('layouts.app')
@section('content')
<div class="col">
    <div class="card" style="width: 50%;">
    <img src="{{URL::asset($post->photo)}}" class="card-img-top" alt="{{$post->fhoto}}">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text"> {{$post->content}}.</p>
        <p>created_at :  {{$post->created_at}}</p>
        <p>updated_at :  {{$post->updated_at}}</p>
        <a class="btn btn-primary btn-lg" href="{{route('post.index')}}" role="button">Posts</a>

    </div>
    </div>
</div>
@endsection
