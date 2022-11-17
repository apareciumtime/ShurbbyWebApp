<title>Journal</title>
<link rel = "stylesheet" href = "/css/movement/movementupdate.css">
@extends('layouts.app')
@section('header')
<x-header label="Clumppy"/>
@endsection
@section('inside-body')
<form id="update-movement-form">
    <div class="movement-update-framework">
        <div class="movement-update-topic-amount-submit">
            <div class="movement-update-topic">
                น้องอะโวะ
            </div>
            <div class="movement-update-amount">
                (5 ความเคลื่อนไหว)
            </div>
            <div class="movement-update-delete-submit">
                <a href="#" class="movement-update-delete-link-to">
                    ลบความเคลื่อนไหว
                </a>
                <a href="#" class="movement-update-submit-link-to">
                    บันทึก
                </a>
            </div>
        </div>
        <div class="movement-update-add-new-movement">
            แก้ไขความเคลื่อนไหว
        </div>
        <div class="movement-update-add-display-picture">
            <label for="cover-image" class="movement-update-add-display-picture-btn">
                เพิ่มรูปภาพ
            </label>
        </div>
        <div class="movement-update-input-group">
            <div class="movement-update-input-label">
                ความเป็นส่วนตัว
            </div>
            <select type="text" 
                    class="movement-update-input-select"
                    name="privacy_status"
                    id="privacy_status">
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
                    placeholder="คำอธิบาย"></textarea>
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
                    name="movement_description"
                    id="movement_description"
                    placeholder="แท็ก"></input>
            <div class="movement-update-input-counter">
                0/10
            </div>
        </div>
    </form>
</div>

@endsection