<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Prompt:400" rel="stylesheet">
    <link rel = "stylesheet" href = "/css/register.css">
</head>
<body>
    <x-leftpane/>
    <div class="right-section-form">
        <x-header label="สมัครสมาชิก"/>
        <div class="body-right-container">
            <div class="body-right-topic">
                <div class="head-topic">
                    ยินดีต้อนรับสู่ Shrubby
                </div>
                <div class="description-topic">
                    สังคมแบ่งปันประสบการณ์เกี่ยวกับต้นไม้
                </div>
            </div>

            <div class="body-right-section">
                <div class="topic-register">
                    สมัครสมาชิก
                </div>
                <br><br>
                <div class="form-container">
                    <div class="form-section">
                        <form class="form-section" method="POST" action="{{ route('register') }}" id="register-form">
                            @csrf
                            <td colspan="2"> 
                            <div class="topic">
                                ข้อมูลผู้ใช้งาน
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        ชื่อแสดง
                                    </div>
                                    <input  type="text"
                                            class="form-control"
                                            name="alias"
                                            id="alias"
                                            value="{{ old('alias') }}"
                                            autofocus placeholder="shrubbynarak"
                                    >
                                    @error('alias')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        ชื่อบัญชีผู้ใช้
                                    </div>
                                    <input  type="text"
                                            class="form-control"
                                            name="username"
                                            id="username"
                                            autofocus placeholder="@shrubbynarak"
                                            value="@"
                                            pattern="@.+"
                                            title="กรุณาใส่ข้อมูลขึ้นต้นด้วย '@'"
                                    >
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                                    <div class="comment">
                                        กรุณาใส่ข้อมูลขึ้นต้นด้วย '@' และชื่อบัญชีผู้ใช้จะไม่สามารถเปลี่ยนแปลงได้
                                    </div>
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        อีเมล
                                    </div>
                                    <input  type="email"
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            value="{{ old('email') }}"
                                            autofocus placeholder="shrubby@gmail.com"
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        รหัสผ่าน
                                    </div>
                                    <input  type="password"
                                            class="form-control"
                                            name="password"
                                            id="password"
                                            autofocus placeholder="รหัสผ่าน"
                                    >
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        ยืนยันรหัสผ่าน
                                    </div>
                                    <input  type="password"
                                            class="form-control"
                                            name="password_confirmation"
                                            id="password_confirm"
                                            autofocus placeholder="ยืนยันรหัสผ่าน"
                                    >
                            </div>
                    </div>
                    <div class="form-section">
                            <div class="topic">
                                ข้อมูลส่วนตัว
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        วันเกิด
                                    </div>
                                    <input  type="date"
                                            class="form-control"
                                            name="birthdate"
                                            value="{{ old('birthdate') }}"
                                            id="birthdate"
                                    >
                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-item" form="register-form">
                                <div class="topic">
                                    เพศ
                                </div>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="undefine">ไม่ระบุ</option>
                                    <option value="male">ชาย</option>
                                    <option value="female">หญิง</option>
                                    <option value="custom">กำหนดเอง</option>
                                    
                                </select>
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        หมายเลขโทรศัพท์
                                    </div>
                                    <input  type="text"
                                            class="form-control"
                                            name="telNum"
                                            id="telNum"
                                            value="{{ old('telNum') }}"
                                            autofocus placeholder="081-234-56xx"
                                    >
                                    @error('telNum')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-item" form="register-form">
                                    <div class="topic">
                                        ที่อยู่
                                    </div>
                                    <textarea placeholder="ที่อยู่"  name="address_info" id="address_info" class="form-control">{{ old('address_info') }}</textarea>
                                    @error('address_info')
                                        <span class="invalid-feedback" role="alert">
                                            <small style="white">{{ $message }}</small>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>

            
        </div>
        <div class="button-section">
            <button class="register-btn" type="submit" form="register-form">
                สมัครสมาชิก
            </button>
        </div>
    </div>
</body>
</html>