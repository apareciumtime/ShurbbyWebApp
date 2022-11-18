<title>Journal</title>
<link rel = "stylesheet" href = "/css/movement/movementcreate.css">
@extends('layouts.app')
@section('header')
<x-header label="Clumppy"/>
@endsection
@section('inside-body')
<style>
    .images-preview-div img
    {
        padding: 10px;
        max-width: 100px;
    }
    /* .images-selected-div img */
    /* {
        padding: 10px;
        max-width: 100px;
    } */
</style>
<div class="movement-create-framework">
        <div class="movement-create-topic-amount-privacy">
            <div class="movement-page-topic">
                {{$clumppy->name}}
            </div>
            <div class="movement-page-amount">
                ({{$clumppy->movements->where('like','>',-1)->count()}} ความเคลื่อนไหว)
            </div>
        </div>
        <div class="movement-create-add-new-movement">
            เพิ่มความเคลื่อนไหวใหม่
        </div>
        <div class="images-selected-div">
            @foreach ($movement_images as $img)
                <img src="{{$img->image}}" alt="" style="max-width: 100px;">
            @endforeach
        </div>
        <form action="{{route("uploadmovementimage")}}" method="POST" enctype="multipart/form-data" id="images-upload-form" accept-charset="utf-8">
            @csrf
            <div class="movement-create-add-display-picture">
                <label for="images" class="movement-create-add-display-picture-btn">
                    เลือกรูปภาพ
                </label>
            </div>
            <input type="file" name="images[]" id="images" class="form-control" style="display: none;" multiple>
            <input type="number" name="movement_id" id="movement_id" value="{{$movement->id}}" style="display: none;">

            <div class="images-preview-div"> 
            </div> 
            <button type="submit" id="submit" form="images-upload-form">เพิ่มรูปภาพ</button>
        </form>
    <form id="create-movement-form" action="{{route("createmovement",$movement->id)}}" method="POST">
        @csrf
        <div class="movement-create-input-group">
            <div class="movement-create-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="movement-create-input-select"
                    name="privacy_status"
                    id="privacy_status">
                <option value="0">สาธารณะ</option>
                <option value="1">ส่วนตัว</option>
            </select>
        </div>
        <div class="movement-create-input-group">
            <div class="movement-create-input-label">
                คำอธิบาย
            </div>
            <textarea  type="text" 
                    class="movement-create-input-textarea"
                    name="movement_description"
                    id="movement_description"
                    placeholder="คำอธิบาย"></textarea>
            <div class="movement-create-input-counter">
                0/200
            </div>
        </div>
        <div class="movement-create-input-group">
            <div class="movement-create-input-label">
                แท็ก
            </div>
            <input  type="text" 
                    class="movement-create-input-input"
                    name="movement_tags"
                    id="movement_tags"
                    placeholder="แท็ก">
            <div class="movement-create-input-counter">
                0/10
            </div>
        </div>
        <div class="movement-create-btn-section">
            <button class="movement-create-new-movement-btn" form="create-movement-form" type="submit">สร้างความเคลื่อนไหว</button>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script >
    $(function() {
        // Multiple images preview with JavaScript
        var previewImages = function(input, imgPreviewPlaceholder) {                            
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }   
        };                                                      
        $('#images').on('change', function() {
            previewImages(this, 'div.images-preview-div');
        });
    });
</script>

@endsection