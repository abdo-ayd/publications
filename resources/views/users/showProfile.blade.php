@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 5%">

        @csrf

        <ul class="list-group">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <li class="list-group-item list-group-item-info">{{$profile->user->name}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Age</label>
                <li class="list-group-item list-group-item-dark"> {{$profile->age}}</li>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">City</label>
                <li class="list-group-item list-group-item-dark"> {{$profile->city}}</li>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Jop</label>
                <li class="list-group-item list-group-item-dark"> {{$profile->job}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">gender</label>
                <li class="list-group-item list-group-item-dark"> {{$profile->gender}}</li>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Bio</label>
                <li class="list-group-item list-group-item-dark"> {{$profile->bio}}</li>
              </div>



          </ul>

        @if (Auth::id() === $profile->user_id)
        <div class="container">
            <a class="btn btn-warning" href="{{route('profile.edit',['id'=>$profile->id])}}">Edit</a>
         </div>
        @endif



</div>
@endsection
