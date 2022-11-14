<link rel = "stylesheet" href = "/css/clumppy/clumppyupdate.css">
{{-- for crop and preview profile pict --}}
<link rel="stylesheet" href="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.css') }}">

@extends('layouts.app')

@section('header')

<x-header label="แก้ไขลัมปี"/>

@endsection

@section('inside-body')

<div class="clumppy-update-framework">
    <div class="clumppy-update-topic-submit">
        <div class="clumppy-update-topic">
            แก้ไขคลัมปีใหม่
        </div>
        <button class="clumppy-update-submit" form="update-clumppy-form">
            บันทึก
        </button>
    </div>
    <form id="update-clumppy-form">
        <div class="clumppy-update-add-display-picture">
            <button class="clumppy-update-add-display-picture-btn">
                เพิ่มรูปภาพหน้าปก
            </button>
        </div>

        <div class="clumppy-update-input-group">
            <div class="clumppy-update-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="clumppy-update-input-select"
                    name="privacy_status"
                    id="privacy_status">
                <option value="public">สาธารณะ</option>
                <option value="private">ส่วนตัว</option>
            </select>
        </div>

        <div class="clumppy-update-input-group">
            <div class="clumppy-update-input-label">
                ชื่อคลัมปี
            </div>
            <input  type="text" 
                    class="clumppy-update-input-input"
                    name="clumppy_name"
                    id="clumppy_name"
                    placeholder="ชื่อคลัมปี">
            <div class="clumppy-update-input-counter">
                0/60
            </div>
        </div>

        <div class="clumppy-update-input-group">
            <div class="clumppy-update-input-label">
                คำอธิบาย
            </div>
            <textarea  type="text" 
                    class="clumppy-update-input-textarea"
                    name="clumppy_description"
                    id="clumppy_description"
                    placeholder="คำอธิบาย"></textarea>
            <div class="clumppy-update-input-counter">
                0/200
            </div>
        </div>

        <div class="clumppy-update-input-group">
            <div class="clumppy-update-input-label">
                วันที่เริ่มปลูก
            </div>
            <input  type="date" 
                    class="clumppy-update-input-date"
                    name="clumppy_date"
                    id="clumppy_date"
                    placeholder="วันที่เริ่มปลูก">
        </div>

        <div class="clumppy-update-input-group">
            <div class="clumppy-update-input-label">
                จำนวนต้นไม้ในคลัมปีนี้
            </div>
            <input  type="number" 
                    class="clumppy-update-input-number"
                    name="plant_amount"
                    id="plant_amount"
                    value="1"
                    min="1"
                    max="999">
            <div class="amount-change-btn">
                <button onclick="minusPlantAmount()" type="button" class="clumppy-update-minus-amount-btn">ลดจำนวน</button>
                <button onclick="plusPlantAmount()" type="button" class="clumppy-update-plus-amount-btn">เพิ่มจำนวน</button>
            </div>
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