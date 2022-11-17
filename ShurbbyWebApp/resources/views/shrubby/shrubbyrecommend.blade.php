<link rel = "stylesheet" href = "/css/shrubby/shrubbyrecommend.css">

@extends('layouts.app')

@section('header')

<x-header label="หน้าหลัก"/>

@endsection

@section('inside-body')
<div class="myshrubby-framework">
    <div class='myshrubby-header-framework'>
        <p class = 'myshrubby-header'>Shrubby ที่แนะนำ</p>
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