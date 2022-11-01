<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

<style>
.header-frame{
    box-sizing: border-box;

    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding:8px;
    gap: 16px;

    width: 82vw;
    height: fit-content;

    background: #FAFAFA;

    border-bottom: 1px solid #D2D2D5;
}

.header-left{
    width: 502.5px;
    height: 48px;
}

.header-label{
    width: 30vw;
    height: 48px;
    
    text-align: center;
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 48px;

    color: #304045;
}

.header-right{
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
    padding: 0px;
    gap: 32px;

    width: 502.5px;
    height: 48px;
    
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 36px;
    text-align: center;
    
    color: #D2D2D5;
}

img{
    width: 48px;
    height: 48px;

    background: #5B6C67;
    border-radius: 8px;
    
}

</style>

<div class="header-frame">
    <div class="header-left"></div>
    <div class="header-label">
        {{$label}}
    </div>
    <div class="header-right">
        @guest
            
        @else
            {{Auth::user()->alias}}
            <img src="#">
        @endguest
        
    </div>
</div>