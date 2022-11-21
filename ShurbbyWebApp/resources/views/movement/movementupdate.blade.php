<title>Journal</title>
<link rel = "stylesheet" href = "/css/movement/movementupdate.css">
@extends('layouts.app')
@section('header')
<x-header label="Clumppy"/>
@endsection
@section('inside-body')
<form id="update-movement-form" action="{{route('updatemovement',[$movement->id])}}" method="POST" >
    @csrf
    <div class="movement-update-framework">
        <div class="movement-update-topic-amount-submit">
            <div class="movement-update-topic">
                {{$clumppy->name}}
            </div>
            <div class="movement-update-amount">
                ({{$clumppy->movements->where('like','>',-1)->count()}} ความเคลื่อนไหว)
            </div>
            <div class="movement-update-delete-submit">
                <label for="delete" class="movement-update-delete-link-to">
                    ลบความเคลื่อนไหว
                </label>
                <label for="update" class="movement-update-submit-link-to">
                    บันทึก
                </label>    
            </div>
        </div>
        <div class="movement-update-add-new-movement">
            แก้ไขความเคลื่อนไหว
        </div>
        <div class="movement-image-box">
            <form action="{{route("uploadmovementimage")}}" method="POST" enctype="multipart/form-data" id="images-upload-form" accept-charset="utf-8">
                @csrf
                <div class="images-preview-div"> 
                    <input type="file" name="images[]" id="images" class="form-control" style="display: none;" multiple>
                    <input type="number" name="movement_id" id="movement_id" value="{{$movement->id}}" style="display: none;">
                    <label for="images" class="movement-create-add-display-picture-btn">
                        เลือกรูปภาพ
                    </label>
                </div>
            </form>
        </div>
        <button type="submit" id="submit" form="images-upload-form" class="add-image-btn">เพิ่มรูปภาพ</button>
        <div class="images-selected-div">
            @foreach ($movement_images as $img)
                <img src="{{asset($img->image)}}" alt="" style="max-width: 100px;">
            @endforeach
        </div>
        <div class="movement-update-input-group">
            <div class="movement-update-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="movement-update-input-select"
                    name="privacy_status"
                    id="privacy_status">
                <option value="{{$movement->is_private}}" hidden>{{$private_status}}</option>
                <option value="0">สาธารณะ</option>
                <option value="1">ส่วนตัว</option>
            </select>
        </div>
        <div class="movement-update-input-group">
            <div class="movement-update-input-label">
                คำอธิบาย
            </div>
            <textarea  type="text" 
                    class="movement-update-input-textarea"
                    name="movement_description"
                    id="movement_description"
                    placeholder="คำอธิบาย"> {{$movement->description}} </textarea>
            <div class="movement-update-input-counter">
                0/200
            </div>
        </div>
        <div class="movement-update-input-group">
            <div class="movement-update-input-label">
                แท็ก
            </div>
            <input  type="text" 
                    class="movement-update-input-input"
                    name="movement_tags"
                    id="movement_tags"
                    placeholder="แท็ก"
                    value={{$tag}}>
            <div class="movement-update-input-counter">
                0/10
            </div>
        </div>
        <button id="update" name="update" type="submit" style="display: none;"></button>
    </form>
    <form action="{{route('deletemovement',$movement->id)}}" method="POST">
        @csrf
        @method('delete')
        <button id="delete" type="submit" style="display: none;">
        </button>
    </form>
</div>

@endsection