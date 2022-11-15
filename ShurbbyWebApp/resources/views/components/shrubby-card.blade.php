<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">

<style>
.shrubby-card-framework{
    width: 280px;

    padding-bottom: 8px;

    background:#FAFAFA;
    background-clip: border-box;

    border-radius: 8px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
}

.shrubby-card-pic-container{
    width: 100%;
    height: 280px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    background-color: #EFE5D5;
    border-radius: 8px;
}

.logo{
    width: 36px;
    height: 36px;
    fill:#445650;
}

.shrubby-card-content{
    display: flex;
    flex-direction: column;

    margin:8px;
    width: calc(100% - 16px);
    gap: 8px;
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 27px;

    color: #304045;
}

.shrubby-card-content-topic-edit{
    display: flex;
    flex-direction: row;

    gap:8px;

    width: 100%;
}

.shrubby-card-content-topic{
    width: calc(280px - 36px - 16px);
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 27px;

    color: #304045;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.shrubby-card-content-edit{
    width: 36px;
    height: 26px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;

    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 8px;

    min-width: 80px;
    width: 200px;
    
    /* left:-150px; */
    top:0px;

    z-index: 1;
}

.dropdown-content .edit-menu {
    color: #4F605D;
    padding: 2px 8px;
    display: block;

    border-radius: 8px;
    
    font-size:20px;
    align-items: flex-start;
}

.dropdown-content a:hover {
    color:#F1B24B;
    background-color: #EFE5D5;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.delete-shrubby-btn{
    width: 100%;
    text-align: start;
    align-items: flex-start;
    
    border:none;
    border-radius: 8px;

    background:#f9f9f9 ;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    color:#4F605D;
    padding: 2px 8px;

}

.delete-shrubby-btn:hover{
    color:#F1B24B;
    background-color: #EFE5D5;
    cursor:pointer;
}

.shrubby-card-interaction-engagement-bar{
    display: flex;
    flex-direction: row;

    align-items: center;

    width: 100%;
}

.shrubby-card-content-user-info{
    width: 100%;

    display: flex;
    flex-direction: row;

    gap:8px;
}

.shrubby-card-content-user-info-pic{
    width: 48px;
    height: 48px;

    border-radius: 8px;
}

.shrubby-card-content-user-info-name{
    width: calc(100% - 48px);

    display: flex;
    flex-direction: column;
}

.shrubby-card-content-user-info-alias{
    font-size: 20px;
    line-height: 24px;

    color: #304045;
}

.shrubby-card-content-user-info-username{
    font-size: 18px;
    line-height: 20px;

    color: #5B6C67;
}

.post-date{
    font-size: 16px;
    line-height: 20px;

    color: #D2D2D5;

    display: flex;
    flex-direction: row;

    justify-content: flex-end;
    align-items: flex-end;
}

</style>

<a href="/shrubbypage/{{ $shrubby->id }}">
    <div class="shrubby-card-framework">
        <div class="shrubby-card-pic-container">
            @if($pic_status==0)
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="logo">
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
                </svg>
            @elseif($pic_status==1)
                picture of shrubby
            @endif
        </div>
        <div class="shrubby-card-content">
            <div class="shrubby-card-content-topic-edit">
                <div class="shrubby-card-content-topic">
                    {{$shrubby->title}}
                </div>
                <div class="shrubby-card-content-edit dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z"/>
                    </svg>
                    @if(isset(Auth::user()->id) && Auth::user()->id == $shrubby->user_id)
                        <div class="dropdown-content">
                            <a href="/shrubbypage/{{ $shrubby->id }}/edit" class="edit-menu">
                                แก้ไข
                            </a>
                            <form 
                                action="/shrubbypage/{{ $shrubby->id }}"
                                method="POST">
                                @csrf
                                @method('delete')
                                <button class="delete-shrubby-btn" type="submit">
                                    ลบ
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
            <div class="shrubby-card-interaction-engagement-bar">
                <x-interaction-engage label='like' id='{{ $shrubby->id }}' type='shrubby'/>
                <x-interaction-engage label='comment'/>
                <x-interaction-engage label='share'/>
            </div>
            <div class="shrubby-card-content-user-info">
                <div class="shrubby-card-content-user-info-pic">
                    <img src="{{$shrubby->user->profile_image}}">
                </div>
                <div class="shrubby-card-content-user-info-name">
                    <div class="shrubby-card-content-user-info-alias">
                        {{$shrubby->user->alias}}
                    </div>
                    <div class="shrubby-card-content-user-info-username">
                        {{$shrubby->user->username}}
                    </div>
                </div>
            </div>
            <div class="post-date">
                โพสต์เมื่อ {{time_elapsed_string($shrubby->created_at)}}
            </div>
        </div>
    </div>
</a>

<!-- <style>
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
</a> -->
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