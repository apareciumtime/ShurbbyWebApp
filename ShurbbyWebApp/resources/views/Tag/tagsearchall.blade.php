<link rel = "stylesheet" href = "/css/tag/tagsearchall.css">

@extends('layouts.app')

@section('header')

<x-header label="Tag"/>

@endsection

@section('inside-body')
<div class="tagsallall-framework">
    <div class = "tagsearchall-header">
        ค้นหา {{$search}}
        @if($tag_id!=null)
            <button class="tag-bar-follow-btn" onclick="followTag('{{$tag_id}}','{{route('follow',$tag_id)}}',this)">
                {{$tag_status}}
            </button>
        @endif
    </div>
    <div class="tagsearchall-go-to-bar" id="tagsearchall-shrubby">
        <a href="#tagsearchall-clumppy" class="tagsearchall-go-to-bar-link-to">ไปยัง Clumppy</a>
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

    <div class="tagsearchall-go-to-bar" id="tagsearchall-clumppy">
        <a href="#tagsearchall-shrubby" class="tagsearchall-go-to-bar-link-to">ไปยัง Shrubby</a>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function followTag(tagid,route,elem){
        
        var csrfToken='{{csrf_token()}}';
        $.post(route, {tagid: tagid,_token:csrfToken}, function (data) {
            console.log(data);
            if(data.message==='following'){
                elem.innerHTML = 'เลิกติดตาม';

            }else{
                elem.innerHTML = 'ติดตาม';
            }
        }  
        )
    };
</script>
@endsection
