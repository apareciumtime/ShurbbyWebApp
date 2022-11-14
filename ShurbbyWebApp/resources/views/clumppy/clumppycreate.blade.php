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
    <form id="create-clumppy-form">
        <div class="clumppy-create-add-display-picture">
            <button class="clumppy-create-add-display-picture-btn">
                เพิ่มรูปภาพหน้าปก
            </button>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="clumppy-create-input-select"
                    name="privacy_status"
                    id="privacy_status">
                <option value="public">สาธารณะ</option>
                <option value="private">ส่วนตัว</option>
            </select>
        </div>

        <div class="clumppy-create-input-group">
            <div class="clumppy-create-input-label">
                ชื่อต้นไม้
            </div>
            <input  type="text" 
                    class="clumppy-create-input-input"
                    name="plant_name"
                    id="plant_name"
                    placeholder="ชื่อต้นไม้">
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
                    name="plant_description"
                    id="plant_description"
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
                    name="plant_date"
                    id="plant_date"
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
            <button class="clumppy-create-new-clumppy-btn">สร้างคลัมปี</button>
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
        $('#image').ijaboCropTool({
            //profile_image = class of img element in html -> make picture update without refresh page
            preview : '.profile-image',
            setRatio:1,
            allowedExtensions: ['jpg', 'jpeg','png'],
            buttonsText:['CHANGE','QUIT'],
            buttonsColor:['#FFFFFF','#4B819F', -15],
            processUrl:'{{ route("croppict") }}',
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