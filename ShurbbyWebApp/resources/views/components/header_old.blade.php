<link rel = "stylesheet" href = "/css/components/header.css">
<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:100">
<body>
<div class="headbar">
    <div class="logo">
        <a href = "{{route('home')}}" class="webboard">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d = "M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </a>
    </div>
    <div class="menubar">
        <div class = "menubar-menu">
            <a href = "{{route('home')}}" class = "webboard-menu">
                หน้ากระดาน
            </a>
        </div>
        <div class = "menubar-menu">
            <a href = "{{route('timeline')}}" class = "timeline-menu">
                ไทม์ไลน์
            </a>
        </div>
        <div class = "menubar-menu">
            <a href = "{{route('journal')}}" class = "journal-menu">
                สมุดบันทึก
            </a>
        </div>
    </div>
    <div class="label">
        <a href = "{{route('home')}}" class = "label">
            <h1>Shrubby</h1>
        </a>
    </div>
    <div class="loginbar">
        @guest
            @if (Route::has('login'))
                <div class = "loginbar-menu">
                    <a href = "{{route('login')}}" class = "login-menu">
                        เข้าสู่ระบบ
                    </a>
                </div>
            @endif

            @if (Route::has('register'))
                <div class = "loginbar-menu">
                    <a href = "{{route('register')}}" class = "login-menu">
                        สมัครสมาชิก
                    </a>
                </div>
            @endif
        @else
            <a href="#" class="signin">
                {{ Auth::user()->name }}
            </a>
            <div class="signup">
                <a href="{{ route('logout') }}" class="signup"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    ออกจากระบบ
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endguest
    </div> 
</div>
</body>