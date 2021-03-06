@extends('front.layouts.default')
@section('meta_title', 'Региcтрация')
@section('content')



<img src="{!! captcha_src() !!}" alt="captcha" onclick="this.src = '{!! captcha_src() !!}'+ Math.random()">
<form action="{{ route('register') }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="login" value="{{ old('login') }}" placeholder="Логин">
	<input type="password" name="password" value="{{ old('password') }}" placeholder="Пароль">
	<input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Повторить пароль">
	<input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail">
	<input type="text" name="captcha" placeholder="Капча">
	<input type="text" name="referer" placeholder="Реферер" value="{{ $referer }}" disabled>
	<button type="submit">Регистрация</button>
</form>

@if ($errors->has('login'))
	{{ $errors->first('login') }}
@endif

@if ($errors->has('password'))
	{{ $errors->first('password') }}
@endif

@if ($errors->has('password_confirmation'))
	{{ $errors->first('password_confirmation') }}
@endif

@if ($errors->has('email'))
	{{ $errors->first('email') }}
@endif

@if ($errors->has('captcha'))
	{{ $errors->first('captcha') }}
@endif

@endsection