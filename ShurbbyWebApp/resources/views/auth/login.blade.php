<link rel = "stylesheet" href = "/css/login.css">
@extends('layouts.login-register')

@section('header')

<x-header label="เข้าสู่ระบบ"/>

@endsection

@section('inside-body')
<div class="login-framework">
    <div class="login-head-topic-description">
        <div class="login-head-topic">
            ยินดีต้อนรับสู่ Shrubby
        </div>
        <div class="login-head-description">
            สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้
        </div>
    </div>
    <div class="login-body">
        <div class="login-body-topic">
            ลงชื่อเข้าสู่ระบบ
        </div>
        <form class="login-form-section" method="POST" action="{{ route('login') }}" id="login-form">
            @csrf
            <!--wait for code that can check that input is name or email-->
            <div class="login-form-input-group" form="login-form">
                <div class="login-form-topic">
                    อีเมล
                </div>
                <input  type="email"
                        class="login-form-input @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required autocomplete="email"
                        autofocus placeholder="shrubby@gmail.com"
                >
            </div>

            <div class="login-form-input-group" form="login-form">
                <div class="login-form-topic">
                    รหัสผ่าน
                </div>
                <input  id="password"
                        type="password"
                        class="login-form-input @error('password') is-invalid @enderror"
                        name="password"
                        required autocomplete="current-password"
                        placeholder="รหัสผ่าน"
                >
                
            </div>
        </form>
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="login-forget-btn">
                ลืมรหัสผ่านหรือไม่ ?
            </a>
        @endif
        <!-- error message when email or password incorrect-->

        @if($message=Session::get('error'))
        <div class="login-wrong-user">
            {{-- <button type="button" class='login-button-close' data-dismiss="alert">x</button> --}}
            {{$message}}
        </div>
        @endif


        <div class="login-button-section">
            <button class="login-login-btn" type="submit" form="login-form">
                เข้าสู่ระบบ
            </button>
            <button class="login-register-btn" type="button" onclick="location.href='register'">
                สมัครสมาชิก
            </button>
        </div>
    </div>
</div>
@endsection