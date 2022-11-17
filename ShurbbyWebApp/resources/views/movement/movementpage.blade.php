<link rel = "stylesheet" href = "/css/movement/movementpage.css">
@extends('layouts.app')

@section('header')
    <x-header label="Clumppy"/>
@endsection

@section('inside-body')

<div class="movement-framework">
    <div class="movement-page-topic-amount-privacy-edit">
        <div class="movement-page-topic">
            น้องอะโวะ
        </div>
        <div class="movement-page-amount">
            (5 ความเคลื่อนไหว)
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
        <x-tag-framework/>
    </div>
    <div class="movement-picture-section">
        <div class="movement-picture-framework">
        </div>
        <img src="/storage/pic.jpg" class="image-movement">
    </div>
    <div class="movement-page-description">
        น้องอะโวะ เริ่มปลูกกะจะเอาไว้ขายคับ น้องน่ารักดี ใครมีเทคนิคดี ๆ เอามาแชร์กันได้นะคับ
    </div>
    <div class="movement-interaction-engage-bar">
        <x-interaction-engage label='like'/>
        <x-interaction-engage label='comment'/>
        <div class="user-info-post-date">
            โพสต์เมื่อ 14 พ.ย. 2563
        </div>
    </div>

    <div class="user-info-bar">
        <img src="/storage/pic.jpg" class="user-info-pic">
        <div class="user-info-name">
            <div class="user-info-name-alias">
                Alias
            </div>
            <div class="user-info-name-username">
                @username
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