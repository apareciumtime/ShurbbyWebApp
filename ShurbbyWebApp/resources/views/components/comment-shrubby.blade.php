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

.score-up-arrow-btn{
    border:none;
    outline: none;
    background:none;
}

.score-up-arrow{
    width: 24px;
    fill:#D2D2D5;
}

.score-up-arrow:hover{
    fill:#445650;
}

.score-down-arrow-btn{
    border:none;
    outline: none;
    background:none;
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

.comment-shrubby-verify-btn-form{
    display:flex;
    flex-direction: column;
    align-items: center;
}

.comment-shrubby-verified-btn{
    width: 48px;
    border:none;
    background-color: transparent;
    cursor:pointer;
}

.comment-shrubby-verified-icon{
    fill:#304045;
    opacity: 1;
}

.comment-shrubby-verified-icon:hover{
    fill:#F1B24B;
    opacity: 1;
}

.comment-shrubby-unverify-icon{
    fill:#304045;
    opacity: 0.1;
}

.comment-shrubby-unverify-icon:hover{
    fill:#445650;
    opacity: 1;
}


.comment-shrubby-context-unverify{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 33px;
    text-align: center;

    color:#445650;
    opacity: 0.1;
}

.comment-shrubby-context-verified{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 33px;
    text-align: center;

    color:#445650;
    opacity: 1;
}

.comment-shrubby-content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;

    width: 100%;
    height: 100%;
    margin:0px;
    padding: 0px;
    gap: 8px;
}

.comment-shrubby-content-topic-edit{
    display: flex;
    flex-direction: flex;
    align-items: center;

    width: 100%;
    height: 100%;
    margin:0px;
    padding: 0px;
    gap: 8px;
}

.comment-shrubby-content-topic{
    width: 100%;

    font-family: 'Maitree';
    font-size: 18px;
    font-weight: bold;
    color:#F1B24B;
}

.comment-shrubby-content-edit{

}

.comment-shrubby-content-edit-link-to{
    font-family: 'Maitree';
    font-size: 16px;
    font-weight: bold;
    color:#4B819F;
}

.comment-shrubby-content-edit-link-to:hover{
    color:#F1B24B;
}

.comment-shrubby-content-text{
    font-family: 'Maitree';
    font-size: 16px;
    color:#445650;
}

.comment-shrubby-user-info{
    display: flex;
    flex-direction: row;
    align-items: flex-start;

    width: auto;
    height: auto;
    margin: 0px;
    padding: 0px;
    gap: 16px;
}

.comment-shrubby-user-impage-profile{
    width: 48px;
    height: 48px;

    border-radius: 8px;
}

.comment-shrubby-alias-username{
    display: flex;
    flex-direction: column;
    
    width: auto;
    height: auto;
    margin: 0px;
    padding: 0px;
    gap: 0px;
}

.comment-shrubby-alias{

}

.comment-shrubby-alias-link-to{
    font-family: 'Maitree';
    font-size: 18px;
    font-weight: bold;
    color:#445650;
}

.comment-shrubby-username{

}

.comment-shrubby-username-link-to{
    font-family: 'Maitree';
    font-size: 16px;
    color:#D2D2D5;
}

.comment-shrubby-interaction-engage-bar-post-date{
    display: flex;
    flex-direction: row;
    align-items: center;

    width: 100%;
    height: auto;
    margin: 0px;
    padding: 0px;
    gap: 8px;
}

.comment-shrubby-post-date{
    width: 100%;

    font-family: 'Maitree';
    font-size: 16px;
    color:#445650;
    text-align: right;
}
/* 
.comment-shrubby-content{
    width:100%;

    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: flex-start;
    padding: 0px;
    gap:16px
}

.comment-shrubby-content-topic-edit{
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
} */
</style>
<div class="comment-shrubby-framework">
    <div class="comment-shrubby-score-bar">
        <form action="{{route('increasecredit.comment')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" name="id" id="id" value={{$comment->id}} style="display: none;">
            <button type="submit" class="score-up-arrow-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="score-up-arrow">
                    <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/>
                </svg>
            </button>
        </form>

        <div class="comment-shrubby-score-display">
            {{$comment->credit}}
        </div>
        
        <form action="{{route('decreasecredit.comment')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" name="id" id="id" value={{$comment->id}} style="display: none;">
            <button type="submit" class="score-down-arrow-btn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="score-down-arrow">
                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                </svg>
            </button>
        </form>

        <form id="verify-form" action="{{route('accept.comment')}}" method="POST" enctype="multipart/form-data" class="comment-shrubby-verify-btn-form">
            @csrf
            <input type="number" name="id" id="id" value={{$comment->id}} style="display: none;">
            @if($comment->accept==true)
            <button class="comment-shrubby-verified-btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="comment-shrubby-verified-icon">
                    <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </button>
            <div style="color:rgb(0, 0, 0)" class="comment-shrubby-context-verified">
                ยืนยันโดยเจ้าของกระทู้
            </div>
            @else
                <button class="comment-shrubby-verified-btn" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="comment-shrubby-unverify-icon">
                        <path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                    </svg>
                </button>
                <div class="comment-shrubby-context-unverify">
                    ยืนยันโดยเจ้าของกระทู้
                </div>
            @endif
        </form>
    </div>

    <div class="comment-shrubby-content">
        <div class="comment-shrubby-content-topic-edit">
            <div class="comment-shrubby-content-topic">
                {{$label}}
            </div>
            @if(isset(Auth::user()->id) && Auth::user()->id == $comment->user_id)
                <div class="comment-shrubby-content-edit">
                    <a href="#" class="comment-shrubby-content-edit-link-to">
                        แก้ไข
                    </a>
                </div>
            @endif
        </div>
                <!-- <div class="dropdown-content-comment">
                        
                        <form 
                            action="{{route('delete.comment',$comment->id)}}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="delete-shrubby-btn" type="submit">
                                ลบ
                            </button>
                        </form>
                    </div> -->
                
        
        <div class="comment-shrubby-content-text">
            {!! $comment->content !!}
        </div>
        <br>
        <div class="comment-shrubby-user-info">
            <a href="/journal" class="comment-shrubby-user-impage-profile-link-to">
                <img src="{{asset($user->profile_image)}}" alt="" class="comment-shrubby-user-impage-profile">
            </a>
            <div class="comment-shrubby-alias-username">
                <div class="comment-shrubby-alias">
                    <a href="/journal" class="comment-shrubby-alias-link-to">
                        {{$user->alias}}
                    </a>
                </div>
                <div class="comment-shrubby-username">
                    <a href="/journal" class="comment-shrubby-username-link-to">
                        {{$user->username}}
                    </a>
                </div>
            </div>
        </div>
        <div class="comment-shrubby-interaction-engage-bar-post-date">
            <x-interaction-engage label="like" id='{{$comment->id}}' type='comment'/>
            <x-interaction-engage label="comment" />
            <div class="comment-shrubby-post-date">
                {{thai_date($comment->created_at,false)}}
            </div>
        </div>  
    </div>
</div>