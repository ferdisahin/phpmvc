@extends('layout')

@section('title', 'Anasayfa')

@section('content')
    <form method="POST">
        <div>
            <input type="text" class="@hasError('username')" name="username" value="@getData('username')" placeholder="Ad">
            @getError('username')
        </div>
        <div>
            <input type="text" name="password" placeholder="Şifre">
            @isset($errors['password'])
                <div style="color: red">{{$errors['password'][0]}}</div>
            @endisset
        </div>
        <div>
            <input type="text" name="rep_password" placeholder="Şifre Tekrarı">
            @isset($errors['rep_password'])
                <div style="color: red">{{$errors['rep_password'][0]}}</div>
            @endisset
        </div>
        <div>
            <button type="submit">Giriş Yap</button>
        </div>
    </form>
@endsection