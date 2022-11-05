<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree:400">

<style>
.shrubby-slider-frame{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;

    width: 64vw;
    height: 452px;
    overflow-x: hidden;
}

.shrubby-slider-header{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: 100%;
    height: 68px;

    background: #FAFAFA;
}

.shrubby-slider-slot{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap:16px;

    position:relative;

    width: 64vw;
    height: 384px;
    
    background: #E6E6E8;

    left:0px;

    overflow-x: scroll;
}

.shrubby-slider-label{
    padding:16px;

    width: 100%;
    height: 36px;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 36px;

    color: #445650;
}
.all-a a{
    display: flex;
    width: 77px;
    height: 30px;

    padding: 16px;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;

    color: #4B819F;
}

.all-a a:hover{
    color: #F1B24B;
}
</style>

<div class="shrubby-slider-frame">
    <div class="shrubby-slider-header">
        <div class="shrubby-slider-label">
            {{$label}}
        </div>
        <div class="all-a">
            <a href="{{$link_to}}">
                ดูทั้งหมด
            </a>
        </div>
    </div>
    <div class="shrubby-slider-slot">
        @foreach ($shrubbies as $shrubby)
            <x-shrubby-card itemid="{{$shrubby->id}}"/>
        @endforeach 
    </div>


</div>