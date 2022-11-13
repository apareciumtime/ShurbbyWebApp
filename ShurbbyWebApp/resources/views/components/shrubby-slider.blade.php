<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree:400">

<style>
.shrubby-slider-frame{
    width: 64vw;

    display: flex;
    flex-direction: column;
}

.shrubby-slider-header{
    width: calc(100% - 32px);
    margin:16px;

    display: flex;
    flex-direction: row;
}

.shrubby-slider-label{
    width: 100%;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 36px;

    color: #445650;
}

.shrubby-slider-view-all a{
    width: fit-content;
    white-space: nowrap;
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 33px;

    text-align: right;

    color: #4B819F;
}

.shrubby-slider-slot-ground{
    width: calc(100% - 16px);
    padding:8px 8px;
    background: #E6E6E8;
    border-radius: 8px;
}
.shrubby-slider-slot{
    width: calc(100% - 16px);
    padding:8px;
    gap:16px;

    display: flex;
    flex-direction: row;
    
    overflow-x: auto;
}
</style>

<div class="shrubby-slider-frame">
    <div class="shrubby-slider-header">
        <div class="shrubby-slider-label">
            {{$label}}
        </div>
        <div class="shrubby-slider-view-all">
            <a href="{{$link_to}}">
                ดูทั้งหมด
            </a>
        </div>
    </div>
    <div class="shrubby-slider-slot-ground">
        <div class="shrubby-slider-slot">
            @foreach ($shrubbies as $shrubby)
                <x-shrubby-card itemid="{{$shrubby->id}}"/>
            @endforeach 
        </div>
    </div>


</div>