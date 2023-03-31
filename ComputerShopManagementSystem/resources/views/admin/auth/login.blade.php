

@extends('layouts.app')

@section('content')
    <div class="">
        <form class="login" method="POST" action="{{ route('adminLoginPost') }}">
            @csrf
            <h1 class="text-center">Admin</h1>
            <input type="text" placeholder="Email" id="email" name="email">
            <input type="password" placeholder="Password" id="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
@endsection
