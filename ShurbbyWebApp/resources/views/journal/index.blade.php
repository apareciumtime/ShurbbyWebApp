<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/journalIndex.css">
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
                            <div class="profilepic-frame">
                                <img src="{{Auth::user()->profile_image}}" class="profile-pic">
                                <a href="">เปลี่ยนรูปโปรไฟล์</a>
                            </div>
                            
                            <div class="personal-frame">
                                <div class="profilename-frame">
                                    <div class="name-frame">
                                        <h1>NAMEEEEEEE</h1>
                                        <br>
                                        <h2>@username</h2>
                                    </div>
                                    <div class="change">
                                        <a href="">Change</a>
                                    </div>
                                </div>

                                <div class="tag-frame">

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <x-rightpane/>
        </div>
    </div>
</body>
</html>