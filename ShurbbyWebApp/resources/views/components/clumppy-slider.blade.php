<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree:400">

<style>
.clumppy-slider-frame{
    width: 64vw;

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

.clumppy-slider-slot-ground{
    width: calc(100%-16px);
    padding:8px 8px;
    background: #E6E6E8;
    border-radius: 8px;
}
.clumppy-slider-slot{
    width: calc(100%-16px);
    padding:8px;
    gap:16px;

    display: flex;
    flex-direction: row;
    
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
    <div class="clumppy-slider-slot-ground">
        <div class="clumppy-slider-slot">
            <x-clumppy-card/>
            <x-clumppy-card/>
            <x-clumppy-card/>
            <x-clumppy-card/>
            <x-clumppy-card/>
            <x-clumppy-card/>
        </div>
    </div>
</div>