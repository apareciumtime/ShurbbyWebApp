<style>
.tag-bar-framework{
    display: flex;
    flex-direction: row;

    font-family: 'Maitree';

    background: #F3F3F3;
}

.tag-bar-framework:hover{
    background: none;
}

.tag-bar-name-follower{
    display: flex;
    flex-direction: column;
    
    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap:0px;
}

.tag-bar-name{
    white-space: nowrap; 
    width: 100px; 
    overflow: hidden;
    text-overflow: ellipsis; 

    font-size: 18px;
    font-weight: bold;
    color: #445650;
}

.tag-bar-follower{
    font-size: 16px;
    color: #445650;
}

.tag-bar-follow-btn-section{
    display: flex;
    flex-direction: row;

    margin: 8px;
    padding: 0px;
    gap: 0px;
}

.tag-bar-follow-btn{
    width: 84px;

    background: none;
    border: none;
    outline: none;

    font-family: 'Maitree';
    font-weight: bold;
    font-size: 16px;
    color: #4B819F;
    text-align: right;
    white-space: nowrap;

    cursor: pointer;
}
</style>

<div class="tag-bar-framework">
    <div class="tag-bar-name-follower">
        <a href="#" class="tag-bar-name">
            #{{$label}}
        </a>
        <div class="tag-bar-follower">
            {{$follower}}
        </div>
    </div>
    <div class="tag-bar-follow-btn-section">
        <form action="{{route('follow',$tag_id)}}" method="POST">
            @csrf
            <button class="tag-bar-follow-btn">
                {{$button_label}}
            </button>
        </form>
    </div>
</div>