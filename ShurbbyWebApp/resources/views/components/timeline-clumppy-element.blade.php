<style>
.timeline-movement-element-framework{
    font-family: 'Maitree';
}

.timeline-clumppy-element-define-section{
    display: flex;
    flex-direction: row;
    justify-content: center;

    font-size: 14px;

    color: #D2D2D5;
    border-bottom: 1px solid #D2D2D5;
}

.timeline-clumppy-element-pic-user-info-post-date-view{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;

    padding:16px;
    gap:8px;
}

.timeline-clumppy-element-pic{
    width: 48px;
    height: 48px;
    cursor: pointer;
}

.image{
    width: 48px;
    height: 48px;
}

.timeline-clumppy-element-user-info-name{
    display: flex;
    flex-direction: column;

    width: auto;
    height: auto;

    cursor: pointer;
}

.timeline-clumppy-element-user-info-alias{
    font-size: 16px;
    font-weight: bold;
    color:#445650;
}

.timeline-clumppy-element-user-info-username{
    font-size: 14px;
    color:#5B6C67;
}

.timeline-clumppy-element-post-date{
    display: flex;
    flex-direction: column;
    justify-content: flex-end;

    width: 256px;
    height: auto;

    font-size: 14px;
    color:#5B6C67;

    white-space: nowrap;
}

.timeline-clumppy-element-view{
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

.timeline-clumppy-element-view:hover{
    color:#F1B24B;
}

.timeline-clumppy-element-content-section{
    box-sizing: border-box;
    display: flex;
    flex-direction: column;

    width: auto;
    max-height: 330px;
    padding:16px;
    gap:8px;

    overflow: hidden;
}

.timeline-clumppy-element-content-topic{
    width: 100%;
    font-size: 18px;
    font-weight: bold;
    color:#F1B24B;
    word-break: break-all;
}

.timeline-clumppy-element-content-plant-date-amount{
    display: flex;
    flex-direction: row;
    gap:16px;
    
    font-size: 16px;
    color:#445650;
}

.timeline-clumppy-element-content-content{
    font-size: 16px;
    color:#445650;
    word-break: break-all;
}

.timeline-clumppy-element-interaction-bar{
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    
    width: auto;
    padding:16px;
    gap:8px;

    border-bottom: 1px solid #D2D2D5;
}
</style>
<div class="timeline-clumppy-element-framework">
    <div class="timeline-clumppy-element-define-section">
        Clumppy คลัมปี
    </div>
    <div class="timeline-clumppy-element-pic-user-info-post-date-view">
        <div class="timeline-clumppy-element-pic">
            <div class="image"></div>
        </div>
        <div class="timeline-clumppy-element-user-info-name">
            <div class="timeline-clumppy-element-user-info-alias">
                Alias
            </div>
            <div class="timeline-clumppy-element-user-info-username">
                @username
            </div>
        </div>
        <div class="timeline-clumppy-element-post-date">
            โพสต์เมื่อ 14 นาทีที่แล้ว
        </div>
        <div class="timeline-clumppy-element-view">
            เข้าดู
        </div>
    </div>

    <div class="timeline-clumppy-element-content-section">
        <div class="timeline-clumppy-element-content-topic">
            ชื่อคลัมปี
        </div>
        <div class="timeline-clumppy-element-content-plant-date-amount">
            <div class="timeline-clumppy-element-content-plant-date">
                วันที่เริ่มปลูก: 14 พ.ย. 2563
            </div>
            <div class="timeline-clumppy-element-content-amount">
                ทั้งหมด 2 ต้น
            </div>
        </div>
        <div class="timeline-clumppy-element-content-content">
            คำอธิบาย clumppy
        </div>
    </div>

    <div class="timeline-clumppy-element-interaction-bar">
        <x-interaction-engage label="like"/>
        <x-interaction-engage label="comment"/>
    </div>
</div>