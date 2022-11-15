<style>
.clumppy-card{
    width: 280px;
}

.clumppy-card-framework{
    width: 280px;

    display:flex;
    flex-direction: column;

    border-radius: 8px;
}
.clumppy-card-amount-of-plants{
    width: 100%;

    font-family: 'Maitree';
    font-size: 18px;
    color:#445650;
    text-align: right;
}

.clumppy-card-pic-framework{
    width: 100%;
    height: 280px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    background-color: #EFE5D5;
    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
}

.clumppy-card-pic-framework:hover{
    fill:#F1B24B;
}

.clumppy-card-content-framework{
    width: 100%;

    display: flex;
    flex-direction: column;
    
    font-family: 'Maitree';
    font-size: 20px;
    line-height: 20px;
    color:#445650;
}

.clumppy-card-content-topic-view-all{
    margin:8px;
    width: calc(100%-16px);
    display: flex;
    flex-direction: row;
}

.clumppy-card-content-topic{
    width: 184px;
    font-weight: 700;

    align-items: center;
    justify-items: center;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;

    color:#445650;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    
}

.clumppy-card-content-view-all{
    white-space: nowrap;
    font-family: 'Maitree';
    font-size: 20px;
    font-weight: 700;
    color:#4B819F;
}

.clumppy-card-content-view-all:hover{
    color:#F1B24B;
}

.clumppy-card-plant-date-age{
    margin:8px;
    gap:8px;
    width: calc(100%-16px);

    display: flex;
    flex-direction: column;

    font-size: 16px;
}

.clumppy-card-interaction-engagement-bar{
    margin:8px;
    display: flex;
    flex-direction: row;

    align-items: center;
    justify-items: center;

    width: 100%;
}

.clumppy-card-content-user-info{
    width: calc(100%-16px);
    margin:8px;

    display: flex;
    flex-direction: row;

    gap:8px;
}

.clumppy-card-content-user-info-pic{
    width: 48px;
    height: 48px;

    border-radius: 8px;
}

.clumppy-card-content-user-info-name{
    width: calc(100%-48px);

    display: flex;
    flex-direction: column;
}

.clumppy-card-content-user-info-alias{
    font-size: 20px;
    line-height: 24px;

    color: #304045;
}

.clumppy-card-content-user-info-username{
    font-size: 18px;
    line-height: 20px;

    color: #5B6C67;
}

.post-date{
    width: calc(100%-16px);
    margin:8px;
    font-size: 16px;
    line-height: 20px;

    color: #445650;

    display: flex;
    flex-direction: row;

    justify-content: flex-end;
    align-items: flex-end;
}
</style>
<a href="/clumppypage/{{$clumppy->id}}" class="clumppy-card">
    <div class="clumppy-card-framework">
        <div class="clumppy-card-amount-of-plants">
            {{$clumppy->amount}} ต้น
        </div>
        <div class="clumppy-card-pic-framework">
            @if($clumppy->cover==null)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="logo">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            @else
                <img src="{{asset($clumppy->cover)}}" alt="img" class="clumppy-card-pic-framework">
            @endif
        </div>
        <div class="clumppy-card-content-framework">
            <div class="clumppy-card-content-topic-view-all">
                <div class="clumppy-card-content-topic">
                    {{$clumppy->name}}
                </div>
                <a href="#" class="clumppy-card-content-view-all">
                    ดูทั้งหมด
                </a>
            </div>
            <div class="clumppy-card-plant-date-age">
                <div class="clumppy-card-plant-date">
                    วันที่เริ่มปลูก {{$clumppy->plant_date}}
                </div>
                <div class="clumppy-card-age">
                    {{$age}}
                </div>
            </div>
            <div class="clumppy-card-interaction-engagement-bar">
                <x-interaction-engage label='like' class="engaging"/>
                <x-interaction-engage label='comment'/>
                <x-interaction-engage label='share'/>
            </div>
            <div class="clumppy-card-content-user-info">
                <div class="clumppy-card-content-user-info-pic">
                    <img src="{{asset($clumppy->user->profile_image)}}" alt="img">
                </div>
                <div class="clumppy-card-content-user-info-name">
                    <div class="clumppy-card-content-user-info-alias">
                        {{$clumppy->user->alias}}
                    </div>
                    <div class="clumppy-card-content-user-info-username">
                        {{$clumppy->user->username}}
                    </div>
                </div>
            </div>
            <div class="post-date">
                โพสต์เมื่อ {{time_elapsed_string($clumppy->created_at)}}
            </div>
        </div>
    </div>
</a>