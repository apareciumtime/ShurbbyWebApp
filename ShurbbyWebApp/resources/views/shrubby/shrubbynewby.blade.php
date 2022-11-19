<link rel = "stylesheet" href = "/css/shrubby/shrubbynewby.css">

@extends('layouts.app')

@section('header')

<x-header label="หน้าหลัก"/>

@endsection

@section('inside-body')
<div class="myshrubby-framework">
    <div class = 'myshrubby-header'>Shrubby ที่มาใหม่</div>
    <div class="shrubby-clumppy-framework-outside">
        <div class='shrubby-clumppy-framework'>    
            @foreach ($shrubbies as $shrubby)
                <div class="card-grid-item">
                    <x-shrubby-card itemid="{{$shrubby->id}}"/>
                </div>
            @endforeach
        </div>
        {{-- <div class='shrubby-clumppy-framework'>  
        @foreach ($clumppies as $clumppy)
                <div class="card-grid-item">
                    <x-clumppy-card clumppyid='{{$clumppy->id}}'/>
                </div>
            @endforeach
        </div> --}}
    </div>
</div>
@endsection