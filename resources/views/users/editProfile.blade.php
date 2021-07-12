@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 5%">
    <a  class="btn btn-primary " href="{{ route('profile') }}"> Profile</a>
    <br>
    <br>
    <form method="POST" action="{{route('profile.update',['id'=>$user->profile->id])}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" name="name" value="{{$user->name}}" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Age</label>
            <input type="text" class="form-control" name="age" value="{{$user->profile->age}}" >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">city</label>
            <input type="text" class="form-control" name="city"  value="{{$user->profile->city}}"  >
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Job</label>
            <input type="text" class="form-control" name="job" value="{{$user->profile->job}}" >
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">gender</label>
          <select class="form-control" name="gender" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>

          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Bio</label>
          <textarea class="form-control" name="bio"   rows="3">
            {{$user->profile->bio}}
          </textarea>
        </div>

        <div class="container">
            <button type="submit" class="btn btn-dark">Update</button>
        </div>
      </form>

</div>
@endsection
