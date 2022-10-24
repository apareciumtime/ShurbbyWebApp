<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt:100" rel="stylesheet">
    <link rel = "stylesheet" href = "/css/register.css">
</head>
<body>
    <section class="header">
        <x-header/>
    </section>

    <section class="content">
        <div class="header-content">
            <div class="logo" id="register-Logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            </div>
            <div class="head-content">ยินดีต้อนรับสู่ Shrubby</div>
            <div class="description">สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้</div>
            <br>
            <div class="topic">สร้างบัญชีผู้ใช้งานใหม่</div>
        </div>

        <form method="POST" action="{{ route('register') }}" class="form-register" id="login-form" enctype="multipart/form-data">
            <div class="input-form">
                @csrf
                <div class="topic">ข้อมูลผู้ใช้งาน</div>
                <div class="group-input">
                    <label>ชื่อผู้ใช้งาน</label>
                    <input type="text" placeholder="ชื่อผู้ใช้งาน" id="name"  class="form-register form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>

                <div class="group-input">
                    <label>รหัสผ่าน</label>
                    <input type="password" placeholder="รหัสผ่าน" id="password"  class="form-register form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                </div>

                <div class="group-input">
                    <label>ยืนยันรหัสผ่าน</label>
                    <input type="password" placeholder="รหัสผ่าน" id="password_confirm"  class="form-register form-control @error('password_confirm') is-invalid @enderror" name="password_confirm" value="{{ old('password_confirm') }}" required autocomplete="password_confirm" autofocus>
                </div>

                <div class="group-input">
                    <label>อีเมล</label>
                    <input id="email" type="text" placeholder="อีเมล" class="form-register form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>

            </div>

            <div class="input-form">

                <div class="topic">ข้อมูลส่วนตัว</div>
                <div class="group-input">
                    <label>หมายเลขโทรศัพท์</label>
                    <input type="text" placeholder="หมายเลขโทรศัพท์" id="telNum" class="form-register form-control @error('telNum') is-invalid @enderror" name="telNum" value="{{ old('telNum') }}" required autocomplete="telNum" autofocus pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>

                <div class="group-input">
                    <label>ที่อยู่</label>
                    <input type="text" placeholder="ที่อยู่" id="address_info"  class="form-register form-control @error('address_info') is-invalid @enderror" name="address_info" value="{{ old('address_info') }}" required autocomplete="address_info" autofocus>
                </div>

                <div class="group-input">
                    <label>จังหวัด</label>
                    <input type="text" placeholder="จังหวัด" id="address_province"  class="form-register form-control @error('address_province') is-invalid @enderror" name="address_province" value="{{ old('address_province') }}" required autocomplete="address_province" autofocus>
                </div>
                
                <div class="group-input">
                    <label>เขต/อำเภอ</label>
                    <input type="text" placeholder="เขต/อำเภอ" id="address_district"  class="form-register form-control @error('address_district') is-invalid @enderror" name="address_district" value="{{ old('address_district') }}" required autocomplete="address_district" autofocus>
                </div>
                
                <div class="group-input">
                    <label>แขวง/ตำบล</label>
                    <input type="text" placeholder="แขวง/ตำบล" id="address_sub_district"  class="form-register form-control @error('address_sub_district') is-invalid @enderror" name="address_sub_district" value="{{ old('address_sub_district') }}" required autocomplete="address_sub_district" autofocus>
                </div>
                
                <div class="group-input">
                    <label>รหัสไปรษณีย์</label>
                    <input type="text" placeholder="รหัสไปรษณีย์" id="address_postcode"  class="form-register form-control @error('address_postcode') is-invalid @enderror" name="address_postcode" value="{{ old('address_postcode') }}" required autocomplete="address_postcode" autofocus>
                </div>

                <div class="group-input">
                    <label>วัน/เดือน/ปี เกิด</label>
                    <input id="birthday" type="date" class="form-register form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>
                </div>

                <div class="group-input">
                    <label>เพศ</label>
                    <select id="gender" name="gender" class="form-register form-control">
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                        <option value="undefine">กำหนดเอง</option>
                    </select>
                </div>
            </div>
        </form>

        <button type="submit" class="register-btn" form="login-form">
            สร้างบัญชีผู้ใช้งานใหม่
        </button>

    </section>
</body>
</html>