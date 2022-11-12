<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">
<style>
.shrubby-card{
    border:1px solid red;
    width: 100%;
    height: 100%;
}

.shrubby-card-framework{
    display: flex;
    flex-direction: column;

    width: 260px;
    height: 360px;

    background: #FAFAFA;

    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
}

.shrubby-card-pic-container{
    position:relative;
    width: 100%;
    height: 240px;

    background: #EFE5D5;
    border-radius: 8px 8px 0px 0px;
}

#pic{
    opacity: 1;
    display: flex;
    width: 260px;
    height: 240px;
    background-color: #EFE5D5;
    transition: .5s ease;
    backface-visibility: hidden;

    
    align-items: center;
    justify-content: center;
    border-radius: 8px 8px 0px 0px;
}

#pic svg{
    width: 32px;
    fill:#5B6C67;
}

#pic-hover{
    transition: .5s ease;
    opacity: 0;
    position:absolute;
    width: 100%;
    height: 240px;
    background-color: #000;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 8px 8px 0px 0px;
}

.shrubby-card-pic-container:hover #pic{
    opacity:0.3;
}

.shrubby-card-pic-container:hover #pic-hover{
    opacity:0.5;
}

.border-outside-frame-pic-hover{
    width:260px;
    height: 240px;

    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px 8px 0px 0px;
}

.border-inside-frame-pic-hover{
    display:flex;
    flex-direction: column;

    justify-content: flex-end;

    width:240px;
    height: 220px;

    border:2px solid #EFE5D5;
    border-radius: 8px;
}

.interaction-bar-inside-frame-pic-hover{
    margin:8px;
    display: flex;
    flex-direction: row;
}

.date-of-post{
    margin:8px;
    text-align: right;
    font-size: 18px;
    font-family: 'Maitree';
    color:#EFE5D5;
}

.shrubby-card-description{
    display: flex;
}

.shrubby-card-content{
    padding:8px;
    width: calc(100%-16px);
    height: 36px;

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

.user-info-frame{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap:16px;
    margin:8px;

    width: calc(100%-16px);
    height: 80px;
}

.upper-user-info{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0px;
    gap: 8px;
    
    width: 100%;
}

.profile-pic-upper-user-info{
    width: fit-content;
}

.name-upper-user-info{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0px;

    width: 200px;
}

.alias-name-upper-user-info{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;

    color: #5B6C67;
}

.username-name-upper-user-info{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;

    color: #D2D2D5;
}
</style>
<a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-card-frame">
<div class="shrubby-card-framework">
    <div class="shrubby-card-pic-container">
        <a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-go-to-pic">
        <div id="pic">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>
        <div id="pic-hover">
            <div class="border-outside-frame-pic-hover">
                <div class="border-inside-frame-pic-hover">
                    <div class="date-of-post">
                        โพสต์เมื่อ 12 พ.ย. 2021
                    </div>
                    <div class="interaction-bar-inside-frame-pic-hover">
                        <x-interaction-engage label="like"/>
                        <x-interaction-engage label="comment"/>
                        <x-interaction-engage label="share"/>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
    <a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-go-to-topic">
        <div class="shrubby-card-content">
            {{$shrubby->title}}
        </div>
    </a>
    <div class="user-info-frame">
        <div class="upper-user-info">
            <div class="profile-pic-upper-user-info-frame">
                <div class="profile-pic-upper-user-info">
                    <img src="{{$shrubby->user->profile_image}}">
                </div>
            </div>
            <div class="name-upper-user-info">
                <div class="alias-name-upper-user-info">
                    {{$shrubby->user->alias}}
                </div>
                <div class="username-name-upper-user-info">
                    {{$shrubby->user->username}}
                </div>
            </div>
        </div>
    </div>
</div>
</a>
<!-- <style>
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
    width: calc(100%-16px);

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;

    color: #304045;

    border-radius: 8px;
}

.shrubby-card-frame:hover{
    border-top: 1px solid #F1B24B;
    box-shadow: 0px 0px 0px rgba(0,0,0,.5);
}

svg{
    width:32px;
}

.user-info-frame{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap:16px;
    margin:8px;

    width: calc(100%-16px);
}

.upper-user-info{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    padding: 0px;
    gap: 8px;
    
    width: 100%;
}

.profile-pic-upper-user-info{
    width: fit-content;
}

.name-upper-user-info{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 0px;

    width: 200px;
}

.alias-name-upper-user-info{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 24px;

    color:#304045;

}

.username-name-upper-user-info{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 24px;

    color: #D2D2D5;

}

.right-upper-user-info{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-end;
    padding: 0px;
    gap: 8px;

    height: 100%;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;

    color: #D2D2D5;
}

.interaction-bar-user-info{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 8px;
}

.shrubby-card-pic-info{
    transition: .5s ease;
    opacity: 0;
    position: relative;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;

    width: 240px;
    height: 248px;
    background: #304045;
}

.shrubby-card-pic:hover{
    opacity:0.1;
}

.shrubby-card-pic-info:hover{
    opacity:0.5;
}
</style>

<a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-card-frame">
    <div class="shrubby-card-frame">
        <div class="shrubby-card-pic">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
            </svg>
        </div>
        <div class="shrubby-card-pic-info">
            Hello world
        </div>
        <div class="shrubby-card-content">
            {{$shrubby->title}}
        </div>
        <div class="user-info-frame">
            <div class="upper-user-info">
                <div class="profile-pic-upper-user-info-frame">
                    <div class="profile-pic-upper-user-info">
                        <img src="{{$shrubby->user->profile_image}}">
                    </div>
                </div>
                <div class="name-upper-user-info">
                    <div class="alias-name-upper-user-info">
                        {{$shrubby->user->alias}}
                    </div>
                    <div class="username-name-upper-user-info">
                        {{$shrubby->user->username}}
                    </div>
                </div>
                <div class="right-upper-user-info">
                    {{date('j M Y h:m',strtotime($shrubby->updated_at))}}
                </div>
            </div>
            <div class="interaction-bar-user-info">
                <x-interaction-engage label="like"/>
                <x-interaction-engage label="comment"/>
                <x-interaction-engage label="share"/>
            </div>
        </div>
    </div>
</a> -->