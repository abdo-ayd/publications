@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 5%">
    <form >
        @csrf
        @method('PUT')

        <ul class="list-group">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <li class="list-group-item list-group-item-info">{{$user->name}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Age</label>
                <li class="list-group-item list-group-item-dark">  {{$user->profile->age}}</li>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">City</label>
                <li class="list-group-item list-group-item-dark"> {{$user->profile->city}}</li>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jop</label>
                <li class="list-group-item list-group-item-dark">{{$user->profile->job}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">gender</label>
                <li class="list-group-item list-group-item-dark"> {{$user->profile->gender}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Bio</label>
                <li class="list-group-item list-group-item-dark"> {{$user->profile->bio}}</li>
              </div>



          </ul>

        @if (Auth::id() === $user->profile->user_id)
        <div class="container">
            <a class="btn btn-warning" href="{{route('profile.edit',['id'=>$user->profile->id])}}">Edit</a>
         </div>
        @endif

      </form>

</div>
@endsection
