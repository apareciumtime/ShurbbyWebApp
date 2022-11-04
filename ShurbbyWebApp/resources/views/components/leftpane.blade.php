<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Maitree">

<style>
a{
    text-decoration: none;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 36px;

    color: #D2D2D5;
}

body{
    margin:0px;
}

.frame{
    box-sizing: border-box;
    
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0px;
    gap: 16px;
    
    width: fit-content;
    height: 100vh;
    
    border-right: 1px solid #D2D2D5;
    background: #FFFFFF;
}

.head{
    box-sizing: border-box;

    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 16px 32px;
    gap: 16px;

    width: 255px;
    height: 80px;
}

.head svg{
    fill:#304045;
    width: 32px;
}

.head .label{
    width: 132px;
    height: 48px;

    font-family: 'Maitree';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 48px;

    color: #304045;
}

.leftpane-body{
    box-sizing: border-box;

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 32px;
    gap: 32px;

    width: 255px;
}
.search-bar{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px;
    gap: 16px;
}

.search-icon{
    width:36px;
    fill: #D2D2D5;
}

.search-box{
    width: 139px;
    border-bottom: 1px solid #445650;
    
}
.search-box input{
    box-sizing: border-box;

    width: 100%;

    border:none;

    background: transparent;
    
    color:#304045;
    font-family: 'Maitree';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;

    background: #F3F3F3;

    outline:none;
}

.search-box:hover{
    border-bottom: 1px solid #F1B24B;
}

.foot{
    position:sticky;
    top:100%;

    box-sizing: border-box;

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 32px;
    gap: 32px;

    width: 255px;
}
</style>

<div class="frame">
    <a href="/home" class="head">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z"/>
        </svg>

        <div class="label">
            Shrubby
        </div>
    </a>

    <div class="leftpane-body">
        <div class="search-bar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="search-icon">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
            </svg>
            <form class="search-box" type="get" action="{{url('/search')}}">
                <input type="search" placeholder="ค้นหา" name="qeury" autocomplete="on">
            </form>
        </div>
        <x-tab-menu label="หน้าหลัก"/>
        <x-tab-menu label="ไทม์ไลน์"/>
        <x-tab-menu label="สมุดบันทึก"/>

    </div>
    <div class="foot">
        @guest
            <x-tab-menu label="เข้าสู่ระบบ"/>
            <x-tab-menu label="สมัครสมาชิก"/>
        @else
            <x-tab-menu label="ตั้งค่า"/>
                <div href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <x-tab-menu label="ออกจากระบบ"/>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                </form>
            
        @endguest
            
    </div>
</div>