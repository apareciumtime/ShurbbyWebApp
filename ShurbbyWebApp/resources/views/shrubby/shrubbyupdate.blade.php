<link rel = "stylesheet" href = "/css/shrubby/shrubbyupdate.css">
{{-- for crop and preview profile pict --}}
<link rel="stylesheet" href="{{ asset('/ijaboCropTool-master/ijaboCropTool.min.css') }}">
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@extends('layouts.app')

@section('header')

<x-header label="Shrubby"/>

@endsection

@section('inside-body')
    <div class="shrubby-framework">
        <div class="background-framework">
            <form class="shrubby-update" id="shrubby-update" action="{{route('updateShrubby',$shrubby->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="shrubby-each-topic-framework">
                    <div class="shrubby-topic">
                        ชื่อกระทู้
                    </div>
                    <input name="title" id="title" type="text" form="shrubby-update" class="topic-input" placeholder="ตั้งชื่อกระทู้" value="{{ $shrubby->title }}">
                </div>
                <div class="shrubby-each-topic-framework">
                    <div class="shrubby-topic">
                        แท็กกระทู้
                    </div>
                    <input name="tags" id="tags" type="text" form="shrubby-update" class="topic-input" placeholder="แท็กกระทู้" value="{{ $tag }}">
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
                            <textarea name="content" id="editor" form="shrubby-update" class="content-input" placeholder="เนื้อหากระทู้">{{ $shrubby->content }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="shrubby-button">
                    <button class="delete-shrubby-button" type="submit" form="shrubby-delete">
                        ลบกระทู้
                    </button>
                    <input type="submit" class="submit-button" form="shrubby-update" value="แก้ไขกระทู้">
                </div>
            </form>
        </div>
    </div>
    <form action="/shrubbypage/{{ $shrubby->id }}"
        method="POST"
        id = "shrubby-delete">
        @csrf
        @method('delete')
    </form>
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