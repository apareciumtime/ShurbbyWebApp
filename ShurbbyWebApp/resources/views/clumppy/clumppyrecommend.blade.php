<link rel = "stylesheet" href = "/css/clumppy/clumppyrecommend.css">

@extends('layouts.app')

@section('header')

<x-header label="หน้าหลัก"/>

@endsection

@section('inside-body')
<div class="myclumppy-framework">
    <div class='myclumppy-header-framework'>
        <p class = 'myclumppy-header'>Clumppy ที่แนะนำ</p>
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