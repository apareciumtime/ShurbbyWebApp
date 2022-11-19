<link rel = "stylesheet" href = "/css/tag/tagviewall.css">
@extends('layouts.app')

@section('header')
    <x-header label="Tag"/>
@endsection

@section('inside-body')
<div class="tagviewall-framework">
    <a href="{{$link_to}}">
        <div class="tagviewall-header">
            {{$label}}
        </div>
    </a>
    <div class="tagviewall-topic">
        แท็กทั้งหมด
    </div>
    <div class="tagviewall-grid">
        @foreach($tags as $tag)
            <x-tag-bar label="{{$tag->name}}"/>
        @endforeach
    </div>
</div>
@endsection