<style>
.tag-framework{
    width: 100%;
    display: block;
    border: 1px dashed #445650;
    border-radius: 8px;
}

.tag-topic-view-all{
    width: calc(100%-16px);
    margin:8px;
    display: flex;
    flex-direction: row;
}

.tag-topic{
    width: 100%;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 33px;

    color: #304045;

}

.tag-view-all{
    white-space: nowrap;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 33px;

    text-align: right;

    color: #4B819F;

}

.tag-view-all:hover{
    color:#F1B24B;
}

.tag-slot{
    width: calc(100%-16px);
    margin:8px;

    display: flex;
    flex-direction: row;
    gap: 8px;
    overflow-x: auto;
}
</style>

<div class="tag-framework">
    <div class="tag-topic-view-all">
        <div class="tag-topic">
            แท็ก
        </div>
        <div class="tag-view-all">
            ดูทั้งหมด
        </div> 
    </div>
    <div class="tag-slot">
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็กแท็กแท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็กแท็กแท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็ก"/>
        <x-tag-shrubby name="แท็กแท็กแท็ก"/>
        </div>
    </div>
