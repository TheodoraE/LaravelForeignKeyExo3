@extends('template.main')

@section('content')
    <div class="mt-5">
        <a href="/" class="mb-5">Retour</a>

        <h1>Ajouter un user</h1>
        <form action="/users" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Email : </label>
                <input type="email" name="email" id="">
            </div>

            <div class="form-group">
                <label for="">Nickname : </label>
                <input type="text" name="nickname" id="">
            </div>


            <div class="form-group">
                <label for="">Name : </label>
                <input type="text" name="name" id="">
            </div>

            <div class="form-group">
                <label for="">Age : </label>
                <input type="number" name="age" id="">
            </div>

            <div class="form-group">
                <label for="">Phone : </label>
                <input type="text" name="phone" id="">
            </div>

            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
@endsection