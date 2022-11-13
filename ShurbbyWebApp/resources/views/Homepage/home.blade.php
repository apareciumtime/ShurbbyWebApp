@extends('layouts.app')
@section('header')
    <x-header label="หน้าหลัก"/>
@endsection
@section('inside-body')
    <div class="component-bar">
        <a href="shrubbycreate">
            สร้างชรับบี
        </a>
    </div>
    <div class="playground">
        <x-shrubby-slider label="Shrubby ที่แนะนำ"/>
        <x-shrubby-slider label="Shrubby ที่มาใหม่"/>
        <x-clumppy-slider label="Clumppy ที่แนะนำ"/>
        <x-clumppy-slider label="Clumppy ที่มาใหม่"/>
    </div>
@endsection