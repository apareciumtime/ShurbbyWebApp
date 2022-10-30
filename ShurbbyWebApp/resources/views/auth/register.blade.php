<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <form class="form-section"  method="POST" action="{{ route('register') }}" id="register-form">
                        @csrf
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
                                        autofocus placeholder="shrubbynarak"
                                >
                        </div>
                        <div class="form-item" form="register-form">
                                <div class="topic">
                                    ชื่อบัญชีผู้ใช้
                                </div>
                                <input  type="text"
                                        class="form-control"
                                        name="username"
                                        autofocus placeholder="@shrubbynarak"
                                        value="@"
                                >
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
                                        autofocus placeholder="shrubby@gmail.com"
                                >
                        </div>
                        <div class="form-item" form="register-form">
                                <div class="topic">
                                    รหัสผ่าน
                                </div>
                                <input  type="password"
                                        class="form-control"
                                        name="password"
                                        autofocus placeholder="รหัสผ่าน"
                                >
                        </div>
                        <div class="form-item" form="register-form">
                                <div class="topic">
                                    ยืนยันรหัสผ่าน
                                </div>
                                <input  type="password"
                                        class="form-control"
                                        name="password-confirm"
                                        autofocus placeholder="ยืนยันรหัสผ่าน"
                                >
                        </div>
                    </form>
                    <form class="form-section"  method="POST" action="{{ route('register') }}" id="register-form">
                        @csrf
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
                                        id="birthdate"
                                >
                        </div>
                        <div class="form-item" form="register-form">
                            <div class="topic">
                                เพศ
                            </div>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">ชาย</option>
                                <option value="female">หญิง</option>
                                <option value="custom">กำหนดเอง</option>
                                <option value="undefine">ไม่ระบุ</option>
                            </select>
                        </div>
                        <div class="form-item" form="register-form">
                                <div class="topic">
                                    หมายเลขโทรศัพท์
                                </div>
                                <input  type="tel"
                                        class="form-control"
                                        name="telNum"
                                        autofocus placeholder="081-234-56xx"
                                >
                        </div>
                        <div class="form-item" form="register-form">
                                <div class="topic">
                                    ที่อยู่
                                </div>
                                <textarea placeholder="ที่อยู่"></textarea>
                        </div>
                    </form>
                </div>
                
            </div>

            
        </div>
        <div class="button-section">
            <button class="register-btn" type="button" onclick="location.href='register'">
                สมัครสมาชิก
            </button>
        </div>
    </div>
</body>
</html>