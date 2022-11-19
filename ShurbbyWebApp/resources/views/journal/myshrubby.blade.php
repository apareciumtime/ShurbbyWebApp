<link rel = "stylesheet" href = "/css/journal/myshrubby.css">

@extends('layouts.app')

@section('header')

<x-header label="สมุดบันทึก"/>

@endsection

@section('inside-body')
<div class="myshrubby-framework">
    <div class='myshrubby-header-framework'>
        <div class = 'myshrubby-header'>Shrubby ของฉัน</div>
        <div class = 'myshrubby-amount'>{{$shrubbies->count()}} ชรับบี</div>
        <a href="/shrubbycreate">
            <div class = 'myshrubby-create-shrubby'>สร้างชรับบี</div>
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