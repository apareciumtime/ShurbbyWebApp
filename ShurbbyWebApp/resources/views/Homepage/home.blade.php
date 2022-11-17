<link rel = "stylesheet" href = "/css/homeindex.css">
@extends('layouts.app')
@section('header')
    <x-header label="หน้าหลัก"/>
@endsection
@section('inside-body')
    <div class="homepage-creator-bar">
        <a href="/shrubbycreate" class="homepage-creator-bar-shrubbycreate">
            สร้างชรับบี
        </a>
        <a href="/clumppycreate" class="homepage-creator-bar-clumppycreate">
            สร้างคลัมปี
        </a>
    </div>
    <div class="homepage-playground">
        <x-shrubby-slider label="Shrubby ที่แนะนำ"/>
        <x-shrubby-slider label="Shrubby ที่มาใหม่"/>
        <x-clumppy-slider label="Clumppy ที่แนะนำ"/>
        <x-clumppy-slider label="Clumppy ที่มาใหม่"/>
        
    </div>
@endsection