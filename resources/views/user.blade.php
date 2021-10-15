@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <h1 class="mb-4 text-center">ユーザ設定</h1>
    
    {{ Auth::user()->name }}さん
    <button class="btn btn-primary"><i class="far fa-heart"></i></i>お気に入りレシピ</button>
    <button class="btn btn-primary"><i class="far fa-eye-slash"></i>非表示食材の設定</button>
    
    <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
    <button class="btn btn-primary"><i class="fas fa-sign-out-alt"></i>ログアウト</button>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
@endsection