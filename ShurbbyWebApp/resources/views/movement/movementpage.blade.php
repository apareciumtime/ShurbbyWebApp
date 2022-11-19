<link rel = "stylesheet" href = "/css/movement/movementpage.css">
@extends('layouts.app')

@section('header')
    <x-header label="Clumppy"/>
@endsection

@section('inside-body')

<div class="movement-framework">
    <div class="movement-page-topic-amount-privacy-edit">
        <div class="movement-page-topic">
            {{$clumppy->name}}
        </div>
        <div class="movement-page-amount">
            ({{$clumppy->movements->where('like','>',-1)->count()}} ความเคลื่อนไหว)
        </div>
        <div class="movement-page-privacy">
            <!-- Receive status indicate privacy status -->
            <x-privacy-status status='{{$movement->is_private}}'/>
        </div>
        <div class="movement-page-edit">
            <a href="{{route('movementupdate',$movement->id)}}" class="movement-page-edit-link-to">
                แก้ไข
            </a>
        </div>
    </div>
    <div class="movement-page-tag-framework">
        <x-tag-framework type="movement" id="{{$movement->id}}"/>
    </div>
    <div class="movement-picture-section-outside">
        <button class="movement-picture-left-btn" onclick="plusDivs(-1)">&#10094;</button>
        <div class="movement-picture-section">
                @foreach ($movement_images as $movement_image)
                    <img src="{{asset($movement_image->image)}}" class="image-movement">
                @endforeach
            </div>
        <button class="movement-picture-right-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
    <div class="movement-page-description">
        {{$movement->description}}
    </div>
    <div class="movement-interaction-engage-bar">
        <x-interaction-engage label='like' id='{{$movement->id}}' type='movement'/>
        <x-interaction-engage label='comment' id='{{$movement->id}}' type='movement'/>
        <div class="user-info-post-date">
            {{$movement->created_at}}
        </div>
    </div>

    <div class="user-info-bar">
        <img src="{{asset($clumppy->user->profile_image)}}" class="user-info-pic">
        <div class="user-info-name">
            <div class="user-info-name-alias">
                {{$clumppy->user->alias}}
            </div>
            <div class="user-info-name-username">
                {{$clumppy->user->username}}
            </div>
        </div>
    </div>

    <div class="movement-comment-framework">
        <div class="movement-comment-topic">
            ความคิดเห็น
        </div>
        <x-will-comment-movement movementid="{{$movement->id}}"/>
        @foreach($comments as $comment)
            <x-comment-movement id="{{$comment->id}}"/>
        @endforeach
    </div>
</div>
@endsection

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("image-movement");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
}
</script>