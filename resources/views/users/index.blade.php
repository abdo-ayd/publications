@extends('layouts.app')
@section('content')
<div class="container">

    <div class="jumbotron">
        <h1 class="display-4">manage users !</h1>

        <hr class="my-4">
        @if (Auth::user()->admin == 1)

        <a class="btn btn-primary btn-lg" href="{{route('users.create')}}" role="button">Create User</a>
    </div>

  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">number</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">admin</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php
            $i=1;
        @endphp
            @foreach ($user as $item)
            <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td> @if ($item->admin)
                <a href="{{route('users.notAdmin',['id'=>$item->id])}}"> delete admin</a>

            @else
            <a href="{{route('users.admin',['id'=>$item->id])}}">make admin</a>

            @endif
          </td>
            <td>
                <a href="{{route('users.delete',['id'=>$item->id])}}" class="fas fa-2x fa-trash-alt" ></a>
            </td>
          </tr>

            @endforeach


      </tbody>
    </table>

        @else
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>

                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $i=1;
              @endphp

                  <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{Auth::user()->name}}</td>
                  <td>{{Auth::user()->email}}</td>

                  <td>
                      <a href="{{route('users.delete',['id'=>Auth::id()])}}" class="fas fa-2x fa-trash-alt" ></a>
                  </td>
                </tr>




            </tbody>
          </table>
        @endif
</div>

@endsection
