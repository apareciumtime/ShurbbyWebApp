<style>
.comment-shrubby-framework{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 16px;
    padding:16px;

    width: calc(100%-16*2px);

    border-bottom: 1px solid #D2D2D5;
}

.comment-shrubby-score-bar{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 12px;
    gap: 8px;
}

.comment-shrubby-content{
    width:100%;
}

.score-up-arrow{
    width: 24px;
    fill:#D2D2D5;
}

.score-up-arrow:hover{
    fill:#445650;
}

.score-down-arrow{
    width: 24px;
    fill:#D2D2D5;
}

.score-down-arrow:hover{
    fill:#445650;
}

.comment-shrubby-score-display{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;

    color: #304045;
}

.comment-shrubby-verified-btn{
    border:none;
    background-color: transparent;
    cursor:pointer;
}

#comment-shrubby-verified{
    fill:#D2D2D5;
    width: 36px;
}

.comment-shrubby-context-verified{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 33px;
    text-align: center;

    color: transparent;
}

.comment-shrubby-content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;
    gap: 8px;

    width: 100%;
    height: 100%;
}

.comment-shrubby-content-header{
    width:100%;

    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: flex-start;
    padding: 0px;
    gap:16px
}

.comment-shrubby-content-header-topic{
    width: 100%;

    box-sizing: border-box;

    display: flex;
    flex-direction: row;
    align-items: flex-start;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 33px;

    color: #F1B24B;

    word-break: break-all;
}

.comment-shrubby-content-text{
    width: 100%;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 30px;

    color: #445650;

    word-break: break-all;
}

.alias-name-upper-user-info{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;

    color: #304045;
}


.dropdown {
    width: 32px;
    display:flex;

    fill:#EFE5D5;
}

.dropdown-content-comment {
    display: none;
    position:inherit;

    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 8px;

    min-width: 80px;
    width: 200px;

    left:-400px;



    z-index: 1;
}

.dropdown-content-comment .edit-menu {
    color: #4F605D;
    padding: 2px 8px;
    display: block;

    border-radius: 8px;
    
    font-size:20px;
    align-items: flex-start;
}

.dropdown-content-comment a:hover {
    color:#F1B24B;
    background-color: #EFE5D5;
}

.dropdown:hover .dropdown-content-comment {
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
</style>
<div class="comment-shrubby-framework">
    <div class="comment-shrubby-score-bar">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="score-up-arrow">
            <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/>
        </svg>
        <div class="comment-shrubby-score-display">
            {{$comment->credit}}
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="score-down-arrow">
            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
        </svg>
        <button class="comment-shrubby-verified-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="comment-shrubby-verified">
                <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
            </svg>
        </button>
        <div class="comment-shrubby-context-verified">
            ยืนยันโดยเจ้าของกระทู้
        </div>
    </div>
    <div class="comment-shrubby-content">
        <div class="comment-shrubby-content-header">
            <div class="comment-shrubby-content-header-topic">
                {{$label}}
            </div>
            <div class="comment-shrubby-content-header-edit dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M120 256c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm160 0c0 30.9-25.1 56-56 56s-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56zm104 56c-30.9 0-56-25.1-56-56s25.1-56 56-56s56 25.1 56 56s-25.1 56-56 56z"/>
                </svg>
                <div class="dropdown-content-comment">
                    <a href="#" class="edit-menu">
                        แก้ไข
                    </a>
                    <form 
                        action=""
                        method="POST">
                        @csrf
                        @method('delete')
                        <button class="delete-shrubby-btn" type="submit">
                            ลบ
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="comment-shrubby-content-text">
            {!! $comment->content !!}
        </div>
        <br>
        <div class="user-info-frame">
            <div class="upper-user-info">
                <div class="profile-pic-upper-user-info-frame">
                    <div class="profile-pic-upper-user-info">
                        <img src="{{$user->profile_image}}" alt="">
                    </div>
                </div>
                <div class="name-upper-user-info">
                    <div class="alias-name-upper-user-info">
                        {{$user->alias}}
                    </div>
                    <div class="username-name-upper-user-info">
                        {{$user->username}}
                    </div>
                </div>
                <div class="right-upper-user-info">
                    {{date('j M Y h:m',strtotime($comment->created_at))}}
                </div>
            </div>
            <div class="interaction-bar-user-info">
                <x-interaction-engage label="like" id='{{$comment->id}}' type='comment'/>
                <x-interaction-engage label="comment" />
            </div>  
        </div>
    </div>
</div>