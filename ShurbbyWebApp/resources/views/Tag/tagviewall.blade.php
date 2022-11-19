<link rel = "stylesheet" href = "/css/tag/tagviewall.css">
@extends('layouts.app')

@section('header')
    <x-header label="Tag"/>
@endsection

@section('inside-body')
<div class="tagviewall-framework">
    <div class="tagviewall-header">
        ชื่อ shrubby หรือ clumppy
    </div>
    <div class="tagviewall-topic">
        แท็กทั้งหมด
    </div>
    <div class="tagviewall-grid">
        <x-tag-bar label="asd"/>
        <x-tag-bar label="asd"/>
        <x-tag-bar label="asd"/>
        <x-tag-bar label="asd"/>
        <x-tag-bar label="asd"/>
        <x-tag-bar label="asd"/>
    </div>
</div>
@endsection