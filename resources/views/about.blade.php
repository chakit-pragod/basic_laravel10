@extends('layout')

@section('title', 'About Me')

@section('content')
    <h2>About Us</h2>
    <hr>
    <p>ผู้พัฒนาระบบ : {{$name}}</p>
    <p>วันเริ่มต้นระบบ : {{$date}}</p>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum nemo tenetur aut omnis deleniti obcaecati nobis
        expedita neque ratione! Dolores quis quos exercitationem dolor tempore sequi aperiam animi consequuntur vel.</p>
@endsection
