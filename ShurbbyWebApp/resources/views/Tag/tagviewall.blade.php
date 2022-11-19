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
    @foreach($tags as $tag)
        <div class="tagviewall-grid">
            <x-tag-bar label="{{$tag->name}}"/>
        </div>
    @endforeach
</div>
@endsection