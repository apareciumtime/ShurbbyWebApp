<link rel = "stylesheet" href = "/css/traitfinder/traitfinderIndex.css">
@extends('layouts.app')

@section('header')
    <x-header label="Trait Finder"/>
@endsection

@section('inside-body')

<div class="trait-finder-framework">
    <div class="trait-finder-header">Trait Finder ค้นหาลักษณะที่ต้องการ</div>
            
    <div class="trait-finder-slot">
        <x-trait-slider/>
        <x-trait-slider/>
        <x-trait-slider/>
        <x-trait-slider/>
    </div>
    

    <div class="trait-finder-more-trait-section">
        <div class="trait-finder-input">
            <div class="trait-finder-input-label">
                ค้นหาคำเพิ่มเติม
            </div>
            <input type="search" placeholder="ค้นหา" name="query" autocomplete="on" class="trait-finder-search-input" form="search-form">
        </div>
        <div class="trait-finder-define">
            แต่ละคำคั่นด้วย ',' เช่น ไมยราพ,ผักชี,ไม้ยืนต้น
        </div>
    </div>
    <div class="trait-finder-btn-section">
        <button class="trait-finder-submit-btn">ค้นหา</button>
    </div>

    <form action="{{route('findtrait')}}" method="POST" >
        @csrf
        <input type="text" name="value1" id="value1" value="ใบหงิก">
        <input type="text" name="value2" id="value2" value="ใบน้ำตาล">
        <input type="text" name="value3" id="value3" value="ใบไหม้">
        <input type="text" name="value4" id="value4" value="ใบเหลือง">
        <button type="submit">submit</button>
    </form>
</div>

@endsection