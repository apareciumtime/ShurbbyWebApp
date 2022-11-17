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
            ({{$clumppy->movements->count()}} ความเคลื่อนไหว)
        </div>
        <div class="movement-page-privacy">
            <!-- Receive status indicate privacy status -->
            <x-privacy-status status='public'/>
        </div>
        <div class="movement-page-edit">
            <a href="/movementupdate" class="movement-page-edit-link-to">
                แก้ไข
            </a>
        </div>
    </div>
    <div class="movement-page-tag-framework">
        <x-tag-framework type="movement" id="{{$movement->id}}"/>
    </div>
    <div class="movement-picture-section">
        <div class="movement-picture-framework">
        </div>
        @foreach ($movement_images as $movement_image)
            <img src="{{asset($movement_image->image)}}" class="image-movement" style="width:50%; height:50%;">
        @endforeach
    </div>
    <div class="movement-page-description">
        {{$movement->description}}
    </div>
    <div class="movement-interaction-engage-bar">
        <x-interaction-engage label='like'/>
        <x-interaction-engage label='comment'/>
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
        <x-will-comment-movement/>
        <x-comment-movement/>
        <x-comment-movement/>
        <x-comment-movement/>
    </div>
</div>
@endsection