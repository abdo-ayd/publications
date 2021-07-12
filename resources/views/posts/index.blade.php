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
                <a class="btn btn-primary btn-lg" href="{{route('post.create')}}" role="button">Add Post</a>
                <a class="btn btn-danger btn-lg" href="{{route('post.trashed')}}" role="button">Trashed <li class="fas fa-trash-alt"></li></a>

            </div>
          </div>

        </div>
        <div class="row">
          <div class="col">
            @foreach ($post as $item)
            <div class="card">
                <div class="card-header">
                    <a  href="{{route('profile.show',$item->user->profile->id)}}"><h6>{{$item->user->name}}</h6> </a>

                </div>
                <div class="card-body" >
                  <h4 class="card-title">{{$item->title}}</h4>
                  <div class="container">
                    <div class="card" style="width: 33rem;">
                     <img src="{{URL::asset($item->photo)}}" class="img-tumbnail" alt="{{$item->photo}}">

                      </div>
                  </div>
                  <p class="card-text">{{$item->content}}.</p>
                  <br>
                  <br>
                  <p>{{$item->created_at}}</p>

                  <div class="container">
                    <div class="row row-cols-0 row-cols-sm-0 row-cols-md-3">
                      <div class="col">
                          @if ($item->user_id == Auth::id())
                          <form action="{{route('post.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <span><button class="text-danger" type="submit" ><li class="fas fa-1x fa-trash-alt"></li></button></span>
                          </form>
                      </div>
                      <div class="col">
                        <a href="{{route('post.edit',$item->id)}}"><i class="fas fa-1x fa-edit"></i></a>
                      </div>
                          @endif

                      <div class="col">
                        <a href="{{route('post.show',$item->slug)}}"><i class="far fa-1x fa-eye"></i></i></a>

                      </div>

                    </div>
                </div>
                <div class="containar">
                    <hr>
                    <h4>comments</h4>
                     @include('posts.comments',['comments'=>$item->comments, 'post_id'=>$item->id])
                    <hr>
                    <form action="{{route('comments.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="comment">
                            <input type ='hidden' class="form-control" name="post_id" value="{{$item->id}}">

                        </div>
                        <button type="submit" class="btn btn-primary">add comment</button>
                    </form>


                </div>


              </div>
            </div>


            @endforeach

          </div>
          <br>
        </div>
      </div>
</div>

@endsection
