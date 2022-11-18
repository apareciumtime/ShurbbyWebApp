<style>
.comment-movement-framework{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    width: calc(100% - 32px);
    height: auto;
    margin: 16px;
    padding: 0px;
    gap: 16px;

    font-family: 'Maitree';

    border-bottom: 1px solid #4F605D;
}

.comment-movement-indexing{
    font-weight: bold;
    font-size: 18px;
    color: #F1B24B;
}

.comment-movement-pic-user-info-content{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;

    width: 100%;
    height: auto;
    margin: 0px 0px 16px 0px;
    padding: 0px;
    gap: 16px;
}

.comment-movement-pic{
    width: 48px;
    height: 48px;
    border-radius: 8px;
}

.comment-movement-user-info{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    width: 200px;
    height: auto;
    margin: 0px;
    padding: 0px;
    gap: 0px;
}

.comment-movement-alias-link-to{
    font-size: 20px;
    line-height: 24px;
    font-weight: bold;
    color:#4F605D;
}

.comment-movement-username-link-to{
    font-size: 18px;
    line-height: 18px;
    color:#5B6C67;
}

.movement-interaction-engage-bar{
    display: flex;
    flex-direction: row;
    
    margin:16px;
    width: calc(100% - 32px);
}

.user-info-post-date{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;

    width: 100%;
    height: 100%;

    font-family: 'Maitree';
    font-style: normal;
    font-size: 18px;
    color: #445650;
}
</style>

<div class="comment-movement-framework">
    <div class="comment-movement-indexing">
        ความคิดเห็นที่ {{$comment->comment_id}}
    </div>
    <div class="comment-movement-pic-user-info-content">
        <a href="/journal" class="comment-movement-pic-link-to">
            <img src="{{asset($user->profile_image)}}" class="comment-movement-pic">
        </a>
        <div class="comment-movement-user-info">
            <div class="comment-movement-alias">
                <a href="/journal" class="comment-movement-alias-link-to">
                    {{$user->alias}}
                </a>
            </div>
            <div class="comment-movement-username">
                <a href="/journal" class="comment-movement-username-link-to">
                    {{$user->username}}
                </a>
            </div>
        </div>
        <div class="comment-movement-content">
            {!! $comment->content !!} 
        </div>
    </div>
    <div class="movement-interaction-engage-bar">
        <x-interaction-engage label='like' id='{{$comment->id}}' type='comment'/>
        <x-interaction-engage label='comment' />
        <div class="user-info-post-date">
            {{thai_date($comment->created_at,false)}}
        </div>
    </div>
</div>