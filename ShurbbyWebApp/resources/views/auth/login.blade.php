<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt:400" rel="stylesheet">
    <link rel = "stylesheet" href = "/css/login.css">
</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="เข้าสู่ระบบ"/>

        <div class="body-right-section">
            <div class="body-right-topic">
                <div class="head-topic">
                    ยินดีต้อนรับสู่ Shrubby
                </div>
                <div class="description-topic">
                    สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้
                </div>
            </div>
            <div class="body-right-form">
                <div class="topic-login">
                    ลงชื่อเข้าสู่ระบบ
                </div>
                <form class="form-section" method="POST" action="{{ route('login') }}" id="login-form">
                    @csrf
                    <!--wait for code that can check that input is name or email-->
                    <div class="form-item" form="login-form">
                        <div class="topic">
                            อีเมล
                        </div>
                        <input  type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required autocomplete="email"
                                autofocus placeholder="shrubby@gmail.com"
                        >
                    </div>

                    <div class="form-item" form="login-form">
                        <div class="topic">
                            รหัสผ่าน
                        </div>
                        <input  id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="รหัสผ่าน"
                        >
                        
                    </div>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forget-btn">
                            ลืมรหัสผ่านหรือไม่ ?
                        </a>
                    @endif
                    <!-- error message when email or password incorrect-->
                </form>
                @if($message=Session::get('error'))
                <div class="wrong-user">
                    {{-- <button type="button" class='close' data-dismiss="alert">x</button> --}}
                    {{$message}}
                </div>
                @endif


                <div class="button-section">
                    <button class="login-btn" type="submit" form="login-form">
                        เข้าสู่ระบบ
                    </button>
                    <button class="register-btn" type="button" onclick="location.href='register'">
                        สมัครสมาชิก
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>