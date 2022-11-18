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
            <x-interaction-engage label='comment' id='{{ $shrubby->id }}' type='shrubby'/>
            <div class="shrubby-page-post-date">
                โพสต์เมื่อ {{time_elapsed_string($shrubby->created_at)}}
            </div>
        </div>

        <div class="shrubby-page-content-user-info">
            <a href="/journal" class="shrubby-card-content-user-info-username-link-to">
                <img src="{{asset($shrubby->user->profile_image)}}" class="shrubby-page-content-user-info-pic">
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
            <x-will-comment-shrubby shrubbyid="{{$shrubby->id}}"/>
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