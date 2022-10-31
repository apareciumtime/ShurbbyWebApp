<style>
.rightpane{
    box-sizing: border-box;

    display: flex;
    flex-direction: column;
    border-left: 1px solid #D2D2D5;

    width: 18vw;

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

    width: 18vw;
    height: 48px;
    margin: 16px;
    background: #FAFAFA;

    font-family: 'Prompt';
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
    font-family: 'Prompt';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    margin:12px;

    color: #4B819F;
}

.view-tag-all:hover{
    color:#F1B24B;
}

</style>
<div class="rightpane">
    <div class="top-tag">
        <div class="topic">
            แท็กยอดนิยม
        </div>
        <div class="tag-container">
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
            <x-tag-bar/>
        </div>
    </div>
    <a href="#" class="view-tag-all">
            ดูทั้งหมด
    </a>
    <div class="followed-tag">
        <div class="topic">
            แท็กที่ฉันติดตาม
        </div>
        <div class="tag-container">
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
                <x-tag-bar/>
        </div>
        <a href="#" class="view-tag-all">
            ดูทั้งหมด
        </a>
    </div>
</div>