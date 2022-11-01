<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">

<style>
.tag-bar-frame{
    display: flex;
    flex-direction: row;
    align-items: flex-start;

    gap: 8px;

    width: 18vw;
    height: 78px;

    background: #F3F3F3;
}

.tag-bar-frame:hover{
    background: #D2D2D5;
}

.left-side{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 12px 16px;

    width: 137px;
    height: 54px;

}

.tag-label{
    font-family: 'Prompt';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 30px;

    color: #304045;
}

.follower{
    font-family: 'Prompt';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;

    color: #304045;
}

.follow-btn{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0px;

    width: 100px;
    height: 78px;

    font-family: 'Prompt';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 30px;

    color: #304045;

    background:none;
    cursor: pointer;

    border:none;
    outline:none;
}

.follow-btn:hover{
    color:#F1B24B;
}
</style>

<div class="tag-bar-frame">
    <div class="left-side">
        <a href="#" class="tag-label">
            {{$label}}
        </a>
        <div class="follower">
            {{$follower}}
        </div>
    </div>
    <div class="right-side">
        <button class="follow-btn">
            {{$button_label}}
        </button>
    </div>

</div>