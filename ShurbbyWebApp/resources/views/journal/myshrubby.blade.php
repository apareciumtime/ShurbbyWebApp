<link rel = "stylesheet" href = "/css/journal/myshrubby.css">

@extends('layouts.app')

@section('header')

<x-header label="สมุดบันทึก"/>

@endsection

@section('inside-body')
<div class="myshrubby-framework">
    <div class='myshrubby-header-framework'>
        <p class = 'myshrubby-header'>Shrubby ของฉัน</p>
        <p class = 'myshrubby-text'>4 ชรับบี</p>
        <a href="#">
            <p class = 'myshrubby-text-withhover'>สร้างชรับบี</p>
        </a>
    </div>
    <div class="shrubby-clumppy-framework-outside">
        <div class='shrubby-clumppy-framework'>    
            @foreach ($shrubbies as $shrubby)
                <div class="card-grid-item">
                    <x-shrubby-card itemid="{{$shrubby->id}}"/>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection