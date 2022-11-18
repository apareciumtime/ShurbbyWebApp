<style>
.shrubby-slider-framework{
    display: flex;
    flex-direction: column;
}

.shrubby-slider-topic-view-all{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: calc(100% - 32px);

    margin:0px;
    padding:16px;
    gap:16px;
}

.shrubby-slider-topic{
    display: flex;
    flex-direction: row;
    
    width: 100%;

    font-family: 'Maitree';
    font-size: 20px;
    font-weight: bold;
    white-space: nowrap;
    color:#445650;
}

.shrubby-slider-view-all-link-to{
    white-space: nowrap;
    font-family: 'Maitree';
    font-size: 18px;
    font-weight: bold;
    color:#4B819F;
}

.shrubby-slider-view-all-link-to:hover{
    color:#F1B24B;
}

.shrubby-slider-slot-outside{
    display: flex;
    flex-direction: row;
    justify-content: center;

    width: auto;
    height: auto;
    margin: 0px;
    padding: 0px;
    gap: 0px;

    background:#E6E6E8;
}

.shrubby-slider-slot{
    display: flex;
    flex-direction: row;

    width: 68vw;
    height: auto;
    margin: 16px 0px;
    padding: 0px;
    gap: 8px;

    padding: 0px;

    overflow-x: auto;
}
</style>

<div class="shrubby-slider-framework">
    <div class="shrubby-slider-topic-view-all">
        <div class="shrubby-slider-topic">
            {{$label}}
        </div>
        <a href="{{$link_to}}" class="shrubby-slider-view-all-link-to">
            ดูทั้งหมด
        </a>
    </div>
    <div class="shrubby-slider-slot-outside">
        <div class="shrubby-slider-slot">
            @foreach ($shrubbies as $shrubby)
                <x-shrubby-card itemid="{{$shrubby->id}}" slide="{{$link_to}}"/>
            @endforeach 
        </div>
    </div>
</div>