<style>
.interaction-engage-frame{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 8px;

    width: fit-content;
    height: 27px;
    /* border:1px solid blue; */
}

.interaction-engage-icon{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 0px;
    gap: 8px;

    width: 27px;
    height: 27px;

    /* border:1px solid red; */
}

.interaction-engage-describe{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    padding: 0px;
    gap: 8px;

    width: 54px;
    height: 27px;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 27px;
    
    color: #EFE5D5;

    /* border:1px solid red; */
}

svg{
    fill:#EFE5D5;
    width: 32px;
    height: auto;
}

.interaction-engage-icon:hover{
    fill:#F1B24B;
    color:#F1B24B;
}
</style>

@if($label == 'like')
    <a href="#" class="interaction-engage-frame">
        <div class="interaction-engage-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/>
            </svg> 
        </div>
        <div class="interaction-engage-describe">
            {{$like_amount}}
        </div>
    </a>
@elseif($label == 'comment')
    <a href="#" class="interaction-engage-frame">
        <div class="interaction-engage-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z"/>
            </svg>
        </div>
        <div class="interaction-engage-describe">
            {{$comment_amount}}
        </div>
    </a>
@elseif($label == 'share')
    <a href="#" class="interaction-engage-frame">
        <div class="interaction-engage-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path d="M568.5 142.6l-144-135.1c-9.625-9.156-24.81-8.656-33.91 .9687c-9.125 9.625-8.688 24.81 .9687 33.91l100.1 94.56h-163.4C287.5 134.2 249.7 151 221 179.4C192 208.2 176 246.7 176 288v87.1c0 13.25 10.75 23.1 24 23.1S224 389.3 224 376V288c0-28.37 10.94-54.84 30.78-74.5C274.3 194.2 298.9 183 328 184h163.6l-100.1 94.56c-9.656 9.094-10.09 24.28-.9687 33.91c4.719 4.1 11.06 7.531 17.44 7.531c5.906 0 11.84-2.156 16.47-6.562l144-135.1C573.3 172.9 576 166.6 576 160S573.3 147.1 568.5 142.6zM360 384c-13.25 0-24 10.75-24 23.1v47.1c0 4.406-3.594 7.1-8 7.1h-272c-4.406 0-8-3.594-8-7.1V184c0-4.406 3.594-7.1 8-7.1H112c13.25 0 24-10.75 24-23.1s-10.75-23.1-24-23.1H56c-30.88 0-56 25.12-56 55.1v271.1C0 486.9 25.13 512 56 512h272c30.88 0 56-25.12 56-55.1v-47.1C384 394.8 373.3 384 360 384z"/>
            </svg>
        </div>
        <div class="interaction-engage-describe">
            {{$share_amount}}
        </div>
    </a>
@endif