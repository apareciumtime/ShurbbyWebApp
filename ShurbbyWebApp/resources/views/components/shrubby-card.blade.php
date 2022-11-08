<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">
<style>
.shrubby-card-frame{
    display: flex;
    flex-direction: column;
    width: 240px;
    height: 360px;

    background: #FAFAFA;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    overflow: hidden;
}

.shrubby-card-pic{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0px;

    position: relative;
    width: 240px;
    height: 248px;
    left: 0px;
    top: 0px;

    background: #EFE5D5;
    z-index: 0;
}

.shrubby-card-content{
    padding:8px;
    width: 224px;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;

    color: #304045;
}

.shrubby-card-frame:hover{
    border-top: 1px solid #F1B24B;
    box-shadow: 0px 0px 0px rgba(0,0,0,.5);
}

svg{
    width:32px;
}
</style>

<a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-card-frame">
    <div class="shrubby-card-frame">
        <div class="shrubby-card-pic">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>
        <div class="shrubby-card-content">
            {{$shrubby->title}}
        </div>
    </div>
</a>