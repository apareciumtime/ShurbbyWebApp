<link rel = "stylesheet" href = "/css/tag/tagsearcheach.css">

@extends('layouts.app')

@section('header')

<x-header label="Tag"/>

@endsection

@section('inside-body')
<div class="tagseacheach-framework">
    <div class = "tagsearcheach-header">ค้นหา #{{$search->name}}</div>
    <div class="tagsearcheach-go-to-bar" id="tagsearcheach-shrubby">
        <a href="#tagsearcheach-clumppy" class="tagsearcheach-go-to-bar-link-to">ไปยัง Clumppy</a>
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

    <div class="tagsearcheach-go-to-bar" id="tagsearcheach-clumppy">
        <a href="#tagsearcheach-shrubby" class="tagsearcheach-go-to-bar-link-to">ไปยัง Shrubby</a>
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