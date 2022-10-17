<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Fahkwang:300|Sarabun:100" rel="stylesheet">
    <link rel = "stylesheet" href = "/css/Homepage/login.css">
</head>
<body>
    <section class = "head">
        <!-- Logo on the top left of window-->
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>

        <div class="head-menu">
            <a href="{{route('home')}}" class="webboard">กระดาน</a>
            <a href="#" class="timeline">ไทม์ไลน์</a>
            <a href="#" class="journal">สมุดบันทึก</a>
        </div>

        <div class="head-label">
            <a href="#">Shrubby</a>
        </div>

        <div class="head-signin">
            <a href="{{route('login')}}" class="signin">เข้าสู่ระบบ</a>
            <a href="{{route('register')}}" class="signup">สมัครสมาชิก</a>
        </div>
    </section>

    <section class="content">
        <div class="article">
            <h2 class="title">คำอธิบาย</h2>
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore odio alias odit maxime, in fugiat sit, incidunt nemo veritatis qui necessitatibus amet quam sapiente reprehenderit esse eligendi repudiandae voluptates laudantium deserunt est! Iure, earum mollitia! Error ullam perferendis pariatur cumque mollitia ipsum facere sequi, earum amet officiis modi dicta harum officia esse minus consectetur! Ad, possimus qui nobis animi ullam consequatur adipisci repellendus porro dignissimos quae fugiat delectus? Dolorum exercitationem eaque quas quibusdam voluptatum quasi dolorem ratione deserunt recusandae, iste error accusantium nulla necessitatibus aliquid, odit amet labore nam deleniti incidunt possimus ipsum. Itaque odit placeat iusto veritatis praesentium modi corrupti cum atque excepturi aperiam libero dicta nesciunt eveniet rem commodi sapiente quisquam officiis expedita, mollitia quod assumenda sed? Voluptates aliquid nulla corrupti itaque minima sed eveniet deleniti non sit fugit est ipsam, dolore eum exercitationem. A omnis quis ducimus dolores assumenda doloremque culpa blanditiis nostrum voluptate accusamus odit sequi corrupti at, molestiae ut ipsum, officia earum debitis? Itaque qui, exercitationem laboriosam, voluptates sed quas id sunt ea quam totam odio. Commodi sunt iusto quo deleniti optio distinctio incidunt, harum at. Fugiat nesciunt, ab culpa rerum unde saepe accusamus. Quia, nihil numquam sed quo provident debitis? Asperiores excepturi ratione dolor.</div>
            <h2 class="title">นโยบาย</h2>
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, perspiciatis fugit. In officia esse doloremque voluptatibus, quos corrupti harum nisi, nobis, ad eveniet ipsa! Libero asperiores at hic non harum eligendi nisi numquam facere, recusandae amet, eum consequatur ea quasi itaque temporibus voluptatum, autem officiis ratione sequi quae! Impedit iure architecto et cupiditate voluptates tempore ipsum incidunt, accusantium libero placeat? Illo saepe porro quod quibusdam nihil repellat nulla voluptas odio eos dolore asperiores neque nemo quam blanditiis, autem nam non? Unde recusandae perspiciatis quisquam, deserunt consequuntur ratione? Eos saepe suscipit ex! Natus molestiae dolor obcaecati est itaque perferendis eaque, consequuntur expedita quas eius voluptates, temporibus, laudantium omnis dolore quasi similique nostrum optio saepe iure! Nesciunt illum laboriosam suscipit corporis architecto non culpa obcaecati consequatur omnis facilis repellat est sed beatae sit quasi animi eius rerum, iusto sint ut veritatis, facere cumque voluptate. Voluptates enim neque eligendi alias ad, ducimus nam reprehenderit nulla tempore similique libero cumque amet magnam? Ipsam suscipit recusandae voluptatem dolores reiciendis at sunt neque vero pariatur culpa porro possimus soluta quos, fugit cum totam repellat, reprehenderit, architecto eos! Laborum quod corrupti ipsam cum quam voluptatum asperiores temporibus cumque error pariatur dolorem, beatae doloribus neque, ducimus molestiae dolores.</div>
        </div>
        
        <div class="login">
            <div class="logo" id="loginLogo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            </div>
            <h2>ยินดีต้อนรับสู่ Shrubby</h2>
            <h1>สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้</h1>
            <h3>ลงชื่อเข้าใช้</h3>
            <div class="inputBlock">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- error message when email or password incorrect-->
                    @if($message=Session::get('error'))
                        <div class="forgetBut">
                            {{-- <button type="button" class='close' data-dismiss="alert">x</button> --}}
                            <strong>{{$message}}</strong>
                        </div>
                    @endif

                    <!--wait for code that can check that input is name or email-->
                    <div class="formItem">
                        <h3>ชื่อผู้ใช้งาน</h3>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ชื่อผู้ใช้งาน, อีเมลล์">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="formItem">
                        <h3>รหัสผ่าน</h3>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="button">
                        <button type="submit" class="loginBut">
                            เข้าสู่ระบบ
                        </button>
                    </div>
                        
                </form>
                <div class="button">
                    <!--<a href="" class="loginBut">เข้าสู่ระบบ</a>-->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgetBut">ลืมรหัสผ่านหรือไม่ ?</a>
                    @endif
                    <a href="{{ route('register') }}" class="signupBut">สร้างบัญชีใหม่</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>