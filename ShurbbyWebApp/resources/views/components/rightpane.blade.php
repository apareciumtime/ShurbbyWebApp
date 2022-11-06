<style>
.rightpane{
    box-sizing: border-box;

    display: flex;
    flex-direction: column;
    border-left: 1px solid #D2D2D5;

    position:absolute;
    right:0px;
    top:8vh;

    width: 18vw;
    height: 92vh;
}

.rightpane-body{
    overflow-y: scroll;
}
.top-tag{
    width: 18vw;
    height: 528px;
}

.followed-tag{
    width: 18vw;
    height: 528px;
}

.topic{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;

    width: fit-content;
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

    width: 18vw;
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

    width: 18vw;
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
            <br>
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
            <br>
            <a href="#" class="view-tag-all">
                ดูทั้งหมด
            </a>
        </div>
    </div>
</div>