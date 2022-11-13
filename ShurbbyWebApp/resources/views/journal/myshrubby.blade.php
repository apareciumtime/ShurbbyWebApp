<link rel = "stylesheet" href = "/css/journal/myshrubby.css">

@extends('layouts.app')

@section('header')

<x-header label="สมุดบันทึก"/>

@endsection

@section('inside-body')
<div class='myshrubby-header-framework'>
    <p class = 'myshrubby-header'>Shrubby ของฉัน</p>
    <a href="#">
        <p class = 'myshrubby-text'>สร้างชรับบี</p>
    </a>
    <a href="#">
        <p class = 'myshrubby-text'>4 ชรับบี</p>
    </a>
</div>

<div class='myshrubby-framework'>
    <x-shrubby-clumppy-slot/>
    <x-shrubby-clumppy-slot/>
    <x-shrubby-clumppy-slot/>
</div>

@endsection