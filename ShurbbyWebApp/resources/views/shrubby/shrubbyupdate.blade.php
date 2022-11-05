<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/shrubby/shrubbyupdate.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">
</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="แก้ไขกระทู้"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="nav-bar">
                    nav-bar
                </div>
                <div class="shrubby-framework">
                    <div class="background-framework">
                        <form id="shrubby-create" action="{{route('updateShrubby',$shrubby->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="shrubby-head-framework">
                                <div class="shrubby-topic-framework">
                                    <div class="shrubby-topic">
                                        ชื่อกระทู้
                                    </div>
                                    <input name="title" id="title" type="text" form="shrubby-create" class="topic-input" placeholder="ตั้งชื่อกระทู้" value="{{ $shrubby->title }}">
                                </div>
                                <!-- <div class="shrubby-edit-button-framework">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z"/>
                                    </svg>
                                </div> -->
                            </div>
                            <div class="shrubby-body-framework">
                                <div class="shrubby-topic">
                                     แท็กกระทู้
                                </div>
                                <input name="tags" id="tags" type="text" form="shrubby-create" class="topic-input" placeholder="แท็กกระทู้" value="{{ $tag }}">
                                <div class="description">
                                    แต่ละแท็กคั่นด้วย ',' เช่น ไมยราพ,ผักชี,ไม้ยืนต้น
                                </div>
                                <div class="shrubby-topic">
                                    เนื้อหากระทู้
                                </div>
                                <textarea name="content" id="content" form="shrubby-create" class="content-input" placeholder="เนื้อหากระทู้">{{ $shrubby->content }}</textarea>
                            </div>
                            <br>
                            <div class="shrubby-button">
                                <a href="/home" class="cancel-button" form="shrubby-create">ยกเลิกการแก้ไข</a>
                                <input type="submit" class="submit-button" form="shrubby-create" value="แก้ไขกระทู้">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-rightpane/>
    </div>
</body>
</html>