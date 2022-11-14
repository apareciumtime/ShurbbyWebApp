<link rel = "stylesheet" href = "/css/clumppy/clumppypage.css">
@extends('layouts.app')

@section('header')

<x-header label="Clumppy"/>

@endsection

@section('inside-body')

<div class="clumppy-framework">
    <div class="clumppy-page-creator-bar">
        <div class="clumppy-page-add-new-movement">
            <a href="/clumppymovementcreate">
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
            <a href="#">
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
        <div class="clumppy-page-gallery-grid">
            <a href="#">
                <div class="clumppy-page-gallery-pic-frame" >
                    <!-- This logo icon for the clumppy that have not set display picture -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="clumppy-page-gallery-grid">
            <a href="#">
                <div class="clumppy-page-gallery-pic-frame" >
                    <!-- This logo icon for the clumppy that have not set display picture -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="clumppy-page-gallery-grid">
            <a href="#">
                <div class="clumppy-page-gallery-pic-frame" >
                    <!-- This logo icon for the clumppy that have not set display picture -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                    </svg>
                </div>
            </a>
        </div>
        <div class="clumppy-page-gallery-grid">
            <a href="#">
                <div class="clumppy-page-gallery-pic-frame" >
                    <!-- This logo icon for the clumppy that have not set display picture -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection