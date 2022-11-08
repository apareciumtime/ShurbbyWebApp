<style>
.rightpane{
    box-sizing: border-box;

    display: block;
    flex-direction: column;
    border-left: 1px solid #D2D2D5;

    position:inherit;
    right:0px;

    width: 18vw;
    height: 92vh;

    margin:0px;

    background: #FAFAFA;

    overflow-y: auto;
}

.rightpane-body{
    overflow-y: scroll;
}
.top-tag{
    width: auto;
    height: 528px;
}

.followed-tag{
    width: auto;
    height: 528px;
}

.topic{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;

    width: auto;
    height: 48px;
    padding-left:16px;
    background: #FAFAFA;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 33px;

    color: #445650;
}

.tag-container{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;

    width:auto;
    height: 390px;
    left: 0px;
    top: 84px;
    overflow-y: scroll;
}

.view-tag-all{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;

    color: #4B819F;
    padding:16px;

    display: block;
    width: auto;

    border-bottom: 1px solid #445650;
}

.view-tag-all:hover{
    color:#F1B24B;
}

</style>
<div class="rightpane">
    <div class="rightpane-body">
        <div class="top-tag">
            <div class="topic">
                แท็กยอดนิยม
            </div>
            <div class="tag-container">
                @foreach($top_tags as $tag)
                    <x-tag-bar label="{{$tag->name}}"/>
                @endforeach
            </div>
            <a href="#" class="view-tag-all">
                    ดูทั้งหมด
            </a>
        </div>
        <div class="followed-tag">
            <div class="topic">
                แท็กที่ฉันติดตาม
            </div>
            <div class="tag-container">
                @foreach($following_tags as $tag)
                    <x-tag-bar label="{{$tag->name}}"/>
                @endforeach
            </div>
            <a href="#" class="view-tag-all">
                ดูทั้งหมด
            </a>
        </div>
    </div>
</div>