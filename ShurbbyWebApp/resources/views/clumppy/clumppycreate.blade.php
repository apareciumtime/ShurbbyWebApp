@php
    use App\Http\Controllers\ClumppyController;
    $cover=null;
@endphp

<link rel = "stylesheet" href = "/css/clumppy/clumppycreate.css">
{{-- for crop and preview profile pict --}}
<link rel="stylesheet" href="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.css') }}">

@extends('layouts.app')

@section('header')

<x-header label="สร้างคลัมปี"/>

@endsection

@section('inside-body')

<div class="clumppy-create-framework">
    <div class="clumppy-create-topic">
        สร้างคลัมปีใหม่
    </div>
    <form id="create-clumppy-form" action="{{route('createclumppy',[$empty_clumppy_id])}}" method="POST">
        @csrf
        <div class="clumppy-create-add-display-picture">
            <img src="{{asset($clumppy->cover)}}" alt="cover-image" class="cover-image"> 
            <label for="cover-image" class="clumppy-create-add-display-picture-btn">
                เพิ่มรูปภาพหน้าปก
            </label>
            <input id="cover-image" type="file" style="display: none;" name="cover-image"/>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="clumppy-create-input-select"
                    name="privacy_status"
                    id="privacy_status">
                <option value="0">สาธารณะ</option>
                <option value="1">ส่วนตัว</option>
            </select>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                ชื่อคลัมปี
            </div>
            <input  type="text" 
                    class="clumppy-create-input-input"
                    name="clumppy_name"
                    id="clumppy_name"
                    placeholder="ชื่อคลัมปี">
            <div class="clumppy-create-input-counter">
                0/60
            </div>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                คำอธิบาย
            </div>
            <textarea  type="text" 
                    class="clumppy-create-input-textarea"
                    name="clumppy_description"
                    id="clumppy_description"
                    placeholder="คำอธิบาย"></textarea>
            <div class="clumppy-create-input-counter">
                0/200
            </div>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                วันที่เริ่มปลูก
            </div>
            <input  type="date" 
                    class="clumppy-create-input-date"
                    name="clumppy_date"
                    id="clumppy_date"
                    placeholder="วันที่เริ่มปลูก">
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                จำนวนต้นไม้ในคลัมปีนี้
            </div>
            <input  type="number" 
                    class="clumppy-create-input-number"
                    name="plant_amount"
                    id="plant_amount"
                    value="1"
                    min="1"
                    max="999">
            <div class="amount-change-btn">
                <button onclick="minusPlantAmount()" type="button" class="clumppy-create-minus-amount-btn">ลดจำนวน</button>
                <button onclick="plusPlantAmount()" type="button" class="clumppy-create-plus-amount-btn">เพิ่มจำนวน</button>
            </div>
        </div>
        <div class="clumppy-create-btn-section">
            <button class="clumppy-create-new-clumppy-btn" form="create-clumppy-form" type="submit">สร้างคลัมปี</button>
        </div>
    </form>
</div>

<script>
function plusPlantAmount() {
  document.getElementById("plant_amount").stepUp();
}
function minusPlantAmount() {
  document.getElementById("plant_amount").stepDown();
}
</script>

{{-- for crop and preview profile pict --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.js') }}"></script> 

    <script>
        $('#cover-image').ijaboCropTool({
            //profile_image = class of img element in html -> make picture update without refresh page
            preview : '.cover-image',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['OK','QUIT'],
            buttonsColor:['#FFFFFF','#4B819F', -15],
            processUrl:"{{ route('cropcover',['empty_clumppy_id'=>$empty_clumppy_id]) }}",
            withCSRF:['_token','{{ csrf_token() }}'],
            onSuccess:function(message, element, status){
                alert(message);
            },
            onError:function(message, element, status){
                alert(message);
            }
       });
   </script>
@endsection