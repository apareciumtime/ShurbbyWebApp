<style>
.trait-element-framework{
    display: flex;
    flex-direction: column;
    align-items: center;
    
    width: 160px;
    height: 180px;
    padding: 8px 16px 16px;
    gap: 16px;

    border-radius: 8px;
}

.trait-element-display{
    display: flex;
    flex-direction: column;
    align-items: center;

    width: 128px;
    height: 128px;

    overflow: hidden;

    border-radius: 100px;

    background: #5B6C67;

    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.75);
}

.trait-element-label{
    font-family: 'Maitree';
    font-size: 18px;
    font-weight: bold;
}

.trait-element-framework:hover .trait-element-display{
    box-shadow: 4px 4px 0px rgba(19, 78, 28, 0.25);
}

.trans{
    opacity: 0.5;
}

.trait-element-display-img{
    width: 128px;
    height: 128px;
}
</style>

<div class="trait-element-framework" onclick="pickIt('{{$index}}','{{$label}}','{{$length}}',this)" id="trait-element-{{$index}}-{{$num}}">
    <div class="trait-element-display">
        <img src="{{asset($image)}}" class="trait-element-display-img">
    </div>
    <div class="trait-element-label">
        {{$label}}
    </div>
</div>