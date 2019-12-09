@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif


        <div>
            <a href="{{route('user_store')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>

        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom </th>
                <th>email</th>
                <th>Mots de passe</th>
                <th>Status</th>
                <th>Editer</th>
                <th>suprimer</th>
            </tr>

            @foreach($user as $user)
                <tr>
                    <td></td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->status}}</td>
                    <!-- <td><a href="" class="byn btn-primary">Editer</a></td> -->
                    <td>
                        <p class="btn btn-warning"> <a href ="{{route('user_edit',['id'=>$user->id])}}" >Editer</a> </p>
                    </td>
                    <td>
                        <p class="btn btn-danger"> <a href ="{{route('user_delete',['id'=>$user->id])}}" >Suprimer</a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection