<link rel = "stylesheet" href = "/css/clumppy/clumppycreate.css">
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
                ชื่อต้นไม้
            </div>
            <input  type="text" 
                    class="clumppy-create-input-input"
                    name="plant_name"
                    id="plant_name"
                    placeholder="ชื่อต้นไม้">
        </div>
    </form>
</div>


@endsection