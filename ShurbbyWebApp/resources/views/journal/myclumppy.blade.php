<link rel = "stylesheet" href = "/css/journal/myclumppy.css">

@extends('layouts.app')

@section('header')

<x-header label="สมุดบันทึก"/>

@endsection

@section('inside-body')
<div class="myclumppy-framework">
    <div class='myclumppy-header-framework'>
        <div class = 'myclumppy-header'>Clumppy ของฉัน</div>
        <div class = 'myclumppy-amount'>7 คลัมปี</div>
        <a href="/clumppycreate">
            <div class = 'myclumppy-create-clumppy'>สร้างคลัมปี</div>
        </a>
    </div>
    <div class="shrubby-clumppy-framework-outside">
        <div class='shrubby-clumppy-framework'>  
            @foreach ($clumppies as $clumppy)
                <div class="card-grid-item">
                    <x-clumppy-card clumppyid='{{$clumppy->id}}'/>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection