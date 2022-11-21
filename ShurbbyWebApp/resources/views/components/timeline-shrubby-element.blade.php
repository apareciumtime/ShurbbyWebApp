<style>
.timeline-shrubby-element-framework{
    font-family: 'Maitree';
}

.timeline-shrubby-element-define-section{
    display: flex;
    flex-direction: row;
    justify-content: center;

    font-size: 14px;

    color: #D2D2D5;
    border-bottom: 1px solid #D2D2D5;
}

.timeline-shrubby-element-pic-user-info-post-date-view{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;

    padding:16px;
    gap:8px;
}

.timeline-shrubby-element-pic{
    width: 48px;
    height: 48px;
    cursor: pointer;
}

.image{
    width: 48px;
    height: 48px;
}

.timeline-shrubby-element-user-info-name{
    display: flex;
    flex-direction: column;

    width: auto;
    height: auto;

    cursor: pointer;
}

.timeline-shrubby-element-user-info-alias{
    font-size: 16px;
    font-weight: bold;
    color:#445650;
}

.timeline-shrubby-element-user-info-username{
    font-size: 14px;
    color:#5B6C67;
}

.timeline-shrubby-element-post-date{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    width: 256px;
    height: auto;

    font-size: 14px;
    color:#5B6C67;

    white-space: nowrap;
}

.timeline-shrubby-element-view{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;

    width:100%;
    height: auto;

    font-size: 16px;
    font-weight: bold;
    color:#4B819F;
    cursor: pointer;
}

.timeline-shrubby-element-view:hover{
    color:#F1B24B;
}

.timeline-shrubby-element-content-section{
    box-sizing: border-box;
    display: flex;
    flex-direction: column;

    width: auto;
    max-height: 330px;
    padding:16px;
    gap:8px;

    overflow: hidden;
}

.timeline-shrubby-element-content-topic{
    width: 100%;
    font-size: 18px;
    font-weight: bold;
    color:#F1B24B;
    word-break: break-all;
}

.timeline-shrubby-element-content-content{
    font-size: 16px;
    color:#445650;
    word-break: break-all;

    overflow: hidden;
    text-overflow: ellipsis;
}

.timeline-shrubby-element-interaction-bar{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    
    width: auto;
    padding:16px;
    gap:8px;

    border-bottom: 1px solid #D2D2D5;
}
</style>
<div class="timeline-shrubby-element-framework">
    <div class="timeline-shrubby-element-define-section">
        Shrubby ชรับบี
    </div>
    <div class="timeline-shrubby-element-pic-user-info-post-date-view">
        <div class="timeline-shrubby-element-pic">
            <div class="image">
                <img src="{{$shrubby->user->profile_image}}" class="image">
            </div>
        </div>
        <div class="timeline-shrubby-element-user-info-name">
            <div class="timeline-shrubby-element-user-info-alias">
                {{$shrubby->user->alias}}
            </div>
            <div class="timeline-shrubby-element-user-info-username">
                {{$shrubby->user->username}}
            </div>
        </div>
        <div class="timeline-shrubby-element-post-date">
            โพสต์เมื่อ {{time_elapsed_string($shrubby->created_at)}}
        </div>
        <div class="timeline-shrubby-element-view">
            <a href="/shrubbypage/{{ $shrubby->id }}" class="timeline-shrubby-element-view">
                เข้าดู
            </a>
        </div>
    </div>

    <div class="timeline-shrubby-element-content-section">
        <div class="timeline-shrubby-element-content-topic">
            {{$shrubby->title}}
        </div>
        <div class="timeline-shrubby-element-content-content">
            {!! $shrubby->content !!}
        </div>
    </div>

    <div class="timeline-shrubby-element-interaction-bar">
        <x-interaction-engage label='like' id='{{ $shrubby->id }}' type='shrubby'/>
        <x-interaction-engage label='comment' id='{{ $shrubby->id }}' type='shrubby'/>
    </div>
</div>