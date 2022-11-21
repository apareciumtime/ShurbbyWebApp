<link rel = "stylesheet" href = "/css/traitfinder/traitfinderIndex.css">
@extends('layouts.app')

@section('header')
    <x-header label="Trait Finder"/>
@endsection

@section('inside-body')

<div class="trait-finder-framework">
    <div class="trait-finder-header">Trait Finder ค้นหาลักษณะที่ต้องการ</div>
            
    <div class="trait-finder-slot">
        <x-trait-slider trait='1'/>
        <x-trait-slider trait='2'/>
        <x-trait-slider trait='3'/>
        <x-trait-slider trait='4'/>
    </div>
    

    <div class="trait-finder-more-trait-section">
        <div class="trait-finder-input">
            <div class="trait-finder-input-label">
                ค้นหาคำเพิ่มเติม
            </div>
            <input type="search" placeholder="ค้นหา" name="tags" autocomplete="on" class="trait-finder-search-input" form="trait-finder-from">
        </div>
        <div class="trait-finder-define">
            แต่ละคำคั่นด้วย ',' เช่น ไมยราพ,ผักชี,ไม้ยืนต้น
        </div>
    </div>
    <div class="trait-finder-btn-section">
        <button type="submit" form='trait-finder-from' class="trait-finder-submit-btn">ค้นหา</button>
    </div>

    <form action="{{route('findtrait')}}" method="POST" id='trait-finder-from'>
        @csrf
        <input type="hidden" name="value1" id="value1" value=" ">
        <input type="hidden" name="value2" id="value2" value=" ">
        <input type="hidden" name="value3" id="value3" value=" ">
        <input type="hidden" name="value4" id="value4" value=" ">
    </form>
</div>
<script>
    function pickIt(value,label,length,elem){
        for (i = 0; i < parseInt(length); i++) {
            document.getElementById("trait-element-"+value+"-"+i).classList.add("trans");
        }
        elem.classList.remove('trans');
        document.getElementById("value"+value).value= label;
    }
</script>
@endsection