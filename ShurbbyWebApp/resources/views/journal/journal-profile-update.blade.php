<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>

    <link rel = "stylesheet" href = "/css/journal/journalprofileupdate.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

    {{-- for crop and preview profile pict --}}
    <link rel="stylesheet" href="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.css') }}">

</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="สมุดบันทึก"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="profile-update-framework">
                    <div class="profile-update-topic-submit">
                        <div class="profile-update-topic">
                            แก้ไขหน้าโพรไฟล์
                        </div>
                        <button form="profile-form" class="profile-update-submit">
                            บันทึก
                        </button>
                    </div>
                    <div class="info-framework">
                        <div class="profile-pic-frame">
                            <img src="{{Auth::user()->profile_image}}" class="profile-pic profile-image">
                            <label>
                                <input type="file" style="display: none;" name="image" id="image">
                                <a>
                                    เปลี่ยน<br>รูปโพรไฟล์
                                </a>
                            </label>
                        </div>
                        <div class="info-user-framework">
                            <form action="{{route('editProfile')}}" method="POST" id="profile-form" class="profile-form" enctype="multipart/form-data">
                                @csrf
                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        ชื่อแสดง
                                    </div>
                                    <input  type="text"
                                            name="alias"
                                            class="info-user-input-normal" 
                                            placeholder="ชื่อแสดง" 
                                            id="alias"
                                            value="{{Auth::user()->alias}}">
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        ชื่อผู้ใช้งาน
                                    </div>
                                        <input  type="text" 
                                                name="username"
                                                class="info-user-input-locked" 
                                                placeholder="ชื่อแสดง" 
                                                id="username" 
                                                value="{{Auth::user()->username}}"
                                                readonly>
                                </div>
                                        
                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        อีเมล
                                    </div>
                                    <input  type="email" 
                                    name="email"
                                    class="info-user-input-locked" 
                                    placeholder="อีเมล" 
                                    id="email"
                                    value="{{Auth::user()->email}}"
                                    readonly>
                                </div>
                                
                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                            หมายเลขโทรศัพท์
                                        </div>
                                        <input  type="text"
                                                class="info-user-input-normal"
                                                name="telNum"
                                                id="telNum"
                                                value="{{Auth::user()->telNum}}"
                                                autofocus placeholder="081-234-56xx"
                                        >
                                        @error('telNum')
                                            <span class="invalid-feedback" role="alert">
                                                <small style="white">{{ $message }}</small>
                                            </span>
                                        @enderror
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        Bio
                                    </div>
                                    <div class="info-user-input-with-counter">
                                        <textarea   type="textarea" 
                                                    name="bio"
                                                    class="info-user-input-normal-bio" 
                                                    placeholder="ข้อมูลผู้ใช้งาน" 
                                                    id="bio"
                                                    value="{{Auth::user()->bio}}"></textarea>
                                        <div class="info-user-input-normal-bio-counter">
                                            0/200 ตัวอักษร
                                        </div>
                                    </div>
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        วันเกิด
                                    </div>
                                    <input  type="date" 
                                            name="birthdate"
                                            class="info-user-input-normal"  
                                            id="birthdate"
                                            value="{{Auth::user()->birthdate}}">
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        เพศ
                                    </div>
                                    <select     name="gender"
                                                id="gender"
                                                class="info-user-input-normal"
                                                value="{{Auth::user()->gender}}">
                                        <option value="undefine">ไม่ระบุ</option>
                                        <option value="male">ชาย</option>
                                        <option value="female">หญิง</option>
                                        <option value="custom">กำหนดเอง</option> 
                                    </select>
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        ที่อยู่
                                    </div>
                                        <textarea   type="textarea" 
                                                    name="address_info"
                                                    class="info-user-input-normal-address" 
                                                    placeholder="ที่อยู่" 
                                                    id="address_info">{{Auth::user()->address_info}}</textarea>
                                </div>

                                <div class="info-user-input-line">
                                    <div class="info-user-input-label">
                                        เว็บไซต์
                                    </div>
                                    <input  type="text"
                                            name="website"
                                            class="info-user-input-normal" 
                                            placeholder="เว็บไซต์" 
                                            id="website"
                                            value="{{Auth::user()->website}}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-rightpane/>
        </div>
    </div>

    {{-- for crop and preview profile pict --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.js') }}"></script> 

    <script>
        $('#image').ijaboCropTool({
            //profile_image = class of img element in html -> make picture update without refresh page
            preview : '.profile-image',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['CHANGE','QUIT'],
            buttonsColor:['#FFFFFF','#4B819F', -15],
            processUrl:'{{ route("croppict") }}',
            withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess:function(message, element, status){
                alert(message);
            },
            onError:function(message, element, status){
                alert(message);
            }
       });
   </script>
</body>
</html>