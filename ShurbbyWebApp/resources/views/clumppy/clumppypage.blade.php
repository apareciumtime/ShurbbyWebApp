<link rel = "stylesheet" href = "/css/clumppy/clumppypage.css">
@extends('layouts.app')

@section('header')

<x-header label="Clumppy"/>

@endsection

@section('inside-body')

<div class="clumppy-framework">
    <div class="clumppy-page-creator-bar">
        <div class="clumppy-page-add-new-movement">
            <a href="/movementcreate">
                เพิ่มความเคลื่อนไหวใหม่
            </a>
        </div>
    </div>
    <div class="clumppy-page-topic-amount-privacy-edit">
        <div class="clumppy-page-topic">
            น้องอะโวะ
        </div>
        <div class="clumppy-page-amount">
            (5 ความเคลื่อนไหว)
        </div>
        <div class="clumppy-page-privacy">
            <!-- Receive status indicate privacy status -->
            <x-privacy-status status='public'/>
        </div>
        <div class="clumppy-page-edit">
            <a href="/clumppyupdate">
                แก้ไข
            </a>
        </div>
    </div>
    <div class="clumppy-page-description">
        น้องอะโวะ เริ่มปลูกกะจะเอาไว้ขายคับ น้องน่ารักดี ใครมีเทคนิคดี ๆ เอามาแชร์กันได้นะคับ
    </div>
    <div class="clumppy-page-plant-amount-date-age">
        <div class="clumppy-page-plant-amount">
            มีทั้งหมด 12 ต้น
        </div>
        <div class="clumppy-page-plant-date">
            วันที่เริ่มปลูก 14 พ.ย. 2562
        </div>
        <div class="clumppy-page-plant-age">
            อาย 2 ปี 1 เดือน 21 วัน
        </div>
    </div>
    <div class="clumppy-page-tag-framework">
        <x-tag-framework/>
    </div>

    <div class="clumppy-page-gallery">
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
        <x-movement-card/>
    </div>
</div>
@endsection