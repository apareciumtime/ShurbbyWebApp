<title>Home|Shrubby</title>
<link rel = "stylesheet" href = "/css/shrubby/shrubbycreate.css">
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@extends('layouts.app')
@section('header')
<x-header label="Shrubby"/>
@endsection
@section('inside-body')
<div class="inside-body">
    <div class="shrubby-framework">
        <div class="background-framework">
            <form class="shrubby-create" id="shrubby-create" action="{{route('shrubbycreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shrubby-each-topic-framework">
                    <div class="shrubby-topic">
                        ชื่อกระทู้
                    </div>
                    <input name="title" id="title" type="text" form="shrubby-create" class="topic-input" placeholder="ตั้งชื่อกระทู้">
                </div>
                <div class="shrubby-each-topic-framework">
                    <div class="shrubby-topic">
                        แท็กกระทู้
                    </div>
                    <input name="tags" id="tags" type="text" form="shrubby-create" class="topic-input" placeholder="แท็กกระทู้">
                    <div class="description">
                        แต่ละแท็กคั่นด้วย ',' เช่น ไมยราพ,ผักชี,ไม้ยืนต้น
                    </div>
                </div>
                <div class="shrubby-each-topic-framework">
                    <div class="shrubby-topic">
                        เนื้อหากระทู้
                    </div>
                    <div class="shrubby-content-area-outside">
                        <div class="shrubby-content-area">
                            <textarea name="content" id="editor" form="shrubby-create" class="content-input" placeholder="เนื้อหากระทู้"></textarea>
                        </div>
                    </div>
                </div>
                <div class="shrubby-button">
                    <input type="submit" class="submit-button" form="shrubby-create" value="สร้างกระทู้">
                </div>
            </form>
        </div>
    </div>
</div>

    {{-- add this script to make text box usable --}}
    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) 
                ,{
                    ckfinder:{
                        uploadUrl : '{{ route('ckeditor.upload').'?_token='.csrf_token()}}'
                    }
                })
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
    </script>
@endsection