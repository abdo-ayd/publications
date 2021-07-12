@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 1%">
    <div class="container">

        <div class="container">
            <div class="row">
              <div class="col">
                <div class="jumbotron">
                    <h1 class="display-4">Create Post!</h1>

                    <hr class="my-4">
                    <p></p>
                    <a class="btn btn-primary btn-lg" href="{{route('post.index')}}" role="button">Posts</a>
                  </div>
              </div>

            </div>
            <div class="row">
                @if (count($errors)>0)
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>
                        {{$item}}
                    </li>

                    @endforeach
                </ul>

                @endif
              <div class="col">
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">content</label>
                        <input type="text" class="form-control" name="content">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Photo</label>
                        <input type="file" class="form-control" name="photo">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Post</button>
                      </div>


                  </form>
              </div>
            </div>
          </div>
      </div>

</div>

@endsection
