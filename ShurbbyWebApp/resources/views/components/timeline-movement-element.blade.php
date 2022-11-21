<style>
.timeline-clumppy-element-framework{
    font-family: 'Maitree';
}

.timeline-movement-element-define-section{
    display: flex;
    flex-direction: row;
    justify-content: center;

    font-size: 14px;
    font-family: 'Maitree';

    color: #D2D2D5;
    border-bottom: 1px solid #D2D2D5;
}

.timeline-movement-element-pic-user-info-post-date-view{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;

    padding:16px;
    gap:8px;
}

.timeline-movement-element-pic{
    width: 48px;
    height: 48px;
    cursor: pointer;
}

.image{
    width: 48px;
    height: 48px;
}

.timeline-movement-element-user-info-name{
    display: flex;
    flex-direction: column;

    width: auto;
    height: auto;

    cursor: pointer;
}

.timeline-movement-element-user-info-alias{
    font-size: 16px;
    font-weight: bold;
    color:#445650;
}

.timeline-movement-element-user-info-username{
    font-size: 14px;
    color:#5B6C67;
}

.timeline-movement-element-post-date{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    width: 256px;
    height: auto;

    font-size: 14px;
    color:#5B6C67;

    white-space: nowrap;
}

.timeline-movement-element-view{
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


.timeline-movement-element-picture-section-outside{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content:space-between;

    width: auto;
    margin:16px;

    background: #F3F3F3;
    border-radius: 8px;
}

.timeline-movement-element-picture-section{
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    max-width: 58vw;
    width: auto;
    height:fit-content;

    border-radius: 8px;
    overflow: auto;
}

.timeline-movement-element-picture-left-btn{
    border: none;
    outline: none;
    background: #5B6C67;

    width: 50px;
    min-height: 315px;
    height: 100%;

    font-size: 32px;
    color: #EFE5D5;
    opacity: 0.2;

    border-radius: 8px 0px 0px 8px;

    cursor: pointer;
}

.timeline-movement-element-picture-left-btn:hover{
    color:#F1B24B;
    opacity: 1;
}

.timeline-movement-element-picture-right-btn{
    border: none;
    outline: none;
    background: #5B6C67;

    width: 50px;
    min-height: 315px;

    height: 100%;

    font-size: 32px;
    color: #EFE5D5;
    opacity: 0.2;

    border-radius: 0px 8px 8px 0px;
    cursor: pointer;
}

.timeline-movement-element-picture-right-btn:hover{
    color:#F1B24B;
    opacity: 1;
}

.timeline-movement-element-view:hover{
    color:#F1B24B;
}

.timeline-movement-element-content-section{
    box-sizing: border-box;
    display: flex;
    flex-direction: column;

    width: auto;
    max-height: 330px;
    padding:16px;
    gap:8px;

    overflow: hidden;
}

.timeline-movement-element-content-topic{
    width: 100%;
    font-size: 18px;
    font-weight: bold;
    color:#F1B24B;
    word-break: break-all;
}

.timeline-movement-element-content-plant-date-amount{
    display: flex;
    flex-direction: row;
    gap:16px;
    
    font-size: 16px;
    color:#445650;
}

.timeline-movement-element-content-content{
    font-size: 16px;
    color:#445650;
    word-break: break-all;
}

.timeline-movement-element-interaction-bar{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    
    width: auto;
    padding:16px;
    gap:8px;

    border-bottom: 1px solid #D2D2D5;
}
</style>
<div class="timeline-movement-element-framework">
    <div class="timeline-movement-element-define-section">
        Movement ความเคลื่อนไหว
    </div>
    <div class="timeline-movement-element-pic-user-info-post-date-view">
        <div class="timeline-movement-element-pic">
            <div class="image">
                <img src="{{asset($clumppy->user->profile_image)}}" class="image">
            </div>
        </div>
        <div class="timeline-movement-element-user-info-name">
            <div class="timeline-movement-element-user-info-alias">
                {{$clumppy->user->alias}}
            </div>
            <div class="timeline-movement-element-user-info-username">
                {{$clumppy->user->username}}
            </div>
        </div>
        <div class="timeline-movement-element-post-date">
            โพสต์เมื่อ {{time_elapsed_string($movement->created_at)}}
        </div>
        <div class="timeline-movement-element-view">
            <a href="{{route('movementpage',$movement->id)}}" class="timeline-movement-element-view">
                เข้าดู
            </a>
        </div>
    </div>

    <div class="timeline-movement-element-picture-section-outside">
        <button class="timeline-movement-element-picture-left-btn" onclick="plusDivs(-1)">&#10094;</button>
        <div class="timeline-movement-element-picture-section">
            <img src="{{asset($first_images->image)}}" class="first-image-movement" style="display:block;">
                @foreach ($movement_images as $movement_image)
                    <img src="{{asset($movement_image->image)}}" class="image-movement">
                @endforeach
        </div>
        <button class="timeline-movement-element-picture-right-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>

    <div class="timeline-movement-element-content-section">
        <div class="timeline-movement-element-content-topic">
            {{$clumppy->name}}
        </div>
        <div class="timeline-movement-element-content-plant-date-amount">
            <div class="timeline-movement-element-content-plant-date">
                วันที่เริ่มปลูก: {{thai_date($clumppy->plant_date,false,false,false)}}
            </div>
            <div class="timeline-movement-element-content-amount">
                ทั้งหมด {{$clumppy->amount}} ต้น
            </div>
        </div>
        <div class="timeline-movement-element-content-content">
            {{$movement->description}}
        </div>
    </div>

    <div class="timeline-movement-element-interaction-bar">
        <x-interaction-engage label='like' id='{{$movement->id}}' type='movement'/>
        <x-interaction-engage label='comment' id='{{$movement->id}}' type='movement'/>
    </div>
</div>


<script>
var slideIndex = 1;
var firstcheck = true;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
    if(firstcheck){
        var first = document.getElementsByClassName("first-image-movement");
        first[0].style.display = "none";
        firstcheck = false;
    }
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("image-movement");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
}
</script>