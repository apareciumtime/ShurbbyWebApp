<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>

    <link rel = "stylesheet" href = "/css/journal/journalIndex.css">
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
                <div class="journal-framework">
                    <div class="journal-creator-bar">
                        <div class="journal-creator-bar-shrubby">
                            <a href="/shrubbycreate">
                                สร้างชรับบี
                            </a>
                        </div>
                        <div class="journal-creator-bar-clumppy">
                            <a href="{{route('clumppycreate')}}">
                                สร้างคลัมปี
                            </a>
                        </div>
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
                            <div class="info-user-name-frame">
                                <div class="info-user-name-left">
                                    <div class="info-user-name-alias">
                                        {{Auth::user()->alias}}
                                    </div>
                                    <div class="info-user-name-username">
                                        {{Auth::user()->username}}
                                    </div>
                                </div>
                                <a href="/journal/update" class="info-user-name-right">
                                    แก้ไข
                                </a>
                            </div>
                            <div class="info-description-framework">
                                {{Auth::user()->bio}}
                            </div>
                            <div class="info-birthdate-and-gender-frame">
                                <div class="info-birthdate">
                                    วันเกิด {{Auth::user()->birthdate}}
                                </div>
                                <div class="info-gender">
                                    เพศ {{Auth::user()->gender}}
                                </div>
                            </div>
                            <div class="info-address">
                                ที่อยู่ {{Auth::user()->address_info}}
                            </div>
                            <div class="info-website">
                                เว็บไซต์ {{Auth::user()->website}}
                            </div>
                            <div class="info-amount-clumppy-shrubby">
                                <div class="info-amount-clumppy">
                                    คลัมปี {{Auth::user()->clumppies()->count()}}
                                </div>
                                <div class="info-amount-shrubby">
                                    ชรับบี {{Auth::user()->shrubbies()->count()}}
                                </div>
                            </div>
                            <x-tag-framework/>
                        </div>
                    </div>
                    <div class="slot-of-myclumppy-myshrubby">
                        <x-shrubby-slider label="Shrubby ของฉัน"/>
                        <x-clumppy-slider label="Clumppy ของฉัน"/>
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