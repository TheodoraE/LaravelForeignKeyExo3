@extends('template.main')

@section('content')
    <div class="mt-5">
        <a href="/users/create" class="mb-5">Ajouter un user</a>
    </div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Nickname</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->nickname}}</td>
                    <td>{{$user->profiles->name}}</td>
                    <td>{{$user->profiles->age}}</td>
                    <td>{{$user->profiles->phone}}</td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection