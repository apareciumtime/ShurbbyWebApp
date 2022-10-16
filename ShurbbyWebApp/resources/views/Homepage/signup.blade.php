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
            <a href="#" class="signin">เข้าสู่ระบบ</a>
            <a href="#" class="signup">สมัครสมาชิก</a>
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

        <div class="inputBlock">
            <div class="inputColumn">
                <form action="" class="form">
                    <div class="formItem">
                        <h3>ชื่อผู้ใช้งาน</h3>
                        <input type="text" placeholder="ชื่อผู้ใช้งาน, อีเมลล์">
                    </div>
                    <div class="formItem">
                        <h3>รหัสผ่าน</h3>
                        <input type="text" placeholder="รหัสผ่าน">
                    </div>
                    <div class="formItem">
                        <h3>ยืนยันรหัสผ่าน</h3>
                        <input type="text" placeholder="ยืนยันรหัสผ่าน">
                    </div>
                    <div class="formItem">
                        <h3>อีเมลล์</h3>
                        <input type="text" placeholder="อีเมลล์">
                    </div>
                </form>
            </div>

            <div class="inputColumn">
                <form action="" class="form">
                    <div class="formItem">
                        <h3>หมายเลขโทรศัพท์</h3>
                        <input type="text" placeholder="หมายเลขโทรศัพท์">
                    </div>

                    <div class="formItem">
                        <h3>ที่อยู่</h3>
                        <input type="text" placeholder="ที่อยู่">
                    </div>

                    <div class="formRowItem">
                        <div>
                            <h3>จังหวัด</h3>
                            <input type="text" placeholder="จังหวัด">
                        </div>
                        <div>
                            <h3>เขต</h3>
                            <input type="text" placeholder="เขต">
                        </div>
                        <div>
                            <h3>อำเภอ</h3>
                            <input type="text" placeholder="อำเภอ">
                        </div>
                    </div>

                    <div class="formItem">
                        <h3>รหัสไปรษณีย์</h3>
                        <input type="text" placeholder="รหัสไปรษณีย์">
                    </div>

                    <div class="formRowItem">
                        <div>
                            <h3>วันเกิด</h3>
                            <div class="birthDay">
                                <input type="text" placeholder="วันที่">
                                <input type="text" placeholder="เดือน">
                                <input type="text" placeholder="ปี">
                            </div>
                        </div>
                        <div>
                            <h3>เพศ</h3>
                            <input type="text" placeholder="เพศ">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <div class="button">
            <a href="" class="signupBut">สร้างบัญชีผู้ใช้งานใหม่</a>
        </div>

    </section>
</body>
</html>