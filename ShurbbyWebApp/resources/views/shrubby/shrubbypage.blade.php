<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shrubby</title>

    <link rel = "stylesheet" href = "/css/shrubby/shrubbypage.css">
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
</head>
<body>
    <x-leftpane/>
    <div class="right-section">
        <x-header label="Shrubby"/>
        <div class="body-right-section">
            <div class="inside-body">
                <div class="shrubby-framework">
                    <div class="background-framework">
                        <div class="shrubby-create">
                            <div class="shrubby-topic-framework">
                                <div class="shrubby-topic">
                                    {{$shrubby->title}}
                                </div>
                                <div class="shrubby-edit-button-framework dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z"/>
                                    </svg>
                                    <div class="dropdown-content">
                                        <a href="/shrubbypage/{{ $shrubby->id }}/edit" class="edit-menu">
                                            แก้ไข
                                        </a>
                                        <form 
                                            action="/shrubbypage/{{ $shrubby->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="delete-shrubby-btn" type="submit">
                                                ลบ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                                {!! $shrubby->content !!}
                            </div>
                            <div class="user-info-frame">
                                <div class="upper-user-info">
                                    <div class="profile-pic-upper-user-info-frame">
                                        <div class="profile-pic-upper-user-info">
                                            <img src="{{$shrubby->user->profile_image}}">
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
                                    </div>
                                </div>
                                <div class="interaction-bar-user-info">
                                    <x-interaction-engage label="like"/>
                                    <x-interaction-engage label="comment"/>
                                    <x-interaction-engage label="share"/>
                                </div>  
                            </div>
                        </div>
                        <div class="shrubby-comment-section">
                            <div class="shrubby-comment-header">
                                <a href="#" class="shrubby-comment-topic">ความคิดเห็น</a>
                            </div>
                            <div class="shrubby-will-to-comment">
                                <div class="shrubby-will-to-comment-topic">
                                    แสดงความคิดเห็นของฉัน
                                </div>
                                <div class="shrubby-comment-writer">
                                    <form action="{{route('commentpost',['shrubbyid'=>$shrubby->id,'parentid'=>-1])}}" method="POST" id="comment" enctype="multipart/form-data">
                                        @csrf
                                        <textarea name="content" id="editor" form="comment" placeholder="แสดงความคิดเห็นของฉัน"></textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="submit-comment-button-framework">
                                <button class="submit-comment-btn" type="submit" form="comment">
                                    แสดงความคิดเห็น
                                </button>
                            </div>
                            <div class="shrubby-comment-content">
                                @foreach($comments as $comment)
                                    <x-comment-shrubby id="{{$comment->id}}"/>
                                @endforeach
            
                            </div>
                        </div>
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