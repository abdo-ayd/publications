@extends('layouts.app')
@section('content')


<div class="container"  >
    <div class="container">

        <div class="row">
          <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">New posts!</h1>
                <p class="lead">group work.</p>
                <hr class="my-4">
                <p></p>
                <a class="btn btn-primary btn-lg" href="{{route('post.index')}}" role="button">Posts</a>

              </div>
          </div>

        </div>

        <div class="row">
          <div class="col">
            @foreach ($post as $item)
            @if ($item->user->id == Auth::id())
            <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
                <div class="card-header">
                  {{$item->user->name}}
                </div>
                <div class="card-body" >
                  <h4 class="card-title">{{$item->title}}</h4>
                  <div class="container">
                    <div class="card" style="width: 33rem;">
                        <img src="{{URL::asset($item->photo)}}" class="img-tumbnail" alt="{{$item->photo}}">

                      </div>
                  </div>
                  <p class="card-text">{{$item->content}}.</p>

                    <span><a class="text-danger"  href="{{route('post.hdelete',['id'=>$item->id])}}"><li class="fas fa-2x fa-trash-alt"></li></a></span>
                    <a href="{{route('post.restore',['id'=>$item->id])}}"><i class="fas fa-2x fa-reply"></i></a>
                </div>
              </div>



            @endif
@endforeach
          </div>
        </div>
      </div>
</div>

@endsection
