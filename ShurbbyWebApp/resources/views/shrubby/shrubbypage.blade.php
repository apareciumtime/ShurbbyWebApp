<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/shrubby/shrubbypage.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            /* background-color: #f9f9f9; */
            min-width: 80px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 2px 8px;
            text-decoration: none;
            display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1;}

            .dropdown:hover .dropdown-content {
            display: block;
            }

            .dropdown:hover .dropbtn {
            background-color: #3e8e41;
            }
    </style>
    </head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="Shrubby"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="nav-bar">
                    nav-bar
                </div>
                <div class="shrubby-framework">
                    <div class="background-framework">
                        <div class="shrubby-create">
                            <div class="shrubby-head-framework">
                                <div class="shrubby-topic-framework">
                                    <div class="shrubby-topic">
                                        {{-- ชื่อกระทู้ --}}
                                        {{$shrubby->title}}
                                    </div>
                                    <div class="shrubby-edit-button-framework dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z"/>
                                            </svg>
                                            <div class="dropdown-content" style="left:0;">
                                                <a href="/shrubbypage/{{ $shrubby->id }}/edit">แก้ไข</a>
                                                
                                                    <form 
                                                        action="/shrubbypage/{{ $shrubby->id }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                        
                                                        <button class="text-red-500 pr-3" type="submit">
                                                            ลบ
                                                        </button>
                                                    </form>
                                            </div>
                                    </div>

                                </div>
                            </div>
                            <div class="shrubby-body-framework">
                                <div class="shrubby-tag-frame">
                                    <div class="shrubby-topic-tag-frame">
                                        <div class="shrubby-topic-tag-head">
                                            <div class="shrubby-topic-tag">
                                                แท็ก
                                            </div>
                                            <a href="#" class="shrubby-all-tag">
                                                ดูแท็กทั้งหมด
                                            </a>
                                        </div>
                                        <div class="shrubby-slot-tag-frame">
                                            @foreach($tags as $tag)
                                                <x-tag-shrubby name="{{$tag->name}}"/> 
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="shrubby-content">
                                    {{-- สวัสดีครับ ผมกำลังปลูกต้นมะเขือเทศเชอร์รี่อยู่ ช่วง 1-3 วันที่ผ่านมานี้ผมสังเกตเห็น ว่าใบมันดูหงิกงอ แต่ผมไม่แน่ใจว่า ผมคิดไปเองหรือเปล่า รบกวนผู้เชี่ยวชาญช่วยดูหน่อยครับ แล้วถ้าผิดปกติ มีวิธีแก้ยังไงบ้างครับ --}}
                                    {{$shrubby->content}}
                                </div>
                            </div>
                            <br>
                            <div class="user-info-frame">
                                <div class="upper-user-info">
                                    <div class="profile-pic-upper-user-info-frame">
                                        <div class="profile-pic-upper-user-info">
                                            pp
                                        </div>
                                    </div>
                                    <div class="name-upper-user-info">
                                        <div class="alias-name-upper-user-info">
                                            {{$shrubby->user->alias}}
                                        </div>
                                        <div class="username-name-upper-user-info">
                                            {{$shrubby->user->username}}
                                        </div>
                                    </div>
                                    <div class="right-upper-user-info">
                                        {{date('j M Y h:m',strtotime($shrubby->updated_at))}}
                                        {{-- 14 ก.พ. 2565 07:25 --}}
                                    </div>
                                </div>
                                <div class="interaction-bar-user-info">
                                    <x-interaction-engage label="like"/>
                                    <x-interaction-engage label="comment"/>
                                    <x-interaction-engage label="share"/>
                                </div>  
                            </div>
                        </div>
                        <div class="shrubby-comment">
                            Hello
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-rightpane/>
    </div>
</body>
</html>