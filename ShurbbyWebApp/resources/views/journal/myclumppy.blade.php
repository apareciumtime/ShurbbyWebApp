<link rel = "stylesheet" href = "/css/journal/myclumppy.css">

@extends('layouts.app')

@section('header')

<x-header label="สมุดบันทึก"/>

@endsection

@section('inside-body')
<div class="myclumppy-framework">
    <div class='myclumppy-header-framework'>
        <p class = 'myclumppy-header'>Clumppy ของฉัน</p>
        <p class = 'myclumppy-text'>7 คลัมปี</p>
        <a href="#">
            <p class = 'myclumppy-text-withhover'>สร้างคลัมปี</p>
        </a>
    </div>
    <div class="clumppy-clumppy-framework-outside">
        <div class='clumppy-clumppy-framework'>  
            @foreach ($clumppies as $clumppy)
                <div class="card-grid-item">
                    <x-clumppy-card clumppyid='{{$clumppy->id}}'/>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection