<link rel = "stylesheet" href = "/css/clumppy/clumppypage.css">
@extends('layouts.app')

@section('header')

<x-header label="Clumppy"/>

@endsection

@section('inside-body')

<div class="clumppy-framework">
    <div class="clumppy-page-creator-bar">
        <div class="clumppy-page-add-new-movement">
            <a href="{{route('movementcreate',$clumppy->id)}}">
                เพิ่มความเคลื่อนไหวใหม่
            </a>
        </div>
    </div>
    <div class="clumppy-page-topic-amount-privacy-edit">
        <div class="clumppy-page-topic">
            {{$clumppy->name}}
        </div>
        <div class="clumppy-page-amount">
            ({{$clumppy->movements->where('like','>',-1)->count()}} ความเคลื่อนไหว)
        </div>
        <div class="clumppy-page-privacy">
            <!-- Receive status indicate privacy status -->
            <x-privacy-status status='{{$clumppy->is_private}}'/>
        </div>
        <div class="clumppy-page-edit">
            @if(isset(Auth::user()->id) && Auth::user()->id == $clumppy->user_id)
                <a href="/clumppypage/{{$clumppy->id}}/edit">
                    แก้ไข
                </a>
            @endif
        </div>
    </div>
    <div class="clumppy-page-description">
        {{$clumppy->description}}
    </div>
    <div class="clumppy-page-plant-amount-date-age">
        <div class="clumppy-page-plant-amount">
            มีทั้งหมด {{$clumppy->amount}} ต้น
        </div>
        <div class="clumppy-page-plant-date">
            วันที่เริ่มปลูก {{thai_date($clumppy->plant_date, false, false, false)}}
        </div>
        <div class="clumppy-page-plant-age">
            {{$age}}
        </div>
    </div>
    <div class="clumppy-page-tag-framework">
        <x-tag-framework type="clumppy" id="{{$clumppy->id}}"/>
    </div>
    <div class="clumppy-page-gallery">
        @foreach($movements as $movement)
            <x-movement-card id='{{$movement->id}}'/>
        @endforeach
    </div>
</div>
@endsection