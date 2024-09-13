@extends('layouts.template')
@section('title', 'home')

@section('content')
<h1>"Crear Colaborador"</h1>
<a href="{{route('users.create')}}">Crear Colaborador</a>

    @foreach ($users as $user)
    <li>
        <a href="{{route('users.show',$user->id)}}">{{$user->name}}</a>
    </li>
    @endforeach   
    {{$users->links()}}
        
@endsection