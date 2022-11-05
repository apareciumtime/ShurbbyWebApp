<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Prompt:400">
<style>
.shrubby-card-frame{
    display: flex;
    flex-direction: column;
    min-width: 240px;
    height: 360px;

    background: #FAFAFA;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.25);
    border-radius: 8px;
    overflow: hidden;
}

.shrubby-card-pic{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0px;

    position: relative;
    width: 240px;
    height: 248px;
    left: 0px;
    top: 0px;

    background: #EFE5D5;
    z-index: 0;
}

.shrubby-card-content{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;

    position: relative;
    width: 240px;
    height: 120px;
    left: 0px;
    top: -8px;

    background: #FAFAFA;
    border-radius: 8px;

    z-index: 1;
}
</style>

<a href="shrubbypage/{{ $shrubby->id }}" class="shrubby-card-frame">
    <div class="shrubby-card-frame">
        <div class="shrubby-card-pic">
            Pic
        </div>
        <div class="shrubby-card-content">
            {{$shrubby->title}}
        </div>
    </div>
</a>

<!-- <div class="card">
    <div class="pic_card">
        <img src="..\pic\leaf.png" class="leaf" alt="leaf">
        <img src="..\pic\tomatoCherry.png" class="pic_card" alt="pic_card">
    </div>
    <div class="content_card">
        <p class="content_card_topic">
            ต้นมะเขือเทศเชอร์รี่ใบหงิกผิดปกติไหม
        </p>
        <div class="creator">
            <div class="creator_pic">
                 <img src="" alt=""> -->
            <!-- </div>
            <div class="creator_data">
                <p class="creator_name">Legilimens</p>
                <p class="creator_id">@legilimens</p>
            </div>
        </div>
        <a href="#" class="edit"><img src="..\pic\edit_button.png" class="edit_button" alt="edit"></a>
    </div>
</div>  -->