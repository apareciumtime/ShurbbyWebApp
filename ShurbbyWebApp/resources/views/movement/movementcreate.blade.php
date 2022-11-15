<title>Journal</title>
<link rel = "stylesheet" href = "/css/movement/movementcreate.css">
@extends('layouts.app')
@section('header')
<x-header label="Clumppy"/>
@endsection
@section('inside-body')
<form id="create-movement-form">
    <div class="movement-create-framework">
        <div class="movement-create-topic-amount-privacy">
            <div class="movement-page-topic">
                น้องอะโวะ
            </div>
            <div class="movement-page-amount">
                (5 ความเคลื่อนไหว)
            </div>
            <div class="movement-page-privacy">
                <!-- Receive status indicate privacy status -->
                <x-privacy-status status='public'/>
            </div>
        </div>
        <div class="movement-create-add-new-movement">
            เพิ่มความเคลื่อนไหวใหม่
        </div>
        <div class="movement-create-add-display-picture">
            <label for="cover-image" class="movement-create-add-display-picture-btn">
                เพิ่มรูปภาพหน้าปก
            </label>
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
        <div class="movement-page-tag-framework">
            <x-tag-framework/>
        </div>
        <div class="movement-create-btn-section">
            <button class="movement-create-new-movement-btn" form="create-movement-form" type="submit">สร้างความเคลื่อนไหว</button>
        </div>
    </form>
</div>

@endsection