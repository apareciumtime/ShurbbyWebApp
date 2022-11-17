<style>
.rightpane-framework{
    display: flex;
    flex-direction: column;

    width: calc(256px - 16px);
    margin:0px;
    padding:8px;
    gap:32px;

    border-left:1px solid #D2D2D5;

    font-family: 'Maitree';
}

.rightpane-group-tag{
    display: flex;
    flex-direction: column;

    border-bottom: 1px solid #D2D2D5;
}

.rightpane-head{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;

    width: calc(100% - 16px);
    margin: 8px;
    padding: 0px;
    gap: 0px;

    font-size: 18px;
    font-weight: bold;
    color:#445650;
}

.rightpane-header-topic{

}

.rightpane-tag-grid{
    display: grid;
    grid-template-columns: auto;

    width: auto;
    max-height: 214px;

    overflow-y: auto;
}

.rightpane-tag-grid-item{

}

.rightpane-view-all{
    display: flex;
    flex-direction: row;

    margin: 8px;
    padding: 0px;
    gap: 0px;

    font-size: 18px;
    font-weight: bold;
    color: #4B819F;
}

</style>

<div class="rightpane-framework">
    <div class="rightpane-group-tag">
        <div class="rightpane-head">
            <div class="rightpane-header-topic">
                แท็กยอดนิยม
            </div>
        </div>
        <div class="rightpane-tag-grid">
            @foreach($top_tags as $tag)
                <div class="rightpane-tag-grid-item">
                    <x-tag-bar label="{{$tag->name}}"/>
                </div>
            @endforeach
        </div>
        <a href="#" class="rightpane-view-all">
            ดูทั้งหมด
        </a>
    </div>
    <div class="rightpane-group-tag">
        <div class="rightpane-head">
            <div class="rightpane-header-topic">
                แท็กที่กำลังติดตาม
            </div>
        </div>
        <div class="rightpane-tag-grid">
            @foreach($following_tags as $tag)
                <div class="rightpane-tag-grid-item">
                    <x-tag-bar label="{{$tag->name}}"/>
                </div>
            @endforeach
        </div>
        <a href="#" class="rightpane-view-all">
            ดูทั้งหมด
        </a>
    </div>
</div>
<!-- <style>
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

            </div>
            <a href="#" class="view-tag-all">
                ดูทั้งหมด
            </a>
        </div>
    </div>
</div> -->