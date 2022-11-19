<link rel = "stylesheet" href = "/css/clumppy/clumppyrecommend.css">

@extends('layouts.app')

@section('header')

<x-header label="หน้าหลัก"/>

@endsection

@section('inside-body')
<div class="myclumppy-framework">
    <div class = 'myclumppy-header'>Clumppy ที่แนะนำ</div>
    <div class="shrubby-clumppy-framework-outside">
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