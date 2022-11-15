<link rel = "stylesheet" href = "/css/clumppy/clumppyrecommand.css">

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

            <div class="card-grid-item">
                    <x-clumppy-card/>
            </div>
            <div class="card-grid-item">
                    <x-clumppy-card/>
            </div>
            <div class="card-grid-item">
                    <x-clumppy-card/>
            </div>
            <div class="card-grid-item">
                    <x-clumppy-card/>
            </div>
            <div class="card-grid-item">
                    <x-clumppy-card/>
            </div>

        </div>
    </div>
</div>
@endsection