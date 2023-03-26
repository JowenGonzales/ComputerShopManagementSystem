@extends('layouts.app')

@section('content')
    <div class="">
        <form class="login" method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-center">Login</h1>
            <input type="email" placeholder="Email" id="email" name="email">
            <input type="password" placeholder="Password" id="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>

@endsection
