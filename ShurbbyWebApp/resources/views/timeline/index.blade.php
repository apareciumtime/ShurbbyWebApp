<link rel = "stylesheet" href = "/css/tag/tagsearchall.css">
<link rel = "stylesheet" href = "/css/shrubby/shrubbypage.css">
@extends('layouts.app')

@section('header')

<x-header label="ไทม์ไลน์"/>

@endsection

@section('inside-body')
<div class="inside-body">
    <div class="shrubby-page-content-tag-frame">
        <div class="shrubby-page-content-tag-head">
            <div class="shrubby-page-content-tag-head-topic">
                แท็กที่ติดตาม
            </div>
            <a href="{{route('followtagview')}}" class="shrubby-page-content-tag-head-view-all">
                ดูทั้งหมด
            </a>
        </div>
        <div class="shrubby-page-content-tag-slot-outside">
            <div class="shrubby-page-content-tag-slot">
                @foreach($tags as $tag)
                    <x-tag-shrubby name="{{$tag->name}}"/> 
                @endforeach
            </div>
        </div>
    </div>
    <div class="shrubby-clumppy-framework-outside">
        <div class='shrubby-clumppy-framework'>    
            @foreach ($posts as $post)
                <div class="card-grid-item">
                    @if($post->getTable() == 'shrubbies')
                        <x-shrubby-card itemid="{{$post->id}}"/>
                    @elseif($post->getTable() == 'clumppies')
                        <x-clumppy-card clumppyid='{{$post->id}}'/>
                    @elseif($post->getTable() == 'movements')
                        movement
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection