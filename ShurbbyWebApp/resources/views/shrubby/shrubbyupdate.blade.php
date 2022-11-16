<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/shrubby/shrubbyupdate.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="แก้ไขกระทู้"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="shrubby-framework">
                    <div class="background-framework">
                        <form class="shrubby-create" id="shrubby-create" action="{{route('updateShrubby',$shrubby->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="shrubby-each-topic-framework">
                                <div class="shrubby-topic">
                                    ชื่อกระทู้
                                </div>
                                <input name="title" id="title" type="text" form="shrubby-create" class="topic-input" placeholder="ตั้งชื่อกระทู้" value="{{ $shrubby->title }}">
                            </div>
                            <div class="shrubby-each-topic-framework">
                                <div class="shrubby-topic">
                                    แท็กกระทู้
                                </div>
                                <input name="tags" id="tags" type="text" form="shrubby-create" class="topic-input" placeholder="แท็กกระทู้" value="{{ $tag }}">
                                <div class="description">
                                    แต่ละแท็กคั่นด้วย ',' เช่น ไมยราพ,ผักชี,ไม้ยืนต้น
                                </div>
                            </div>
                            <div class="shrubby-each-topic-framework">
                                <div class="shrubby-topic">
                                    เนื้อหากระทู้
                                </div>
                                <div class="shrubby-content-area">
                                    <textarea name="content" id="editor" form="shrubby-create" class="content-input" placeholder="เนื้อหากระทู้">{{ $shrubby->content }}</textarea>
                                </div>
                            </div>
                            <div class="shrubby-button">
                                <a href="/home" class="cancel-button" form="shrubby-create">ยกเลิกการแก้ไข</a>
                                <input type="submit" class="submit-button" form="shrubby-create" value="แก้ไขกระทู้">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <x-rightpane/>
        </div>
    </div>
</body>
<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) 
            ,{
                ckfinder:{
                    uploadUrl : '{{ route('ckeditor.upload').'?_token='.csrf_token()}}'
                }
            })
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
</script>
</html>