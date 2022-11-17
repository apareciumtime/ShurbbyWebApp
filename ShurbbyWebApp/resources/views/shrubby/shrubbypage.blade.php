<link rel = "stylesheet" href = "/css/shrubby/shrubbypage.css">
<title>{{$shrubby->title}}</title>
@extends('layouts.app')
@section('header')
    <x-header label="Shrubby"/>
@endsection

@section('inside-body')
<div class="shrubby-page-framework">
    <div class="shrubby-page-background-framework">
        <div class="shrubby-page-content-topic-edit">
            <div class="shrubby-page-content-topic">
                {{$shrubby->title}}
            </div>
            <div class="shrubby-page-content-edit">
                @if(isset(Auth::user()->id) && Auth::user()->id == $shrubby->user_id)
                    <a href="/shrubbypage/{{ $shrubby->id }}/edit" class="shrubby-page-content-edit-link-to">
                        แก้ไข
                    </a>
                        <!-- <form 
                            action="/shrubbypage/{{ $shrubby->id }}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="delete-shrubby-btn" type="submit">
                                ลบ
                            </button>
                        </form> -->
                @endif
            </div>
        </div>
        <div class="shrubby-page-content-tag-frame">
            <div class="shrubby-page-content-tag-head">
                <div class="shrubby-page-content-tag-head-topic">
                    แท็ก
                </div>
                <a href="#" class="shrubby-page-content-tag-head-view-all">
                    ดูทั้งหมด
                </a>
            </div>
            <div class="shrubby-page-content-tag-slot-outside">
                <div class="shrubby-page-content-tag-slot">
                    @foreach($tags as $tag)
                        <x-tag-shrubby name="{{$tag->name}}"/> 
                    @endforeach
                </div>
            </div>
        </div>
        <div class="shrubby-page-content-content">
            {!! $shrubby->content !!}
        </div>

        <div class="shrubby-page-interaction-engagement-bar">
            <x-interaction-engage label='like' id='{{ $shrubby->id }}' type='shrubby'/>
            <x-interaction-engage label='comment'/>
            <div class="shrubby-page-post-date">
                โพสต์เมื่อ {{time_elapsed_string($shrubby->created_at)}}
            </div>
        </div>

        <div class="shrubby-page-content-user-info">
            <a href="/journal" class="shrubby-card-content-user-info-username-link-to">
                <img src="{{$shrubby->user->profile_image}}" class="shrubby-page-content-user-info-pic">
            </a>
            <div class="shrubby-page-content-user-info-name">
                <div class="shrubby-page-content-user-info-alias">
                    <a href="/journal" class="shrubby-page-content-user-info-alias-link-to">
                        {{$shrubby->user->alias}}
                    </a>
                </div>
                <div class="shrubby-page-content-user-info-username">
                    <a href="/journal" class="shrubby-page-content-user-info-username-link-to">
                        {{$shrubby->user->username}}
                    </a>
                </div>
            </div>
        </div>

        <div class="shrubby-comment-section">
            <div class="shrubby-comment-header">
                <a href="#" class="shrubby-comment-topic">ความคิดเห็น</a>
            </div>
            <!-- <div class="shrubby-will-to-comment">
                <div class="shrubby-will-to-comment-topic">
                    แสดงความคิดเห็นของฉัน
                </div>
                <div class="shrubby-comment-writer">
                    <form action="{{route('commentpost',['shrubbyid'=>$shrubby->id,'parentid'=>-1])}}" method="POST" id="comment" enctype="multipart/form-data">
                        @csrf
                        <textarea name="content" id="editor" form="comment" placeholder="แสดงความคิดเห็นของฉัน"></textarea>
                    </form>
                </div>
            </div> -->
            <!-- <div class="submit-comment-button-framework">
                <button class="submit-comment-btn" type="submit" form="comment">
                    แสดงความคิดเห็น
                </button>
            </div> -->
            <div class="shrubby-comment-content">
                @foreach($comments as $comment)
                    <x-comment-shrubby id="{{$comment->id}}"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
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