<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree:400">

<style>
.clumppy-slider-frame{
    display: flex;
    flex-direction: column;
}

.clumppy-slider-header{
    width: calc(100%-32px);
    margin:16px;

    display: flex;
    flex-direction: row;
}

.clumppy-slider-header-label{
    width: 100%;
    height: 36px;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 36px;

    color: #445650;

}

.clumppy-slider-header-view-all a{
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

.clumppy-slider-slot-outside{
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

.clumppy-slider-slot{
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

<div class="clumppy-slider-frame">
    <div class="clumppy-slider-header">
        <div class="clumppy-slider-header-label">
            {{$label}}
        </div>
        <div class="clumppy-slider-header-view-all">
            <a href="{{$link_to}}">
                ดูทั้งหมด
            </a>
        </div>
    </div>
    <div class="clumppy-slider-slot-outside">
        <div class="clumppy-slider-slot">
            @foreach($clumppies as $clumppy)
                <x-clumppy-card clumppyid="{{$clumppy->id}}"/>
            @endforeach
        </div>
    </div>
</div>