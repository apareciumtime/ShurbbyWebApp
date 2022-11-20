<style>
.shrubby-card-framework{
    display: flex;
    flex-direction: column;
    min-width: 280px;
    height: auto;

    background: #FAFAFA;

    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.shrubby-card-link-to{

}

.shrubby-card-framework:hover .shrubby-card-icon-svg{
    fill:#F1B24B;
}

.shrubby-card-picture{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    width: 280px;
    height: 280px;

    background: #EFE5D5;
    border-radius: 8px;
}

.shrubby-card-icon-svg{
    width: 32px;
    height: 32px;
    fill:#5B6C67;
}

.shrubby-card-content-topic-edit{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap: 0px;
}

.shrubby-card-content-topic{
    width: calc(280px - 32px - 24px);
    font-family: 'Maitree';
    font-weight: bold;
    font-size: 18px;
    color: #304045;
    white-space: nowrap;
    
    overflow: hidden;
    text-overflow: ellipsis;
}

.shrubby-card-content-edit{
    width: 32px;
    font-family: 'Maitree';
    font-weight: bold;
    font-size: 16px;
    color:#4B819F;
    white-space: nowrap;
}

.shrubby-card-content-edit:hover{
    color:#F1B24B;
}

.shrubby-card-interaction-engagement-bar{
    display: flex;
    flex-direction: row;
    
    width: calc(100% - 16px);
    height: auto;
    margin: 8px;
    padding: 0px;
    gap: 8px;
}

.shrubby-card-content-user-info{
    display: flex;
    flex-direction: row;

    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap: 8px;
}

.shrubby-card-content-user-info-pic{
    width: 48px;
    height: 48px;

    border-radius: 8px;
}

.shrubby-card-content-user-info-name{
    display: flex;
    flex-direction: column;
}

.shrubby-card-content-user-info-alias{

}

.shrubby-card-content-user-info-alias-link-to{
    font-family: 'Maitree';
    font-weight: bold;
    font-size: 16px;
    color:#5B6C67;
}

.shrubby-card-content-user-info-username{

}

.shrubby-card-content-user-info-username-link-to{
    font-family: 'Maitree';
    font-size: 16px;
    color:#D2D2D5;
}

.shrubby-card-post-date-view{
    display: flex;
    flex-direction: row;

    width: calc(100% - 16px);
    margin:8px;
    padding: 0px;
    gap: 0px;
}

.shrubby-card-post-date{
    width: 100%;

    font-family: 'Maitree';
    font-size: 16px;
    color:#304045;
}

.shrubby-card-view{

}

.shrubby-card-view-link-to{
    font-family: 'Maitree';
    font-weight: bold;
    font-size: 16px;
    color:#4B819F;
    white-space: nowrap;
}

.shrubby-card-view-link-to:hover{
    color:#F1B24B;
}

.shrubby-card-pic-framework{
    width: 280px;
    height: 280px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    background-color: #EFE5D5;
    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
}
</style>
<div class="shrubby-card-framework">
    <a href="/shrubbypage/{{ $shrubby->id }}" class="shrubby-card-link-to">
        <div class="shrubby-card-picture">
            @if($pic_status==0)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="shrubby-card-icon-svg">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            @else
                <img src="{{asset($pic)}}" alt="img" class="shrubby-card-pic-framework">
            @endif
        </div>
        <div class="shrubby-card-content">
            <div class="shrubby-card-content-topic-edit">
                <div class="shrubby-card-content-topic">
                    {{$shrubby->title}}
                </div>
                @if(isset(Auth::user()->id) && Auth::user()->id == $shrubby->user_id)
                    <a href="/shrubbypage/{{ $shrubby->id }}/edit">
                        <div class="shrubby-card-content-edit">แก้ไข</div>
                    </a>
                @endif
            </div>
    </a>
            <div class="shrubby-card-interaction-engagement-bar">
                <x-interaction-engage label='like' id='{{ $shrubby->id }}' type='shrubby' slide='{{$slide}}'/>
                <x-interaction-engage label='comment' id='{{ $shrubby->id }}' type='shrubby'/>
            </div>
            <div class="shrubby-card-content-user-info">
                <a href="/journal" class="shrubby-card-content-user-info-username-link-to">
                    <img src="{{$shrubby->user->profile_image}}" class="shrubby-card-content-user-info-pic">
                </a>
                <div class="shrubby-card-content-user-info-name">
                    <div class="shrubby-card-content-user-info-alias">
                        <a href="/journal" class="shrubby-card-content-user-info-alias-link-to">
                            {{$shrubby->user->alias}}
                        </a>
                    </div>
                    <div class="shrubby-card-content-user-info-username">
                        <a href="/journal" class="shrubby-card-content-user-info-username-link-to">
                            {{$shrubby->user->username}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="shrubby-card-post-date-view">
                <div class="shrubby-card-post-date">
                    โพสต์เมื่อ {{time_elapsed_string($shrubby->created_at)}}
                </div>
                <div class="shrubby-card-view">
                    <a href="/shrubbypage/{{ $shrubby->id }}" class="shrubby-card-view-link-to">
                        เข้าดู
                    </a>
                </div>
            </div>

        </div>
</div>