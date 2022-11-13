<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>

    <link rel = "stylesheet" href = "/css/journal/journalIndex.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">
</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="สมุดบันทึก"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="journal-framework">
                    <div class="info-framework">
                        <div class="profile-pic-frame">
                            <img src="{{Auth::user()->profile_image}}" class="profile-pic">
                            <a href="upload-profileimage">
                                เปลี่ยน<br>รูปโพรไฟล์
                            </a>
                        </div>
                        <div class="info-user-framework">
                            <div class="info-user-name-frame">
                                <div class="info-user-name-left">
                                    <div class="info-user-name-alias">
                                        Alias
                                    </div>
                                    <div class="info-user-name-username">
                                        @username
                                    </div>
                                </div>
                                <a href="/journal/update" class="info-user-name-right">
                                    แก้ไข
                                </a>
                            </div>
                            <div class="info-description-framework">
                                
                            </div>
                            <div class="info-birthdate-and-gender-frame">
                                <div class="info-birthdate">
                                    วันเกิด
                                </div>
                                <div class="info-gender">
                                    เพศ
                                </div>
                            </div>
                            <div class="info-address">
                                ที่อยู่
                            </div>
                            <div class="info-website">
                                เว็บไซต์
                            </div>
                            <div class="info-amount-clumppy-shrubby">
                                <div class="info-amount-clumppy">
                                    คลัมปี
                                </div>
                                <div class="info-amount-shrubby">
                                    ชรับบี
                                </div>
                            </div>
                            <x-tag-framework/>
                        </div>
                    </div>
                    <div class="slot-of-myclumppy-myshrubby">
                        <x-shrubby-slider label="Shrubby ของฉัน"/>
                        <x-clumppy-slider/>
                    </div>
                </div>
            </div>
            <x-rightpane/>
        </div>
    </div>
</body>
</html>