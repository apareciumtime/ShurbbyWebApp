<style>
.privacy-status-framework{
    display: flex;
    flex-direction: row;

    width: fit-content;
    gap:8px;
    align-items: center;
    justify-content: flex-start;
}

.privacy-status-label{
    white-space: nowrap;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: bold;
    font-size: 20px;

    display: flex;
    align-items: center;

    color: #445650;
}

.privacy-status-icon{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 32px;
    fill:#445650;
}

.privacy-status-icon svg{
    width:auto;
    height: 32px;
}

.privacy-status-status{
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;

    display: flex;
    align-items: center;

    color: #445650;
}
</style>

<div class="privacy-status-framework">
    <div class="privacy-status-label">
        ความเป็นส่วนตัว :
    </div>
    <div class="privacy-status-icon">
        @if($status == 'public')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zm48 0c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256z"/>
            </svg>
        @elseif($status == 'private')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
            </svg>
        @endif
    </div>
    <div class="privacy-status-status">
        {{$label}}
    </div>
</div>