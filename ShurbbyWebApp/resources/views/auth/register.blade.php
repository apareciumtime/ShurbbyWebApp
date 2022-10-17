<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300|Fahkwang:300|Sarabun:300" rel="stylesheet">
    <link rel = "stylesheet" href = "/css/Homepage/signup.css">
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
            <a href="#" class="webboard">กระดาน</a>
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
        <div class="signup-head">
            <div class="logo" id="signup-Logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            </div>
            <h2>ยินดีต้อนรับสู่ Shrubby</h2>
            <h1>สังคมแบ่งปันเกี่ยวกับต้นไม้</h1>
            <h3>สร้างบัญชีผู้ใช้งานใหม่</h3>
        </div>

        <form method="POST" action="{{ route('register') }}">
            <div class="inputBlock">
                <div class="inputColumn">
                    @csrf
                    <div class="formItem">
                        <h3>ชื่อผู้ใช้งาน</h3>
                        <input type="text" placeholder="ชื่อผู้ใช้งาน, อีเมลล์" id="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="formItem">
                        <h3>รหัสผ่าน</h3>
                        <input  id="password" type="password" placeholder="รหัสผ่าน" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="formItem">
                        <h3>ยืนยันรหัสผ่าน</h3>
                        <input id="password-confirm" type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="formItem">
                        <h3>อีเมลล์</h3>
                        <input id="email" type="text" placeholder="อีเมลล์" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <div class="inputColumn">
                <div class="formItem">
                    <h3>หมายเลขโทรศัพท์</h3>
                    <input id="telNum" type="text" placeholder="หมายเลขโทรศัพท์" class="form-control @error('telNum') is-invalid @enderror" name="telNum" value="{{ old('telNum') }}" required autocomplete="telNum" autofocus>
                    @error('telNum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="formItem">
                    <h3>ที่อยู่</h3>
                    <input id="address_info" type="text" placeholder="ที่อยู่" class="form-control @error('address_info') is-invalid @enderror" name="address_info" value="{{ old('address_info') }}" required autocomplete="address_info" autofocus>
                    @error('address_info')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="formRowItem">
                    <div>
                        <h3>จังหวัด</h3>
                        <input id="address_province" type="text" placeholder="จังหวัด" class="form-control @error('address_province') is-invalid @enderror" name="address_province" value="{{ old('address_province') }}" required autocomplete="address_province" autofocus>
                        @error('address_province')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h3>เขต/อำเภอ</h3>
                        <input id="address_district" type="text" placeholder="เขต/อำเภอ" class="form-control @error('address_district') is-invalid @enderror" name="address_district" value="{{ old('address_district') }}" required autocomplete="address_district" autofocus>
                        @error('address_district')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <h3>แขวง/ตำบล</h3>
                        <input id="address_sub_district" type="text" placeholder="แขวง/ตำบล" class="form-control @error('address_sub_district') is-invalid @enderror" name="address_sub_district" value="{{ old('address_sub_district') }}" required autocomplete="address_sub_district" autofocus>
                        @error('address_sub_district')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="formItem">
                    <h3>รหัสไปรษณีย์</h3>
                    <input id="address_postcode" type="text" placeholder="รหัสไปรษณีย์" class="form-control @error('address_postcode') is-invalid @enderror" name="address_postcode" value="{{ old('address_postcode') }}" required autocomplete="address_postcode" autofocus>
                    @error('address_postcode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="formRowItem">
                    <div>
                        <h3>วันเกิด</h3>
                        <div class="birthDay">
                            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                            @error('birthday')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--<input type="text" placeholder="วันที่">
                            <input type="text" placeholder="เดือน">
                            <input type="text" placeholder="ปี">-->
                        </div>
                    </div>
                    <div>
                        <h3>เพศ</h3>
                        <input id="gender" type="text" placeholder="เพศ" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="signupBut">
                    สร้างบัญชีผู้ใช้งานใหม่
                </button>
                
            </div>
            <!--
            <div class="button">
                <a href=""  type="submit" class="signupBut">สร้างบัญชีผู้ใช้งานใหม่</a>
            </div>-->
        </div>
        </form>
    </section>
</body>
</html>